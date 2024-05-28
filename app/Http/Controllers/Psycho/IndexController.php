<?php

namespace App\Http\Controllers\Psycho;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Docent;
use App\Models\StudentTutorTypeRelation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;


class IndexController extends Controller
{
    protected $role;
    protected $course;
    protected $user;
    protected $student;
    protected $tutor;
    protected $address;
    protected $docent;
    protected $studentTutorTypeRelation;

    public function __construct(Role $role, Course $course, User $user, Student $student, Tutor $tutor, Address $address, Docent $docent, StudentTutorTypeRelation $studentTutorTypeRelation)
    {
        $this->role = $role;
        $this->course = $course;
        $this->user = $user;
        $this->student = $student;
        $this->tutor = $tutor;
        $this->address = $address;
        $this->docent = $docent;
        $this->studentTutorTypeRelation = $studentTutorTypeRelation;
    }

    public function index()
    {
        $data = $this->getData();
        $users = $data['users'];
        $tutors = $data['tutors'];
        $roles = $data['roles'];
        $courses = $data['courses'];
        $docents = $data['docents'];

        return view('psychologist.users.index', compact('users', 'data', 'tutors', 'roles', 'courses', 'docents'));
    }

    public function usersFilterByRole(Request $request)
    {

        $role_id = $request['role'];

        $usersQuery = $this->user->where('role_id', $role_id);
        $data = $this->getData();
        //pagination

        $users = $usersQuery->paginate(10);

        return view('psychologist.users.index', array_merge($data, ['filterByRole' => $role_id, 'users' => $users]));
    }

    public function usersFilterByCourse(Request $request)
    {

        $course_id = $request['course'];

        $usersQuery = $this->student->where('course_id', $course_id);
        $data = $this->getData();
        //pagination

        $students = $usersQuery->paginate(10);

        return view('psychologist.users.index', array_merge($data, ['filterByCourse' => $course_id, 'students' => $students]));
    }

    public function usersFilterByName(Request $request)
    {
        $searchTerm = $request['searchInput'];

        // Perform search query based on $searchTerm
        $resultsQuery = $this->user->where('username', 'like', "$searchTerm%");
        $data = $this->getData();
        // error_log($results);
        // return $results;
        $results = $resultsQuery->paginate(10);

        return view('psychologist.users.index', array_merge($data, ['filterByName' => $searchTerm, 'results' => $results]));
    }


    public function usersFilterByDni(Request $request)
    {
        $searchTerm = $request['searchInput'];

        // Perform search query based on $searchTerm
        $resultsQuery = $this->student->where('dni_nif', 'like', "$searchTerm%");
        $data = $this->getData();
        // error_log($results);
        // return $results;
        $results = $resultsQuery->paginate(10);

        return view('psychologist.users.index', array_merge($data, ['filterByDni' => $searchTerm, 'results' => $results]));
    }

    public function usersFilterByEmail(Request $request)
    {
        $searchTerm = $request['searchInput'];

        // Perform search query based on $searchTerm
        $resultsQuery = $this->user->where('email', 'like', "%$searchTerm%");
        $data = $this->getData();
        // error_log($results);
        // return $results;
        $results = $resultsQuery->paginate(10);

        return view('psychologist.users.index', array_merge($data, ['filterByEmail' => $searchTerm, 'results' => $results]));
    }

    public function search(Request $request)
    {
        $data = $request['searchCategory'];
        // Verificar el tipo de solicitud
        if (!empty($data) && $data !== null) {
            switch ($data) {
                case 'name':
                    return $this->usersFilterByName($request);
                    break;
                case 'dni':
                    return $this->usersFilterByDni($request);
                    break;
                case 'email':
                    return $this->usersFilterByEmail($request);
                    break;
                default:
                    break;
            }
        }
    }

    public function edituser(Request $request)
    {
        $user_id = $request['id'];
        error_log($user_id);
        $user = $this->user->find($user_id);
        if ($user->role_id === 3) {
            $student = $this->student->where('user_id', $user_id)->first();
            $course = $this->course->find($student->course_id);
            $address = $this->address->where('id', $student->address_id)->first();
            $courses = $this->course->all();
            $tutors_ids = StudentTutorTypeRelation::where('student_id', $student->id)->pluck('tutor_id')->toArray();
            $tutors = Tutor::whereIn('id', $tutors_ids)->get();
            return view('psychologist.users.edit', compact('user', 'student', 'course', 'address', 'courses', 'tutors'));
        } else {
            if ($docent = $this->docent->where('user_id', $user_id)->first() === null) {
                $docent = new Docent();
                $docent->name = '';
                $docent->lastname1 = '';
                $docent->lastname2 = '';
                $docent->email = '';
                $docent->user_id = $user_id;
                $docent->create_user = $request->authuser_id;
                $docent->created_at = now();
                $docent->save();
            }
            $docent = $this->docent->where('user_id', $user_id)->first();
            return view('psychologist.users.edit', compact('user', 'docent'));
        }
    }

    public function deleteuser(Request $request)
    {
        try {
        $user_id = idcookies();
        error_log($user_id);
        $user = $this->user->find($user_id);
        if ($user->role_id === 3) {
            $student = $this->student->where('user_id', $user_id)->first();
            $address = $this->address->where('id', $student->address_id)->first();
            $course = $this->course->find($student->course_id);
            $user->delete();
            $student->delete();
            $address->delete();
        } else {
            $docent = $this->docent->where('user_id', $user_id)->first();
            $user->delete();
            $docent->delete();
        }
            return back()->with('success', 'Usuario eliminado correctamente');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al eliminar el usuario: ' . $e->getMessage());
        }
        
    }

    public function enabledit(Request $request)
    {

        return back()->with('edit', 'Edición habilitada');
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'username' => 'nullable|string|max:255',
            'user_id' => 'nullable|integer',
            'name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'last_name2' => 'nullable|string|max:255',
            'idalu' => 'nullable|string|max:255',
            'dni_nif' => 'nullable|string|max:255',
            'cip' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'email' => 'nullable|email|max:255',
            'public_road' => 'nullable|string|max:255',
            'cp' => 'nullable|string|max:10',
            'province' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'municipality' => 'nullable|string|max:255',
            'address_id' => 'nullable|integer',
            'course_id' => 'nullable|integer',
            'password' => 'nullable|string|max:255',
            'password_confirmation' => 'nullable|string|max:255',
            'name1' => 'nullable|string|max:255',
            'lastname1' => 'nullable|string|max:255',
            'lastname2' => 'nullable|string|max:255',

        ]);

        try {

            $user = User::find($request->user_id);
            $user->username = $request->username;
            $user->email = $request->email;
            $user->update_user = $request->authuser_id;
            $user->updated_at = now();
            if ($request->password !== null) {
                if ($request->password !== $request->password_confirmation) {
                    return back()->with('error', 'Las contraseñas no coinciden');
                } else {
                    $user->password = Hash::make($request->password);
                }
            }
            $user->save();
            if ($request->role_id == 3) {
                $student = Student::find($request->student_id);
                $student->name = $request->name;
                $student->last_name = $request->last_name;
                $student->last_name2 = $request->last_name2;
                $student->idalu = $request->idalu;
                $student->dni_nif = $request->dni_nif;
                $student->cip = $request->cip;
                $student->date_of_birth = $request->date_of_birth;
                $student->email = $request->email2;
                $student->course_id = $request->course_id;
                $student->update_user = $request->authuser_id;
                $student->updated_at = now();
                $student->save();

                $address = Address::find($request->address_id);
                $address->public_road = $request->public_road;
                $address->cp = $request->cp;
                $address->province = $request->province;
                $address->country = $request->country;
                $address->municipality = $request->municipality;
                $address->updated_at = now();
                $address->save();
            } else {
                $docent = Docent::find($request->docent_id);
                $docent->name = $request->name12;
                $docent->lastname1 = $request->lastname1;
                $docent->lastname2 = $request->lastname2;
                $docent->email = $request->email1;
                $docent->update_user = $request->authuser_id;
                $docent->updated_at = now();
                $docent->save();
            }


            return back()->with('success', 'Usuario actualizado correctamente');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al actualizar el usuario');
        }
    }

    public function createuserview(Request $request) {
        $data = $this->getData();
        $users = $data['users'];
        $tutors = $data['tutors'];
        $roles = $data['roles'];
        $courses = $data['courses'];
        $addresses = $data['addresses'];
        return view('psychologist.users.create', compact('users', 'data', 'tutors', 'roles', 'courses', 'addresses'));
    }

    public function createuser(Request $request) {
        $request->validate([
            'username' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'last_name2' => 'nullable|string|max:255',
            'name1' => 'nullable|string|max:255',
            'lastname1' => 'nullable|string|max:255',
            'lastname2' => 'nullable|string|max:255',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'idalu' => 'nullable|string|max:255',
            'dni_nif' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'email' => 'nullable|email|max:255',
            'public_road' => 'nullable|string|max:255',
            'cp' => 'nullable|string|max:10',
            'province' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'municipality' => 'nullable|string|max:255',
            'course_id' => 'nullable|integer',
        ]);

        try {

            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->role_id = $request->role;
            $user->password = Hash::make($request->password);
            $user->creation_user = $request->authuser_id;
            $user->created_at = now();
            $user->save();
            error_log($request->role);
            if ($request->role === '3') {
            $address = new Address();
            $address->public_road = $request->public_road;
            $address->cp = $request->cp;
            $address->province = $request->province;
            $address->country = $request->country;
            $address->municipality = $request->municipality;
            $address->created_at = now();
            $address->save();

            $student = new Student();
            $student->user_id = $user->id;
            $student->name = $request->name;
            $student->last_name = $request->last_name;
            $student->last_name2 = $request->last_name2;
            $student->idalu = $request->idalu;
            $student->dni_nif = $request->dni_nif;
            $student->cip = $request->cip;
            $student->date_of_birth = $request->date_of_birth;
            $student->email = $request->email2;
            $student->course_id = $request->course_id;
            $student->address_id = $address->id;
            $student->create_user = $request->authuser_id;
            $student->created_at = now();
            $student->save();
            } else {
                $docent = new Docent();
                $docent->user_id = $user->id;
                $docent->name = $request->name1;
                $docent->lastname1 = $request->lastname1;
                $docent->lastname2 = $request->lastname2;
                $docent->email = $request->email1;
                $docent->create_user = $request->authuser_id;
                $docent->created_at = now();
                $docent->save();
            }

           

            return back()->with('success', 'Usuario creado correctamente');
        } catch (\Exception $e) {
            error_log($e->getMessage());
            log::error('Erro M: ' . $e->getMessage());
            return back()->with('error', 'Error al crear el usuario: ' . $e->getMessage());
        }
    }

    private function getData()
    {
        $roles = $this->role->all();
        $courses = $this->course->all();
        $students = $this->student->paginate(10);
        $tutors = $this->tutor->all();
        $users = $this->user->all();
        $addresses = $this->address->all();
        $docents = $this->docent->all();
        $studentTutorTypeRelation = $this->studentTutorTypeRelation->all();

        return [
            'roles' => $roles,
            'courses' => $courses,
            'students' => $students,
            'tutors' => $tutors,
            'users' => $users,
            'addresses' => $addresses,
            'docents' => $docents,
            'studentTutorTypeRelation' => $studentTutorTypeRelation
        ];
    }
}

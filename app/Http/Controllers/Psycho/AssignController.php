<?php

namespace App\Http\Controllers\Psycho;

use App\Http\Controllers\Controller;
use App\Models\GameTest;
use App\Models\GameTestStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Course;

class AssignController extends Controller
{
    public function assignGamesIndex($id)
    {
        $test = Test::find($id);
        $students = Student::with('course')->paginate(10);
        $gamesTestStudents = GameTestStudent::where('test_id', $id)->get();

        return view('psychologist.assign.students-index', ['students' => $students, 'test' => $test, 'gamesTestStudents' => $gamesTestStudents]);
    }

    public function assignGames($student_id, $test_id)
    {
        $testGames = GameTest::where('test_id', $test_id)->get();
        
        try {
            foreach ($testGames as $testGame) {
                $gamesTestStudents = new GameTestStudent();
                $gamesTestStudents->student_id = $student_id;
                $gamesTestStudents->test_id = $test_id;
                $gamesTestStudents->game_id = $testGame->game_id;
                $gamesTestStudents->game_test_id = $testGame->id;
    
                $gamesTestStudents->creation_user = auth()->user()->id;
                $gamesTestStudents->update_user = auth()->user()->id;
                $gamesTestStudents->save();
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error al asignar el test');
        }
        return redirect()->back()->with('success', 'Test asignado correctamente');
       
    }

    public function assignGamesCourseIndex($id)
    {
        $test = Test::find($id);
        $courses = Course::with('students')->paginate(10);
        $gamesTestStudents = GameTestStudent::where('test_id', $id)->get();
        return view('psychologist.assign.courses-index', ['courses' => $courses, 'test' => $test, 'gamesTestStudents' => $gamesTestStudents]);
    }

    public function assignGamesCourse($course_id, $test_id)
    {
        $testGames = GameTest::where('test_id', $test_id)->get();
        $students = Student::where('course_id', $course_id)->get();
        try {
            foreach ($students as $student) {
                foreach ($testGames as $testGame) {
                    $gamesTestStudents = new GameTestStudent();
                    $gamesTestStudents->student_id = $student->id;
                    $gamesTestStudents->test_id = $test_id;
                    $gamesTestStudents->game_id = $testGame->game_id;
                    $gamesTestStudents->game_test_id = $testGame->id;
        
                    $gamesTestStudents->creation_user = auth()->user()->id;
                    $gamesTestStudents->update_user = auth()->user()->id;
                    $gamesTestStudents->save();
                }
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error al asignar el test');
        }
        return redirect()->back()->with('success', 'Test asignado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $role = auth()->user()->role_id;
        switch ($role) {
            case '1':
                return view('admin.dashboard');
                break;
            case '2':
                return view('teacher.dashboard');
                break;
            case '3':
                return view('student.dashboard');
                break;
            case '4':
                return view('tutor.dashboard');
                break;
            case '5':
                return view('psychologist.dashboard');
                break;
            
            default:
                abort(403, 'Unauthorized action');
                break;
        }
    }
}

<?php

namespace App\Livewire;

use App\Models\Student;
use App\Models\Address;
use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Component;

class StudentData extends Component
{
    public function render()
    {
        return view('livewire.student-data');
    }

    #[Computed()]
    public function getStudent()
    {
        // dd(Student::where('user_id', auth()->user()->id)->first()->idalu);
        return  Student::where('user_id', auth()->user()->id)->first();
    }
    #[Computed()]
    public function getAddress()
    {
        $student_id = Student::where('user_id', auth()->user()->id)->first();

        return  Address::where('id', $student_id->address_id)->first();
    }
    #[Computed()]
    public function getCourse()
    {
        $student_id = Student::where('user_id', auth()->user()->id)->first();

        return  Course::where('id', $student_id->course_id)->first();
    }
}

<?php

namespace App\Livewire;

use App\Models\Tutor;
use App\Models\Student;
use App\Models\StudentTutorTypeRelation;
use Livewire\Component;

class TutorData extends Component
{
    public function render()
    {
        return view('livewire.tutor-data');
    }
    public function getTutor()
    {
        $student_id = Student::where('user_id', auth()->user()->id)->first();
        $tutors = StudentTutorTypeRelation::where('student_id', $student_id->id)->pluck('tutor_id')->toArray();
        $tutor = Tutor::whereIn('id', $tutors)->get();
        return $tutor;

    }
}

<?php

namespace App\Livewire;

use App\Models\Docent;
use App\Models\Address;
use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Component;

class UserData extends Component
{
    public function render()
    {
        return view('livewire.user-data');
    }

    #[Computed()]
    public function getDocent()
    {
        // dd(Student::where('user_id', auth()->user()->id)->first()->idalu);
        return  Docent::where('user_id', auth()->user()->id)->first();
    }

    

}
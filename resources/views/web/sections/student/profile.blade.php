<?php
use App\Models\Student;
use App\Models\Address;
use App\Models\User;
use App\Models\Course;
?>

<x-app-layout>
    <div>
    <div class="items-center">
           
        
                <livewire:student-data />
                <livewire:tutor-data />
                @if (Auth::user()->role_id == 5 || Auth::user()->role_id == 4 || Auth::user()->role_id == 3)
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    @livewire('profile.update-password-form')
                @endif   
                @endif             
    </div>

</div>

</x-app-layout>

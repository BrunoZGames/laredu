<x-app-layout>

    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('error') }}
        </div>
    @elseif (@session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('psycho.users.index') }}" class="text-3xl text-black py-2 px-4 rounded hover:text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

    </a>
    @if (!session('edit'))
        <div class="flex flex-col justify-center">

            <div class=" bg-white mx-auto w-full h-full max-w-xl p-8 mt-10 mb-12 border border-green-400 ">
                <div class="flex flex-row-reverse justify-center items-center space-x-10">
                    <a href="{{ route('psycho.users.enabledit', $user->id) }}"
                        class="text-xl text-black py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 hover:text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    @if ($user->role_id == 3)
                        <h1 class="text-3xl font-bold text-center  text-black">{{ $student->name }}
                            {{ $student->last_name }} {{ $student->last_name2 }}</h1>
                </div>
                <div class="flex justify-center">
                    <img class=" mt-5 w-48 h-48 rounded-full" src="{{ $user->profile_photo_url }}"
                        alt="{{ $user->username }}" />
                </div>
                <h1 class="text-3xl font-bold mt-6 mb-2 text-black">Información personal</h1>
                <p class=" mb-2 text-black">CURSO: {{ $course->course_name }}</p>
                <p class=" mb-2 text-black">IDALU: {{ $student->idalu }}</p>
                <p class=" mb-2 text-black">DNI: {{ $student->dni_nif }}</p>
                <p class=" mb-2 text-black">FECHA NACIMIENTO: {{ $student->date_of_birth }}</p>
                <p class=" mb-2 text-black">EMAIL: {{ $student->email }}</p>
                <p class=" mb-2 text-black">CALLE: {{ $address->public_road }}</p>
                <p class=" mb-2 text-black">CP: {{ $address->cp }}</p>
                <p class=" mb-2 text-black">PROVINCIA: {{ $address->province }}</p>
                @else
                <h1 class="text-3xl font-bold text-center  text-black">{{ $docent->name }}
                    {{ $docent->lastname1 }} {{ $docent->lastname2 }}</h1>
                </div>
                <div class="flex justify-center">
                <img class=" mt-5 w-48 h-48 rounded-full" src="{{ $user->profile_photo_url }}"
                    alt="{{ $user->username }}" />
                </div>
                <h1 class="text-3xl font-bold mt-6 mb-2 text-black">Información contacto</h1>
                <p class=" mb-2 text-black">USERNAME: {{ $user->username }}</p>
                <p class=" mb-2 text-black">EMAIL: {{ $docent->email }}</p>
                @endif
            </div>

            @if ($user->role_id == 3)
            
                @foreach ($tutors as $tutor)
                    <div
                        class=" bg-white mx-auto w-full h-full max-w-xl p-8 mb-4 border border-green-400">
                        <h1 class="text-3xl font-bold mb-2 text-black">Información del Tutor</h1>
                        <p class=" mb-2 text-black">Nombre: {{ $tutor->name }}</p>
                        <p class=" mb-2 text-black">Apellido: {{ $tutor->last_name }}</p>
                        @php
                            $emails = explode(';', $tutor->email);
                        @endphp
                
                        @if (count($emails) > 1)
                            @foreach ($emails as $email)
                                <p class="mb-2 text-black">Tutor Email: {{ $email }}</p>
                            @endforeach
                        @else
                            <p class="mb-2 text-black">Tutor Email: {{ $tutor->email }}</p>
                        @endif
                        <p class=" mb-2 text-black">Tutor Telefono: {{ $tutor->phone_number }}</p>
                
                    </div>
                @endforeach
                 
            @endif





        </div>
    @elseif (session('edit'))
    <x-validation-errors class="mb-4" />
    <form method="post" action="{{ route('psycho.users.updateuser', $user->id) }}" class="w-full max-w-2xl mx-auto">
        @csrf
        @method('PUT')
        <div class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300">
            <h1 class="text-3xl font-bold text-center text-black">Editar Usuario</h1>
            <div class="flex flex-col space-y-4">
                <label for="username" class="text-gray-600">Nombre de Usuario</label>
                <input type="text" name="username" id="username"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                    value="{{ $user->username }}" placeholder="{{ $user->username }}">
            </div>
            <div class="flex flex-col space-y-4">
                <label for="email" class="text-gray-600">Email</label>
                <input type="email" name="email" id="email"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                    value="{{ $user->email }}" placeholder="{{ $user->email }}">
            </div>
            <div class="flex flex-col space-y-4">
                <label for="password" class="text-gray-600">Contraseña</label>
                <input type="password" name="password" id="password"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                    placeholder="Ingrese una nueva contraseña">
            </div>
            <div class="flex flex-col space-y-4">
                <label for="password_confirmation" class="text-gray-600">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                    placeholder="Confirme la nueva contraseña">
            </div>
            @if ($user->role_id == 3)

                <div class="flex flex-col space-y-4">
                    <label for="course_id" class="text-gray-600">Curso</label>
                    <select name="course_id" id="course_id"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                        <option value="{{ $course->id }}" selected>{{ $course->course_name }}</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="name" class="text-gray-600">Nombre</label>
                    <input type="text" name="name" id="name"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->name }}" placeholder="{{ $student->name }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="last_name" class="text-gray-600">Primer Apellido</label>
                    <input type="text" name="last_name" id="last_name"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->last_name }}" placeholder="{{ $student->last_name }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="last_name2" class="text-gray-600">Segundo Apellido</label>
                    <input type="text" name="last_name2" id="last_name2"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->last_name2 }}" placeholder="{{ $student->last_name2 }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="idalu" class="text-gray-600">IDALU</label>
                    <input type="text" name="idalu" id="idalu"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->idalu }}" placeholder="{{ $student->idalu }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="dni_nif" class="text-gray-600">DNI</label>
                    <input type="text" name="dni_nif" id="dni_nif"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->dni_nif }}" placeholder="{{ $student->dni_nif }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="cip" class="text-gray-600">CIP</label>
                    <input type="text" name="cip" id="cip"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->cip }}" placeholder="{{ $student->cip }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="date_of_birth" class="text-gray-600">Fecha de Nacimiento</label>
                    <input type="date" name="date_of_birth" id="date_of_birth"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->date_of_birth }}" placeholder="{{ $student->date_of_birth }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="email2" class="text-gray-600">Email</label>
                    <input type="email" name="email2" id="email2"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $student->email }}" placeholder="{{ $student->email }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="public_road" class="text-gray-600">Calle</label>
                    <input type="text" name="public_road" id="public_road"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $address->public_road }}" placeholder="{{ $address->public_road }}">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="cp" class="text-gray-600">CP</label>
                    <input type="text" name="cp" id="cp"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                        value="{{ $address->cp }}" placeholder="{{ $address->cp }}">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="municipality" class="text-gray-600">Municipio</label>
                    <input type="text" name="municipality" id="municipality"
                        value="{{ $address->municipality }}" placeholder="{{ $address->municipality }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="province" class="text-gray-600">Provincia</label>
                    <input type="text" name="province" id="province" value="{{ $address->province }}"
                        placeholder="{{ $address->province }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="country" class="text-gray-600">País</label>
                    <input type="text" name="country" id="country" value="{{ $address->country }}"
                        placeholder="{{ $address->country }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <input type="number" name="authuser_id" id="authuser_id" value="{{ auth()->user()->id }}" hidden>
                <input type="number" name="address_id" id="address_id" value="{{ $address->id }}" hidden>
                <input type="number" name="student_id" id="student_id" value="{{ $student->id }}" hidden>
            @else
                <div class="flex flex-col space-y-4">
                    <label for="name12" class="text-gray-600">Nombre</label>
                    <input type="text" name="name12" id="name12" value="{{ $docent->name }}"
                        placeholder="{{ $docent->name }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="lastname1" class="text-gray-600">Primer Apellido</label>
                    <input type="text" name="lastname1" id="lastname1" value="{{ $docent->lastname1 }}"
                        placeholder="{{ $docent->lastname1 }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="lastname2" class="text-gray-600">Segundo Apellido</label>
                    <input type="text" name="lastname2" id="lastname2" value="{{ $docent->lastname2 }}"
                        placeholder="{{ $docent->lastname2 }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="email1" class="text-gray-600">Email</label>
                    <input type="email" name="email1" id="email1" value="{{ $docent->email }}"
                        placeholder="{{ $docent->email }}"
                        class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>
                <input type="number" name="docent_id" id="docent_id" value="{{ $docent->id }}" hidden>
            @endif
            <input type="number" name="user_id" id="user_id" value="{{ $user->id }}" hidden>
            <input type="number" name="authuser_id" id="authuser_id" value="{{ auth()->user()->id }}" hidden>
            <input type="number" name="role_id" id="role_id" value="{{ $user->role_id }}" hidden>
            <div class="flex justify-between">
                <button type="submit"
                    class="w-1/2 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Guardar
                </button>
                <a href="{{ route('psycho.users.edit', $user->id) }}"
                    class="w-1/2 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                        </path>
                    </svg>
                    Cancelar
                </a>
            </div>
        </div>
    </form>
    @endif
</x-app-layout>

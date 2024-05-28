<x-app-layout>
    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('error') }}
        </div>
    @elseif (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="w-[25px]">
        <a href="{{ route('psycho.users.index') }}" class="text-3xl text-black py-2 px-4 rounded hover:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </a>
    </div>
    <div class="flex flex-col justify-center">
        <x-validation-errors class="mb-4" />
        <form method="post" action="{{ route('psycho.users.store') }}" class="w-full max-w-2xl mx-auto">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300">
                <h1 class="text-2xl font-bold text-black text-center">Crear Usuario</h1>
                <input type="number" name="authuser_id" value="{{ auth()->user()->id }}" hidden>
                <!-- Add your form fields here -->
                <div class="flex flex-col space-y-4">
                    <label for="username" class="text-gray-600">Nombre de Usuario:</label>
                    <input type="text" name="username" id="username" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="email"  class="text-gray-600">Email:</label>
                    <input type="email" name="email" id="email" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="password"  class="text-gray-600">Contraseña:</label>
                    <input type="password" name="password" id="password" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="role"  class="text-gray-600">Role:</label>
                    <select name="role" id="role" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                        <option value="0">Seleccione una opción...</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role_type }}</option>
                        @endforeach
                    </select>
                </div>


                <div id="otherusers" class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300" style="display: none;">
                    <div class="flex flex-col space-y-4">
                        <label for="name" class="text-gray-600">Nombre</label>
                        <input type="text" name="name1" id="name1"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="lastname1" class="text-gray-600">Primer Apellido</label>
                        <input type="text" name="lastname1" id="lastname1"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="lastname2" class="text-gray-600">Segundo Apellido</label>
                        <input type="text" name="lastname2" id="lastname2"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="email1" class="text-gray-600">Email</label>
                        <input type="email" name="email1" id="email1"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>

                </div>

                <div id="student" class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300"
                    style="display: none;">
                    <div class="flex flex-col space-y-4">
                        <label for="course_id" class="text-gray-600">Curso</label>
                        <select name="course_id" id="course_id"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                            <option value="">Seleccione una opción...</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="name" class="text-gray-600">Nombre</label>
                        <input type="text" name="name" id="name"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="last_name" class="text-gray-600">Primer Apellido</label>
                        <input type="text" name="last_name" id="last_name"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="last_name2" class="text-gray-600">Segundo Apellido</label>
                        <input type="text" name="last_name2" id="last_name2"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="idalu" class="text-gray-600">IDALU</label>
                        <input type="text" name="idalu" id="idalu"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="dni_nif" class="text-gray-600">DNI</label>
                        <input type="text" name="dni_nif" id="dni_nif"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="cip" class="text-gray-600">CIP</label>
                        <input type="text" name="cip" id="cip"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen"
                            >
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="date_of_birth" class="text-gray-600">Fecha de Nacimiento</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="email2" class="text-gray-600">Email</label>
                        <input type="email" name="email2" id="email2"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="public_road" class="text-gray-600">Calle</label>
                        <input type="text" name="public_road" id="public_road"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="cp" class="text-gray-600">CP</label>
                        <input type="text" name="cp" id="cp"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="municipality" class="text-gray-600">Municipio</label>
                        <input type="text" name="municipality" id="municipality"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="province" class="text-gray-600">Provincia</label>
                        <input type="text" name="province" id="province"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="country" class="text-gray-600">País</label>
                        <input type="text" name="country" id="country"
                            class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>

                </div>
                <div>
                    <button type="submit"
                        class="w-full px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Guardar</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

<script>
    function toggleDivs() {
        var selectedRole = document.getElementById("role").value;

        if (selectedRole === "3") {
            document.getElementById("student").style.display = "block";
            document.getElementById("otherusers").style.display = "none";
        } else if (selectedRole === "0") {
            document.getElementById("student").style.display = "none";
            document.getElementById("otherusers").style.display = "none";
        } else {
            document.getElementById("student").style.display = "none";
            document.getElementById("otherusers").style.display = "block";
        }
    }

    document.getElementById("role").addEventListener("change", toggleDivs);
</script>

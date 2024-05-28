<div>
@foreach ($this->getTutor() as $tutor)
    <div
        class=" bg-white rounded-2xl shadow-xl p-8 mx-auto w-full h-full max-w-xl  mt-10 mb-18 border border-green-400 ">
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
</div>

<div class=" bg-white rounded-2xl shadow-xl p-8 mx-auto w-full h-full max-w-xl  mt-10 mb-18 border border-green-400 ">
    <div class="flex flex-row w-full space-x-3 ">
        <div class=" flex justify-end items-center w-2/3">
            <h1 class="text-3xl font-bold text-center  text-black">{{ $this->getStudent->name }} {{$this->getStudent->last_name}} {{$this->getStudent->last_name2}}</h1> 
        </div>
        <div class="flex justify-start items-center w-1/3 ">
            <img class="w-28 h-28 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->username }}"/>
        </div>
    </div>
    
    <h1 class="text-3xl font-bold mb-2 text-black">Información personal</h1>
    <p class=" mb-2 text-black">CURSO:  {{ $this->getCourse->course_name}}</p>
    <p class=" mb-2 text-black">IDALU:  {{ $this->getStudent->idalu}}</p>
    <p class=" mb-2 text-black">DNI:  {{ $this->getStudent->dni_nif}}</p>
    <p class=" mb-2 text-black">FECHA NACIMIENTO:  {{ $this->getStudent->date_of_birth}}</p>
    <p class=" mb-2 text-black">EMAIL:  {{ $this->getStudent->email}}</p>
    <p class=" mb-2 text-black">CALLE:  {{ $this->getAddress->public_road}}</p>
    <p class=" mb-2 text-black">CP:  {{ $this->getAddress->cp}}</p>
    <p class=" mb-2 text-black">PROVINCIA:  {{ $this->getAddress->province}}</p>
</div>

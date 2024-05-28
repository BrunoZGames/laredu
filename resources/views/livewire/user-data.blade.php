<div class="flex items-center justify-between flex-col ">
    <div
        class=" bg-white rounded-2xl shadow-xl p-8 mx-auto w-full h-full max-w-xl  mt-10 mb-18 border border-green-400 ">
        <h1 class="text-3xl font-bold text-center  text-black">{{ $this->getDocent->name }}
            {{ $this->getDocent->lastname1 }} {{ $this->getDocent->lastname2 }}</h1>

        <div class="flex justify-center">
            <img class=" mt-5 w-48 h-48 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->username }}" />
        </div>
        <h1 class="text-3xl font-bold mt-6 mb-2 text-black">Información contacto</h1>
        <p class=" mb-2 text-black">USERNAME: {{ Auth::user()->username }}</p>
        <p class=" mb-2 text-black">EMAIL: {{ $this->getDocent->email }}</p>
    </div>
</div>

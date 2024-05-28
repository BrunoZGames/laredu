<x-guest-layout>
        <div class="flex fixed w-36 2xl:w-48 p-4 ">
                {{-- <img src="../../public/assets/img/logoOscar.jpg" alt=""> --}}
                <x-authentication-card-logo /> 
            
        </div>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="flex justify-center flex-1 items-center">
            <form class="flex flex-col justify-center bg-white/50 w-1/3 shadow-xl p-12 rounded-xl" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="flex flex-col justify-center" >
                        {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                        <x-input id="email" class="block mt-1 w-full text-green-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Usuario" />
                    </div>
    
                    <div class="mt-4 flex flex-col justify-center">
                        {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                        <x-input id="password" class="block mt-1 w-full text-green-400" type="password" name="password" required autocomplete="current-password"  placeholder="Contraseña" />
                    </div>
    
                    <div class="block mt-4 flex justify-center">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                        </label>
                    </div>
    
                    <div class="flex flex-col items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste la contraseña?') }}
                            </a>
                        @endif
    
                        <x-button class="ms-4 mt-4 py-1 bg-red-600 border-0">
                            {{ __('Iniciar sesión') }}
                        </x-button>
                    </div>

                    
                    <div class="text-center mt-8 text-sm">
                        <p class="terms_link font-semibold">Al continuar, estás aceptando los  <a href="" class="underline decoration-solid">Terminos y condiciones</a> y la <a href="" class="text-red-500 font-bold">politca de privacidad</a> de Meraki</p>
                    </div>
            </form>
        </div>

        

</x-guest-layout>

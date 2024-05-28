<div class=" w-full mb-5 flex justify-start pl-8 items-center drop-shadow-xl">
    {{-- <h1>aqui va logo</h1> --}}
    <img class=" w-28 drop-shadow-lg" src="{{ asset('img/meraki-logo.png') }}" alt="Meraki">
</div>
<li class="">
    <a href="{{ route('student.dashboard') }}"
        class="flex items-center p-2 text-black rounded-lg dark:text-white hover:bg-zinc-50 hover:text-black dark:hover:bg-gray-700 group">
        <svg class="w-5 h-5 text-black transition duration-75 fill-current group-hover:text-gray-900 dark:group-hover:text-white "
            viewBox="0 0 22 21" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="none" d="M0 0h24v24H0z" />
                <path fill="black" d="M15.024 22C16.2771 22 17.3524 21.9342 18.2508 21.7345C19.1607 21.5323 19.9494 21.1798 20.5646 20.5646C21.1798 19.9494 21.5323 19.1607 21.7345 18.2508C21.9342 17.3524 22 16.2771 22 15.024V12C22 10.8954 21.1046 10 20 10H12C10.8954 10 10 10.8954 10 12V20C10 21.1046 10.8954 22 12 22H15.024Z" />
                <path fill="black" d="M2 15.024C2 16.2771 2.06584 17.3524 2.26552 18.2508C2.46772 19.1607 2.82021 19.9494 3.43543 20.5646C4.05065 21.1798 4.83933 21.5323 5.74915 21.7345C5.83628 21.7538 5.92385 21.772 6.01178 21.789C7.09629 21.9985 8 21.0806 8 19.976L8 12C8 10.8954 7.10457 10 6 10H4C2.89543 10 2 10.8954 2 12V15.024Z" />
                <path fill="black" d="M8.97597 2C7.72284 2 6.64759 2.06584 5.74912 2.26552C4.8393 2.46772 4.05062 2.82021 3.4354 3.43543C2.82018 4.05065 2.46769 4.83933 2.26549 5.74915C2.24889 5.82386 2.23327 5.89881 2.2186 5.97398C2.00422 7.07267 2.9389 8 4.0583 8H19.976C21.0806 8 21.9985 7.09629 21.789 6.01178C21.772 5.92385 21.7538 5.83628 21.7345 5.74915C21.5322 4.83933 21.1798 4.05065 20.5645 3.43543C19.9493 2.82021 19.1606 2.46772 18.2508 2.26552C17.3523 2.06584 16.2771 2 15.024 2H8.97597Z" />
            </g>
        </svg>
        <span class="ms-3">Inicio</span>
    </a>
</li>

<li>
    <a href="{{ route('student.calendar') }}"
        class="flex items-center p-2 text-black rounded-lg dark:text-white hover:bg-zinc-50 dark:hover:bg-gray-700 hover:text-black group">
        <svg class="w-5 h-5 text-black transition duration-75 fill-current group-hover:text-gray-900 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 21">
            <path fill="none" d="M0 0h24v24H0z" />
            <path fill="black" fill="hover:black"
                d="M6.94028 2C7.35614 2 7.69326 2.32421 7.69326 2.72414V4.18487C8.36117 4.17241 9.10983 4.17241 9.95219 4.17241H13.9681C14.8104 4.17241 15.5591 4.17241 16.227 4.18487V2.72414C16.227 2.32421 16.5641 2 16.98 2C17.3958 2 17.733 2.32421 17.733 2.72414V4.24894C19.178 4.36022 20.1267 4.63333 20.8236 5.30359C21.5206 5.97385 21.8046 6.88616 21.9203 8.27586L22 9H2.92456H2V8.27586C2.11571 6.88616 2.3997 5.97385 3.09665 5.30359C3.79361 4.63333 4.74226 4.36022 6.1873 4.24894V2.72414C6.1873 2.32421 6.52442 2 6.94028 2Z" />
            <path fill="white"
                d="M21.9995 14.0001V12.0001C21.9995 11.161 21.9963 9.66527 21.9834 9H2.00917C1.99626 9.66527 1.99953 11.161 1.99953 12.0001V14.0001C1.99953 17.7713 1.99953 19.6569 3.1711 20.8285C4.34267 22.0001 6.22829 22.0001 9.99953 22.0001H13.9995C17.7708 22.0001 19.6564 22.0001 20.828 20.8285C21.9995 19.6569 21.9995 17.7713 21.9995 14.0001Z" />
            <circle cx="17" cy="17" r="1" fill="black" />
            <circle cx="17" cy="13" r="1" fill="black" />
            <circle cx="12" cy="17" r="1" fill="black" />
            <circle cx="12" cy="13" r="1" fill="black" />
            <circle cx="7" cy="17" r="1" fill="black" />
            <circle cx="7" cy="13" r="1" fill="black" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Calendario</span>
        <span
            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full hover:text-black dark:bg-gray-700 dark:text-gray-300">NEW</span>
    </a>
</li>

    <div>
        <ul>
            {{-- <li>
                <a href="{{ route('profile.show') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 ms-3 whitespace-nowrap">{{ Auth::user()->username }}</span>
                </a>
            </li> --}}
    
            {{-- <div class="border-t border-gray-200"></div> --}}
    
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('profile.show') }}"
                        class="flex items-center p-2 text-black rounded-lg dark:text-white hover:bg-zinc-50 hover:text-black dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap" href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
    
    
    
    

{{-- <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Estify</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="">Home</a>
            <a class="mr-5 hover:text-gray-900" href="{{ route('all.listings') }}">All Ads</a>
            <a class="mr-5 hover:text-gray-900">Contact</a>
            @guest
            <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Login</a>
            <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Register</a>
            @endguest
            @auth
            <a class="mr-5 hover:text-gray-900" href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
            @endauth
        </nav>
        <button
            class="inline-flex items-center bg-green-500 border-0 py-1 px-3 focus:outline-none hover:bg-green-200 rounded text-base text-gray-50 mt-4 md:mt-0">Post
            New Ad
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</header> --}}
<header class="flex h-[200vh] w-full justify-center bg-black overflow-hidden">
    <nav class="fixed z-10 flex w-full items-center justify-around gap-[40%] p-4 lg:gap-0">

        <div class="flex justify-center items-center">

            <svg class="w-9 h-9" viewBox="0 0 364 373" fill="none" xmlns="http://www.w3.org/2000/svg%22%3E">
                <path
                    d="M68 113L0 183L191 373L339 224L184 69L73 183L91 199L184 102L306 224L191 340L35 183L184 36L348 199L364 183L184 0L91 93L96 75H68V113Z"
                    fill="#F8F9FA" />
                <rect x="149" y="157" width="26" height="26" fill="#F8F9FA" />
                <rect x="189" y="157" width="26" height="26" fill="#F8F9FA" />
                <rect x="149" y="191" width="26" height="26" fill="#F8F9FA" />
                <rect x="189" y="191" width="26" height="26" fill="#F8F9FA" />
            </svg>

            <h1
                class="px-2 flex justify-start font-[Hind Siligurie] text-TextPrimary text-2xl font-sans text-center tracking-widest cursor-pointer">
                Estify
            </h1>
        </div>
        <ul
            class="absolute top-[140%] ml-0 flex flex-shrink items-center justify-center gap-8 lg:relative lg:ml-[135px]">
            <li class="text-2xs list-none text-TextPrimary">
                <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-TextPrimary after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]"
                    data-tab-target="#placetostay" href="#">
                    Home
                </a>
            </li>
            <li class="text-2xs list-none text-TextPrimary">
                <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-TextPrimary after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                    data-tab-target="#experiences" href="#">
                    Listings
                </a>
            </li>
        </ul>
        <div class="relative flex items-center justify-center gap-1">
            <a class="rounded-full hover:bg-gray-600 p-2 text-[12px] text-TextPrimary " href="{{ route('dashboard') }}">
                Become a Host
            </a>
            <i
                class="fa-solid fa-globe mr-1 cursor-pointer rounded-full p-3 text-[12px] text-TextPrimary hover:bg-gray-600"></i>
            <div class="menu-toggle flex cursor-pointer items-center justify-center gap-5 w-12 h-12 overflow-hidden rounded-full shadow-lg"
                id="menu-toggle">

                @guest
                <i class="fa-solid fa-circle-user text-4xl text-TextPrimary"></i>

                @endguest
                @auth
                {{-- <img class="w-full h-full object-cover object-center"
                    src="{{ asset('storage/') .'/'. auth()->user()->profile_photo_path }}"> --}}
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button
                    class="w-full h-full border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-full w-full rounded-full object-cover object-center"
                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </button>
                @else
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                        {{ Auth::user()->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </span>
                @endif


                @endauth



            </div>
            <div class="menu-items absolute top-full mt-4 flex w-[240px] scale-0 flex-col gap-1 rounded-lg bg-TextPrimary py-3 shadow-lg"
                id="menu-items">
                @guest
                <a class="menu-link text-2xs w-full cursor-pointer py-2 px-6 hover:bg-gray-300"
                    href="{{ route('register') }}">Sign up</a>
                <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300"
                    href="{{ route('login') }}">Log in</a>
                @endguest
                @auth
                <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300"
                    href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
                <form class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" method="POST"
                    action="{{ route('logout') }}">
                    @csrf
                    <a class="text-2xs w-full cursor-pointer hover:bg-gray-300" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                        Logout
                    </a>
                </form>
                @endauth
                <hr />

                <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Host your
                    home</a>
                <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Host an
                    experience</a>
                <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">help</a>
            </div>
        </div>
    </nav>


</header>
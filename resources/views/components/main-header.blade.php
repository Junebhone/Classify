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
        <h1 class="cursor-pointer text-center font-serif text-3xl font-bold tracking-widest text-TextPrimary">
            Estify
        </h1>
        <ul
            class="absolute top-[140%] ml-0 flex flex-shrink items-center justify-center gap-8 lg:relative lg:ml-[135px]">
            <li class="text-2xs list-none text-TextPrimary">
                <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-TextPrimary after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]"
                    data-tab-target="#placetostay" href="#">
                    Place to stay
                </a>
            </li>
            <li class="text-2xs list-none text-TextPrimary">
                <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-TextPrimary after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                    data-tab-target="#experiences" href="#">
                    Experiences
                </a>
            </li>
            <li class="text-2xs list-none text-TextPrimary">
                <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-TextPrimary after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                    href="#">
                    Online Experiences
                </a>
            </li>
        </ul>
        <div class="relative flex items-center justify-center gap-1">
            <a class="rounded-full hover:bg-gray-600 p-2 text-[12px] text-TextPrimary " href="{{ route('dashboard') }}">
                Become a Host
            </a>
            <i
                class="fa-solid fa-globe mr-1 cursor-pointer rounded-full p-3 text-[12px] text-TextPrimary hover:bg-gray-600"></i>
            <div class="menu-toggle flex cursor-pointer items-center justify-center gap-5 rounded-3xl bg-TextPrimary py-1 px-4 shadow-lg"
                id="menu-toggle">



                <i class="fa-solid fa-bars text-2xs text-TextSecondary"></i>
                @guest
                <i class="fa-solid fa-circle-user text-3xl text-TextSecondary"></i>
                @endguest
                @auth
                <div
                    class="flex items-center overflow-hidden w-[1.875rem] h-[1.875rem] object-cover object-center rounded-full">
                    <img class="rounded-lg" src="{{ asset('storage/') .'/'. auth()->user()->profile_photo_path }}">
                </div>
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
    <form action=""
        class="form-tab relative top-[140px] flex h-[68px] w-max flex-shrink gap-[1px] rounded-[80px] bg-TextPrimary lg:top-20"
        id="place">
        <div
            class="location relative flex flex-shrink cursor-pointer flex-col justify-center gap-1 rounded-[80px] bg-TextPrimary pl-10 pr-3 text-xs after:absolute after:left-full after:bottom-[30px] after:h-[2px] after:w-8 after:translate-x-[-50%] after:rotate-[90deg] after:bg-gray-300 hover:bg-gray-300 lg:pr-20 lg:after:bottom-[33px]">
            <label class="location cursor-pointer text-black ">Location</label>
            <input
                class="jj focus:shadow-outline appearance-none rounded border-white bg-transparent leading-tight text-gray-700 focus:outline-none"
                id="input-location" placeholder="Where are you going?" type="text" />
        </div>
        <div
            class="relative flex flex-shrink cursor-pointer flex-col justify-center gap-1 rounded-[80px] bg-TextPrimary pl-10 pr-8 text-xs after:absolute after:left-full after:bottom-[30px] after:h-[2px] after:w-8 after:translate-x-[-50%] after:rotate-[90deg] after:bg-gray-300 hover:bg-gray-300 lg:pr-20 lg:after:bottom-[33px]">
            <p class="text-TextSecondary">Check in</p>
            <span class="text-gray-400">Add dates</span>
        </div>
        <div
            class="relative flex flex-shrink cursor-pointer flex-col justify-center gap-1 rounded-[80px] bg-TextPrimary pl-10 pr-8 text-xs after:absolute after:left-full after:bottom-[30px] after:h-[2px] after:w-8 after:translate-x-[-50%] after:rotate-[90deg] after:bg-gray-300 hover:bg-gray-300 lg:pr-20 lg:after:bottom-[33px]">
            <p class="text-TextSecondary">Check out</p>
            <span class="text-gray-400">Add dates</span>
        </div>
        <div
            class="guest relative flex flex-shrink cursor-pointer items-center justify-center gap-10 rounded-[80px] bg-TextPrimary pl-10 text-xs hover:bg-gray-300 lg:gap-16">
            <div class="flex flex-shrink flex-col gap-1">
                <p class="text-TextSecondary">Guests</p>
                <span class="text-gray-400">Add guests</span>
            </div>
            <button
                class="search mr-4 flex flex-shrink items-center justify-center gap-2 rounded-full bg-red-500 p-3 hover:bg-red-600 lg:p-4"
                id="btn-search" type="submit">
                <i class="fa-solid fa-magnifying-glass text-xl text-TextPrimary"></i>
                <Search class="search-text hidden text-xs text-TextPrimary" id="text-search">Search</Search>
            </button>
        </div>
        <div class="absolute top-full mt-4 flex h-[150px] w-[500px] scale-0 flex-col justify-center gap-4 rounded-[30px] bg-TextPrimary p-6"
            id="listing">
            <p class="uppercase">Go Anywhere, anytime</p>
            <a class="z-50 flex items-center justify-start rounded-full border-[1px] border-gray-200 p-4 pl-6 shadow-2xl hover:shadow-2xl"
                href="../src/listing.html" id="listing-page">
                I'm flexible
                <i class="fa-solid fa-angle-right ml-auto text-3xl font-extralight"></i>
            </a>
        </div>
    </form>
</header>
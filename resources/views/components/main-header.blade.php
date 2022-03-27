<div class="bg-black flex flex-col text-sm sm:text-base">
    <div class="fixed w-full h-22 listing-navigation flex items-center z-50 ">
        <nav class="navigation w-full mx-auto flex py-4 justify-between items-center bg-black z-50 px-10 shadow-lg">
            <div class="flex justify-center items-center">
                <svg class="w-10 h-10 " viewBox="0 0 364 373" fill="none" xmlns="http://www.w3.org/2000/svg%22%3E">
                    <path
                        d="M68 113L0 183L191 373L339 224L184 69L73 183L91 199L184 102L306 224L191 340L35 183L184 36L348 199L364 183L184 0L91 93L96 75H68V113Z"
                        fill="#FF385C" />
                    <rect x="149" y="157" width="26" height="26" fill="#FF385C" />
                    <rect x="189" y="157" width="26" height="26" fill="#FF385C" />
                    <rect x="149" y="191" width="26" height="26" fill="#FF385C" />
                    <rect x="189" y="191" width="26" height="26" fill="#FF385C" />
                </svg>
                <h1
                    class="px-2 Logo justify-start hidden sm:flex font-[Hind Siligurie] text-white text-2xl font-sans text-center tracking-widest cursor-pointer">
                    Estify
                </h1>
            </div>

            <ul class="flex items-center justify-center gap-4">
                <li class="text-base list-none text-TextPrimary">
                    <a class="nav-link Logo relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]"
                        data-tab-target="#placetostay" href="{{ route('welcome') }}">
                        Home
                    </a>
                </li>
                <li class="text-base list-none text-TextPrimary">
                    <a class="nav-link Logo relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                        data-tab-target="#experiences" href="{{ route('all-listings') }}">
                        Listings
                    </a>
                </li>
                @foreach ($categories as $category)
                <li class="text-base list-none text-TextPrimary">
                    <a class="nav-link Logo relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                        data-tab-target="#experiences" href="{{ route('listingbycategory',$category->id) }}">
                        {{ $category->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="flex items-center relative justify-center gap-1">
                <div class="menu-toggle flex cursor-pointer items-center justify-center gap-5 w-12 h-12 overflow-hidden rounded-full shadow-lg"
                    id="menu-toggle">

                    @guest
                    <i class="fa-solid Logo fa-circle-user text-4xl text-white"></i>

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
                <div class="menu-items absolute top-full  right-4   lg:right-[2rem]  mt-6 flex w-[240px] scale-0 flex-col gap-1 rounded-lg bg-TextPrimary py-3 shadow-lg"
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
                        <a class="text-2xs w-full cursor-pointer hover:bg-gray-300" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                    @endauth
                    <hr />

                    <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Sell your
                        home</a>
                    <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Contact
                        us</a>
                </div>
            </div>
        </nav>
    </div>
</div>
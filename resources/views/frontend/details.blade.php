<x-main-layout>
    <div class="bg-white flex flex-col">
        <div class="h-20 bg-white fixed w-full listing-navigation shadow-md flex items-center z-50 px-6">
            <nav class=" container mx-auto flex py-4 justify-between items-center bg-white z-50">
                <a class="flex justify-center items-center" href="{{ route('welcome') }}">
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
                        class="px-2 sm:flex hidden justify-start font-[Hind Siligurie] text-Rose text-2xl font-sans text-center tracking-widest cursor-pointer">
                        Estify
                    </h1>

                </a>
                <ul class="flex items-center justify-center gap-4">
                    <li class="text-base list-none text-black">
                        <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]"
                            data-tab-target="#placetostay" href="{{ route('welcome') }}">
                            Home
                        </a>
                    </li>

                    <li class="text-base list-none text-black">
                        <a class="{{ request()->url() == route('all-listings') ? 'relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out' : 'nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]' }}"
                            href="{{ route('all-listings') }}">
                            Listings
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    <li class="text-base list-none text-black">
                        <a class="{{ request()->url() == route('listingbycategory',$category->id) ? 'relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out' : 'nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[30%]' }} "
                            href=" {{ route('listingbycategory',$category->id) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="flex items-center relative justify-center gap-1">

                    <div class="menu-toggle flex cursor-pointer items-center justify-center gap-5 w-12 h-12 overflow-hidden rounded-full shadow-lg"
                        id="menu-toggle">

                        @guest
                        <i class="fa-solid fa-circle-user text-4xl text-black"></i>

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

                        <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Sell
                            your
                            home</a>
                        <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Contact
                            us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <style>
        /*each image is referenced twice in the HTML, but each image only needs to be updated in the CSS*/
        .image1 {
            content: url("{{ Storage::url($listing->featured_image) }}")
        }

        .image2 {
            content: url("{{ Storage::url($listing->image_one) }}")
        }

        .image3 {
            content: url("{{ Storage::url($listing->image_two) }}")
        }

        .image4 {
            content: url("{{ Storage::url($listing->image_three) }}")
        }
    </style>
    <div class="container top-20 relative mt-8 max-w-6xl  mx-auto flex flex-col">
        <span class="text-3xl font-extrabold px-10">{{ $listing->title }}</span>
        <div class="flex w-full justify-between mx-auto px-10 mt-4">
            <div class="flex gap-2">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#FF385C">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <p class="text-sm font-semibold">4.9</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm font-semibold underline">30 reviews</p>
                </div>

            </div>
            <div class="flex gap-4 ">
                <div class="flex gap-1 items-center hover:bg-gray-100 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                    <p class="text-sm underline">Share</p>
                </div>
                <div class="flex gap-1 items-center hover:bg-gray-100 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <p class="text-sm underline">Save</p>
                </div>

            </div>
        </div>
        <section class="mx-auto my-10 max-w-6xl px-10">
            <div class="mx-auto relative overflow-hidden">
                <!-- large image on slides -->
                <div class="mySlides hidden">
                    <div class="image1 w-full h-[30rem] rounded-lg object-center object-cover "></div>
                </div>
                <div class="mySlides hidden">
                    <div class="image2 w-full h-[30rem] rounded-lg object-center object-cover "></div>
                </div>
                <div class="mySlides hidden">
                    <div class="image3 w-full h-[30rem] rounded-lg object-center object-cover "></div>
                </div>
                <div class="mySlides hidden">
                    <div class="image4 w-full h-[30rem] rounded-lg object-center object-cover "></div>
                </div>

                <!-- butttons -->
                <a class="absolute left-0 inset-y-0 flex items-center -mt-32 px-4 text-black hover:text-gray-800 cursor-pointer text-xl font-extrabold"
                    onclick="plusSlides(-1)">
                    <span
                        class="bg-white w-10 h-10 flex justify-center items-center rounded-full opacity-80 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>


                </a>
                <a class="absolute right-0 inset-y-0 flex items-center -mt-32 px-4 text-black hover:text-gray-800 cursor-pointer text-xl font-extrabold"
                    onclick="plusSlides(1)">
                    <span
                        class="bg-white w-10 h-10 flex justify-center items-center rounded-full opacity-80 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
                <!-- image description -->
                <!-- smaller images under description -->
                <div class="flex justify-center gap-5 my-4">
                    <div>
                        <img class="image1 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                            src="#" onclick="currentSlide(1)" alt="Dog's Nose">
                    </div>
                    <div>
                        <img class="image2 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                            src="#" onclick="currentSlide(2)" alt="Lawnmower">
                    </div>
                    <div>
                        <img class="image3 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                            src="#" onclick="currentSlide(3)" alt="Globe">
                    </div>
                    <div>
                        <img class="image4 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                            src="#" onclick="currentSlide(4)" alt="Optical Illusion">
                    </div>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6  h-full border-b border-gray-300 mx-10">
            <div class="lg:col-span-2  w-full  h-full cursor-pointer ">
                <div class="flex items-center justify-between border-b pb-6 border-gray-300">
                    <div class="flex flex-col">
                        <p class="text-xl font-extrabold">{{ $listing->title }} By <span
                                class="underline decoration-rose-400">{{
                                $listing->user->name }}</span> </p>
                        <span class="flex text-sm text-black pt-2 gap-4 items-center">

                            <p>
                                {{ $listing->created_at->format("d-m-Y") }}
                            </p>
                            <p> {{ $listing->created_at->diffForHumans() }}</p>


                        </span>

                    </div>
                    <img class="h-14 w-14 rounded-full object-cover object-center"
                        src="{{ Storage::url($listing->user->profile_photo_path) }}" />
                </div>
                <div class="py-10  flex flex-col border-b border-gray-300 gap-6">
                    <div class="flex items-center justify-center gap-4 font-semibold ">

                        <lottie-player src="{{ asset('img/lf30_editor_4txkzap0.json') }}" background="transparent"
                            class="w-12 h-12" speed="1" hover>
                        </lottie-player>
                        <span class="flex flex-col w-full">
                            {{ $listing->price }} $
                            <p class="text-sm opacity-50">
                                You can ask the owner yourself
                            </p>
                        </span>

                    </div>
                    <div class="flex items-center justify-center gap-4 font-semibold">
                        <lottie-player src="{{ asset('img/lf30_editor_vsvohelv.json') }}" background="transparent"
                            class="w-12 h-12" speed="0.3" hover>
                        </lottie-player>
                        <span class="flex flex-col w-full">
                            {{ $listing->country->name }}
                            <p class="text-sm opacity-50">
                                Country
                            </p>
                        </span>
                    </div>
                    <div class="flex items-center justify-center gap-4 font-semibold">
                        <lottie-player src="{{ asset('img/lf30_editor_qzbgn1jg.json') }}" background="transparent"
                            class="w-12 h-12" speed="1" hover>
                        </lottie-player>
                        <span class="flex flex-col w-full">
                            {{ $listing->state->name }}
                            <p class="text-sm opacity-50">
                                State
                            </p>
                        </span>
                    </div>
                    <div class="flex items-center gap-4 font-semibold">
                        <lottie-player src="{{ asset('img/18-location-pin-outline-edited.json') }}"
                            background="transparent" class="w-12 h-12" speed="1" hover>
                        </lottie-player>
                        <span class="flex flex-col w-full">
                            {{ $listing->city->name }}
                            <p class="text-sm opacity-50">
                                City
                            </p>
                        </span>
                    </div>
                    <div class="flex items-center gap-4 font-semibold">
                        <lottie-player src="{{ asset('img/146-basket-trolley-shopping-card-outline-edited.json') }}"
                            background="transparent" class="w-12 h-12" speed="1" hover>
                        </lottie-player>
                        <span class="flex flex-col w-full">
                            {{ $listing->category->name }}
                            <p class="text-sm opacity-50">
                                Purchasing Type
                            </p>
                        </span>
                    </div>
                </div>

                <div class="py-4">
                    <div class="text-lg pt-4 flex items-center gap-4 font-extrabold">About This Property
                        <p class="text-sm font-thin text-gray-500">Type : {{
                            $listing->subcategory->name }} , {{ $listing->childcategory->name }}</p>
                    </div>

                    <div class="py-4 text-justify indent-10 px-4">
                        <p class="text-md font-medium">{{ $listing->description }}</p>

                    </div>
                </div>


            </div>
            <div class="cursor-pointer  w-full h-full">
                <div class="shadow-lg rounded-lg border-[1px] border-gray-200 h-[22 rem] p-10">
                    <p class="flex items-center text-2xl font-extrabold">Contact To Owner</p>
                    <div class=" mt-6  max-w-xl sm:mx-auto">
                        <form class="w-full">
                            <div class="mb-5 relative">
                                <input type="name" id="name"
                                    class="peer pt-8 border border-black focus:outline-none rounded-md focus:border-[#FF385C] focus:ring focus:ring-rose-400 focus:ring-opacity-40 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                    placeholder="name@example.com" autocomplete="off" />
                                <label for="name"
                                    class="peer-placeholder-shown:opacity-100 text-sm  opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Name</label>
                            </div>
                            <div class="mb-5 relative">
                                <input type="email" id="email"
                                    class="peer pt-8 border border-black focus:outline-none rounded-md focus:border-[#FF385C] focus:ring focus:ring-rose-400 focus:ring-opacity-40 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                    placeholder="email" autocomplete="off" />
                                <label for="email"
                                    class="peer-placeholder-shown:opacity-100  text-sm  opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Email
                                    address</label>
                            </div>
                            <div class="mb-5 relative">
                                <input type="description" id="description"
                                    class="peer pt-8 border border-black focus:outline-none rounded-md focus:border-[#FF385C] focus:ring focus:ring-rose-400 focus:ring-opacity-40 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                    placeholder="description" autocomplete="off" />
                                <label for="description"
                                    class="peer-placeholder-shown:opacity-100  text-sm  opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Description</label>
                            </div>
                            <button class="w-full bg-Rose hover:bg-rose-500  text-white p-3 rounded-md">Submit</button>
                            <span class="text-xs text-center flex justify-center py-5 text-Rose">Note: You can ask to
                                owner
                                directly Or
                                You can
                                make
                                appoinment
                                with the
                                owner</span>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <section class=" px-10 mb-20">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">
                <h2 class="text-xl font-bold sm:text-2xl">Customer Reviews</h2>

                <div class="flex items-center mt-4">
                    <p class="text-3xl font-medium">
                        4.9
                        <span class="sr-only"> Average review score </span>
                    </p>

                    <div class="ml-4">
                        <div class="flex -ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <p class="mt-0.5 text-xs text-gray-500">Based on 48 reviews</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-8 lg:grid-cols-2 gap-x-16 gap-y-12">
                    <blockquote>
                        <header class="sm:items-center sm:flex">
                            <div class="flex -ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-2 font-medium sm:ml-4 sm:mt-0">The best thing money can buy!</p>
                        </header>

                        <p class="mt-2 text-gray-700 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Ullam
                            possimus fuga dolor rerum dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore
                            aliquid aliquam error quisquam ipsam asperiores! Iste?</p>

                        <footer class="mt-4">
                            <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                        </footer>
                    </blockquote>

                    <blockquote>
                        <header class="sm:items-center sm:flex">
                            <div class="flex -ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-2 font-medium sm:ml-4 sm:mt-0">The best thing money can buy!</p>
                        </header>

                        <p class="mt-2  text-gray-700 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Ullam
                            possimus fuga dolor rerum dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore
                            aliquid aliquam error quisquam ipsam asperiores! Iste?</p>

                        <footer class="mt-4">
                            <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                        </footer>
                    </blockquote>

                    <blockquote>
                        <header class="sm:items-center sm:flex">
                            <div class="flex -ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-2 font-medium sm:ml-4 sm:mt-0">The best thing money can buy!</p>
                        </header>

                        <p class="mt-2  text-gray-700 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Ullam
                            possimus fuga dolor rerum dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore
                            aliquid aliquam error quisquam ipsam asperiores! Iste?</p>

                        <footer class="mt-4">
                            <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                        </footer>
                    </blockquote>

                    <blockquote>
                        <header class="sm:items-center sm:flex">
                            <div class="flex -ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-Rose" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-2 font-medium sm:ml-4 sm:mt-0">The best thing money can buy!</p>
                        </header>

                        <p class="mt-2  text-gray-700 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Ullam
                            possimus fuga dolor rerum dicta, ipsum laboriosam est totam iusto alias incidunt cum tempore
                            aliquid aliquam error quisquam ipsam asperiores! Iste?</p>

                        <footer class="mt-4">
                            <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>

    </div>
    <x-main-footer></x-main-footer>
    <script>
        //JS to switch slides and replace text in bar//
      var slideIndex = 1;
      showSlides(slideIndex);
  
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
  
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
  
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("description");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" opacity-100", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " opacity-100";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>



</x-main-layout>
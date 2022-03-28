<x-main-layout>
    <div class="bg-white flex flex-col">
        <div class="h-20 fixed w-full listing-navigation shadow-md flex items-center z-50 px-6">
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
                        <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[0] after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all after:duration-200 after:ease-in-out after:hover:w-[10%]"
                            data-tab-target="#placetostay" href="{{ route('welcome') }}">
                            Home
                        </a>
                    </li>

                    <li class="text-base list-none text-black">
                        <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%]
                        after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all
                        after:duration-200 after:ease-in-out after:hover:w-[30%]" data-tab-target="#experiences"
                            href="{{ route('all-listings') }}">
                            Listings
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    <li class="text-base list-none text-black">
                        <a class="nav-link relative after:absolute after:bottom-[-0.8em] after:left-[50%] after:h-[2px] after:w-[30%]
                        after:translate-x-[-50%] after:translate-y-[-50%] after:bg-Rose after:transition-all
                        after:duration-200 after:ease-in-out after:hover:w-[30%]" data-tab-target="#experiences"
                            href="{{ route('listingbycategory',$category->id) }}">
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
                    <div class="menu-items absolute top-full  right-4   lg:right-[2rem]  mt-6 flex w-[240px] scale-0 flex-col gap-1 rounded-lg bg-white py-3 shadow-lg"
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
    <div class="top-20 container mt-8 max-w-6xl relative mx-auto grid justify-center items-center">
        <span class="text-xl font-extrabold px-10">{{ $listing->title }}</span>
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
                <div class="flex items-center">
                    <span class="text-sm text-gray-400 underline">{{ $listing->country->name }},</span>
                    <span class="text-sm text-gray-400 underline">{{ $listing->state->name }},</span>
                    <span class="text-sm text-gray-400 underline">{{
                        $listing->city->name }}</span>
                </div>

            </div>
            <div class="flex gap-4 ">
                <div class="flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                    <p class="text-sm underline">Share</p>
                </div>
                <div class="flex gap-1 items-center">
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
        <div class="flex gap-6 px-10 mb-64">
            <div class="rounded-2xl shadow-lg  w-[60%]  h-[400px]cursor-pointer">

            </div>

            <div class="w-[40%] cursor-pointer h-[400px]">
                <div class="shadow-lg rounded-lg border-[1px] border-gray-300 h-[200px]">

                </div>
            </div>
        </div>
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
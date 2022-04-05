<div class="bg-white flex flex-col">
    <div class="h-20 listing-navigation border-b-2 border-gray-200 flex items-center z-50 px-6">
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
    <nav class="listing-nav-bar overflow-x-hidden w-full h-20 flex items-center bg-white z-10 px-6 shadow-md">
        <div class="flex items-center container mx-auto">
            <ul class="ul-list flex gap-6 text-TextSecondary h-20 items-center transition-all duration-150 ease-linear">
                @foreach ($subcategories as $subcategory )
                <li
                    class="{{ request()->url() == route('listingbysubcategory',$subcategory->id) ? 'nav-list relative h-14 gap-2 flex flex-row justify-center items-center border-b-2 border-black transition-all duration-300 ease-linear' : '' }}">
                    <a class="" href="{{ route('listingbysubcategory',$subcategory->id) }}">
                        {{ $subcategory->name }}
                    </a>
                </li>
                @endforeach
                <li
                    class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                    <button class="flex items-center gap-2" type="submit">
                        More <i class="fa-solid fa-angle-down text-xs"></i>
                    </button>
                </li>
            </ul>

            {{ $slot }}

            <div class="flex ml-auto gap-2">

                <button
                    class="flex border-[2px] border-gray-400 hover:border-black items-center justify-center gap-2 rounded-full w-[120px] h-[40px]"
                    type="submit" id="delete-btn">
                    <i class="fa-solid fa-sliders"></i>
                    Filter
                </button>
            </div>
        </div>
    </nav>
</div>

<header id="form-filter">
    <div class="w-full m-4 p-4">
        <div class="flex items-center justify-center w-full h-full">
            <div class="text-center">
                <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                            d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                                    </svg>
                                    <input type="text" placeholder="Title..." name="title" id="title"
                                        class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                                </div>
                                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z" />
                                    </svg>
                                    <select class="bg-gray-300 w-full focus:outline-none text-gray-700" id="category">
                                        <option selected value="">Categories</option>

                                        @foreach (App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                            d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z" />
                                    </svg>
                                    <select class="bg-gray-300 w-full focus:outline-none text-gray-700" id="country">
                                        <option selected value="">Countries</option>
                                        @foreach (App\Models\Country::all() as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                            d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z" />
                                    </svg>
                                    <input type="text" id="maxPrice" name="maxPrice" placeholder="Max Price..."
                                        class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="button" id="filter"
                                class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="overlay-container">
    <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center z-50 px-4" id="overlay">
        <div class=" relative w-screen max-w-lg mx-auto overflow-auto bg-white divide-y divide-gray-100 rounded-lg
            shadow-2xl" role="dialog" aria-label="Filters">
            <form id="form-filter">
                <header class="p-6 text-center flex items-center justify-between">
                    <p class="text-lg font-medium">Search Listing</p>
                    <svg class="h-8 w-8 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </header>
                <main id="form-filter" class="flow-root p-6 overflow-y-auto h-[40rem]">
                    <div class="-my-8 divide-y divide-gray-100">
                        <div class="flex border rounded bg-gray-300 items-center p-2 ">
                            <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui"
                                    d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                            </svg>
                            <input type="text" placeholder="Title..." name="title" id="title"
                                class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                        </div>
                        <div class="py-8">
                            <fieldset>
                                <legend class="text-xl font-medium">Categories</legend>

                                <div class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-2">
                                    <select
                                        class="border-gray-300 focus:border-[#FF385C]
                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                        id="category">
                                        @foreach (App\Models\Category::all() as $category )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        <div class="py-8">
                            <fieldset>
                                <legend class="text-xl font-medium">Countries</legend>

                                <div class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-2">
                                    <select
                                        class="border-gray-300 focus:border-[#FF385C]
                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                        id="country">
                                        @foreach (App\Models\Country::all() as $country )
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        {{-- <div class="py-8">
                            <fieldset>
                                <legend class="text-xl font-medium">Universities</legend>

                                <ul class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-2">
                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Aston University</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Bangor University</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Brunel University London</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Glyndwr University</span>
                                        </label>
                                    </li>
                                </ul>
                            </fieldset>

                            <button class="inline-flex items-center mt-6 text-sm font-medium text-gray-600 underline"
                                type="button">
                                Show all universities

                                <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="py-8">
                            <fieldset>
                                <legend class="text-xl font-medium">Commitment</legend>

                                <ul class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-2">
                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Full Time</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Part Time</span>
                                        </label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>

                        <div class="py-8">
                            <fieldset>
                                <legend class="text-xl font-medium">University Rating</legend>

                                <ul class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-2">
                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Rated 1+</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Rated 2+</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Rated 3+</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="flex items-center text-sm">
                                            <input type="checkbox" class="w-6 h-6 border border-gray-200 rounded-md" />
                                            <span class="ml-3 font-medium">Rated 4+</span>
                                        </label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div> --}}
                    </div>
                </main>
                <footer class="flex items-center justify-between p-6">
                    <button class="text-sm font-medium text-gray-600 underline" type="button">Clear all</button>
                    <button type="submit" id="filter"
                        class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Filter</button>
                </footer>

            </form>

        </div>
    </div>

</div>



<script>
    window.addEventListener('DOMContentLoaded', () =>{
        const overlay = document.querySelector('#overlay')
        const delBtn = document.querySelector('#delete-btn')
        const closeBtn = document.querySelector('#close-modal')

        const toggleModal = () => {
            overlay.classList.toggle('hidden')
            overlay.classList.toggle('flex')
        }

        delBtn.addEventListener('click', toggleModal)

        closeBtn.addEventListener('click', toggleModal)
    })



   
    function filterResults(){
            let href = 'all-listings?';
            var title = document.getElementById("title").value;
            var country = document.getElementById("country").value;
            var category = document.getElementById("category").value;
            var maxPrice = document.getElementById("maxPrice").value;
            if(title.length){
                href += 'filter[title]=' + title;
            }
            if(category.length){
                href +='&filter[category_id]=' + category
            }

            if(country.length){
                
                href +='&filter[country_id]=' + country
            }
            if(maxPrice.length){
                href +='&filter[max_price]=' + maxPrice
            }
            document.location.href = href;
        }
        document.getElementById("filter").addEventListener("click",filterResults);
</script>
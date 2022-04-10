<div class="bg-white flex flex-col">
    <div class="h-20 listing-navigation border-b-2 border-gray-200 flex items-center z-50">
        <nav class="w-full mx-auto flex py-4 justify-between items-center bg-white z-50 px-10">
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
            <div class="flex items-center relative justify-center gap-4">
                <a href="{{ route('listings.create') }}">
                    <h1
                        class="px-2 sm:flex hidden justify-start font-[Hind Siligurie] text-white text-xl font-sans text-center tracking-widest cursor-pointer">
                        Estify
                    </h1>
                </a>
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

                    <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300"
                        href="{{ route('listings.create') }}">Sell
                        your
                        home</a>
                    <a class="menu-link text-2xs w-full cursor-pointer p-2 px-6 hover:bg-gray-300" href="#">Contact
                        us</a>
                </div>
            </div>
        </nav>
    </div>
    <nav class="listing-nav-bar overflow-x-hidden w-full h-20 flex  items-center bg-white z-10 px-10 shadow-md">
        <div class="flex items-center w-full mx-auto">
            {{ $slot }}
        </div>
    </nav>
</div>


<div class="overlay-container">
    <div class="bg-black bg-opacity-50 fixed inset-0 hidden h-screen   justify-center items-center z-50 px-4"
        id="overlay">
        <div class=" relative w-screen max-w-lg mx-auto overflow-auto bg-white divide-y divide-gray-100 rounded-lg
            shadow-2xl" role="dialog" aria-label="Filters">
            <form id="form-filter" class="py-10">
                <header class="px-10 pb-10 text-center flex items-center justify-between">
                    <p class="text-2xl font-medium">Filter Listing</p>
                    <svg class="h-8 w-8 cursor-pointer p-1 hover:bg-gray-100 rounded-full" id="close-modal"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </header>
                <main id="form-filter" class="flex flex-col px-10 py-5 gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Title..." name="title" id="title" placeholder="name@example.com"
                            autocomplete="off"
                            class="peer pt-8 border border-black focus:outline-none rounded-md focus:border-[#FF385C] focus:ring focus:ring-rose-400 focus:ring-opacity-40 focus:shadow-sm w-full p-3 h-16 placeholder-transparent" />

                        <label for="Title"
                            class="peer-placeholder-shown:opacity-100 text-sm  opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Name</label>
                    </div>


                    <select
                        class="border-black focus:border-[#FF385C]
                        focus:ring focus:ring-red-300 focus:ring-opacity-50 py-5 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                        id="category">
                        <option selected value="">Categories</option>

                        @foreach (App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}
                        </option>
                        @endforeach
                    </select>


                    <select
                        class="border-black focus:border-[#FF385C]
                    focus:ring focus:ring-red-300 focus:ring-opacity-50 py-5 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                        id="country">
                        <option selected value="">Countries</option>
                        @foreach (App\Models\Country::all() as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}
                        </option>
                        @endforeach
                    </select>



                    <div class="relative">
                        <input type="text" id="maxPrice" name="maxPrice" placeholder="Max Price..." autocomplete="off"
                            class="peer pt-8 border border-black focus:outline-none rounded-md focus:border-[#FF385C] focus:ring focus:ring-rose-400 focus:ring-opacity-40 focus:shadow-sm w-full p-3 h-16 placeholder-transparent" />

                        <label for="MaxPrice"
                            class="peer-placeholder-shown:opacity-100 text-sm  opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Max
                            Price</label>
                    </div>


                    <div>
                        <button type="button" id="filter"
                            class="flex w-full rounded-md justify-center items-center text-white bg-Rose hover:bg-rose-600 p-3">Filter</button>
                    </div>
                </main>

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

        delBtn.addEventListener('click', toggleModal);
        closeBtn.addEventListener('click', toggleModal);
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
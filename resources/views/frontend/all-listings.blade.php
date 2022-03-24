<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Scripts -->

</head>

<body
    class="font-sans antialiased scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-transparent scrollbar-track-radius-[100%]  overflow-y-scroll">
    <div class="bg-TextPrimary flex flex-col">
        <div class="h-20 listing-navigation border-b-2 border-gray-200 flex items-center z-50 px-6">
            <nav class="navigation container mx-auto flex py-4 justify-between items-center bg-TextPrimary z-50">
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
                        class="px-2 flex justify-start font-[Hind Siligurie] text-Rose text-2xl font-sans text-center tracking-widest cursor-pointer">
                        Estify
                    </h1>
                </div>
                <div class="flex items-center gap-1 relative justify-center">
                    <a class="text-TextSecondary text-[12px] p-2 hover:bg-gray-200 rounded-full" href="#">
                        Become a Seller
                    </a>
                    <i
                        class="fa-solid fa-globe text-[12px] p-3 hover:bg-gray-200 rounded-full text-TextSecondary mr-1 cursor-pointer"></i>
                    <div class="menu-toggle flex items-center justify-center bg-TextPrimary gap-5 py-1 px-4 rounded-3xl cursor-pointer shadow-lg"
                        id="menu-toggle">
                        <i class="fa-solid fa-bars text-2xs text-TextSecondary"></i>
                        <i class="fa-solid fa-circle-user text-3xl text-TextSecondary"></i>
                    </div>
                    <div class="menu-items bg-TextPrimary flex flex-col gap-1 py-3 rounded-lg absolute top-full mt-4 w-[240px] scale-0 shadow-lg"
                        id="menu-items">
                        <a class="menu-link w-full hover:bg-gray-300 py-2 px-6 text-2xs cursor-pointer" href="#">Sign
                            up</a>
                        <a class="menu-link w-full hover:bg-gray-300 p-2 px-6 text-2xs cursor-pointer" href="#">Log
                            in</a>
                        <hr />
                        <a class="menu-link w-full hover:bg-gray-300 p-2 px-6 text-2xs cursor-pointer" href="#">Host
                            your home</a>
                        <a class="menu-link w-full hover:bg-gray-300 p-2 px-6 text-2xs cursor-pointer" href="#">Host an
                            experience</a>
                        <a class="menu-link w-full hover:bg-gray-300 p-2 px-6 text-2xs cursor-pointer" href="#">help</a>
                    </div>
                </div>
            </nav>
        </div>
        <nav class="listing-nav-bar overflow-x-hidden w-full h-20 flex items-center bg-TextPrimary z-10 px-6">
            <div class="flex items-center container mx-auto">
                <ul
                    class="ul-list flex gap-6 text-TextSecondary h-20 items-center transition-all duration-150 ease-linear">
                    @foreach ($categories as $category )
                    <li
                        class="nav-list relative h-14 gap-2 flex flex-row justify-center items-center border-b-2 border-black transition-all duration-300 ease-linear">

                        <a class="" href="{{ route('listingbycategory',$category->id) }}">
                            {{ $category->name }}

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
                <div class="flex ml-auto gap-2">
                    <button
                        class="flex border-[2px] border-black items-center justify-center gap-2 rounded-full w-[120px] h-[40px]"
                        type="submit">
                        Anytime
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                    <button
                        class="flex border-[2px] border-gray-400 hover:border-black items-center justify-center gap-2 rounded-full w-[120px] h-[40px]"
                        type="submit">
                        Gusts
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                    <button
                        class="flex border-[2px] border-gray-400 hover:border-black items-center justify-center gap-2 rounded-full w-[120px] h-[40px]"
                        type="submit">
                        <i class="fa-solid fa-sliders"></i>
                        Filter

                    </button>
                </div>
            </div>
        </nav>
    </div>
    <x-main-listing></x-main-listing>
    <x-main-footer></x-main-footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <x-main-swiper></x-main-swiper>
    {{-- <script>
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
    </script> --}}

</body>

</html>
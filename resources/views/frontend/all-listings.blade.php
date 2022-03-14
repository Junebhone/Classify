<x-main-layout>
    {{-- <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero>></x-main-hero>
    </section>

    <section class="m-2 p-2" id="list-listings">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($listings as $listing)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/420x260">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                                {{ $listing->category->name }}</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $listing->title }}</h2>
                            <p class="mt-1">$16.00</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>x
        </section>
    </section>
    <x-main-footer></x-main-footer> --}}
    <div class="bg-TextPrimary flex flex-col">
        <div class="h-20 listing-navigation border-b-2 border-gray-200 flex items-center z-50 px-6">
            <nav class="navigation container mx-auto flex py-4 justify-between items-center bg-TextPrimary z-50">
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#ff385c" style="display:block">
                        <path
                            d="M29.24 22.68c-.16-.39-.31-.8-.47-1.15l-.74-1.67-.03-.03c-2.2-4.8-4.55-9.68-7.04-14.48l-.1-.2c-.25-.47-.5-.99-.76-1.47-.32-.57-.63-1.18-1.14-1.76a5.3 5.3 0 00-8.2 0c-.47.58-.82 1.19-1.14 1.76-.25.52-.5 1.03-.76 1.5l-.1.2c-2.45 4.8-4.84 9.68-7.04 14.48l-.06.06c-.22.52-.48 1.06-.73 1.64-.16.35-.32.73-.48 1.15a6.8 6.8 0 007.2 9.23 8.38 8.38 0 003.18-1.1c1.3-.73 2.55-1.79 3.95-3.32 1.4 1.53 2.68 2.59 3.95 3.33A8.38 8.38 0 0022.75 32a6.79 6.79 0 006.75-5.83 5.94 5.94 0 00-.26-3.5zm-14.36 1.66c-1.72-2.2-2.84-4.22-3.22-5.95a5.2 5.2 0 01-.1-1.96c.07-.51.26-.96.52-1.34.6-.87 1.65-1.41 2.8-1.41a3.3 3.3 0 012.8 1.4c.26.4.45.84.51 1.35.1.58.06 1.25-.1 1.96-.38 1.7-1.5 3.74-3.21 5.95zm12.74 1.48a4.76 4.76 0 01-2.9 3.75c-.76.32-1.6.41-2.42.32-.8-.1-1.6-.36-2.42-.84a15.64 15.64 0 01-3.63-3.1c2.1-2.6 3.37-4.97 3.85-7.08.23-1 .26-1.9.16-2.73a5.53 5.53 0 00-.86-2.2 5.36 5.36 0 00-4.49-2.28c-1.85 0-3.5.86-4.5 2.27a5.18 5.18 0 00-.85 2.21c-.13.84-.1 1.77.16 2.73.48 2.11 1.78 4.51 3.85 7.1a14.33 14.33 0 01-3.63 3.12c-.83.48-1.62.73-2.42.83a4.76 4.76 0 01-5.32-4.07c-.1-.8-.03-1.6.29-2.5.1-.32.25-.64.41-1.02.22-.52.48-1.06.73-1.6l.04-.07c2.16-4.77 4.52-9.64 6.97-14.41l.1-.2c.25-.48.5-.99.76-1.47.26-.51.54-1 .9-1.4a3.32 3.32 0 015.09 0c.35.4.64.89.9 1.4.25.48.5 1 .76 1.47l.1.2c2.44 4.77 4.8 9.64 7 14.41l.03.03c.26.52.48 1.1.73 1.6.16.39.32.7.42 1.03.19.9.29 1.7.19 2.5z" />
                    </svg>
                    <h1
                        class="px-2 flex justify-start font-[Hind Siligurie] text-[#ff385c] text-2xl font-sans text-center tracking-widest cursor-pointer">
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
                    <li
                        class="nav-list relative h-14 flex flex-row justify-center border-b-2 border-black transition-all duration-300 ease-linear">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_4zQPEp/home_02.json"
                            background="transparent" speed="0.5" style="width: 25px;" autoplay></lottie-player>
                        <a class="" href="#">
                            Tiny homes
                        </a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">Amazing pools</a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">Beachfront</a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">Offbeat</a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">
                            Cabins</a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">Ryokans</a>
                    </li>
                    <li
                        class="nav-list relative h-14 flex flex-col justify-center text-gray-400 transition-all duration-200 ease-linear">
                        <a href="#">Islands</a>
                    </li>
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
    <div class="product-listing mt-4 container pb-20 relative mx-auto overflow-x-hidden grid justify-center items-center
               xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 gap-y-14 sm:px-0 px-6">
        <div class="products rounded-2xl flex flex-col items-center aspect-square">
            <div class="swiper aspect-square rounded-2xl group">

                <div class="heart w-6 z-50 absolute top-3 right-0 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path
                            d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                        </path>
                    </svg>
                </div>

                <a class="swiper-wrapper !aspect-square" href="#">
                    <img alt="image-1" class="swiper-slide object-cover object-center w-full h-full first-image"
                        src="../public-assets/images/pexels-misael-garcia-1707823.jpeg" />
                    <img alt="image-2" class="swiper-slide object-cover object-center w-full h-full"
                        src="../public-assets/images/pexels-pixabay-534174.jpeg" />
                    <img alt="images-3" class="swiper-slide object-cover object-center w-full h-full"
                        src="../public-assets/images/Estify.jpeg" />
                </a>
                <div class="swiper-pagination"></div>
                <div
                    class="swiper-button-prev scale-0 opacity-40 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div
                    class="swiper-button-next scale-0 opacity-40 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div class="flex w-full h-[20%] pt-5 flex-wrap">
                <div class="destination flex flex-col justify-center w-[60%] flex-wrap">
                    <p>Jibhi HimachalPradesh</p>
                    <p class="opacity-50">2,514 kilometers awy</p>
                </div>
                <div class="destination flex flex-col justify-center w-[40%] items-end flex-wrap">
                    <p>$90 / night</p>
                    <p class="opacity-50">Apr 1-8</p>
                </div>
            </div>
        </div>
        <div class="products rounded-2xl flex flex-col items-center aspect-square">
            <div class="swiper aspect-square rounded-2xl group">

                <div class="heart w-6 z-50 absolute top-3 right-0 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path
                            d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                        </path>
                    </svg>
                </div>

                <a class="swiper-wrapper !aspect-square" href="#">
                    <img alt="image-1" class="swiper-slide object-cover object-center w-full h-full first-image"
                        src="../public-assets/images/pexels-misael-garcia-1707823.jpeg" />
                    <img alt="image-2" class="swiper-slide object-cover object-center w-full h-full"
                        src="../public-assets/images/pexels-pixabay-534174.jpeg" />
                    <img alt="images-3" class="swiper-slide object-cover object-center w-full h-full"
                        src="../public-assets/images/Estify.jpeg" />
                </a>
                <div class="swiper-pagination"></div>
                <div
                    class="swiper-button-prev scale-0 opacity-40 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div
                    class="swiper-button-next scale-0 opacity-40 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div class="flex w-full h-[20%] pt-5 flex-wrap">
                <div class="destination flex flex-col justify-center w-[60%] flex-wrap">
                    <p>Jibhi HimachalPradesh</p>
                    <p class="opacity-50">2,514 kilometers awy</p>
                </div>
                <div class="destination flex flex-col justify-center w-[40%] items-end flex-wrap">
                    <p>$90 / night</p>
                    <p class="opacity-50">Apr 1-8</p>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
<x-main-layout>
    <x-main-heading></x-main-heading>
    <div
        class="product-listing mt-4 container pb-20 relative mx-auto overflow-x-hidden grid justify-center items-center
                       xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 gap-y-14 px-6 sm:px-0">
        @forelse ($listings as $listing)

        <div class="products rounded-2xl flex flex-col items-center aspect-square">
            <a href="{{ route('details',$listing->id) }}">
                <div class="swiper aspect-square rounded-2xl group">
                    <div class="heart w-6 z-50 absolute top-3 right-0 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <path
                                d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                            </path>
                        </svg>
                    </div>
                    <div class="swiper-wrapper !aspect-square">
                        <img alt="image-1" class="swiper-slide object-cover object-center w-full min-h-full first-image"
                            src="{{ Storage::url($listing->featured_image) }}" />
                        <img alt="image-2" class="swiper-slide object-cover object-center w-full min-h-full"
                            src="{{ Storage::url($listing->image_one) }}" />
                        <img alt="images-3" class="swiper-slide object-cover object-center w-full min-h-full"
                            src="{{ Storage::url($listing->image_two) }}" />
                    </div>
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
                <div class="flex w-full h-[20%] pt-5">
                    <div class="destination flex  flex-wrap w-[70%]">
                        <span class="flex w-full">
                            <p class="truncate text-md  w-[180px]">{{ $listing->title }}</p>
                        </span>

                        <p class="truncate text-md w-[100px] opacity-40">{{ $listing->category->name }}</p>
                    </div>
                    <div class="destination flex  w-[30%]  flex-wrap ">
                        <p class="w-full flex justify-end">{{ $listing->price}}$</p>
                        <p class="opacity-50 w-full flex justify-end">Apr 1-8</p>
                    </div>
                </div>
            </a>


        </div>
        @empty

        <div class="col-span-full flex justify-center  items-center  text-xl  font-extrabold">
            <lottie-player src="{{ asset('img/lf20_0zomy8eb.json') }}" background="transparent" class="w-[20rem]"
                speed="1.5" autoplay loop>
            </lottie-player>
        </div>
        <div class="col-span-full flex justify-center  items-center text-xl  font-extrabold">
            No Data Found For {{ $subcategory->name }}
        </div>
        @endforelse
    </div>
    <x-main-footer></x-main-footer>
</x-main-layout>
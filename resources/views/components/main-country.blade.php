<div class="grid grid-cols-2 lg:grid-cols-6 sm:grid-cols-2 md:grid-cols-3 gap-x-2    px-10   bg-white text-base ">
    <div class="col-span-full">
        <p class="text-xl sm:text-2xl text-gray-800 font-extrabold  ">Popular countries</p>
    </div>
    @foreach ($countries as $country)
    <a href="{{ route('listingbycountry',$country->id) }}">
        <div
            class="h-[8rem] col-span-1  my-4 bg-gradient-to-r from-red-500 to-pink-600 bg-opacity-95   flex justify-center items-center p-3 rounded-xl border-2 border-slate-100  shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
            <div class="text-white text-bold text-2xl capitalize  text-center">
                {{ $country->name }}
            </div>
        </div>
    </a>

    @endforeach
</div>
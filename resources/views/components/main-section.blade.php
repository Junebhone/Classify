<div class="grid grid-cols-2 xl:grid-cols-4 sm:grid-cols-2 md:grid-cols-2 gap-x-4 gap-y-1   p-10   bg-white text-base ">
    <!-- Title -->
    <div class="col-span-full mb-6">
        <p class="text-xl sm:text-2xl text-black font-extrabold ">Popular types for your next property
        </p>
    </div>
    @foreach ($subcategories as $subcategory)
    <!-- Card 1 -->
    <div class="">
        <a href="{{ route('listingbysubcategory',$subcategory->id) }}">
            <img src=" {{ asset('storage/subcategories/' . $subcategory->image) }}" class="rounded-xl w-full h-[200px] object-cover object-center brightness-75 hover:brightness-100
            hover:scale-105 transition-all transform-all" />
        </a>
        <div
            class="text-base items-center flex -translate-y-10 capitalize  gap-3 text-white font-semibold sm:text-xl translate-x-3">
            <p class="capitalize underline decoration-rose-500">
                {{ $subcategory->name }}

            </p>


            <span class="text-sm text-white">{{
                $subcategory->category->name }}</span>


        </div>


    </div>
    @endforeach
</div>
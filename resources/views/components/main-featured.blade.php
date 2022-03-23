{{-- <div class="grid grid-cols-8 gap-x-4 gap-y-1  p-10   bg-white text-base">
    <!-- Title -->
    <div class="col-span-full mb-6">
        <p class="text-xl text-gray-800 font-semibold">Popular categories for your next property </p>
    </div>
    @foreach ($categories as $category)
    <!-- Card 1 -->
    <div class="col-span-2">
        <a href="">
            <img src="{{ asset('storage/categories/' . $category->image)}}"
                class="rounded-xl w-[100rem] h-[20rem] object-cover object-center brightness-75 hover:brightness-100" />
        </a>
        <p
            class="text-base -translate-y-10 capitalize underline decoration-rose-500 text-white font-semibold  sm:text-xl translate-x-3">
            {{ $category->name }}</p>
    </div>
    @endforeach
</div> --}}
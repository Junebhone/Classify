<ul
    class="ul-list flex gap-4 md:gap-6 scrollbar-hide mr-4 overflow-x-auto w-full  text-TextSecondary h-20 items-center transition-all duration-150 ease-linear">
    @foreach ($subcategories as $subcategory )
    <li
        class="{{ request()->url() == route('listingbysubcategory',$subcategory->id) ? 'nav-list relative h-14 gap-2 flex flex-row justify-center items-center border-b-2 border-black transition-all duration-300 ease-linear' : '' }}">
        <a class="text-sm w-full flex  md:text-base text-md"
            href="{{ route('listingbysubcategory',$subcategory->id) }}">
            {{ $subcategory->name }}
        </a>
    </li>
    @endforeach
</ul>
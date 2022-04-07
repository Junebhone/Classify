<ul class="ul-list flex gap-3 md:gap-6  text-TextSecondary h-20 items-center transition-all duration-150 ease-linear">
    @foreach ($subcategories as $subcategory )
    <li
        class="{{ request()->url() == route('listingbysubcategory',$subcategory->id) ? 'nav-list relative h-14 gap-2 flex flex-row justify-center items-center border-b-2 border-black transition-all duration-300 ease-linear' : '' }}">
        <a class="text-sm md:text-base text-md" href="{{ route('listingbysubcategory',$subcategory->id) }}">
            {{ $subcategory->name }}
        </a>
    </li>
    @endforeach

</ul>
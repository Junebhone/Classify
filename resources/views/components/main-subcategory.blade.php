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
<div class="grid grid-cols-6 gap-6 mt-2">
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="category_id" class=" block text-sm font-medium text-gray-700">
            Category
        </label>
        <select wire:model="selectedCategory" name="category_id" class="mt-2 border-gray-300 focus:border-[#FF385C]
            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @if (!is_null($selectedCategory))
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="sub_category_id" class="block text-sm font-medium text-gray-700">
            Sub Category
        </label>
        <select wire:model="selectedSubCategory" name="sub_category_id" class="mt-2 border-gray-300 focus:border-[#FF385C]
            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($subCategories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}</option>
            @endforeach
        </select>
        @error('sub_category_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @endif
    @if (!is_null($selectedSubCategory))
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="chid_category_id" class="block text-sm font-medium text-gray-700">
            Child Category
        </label>
        <select name="child_category_id" class="mt-2 border-gray-300 focus:border-[#FF385C]
            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($childCategories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}</option>
            @endforeach
        </select>
        @error('child_category_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @endif

</div>
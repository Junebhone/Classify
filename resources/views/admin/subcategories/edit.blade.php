<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-xl text-gray-800 leading-tight">
            Edit For {{ $sub_category->name }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-between">
                        <div class=" items-center py-4 overflow-y-auto flex sm:flex whitespace-nowrap">
                            <a href="{{ route('admin.index') }}" class="text-gray-600 dark:text-gray-200">
                                <lottie-player src="{{ asset('img/Home.json') }}" background="transparent" speed="1"
                                    class="w-6 h-6" hover>
                                </lottie-player>
                            </a>
                            <span class="mx-1 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="{{ route('admin.subcategories.index') }}" class="text-black hover:underline">
                                SubCategories
                            </a>
                            <span class="mx-1 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="{{ route('admin.subcategories.edit',$sub_category->id) }}"
                                class="text-black hover:underline">
                                Edit-SubCategory
                            </a>
                            <span class="mx-1 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <a href="{{ route('admin.subcategories.index') }}"
                            class="text-black flex py-4 justify-center items-center">
                            <span class="text-black hover:underline">Back</span>
                            <lottie-player src="{{ asset('img/Back.json') }}" background="transparent" speed="1"
                                class="w-16 h-16" hover>
                            </lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto rounded-md sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden p-2">
                        <div>
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                {{-- <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Create Category</h3>
                                    </div>
                                </div> --}}
                                <div class="mt-5 md:mt-0 md:col-span-3">
                                    <form action={{ route('admin.subcategories.update', $sub_category->id) }}"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div
                                            class="shadow rounded-md sm:rounded-md ring ring-rose-500 ring-opacity-60 sm:overflow-hidden">
                                            <div class="rounded-md px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="name"
                                                            class="py-2 block text-sm font-medium text-black">
                                                            Name
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" name="name" id="name"
                                                                class="border-black focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm "
                                                                placeholder="Name" value="{{ $sub_category->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="name"
                                                            class="block text-sm font-medium text-gray-700"> Category
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="category_id"
                                                                class=" border-black focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm form-select text-black"
                                                                aria-label="Default select example">
                                                                @foreach (App\Models\Category::all() as $category)
                                                                <option value="{{ $category->id }}" {{ $category->id ==
                                                                    $sub_category->category_id ? 'selected' : '' }}>{{
                                                                    $category->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            @error('category_id')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="name"
                                                            class="block text-sm font-medium text-gray-700">Image</label>
                                                        <div class="w-full py-5 h-96 overflow-hidden">

                                                            <img class="rounded-md object-cover w-full h-full object-center"
                                                                src="{{ asset('storage/subcategories/' . $sub_category->image)}}">
                                                        </div>

                                                        <input type="file" name="image" id="user_avater">
                                                        @error('image')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                {{-- <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="image"
                                                            class="py-2 block text-sm font-medium text-black">Image</label>

                                                        <input type="file" class="z-10" name="image" id="user_avater">

                                                    </div>
                                                </div> --}}
                                            </div>

                                            <div class="px-4 py-3 text-left sm:px-6 flex justify-end">
                                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-[#FF385C] border
                                                    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-rose-600
                                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25
                                                    transition">Save</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</x-admin-layout>
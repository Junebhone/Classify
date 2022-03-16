<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New Sub Category For {{ $category->name }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            {{-- <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-start">
                        <a href="{{ route('admin.categories.index') }}"
                            class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50 rounded-md">Back</a>
                    </div>
                </div>
            </div> --}}
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-between">
                        <div class=" items-center py-4 overflow-y-auto flex sm:flex whitespace-nowrap">
                            <a href="{{ route('admin.index') }}" class="text-gray-600 dark:text-gray-200">
                                <lottie-player src="{{ asset('img/Home.json') }}" background="transparent" speed="1"
                                    class="w-6 h-6" hover>
                                </lottie-player>
                            </a>
                            <span class="mx-2 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="{{ route('admin.categories.index') }}" class="text-black hover:underline">
                                Categories
                            </a>
                            <span class="mx-2 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="{{ route('admin.categories.create') }}" class="text-black hover:underline">
                                Add-SubCategory
                            </a>
                            <span class="mx-2 text-gray-500 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <a href="{{ route('admin.categories.index') }}"
                            class="text-black flex py-4 justify-center items-center">
                            <span class="text-black hover:underline">Back</span>
                            <lottie-player src="{{ asset('img/Back.json') }}" background="transparent" speed="1"
                                class="w-16 h-16" hover>
                            </lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b-2  p-7">
                        <div>
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                {{-- <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Create Sub Category</h3>
                                    </div>
                                </div> --}}
                                <div class="mt-5 md:mt-0 md:col-span-3">
                                    <form action="{{ route('admin.add_sub.store', $category->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div
                                            class="shadow rounded-md sm:rounded-md ring ring-rose-500 ring-opacity-60 sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="name"
                                                            class="block text-sm font-medium text-gray-700"> Name
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" name="name" id="name"
                                                                class="border-black focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm "
                                                                placeholder="Name">
                                                            @error('name')
                                                            <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-3">
                                                        <label for="image"
                                                            class="block text-sm font-medium text-gray-700">Image</label>

                                                        <input type="file" name="image" id="user_avater">
                                                        @error('image')
                                                        <span class="error">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 text-left sm:px-6">
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
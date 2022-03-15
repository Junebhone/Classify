<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-between">
                        <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">
                            <a href="{{ route('admin.index') }}" class="text-gray-600 dark:text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="black">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
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
                        </div>
                        <a href="{{ route('admin.categories.create') }}"
                            class="text-black flex py-4 justify-center items-center">
                            New Category
                            <lottie-player src="{{ asset('img/addButton.json') }}" background="transparent" speed="1"
                                class="w-14 h-14" hover>
                            </lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto mr-4  sm:mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div
                        class="shadow overflow-y-hidden overflow-x-auto border-b border-gray-200 rounded-lg sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-Rose">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Slug</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Image</th>
                                    <th scope="col" class="text-xs font-medium text-white uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($categories as $category)
                                <tr class="w-full">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $category->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center ">
                                            {{ $category->slug }}
                                        </div>
                                    </td>
                                    <td class="p-6 whitespace-nowrap">
                                        <div class="flex items-center w-24">

                                            <img class="rounded-lg"
                                                src="{{ asset('storage/categories/' . $category->image)}}">


                                        </div>
                                    </td>
                                    <td class=" px-6 py-4 whitespace-nowrap  text-sm font-medium ">

                                        <div class="flex gap-10 justify-center items-center">
                                            <a class="flex  items-center text-black"
                                                href="{{ route('admin.add_sub',$category->id) }}">
                                                <lottie-player src="{{ asset('img/Sub.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1.5" hover>
                                                </lottie-player>
                                                Add SubCategory
                                            </a>
                                            <a class="flex  items-center text-black"
                                                href="{{ route('admin.categories.edit',$category->id) }}">
                                                <lottie-player src="{{ asset('img/EditButton.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1" hover>
                                                </lottie-player>
                                                Edit
                                            </a>

                                            <form method="POST"
                                                action="{{ route('admin.categories.destroy',$category->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a class="flex  items-center text-black" aria-details="JOJO"
                                                    href="{{ route('admin.categories.destroy',$category->id) }}"
                                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">

                                                    <lottie-player
                                                        src="https://assets1.lottiefiles.com/packages/lf20_1zsthhl8.json"
                                                        background="transparent" class="w-10 h-10" speed="1" hover>
                                                    </lottie-player>
                                                    Delete


                                                </a>
                                            </form>
                                        </div>



                                    </td>
                                </tr>
                                @endforeach


                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>
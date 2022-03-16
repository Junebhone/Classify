<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SubCategories') }}
        </h2>
    </x-slot>

    <div class="container mx-auto ">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-end">
                        <a href="{{ route('admin.subcategories.create') }}"
                            class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50 rounded-md">New Sub
                            Category</a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:mx-8 mt-2">
                <div class=" align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-y-hidden overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Slug</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Image</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($sub_categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $category->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $category->slug }}
                                        </div>
                                    </td>
                                    <td class="p-6 whitespace-nowrap">
                                        <div class="flex items-center w-20 h-20">
                                            <img class="w-full h-full object-cover object-center rounded-lg"
                                                src="{{ asset('storage/subcategories/' . $category->image)}}">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('admin.subcategories.edit',$category->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form method="POST"
                                            action="{{ route('admin.subcategories.destroy',$category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a class="text-red-600 hover:text-red-900"
                                                href="{{ route('admin.subcategories.destroy',$category->id) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                Delete
                                            </a>
                                        </form>
                                    </td>
                                    @empty
                                    <td>
                                        <div class="m-2 p-2">No Sub Categories</div>
                                    </td>
                                </tr>
                                @endforelse


                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>
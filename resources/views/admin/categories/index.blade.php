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
                <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-end">


                        <a href="{{ route('admin.categories.create') }}">
                            <lottie-player src="{{ asset('img/addButton.json') }}" background="transparent" speed="1"
                                class="w-14 h-14" hover>
                            </lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-y-hidden overflow-x-auto border-b border-gray-200 sm:rounded-lg">
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

                                        <div class="flex justify-center items-center">
                                            <a href="{{ route('admin.add_sub',$category->id) }}">
                                                <lottie-player src="{{ asset('img/AddSub.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1" hover>
                                                </lottie-player>

                                            </a>
                                            <a href="{{ route('admin.categories.edit',$category->id) }}">
                                                <lottie-player src="{{ asset('img/EditButton.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1" hover>
                                                </lottie-player>
                                            </a>

                                            <form method="POST"
                                                action="{{ route('admin.categories.destroy',$category->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a class="flex justify-center items-center text-red-600 hover:text-red-900"
                                                    aria-details="JOJO"
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
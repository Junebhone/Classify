<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('States') }}
        </h2>
    </x-slot>
    <div class="container mx-auto overflow-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 md:mx-4 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-between">
                        <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">
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
                            <a href="{{ route('admin.states.index') }}" class="text-black hover:underline">
                                States
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
                        <a href="{{ route('admin.states.create') }}"
                            class="text-black flex py-4 justify-center items-center">
                            <span class="text-black hover:underline">New State</span>
                            <lottie-player src="{{ asset('img/AddCate.json') }}" background="transparent" speed="1"
                                class="w-14 h-14" hover>
                            </lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto mr-4 sm:mx-2 lg:mx-8">
                <div class="align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div
                        class="shadow overflow-y-hidden overflow-x-auto border-b border-gray-200 rounded-lg sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200 ">
                            <thead class="bg-Rose">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Country Code</th>
                                    <th scope="col" class="text-xs font-medium text-white uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @forelse ($states as $state)
                                <tr class="w-full">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $state->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $state->country->name }}
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap text-sm font-medium ">
                                        <div class=" flex gap-5 justify-center items-center">
                                            {{-- <a class="flex  items-center text-black hover:underline "
                                                href="{{ route('admin.add_sub',$category->id) }}">
                                                <lottie-player src="{{ asset('img/Sub.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1.5" hover>
                                                </lottie-player>
                                                Add SubCategory
                                            </a> --}}
                                            <a class="flex  items-center text-black hover:underline "
                                                href="{{ route('admin.states.edit',$state->id) }}">
                                                <lottie-player src="{{ asset('img/EditButton.json') }}"
                                                    background="transparent" class="w-10 h-10" speed="1" hover>
                                                </lottie-player>
                                                Edit
                                            </a>
                                            <form method="POST" action="{{ route('admin.states.destroy',$state->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="flex  show_confirm items-center text-black hover:underline show_confirm">
                                                    <lottie-player
                                                        src="https://assets1.lottiefiles.com/packages/lf20_1zsthhl8.json"
                                                        background="transparent" class="w-10 h-10" speed="1" hover>
                                                    </lottie-player>
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    @empty
                                    <td>
                                        <div class="m-2 p-2">No States</div>
                                    </td>
                                </tr>
                                @endforelse

                                <!-- More people... -->
                            </tbody>
                        </table>
                        <div class="p-2 m-2">
                            {{ $states->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Listing') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="overflow-hidden sm:rounded-lg p-5">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('admin.listings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-2">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">About Property</h3>
                                        <p class="mt-1 text-sm text-gray-600">This information will be displayed
                                            publicly so be careful what you share.</p>
                                    </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-3 sm:col-span-3">
                                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                                        Title
                                                    </label>
                                                    @error('title')
                                                    <span
                                                        class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                        $message }}</span>
                                                    @enderror
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <input type="text" name="title" id="title"
                                                            class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                            placeholder="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-span-3">
                                                    <label for="description"
                                                        class="block text-sm font-medium text-gray-700">
                                                        Descripttion
                                                    </label>
                                                    @error('description')
                                                    <span
                                                        class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                        $message }}</span>
                                                    @enderror
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <textarea rows="5" type="text" name="description"
                                                            id="description"
                                                            class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                            placeholder="Brife Description about your property"></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Categories</h3>
                                            <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like
                                                to
                                                receive and how.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                @livewire('depended-category')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>
                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Regions & Locations
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can
                                                receive mail.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6">
                                                        <label for="location"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Location
                                                        </label>
                                                        @error('location')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" name="location" id="location"
                                                                class="border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter the location of the property">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @livewire('depended-country')
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>
                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Price & Condition
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-600">This information will be displayed
                                                publicly so be careful what you share.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="prices"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Price
                                                        </label>
                                                        @error('price')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" name="price" id="price"
                                                                class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter the Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="price_negotiable"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Price Negotiable
                                                        </label>
                                                        @error('price_negotiable')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="price_negotiable"
                                                                class="mt-1 border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">

                                                                <option value="fixed">Fixed </option>
                                                                <option value="negotiable">Negotiable </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 sm:col-span-1">
                                                        <label for="condition"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Condition
                                                        </label>
                                                        @error('condition')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="condition"
                                                                class="mt-1 border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
                                                                <option value="new">New </option>
                                                                <option value="used">Used </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>
                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Publish & Contact
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-600">This information will be displayed
                                                publicly so be careful what you share.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="is_published"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Published
                                                        </label>
                                                        @error('is_published')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="is_published"
                                                                class="mt-1 border-gray-300 focus:border-[#FF385C]
                                                            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">

                                                                <option value="0">Unpublished </option>
                                                                <option value="1">Published </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone_number"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Phone Number
                                                        </label>
                                                        @error('phone_number')
                                                        <span
                                                            class="flex items-center text-sm p-4 w-full bg-rose-50 text-Rose my-2 rounded-lg">{{
                                                            $message }}</span>
                                                        @enderror
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="number" name="phone_number" id="phone_number"
                                                                class="mt-1 border-gray-300 focus:border-[#FF385C]
                                                            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter Phone Number">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>
                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Featured Images &
                                                Details Images</h3>
                                            <p class="mt-1 text-sm text-gray-600">This information will be displayed
                                                publicly so be careful what you share.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                @livewire('image-preview')
                                            </div>
                                            <p class="text-sm flex m-4  p-1 justify-center sm:p-2  text-Rose">
                                                Note: The
                                                first
                                                one is for
                                                featured
                                                image
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="p-4 bg-white sm:px-6 rounded-lg flex justify-end">
                                <button type="submit" class="inline-flex items-center px-6 py-4 bg-[#FF385C] border
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-rose-600
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25
                                    transition">
                                    Save
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
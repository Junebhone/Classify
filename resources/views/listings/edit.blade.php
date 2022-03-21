{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Listing') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="overflow-hidden sm:rounded-lg bg-gray-200 m-2 p-2">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('listings.update', $listing->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                @livewire('depended-edit-category', ['category' => $listing->category_id, 'subCategory'
                                => $listing->sub_category_id, 'childCategory' => $listing->child_category_id])
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6">
                                        <label for="title" class="block text-sm font-medium text-gray-700">
                                            Title
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="title" id="title"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                value="{{ $listing->title }}">
                                            @error('title') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                            Descripttion
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <textarea type="text" name="description" id="description"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                              {{ $listing->description }}
                                            </textarea>
                                            @error('description') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-4">
                                        <label for="price" class="block text-sm font-medium text-gray-700">
                                            Price
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="price" id="price"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                value=" {{ $listing->price }}">
                                            @error('price') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <label for="price_negotiable" class="block text-sm font-medium text-gray-700">
                                            Price Negotiable
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="price_negotiable"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="fixed" {{ $listing->price_negotiable == 'fixed' ?
                                                    'selected' : '' }}>
                                                    Fixed
                                                </option>
                                                <option value="negotiable" {{ $listing->price_negotiable == 'negotiable'
                                                    ? 'selected' : '' }}>
                                                    Negotiable </option>
                                            </select>
                                            @error('price_negotiable') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-4">
                                        <label for="condition" class="block text-sm font-medium text-gray-700">
                                            Condition
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="condition"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                <option value="new" {{ $listing->condition == 'new' ? 'selected' : ''
                                                    }}>New
                                                </option>
                                                <option value="used" {{ $listing->condition == 'used' ? 'selected' : ''
                                                    }}>Used
                                                </option>
                                            </select>
                                            @error('condition') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="location" class="block text-sm font-medium text-gray-700">
                                            Location
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="location" id="location"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                value="{{ $listing->location }}">
                                            @error('location') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-3">
                                        <label for="phone_number" class="block text-sm font-medium text-gray-700">
                                            Phone Number
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="number" name="phone_number" id="phone_number"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                value="{{ $listing->phone_number }}">
                                            @error('phone_number') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-3">
                                        <label for="is_published" class="block text-sm font-medium text-gray-700">
                                            Published
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="is_published"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="0" {{ $listing->is_published == '0' ? 'selected' : ''
                                                    }}>Unpublished
                                                </option>
                                                <option value="1" {{ $listing->is_published == '1' ? 'selected' : ''
                                                    }}>Published
                                                </option>
                                            </select>
                                            @error('is_published') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @livewire('depended-edit-country', ['country' => $listing->country_id, 'state' =>
                                $listing->state_id, 'city' => $listing->city_id])
                                @livewire('edit-image-preview', ['oldFeaturedImage' => $listing->featured_image,
                                'oldImageOne' => $listing->image_one, 'oldImageTwo' => $listing->image_two,
                                'oldImageThree' => $listing->image_three])
                                <div class="px-4 py-3 bg-gray-50 sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Update
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit for {{ $listing->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="overflow-hidden sm:rounded-lg p-5">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('listings.update', $listing->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <input type="text" name="title" id="title"
                                                            class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                            placeholder="title" value="{{ $listing->title }}">
                                                        @error('title') <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-span-3">
                                                    <label for="description"
                                                        class="block text-sm font-medium text-gray-700">
                                                        Description
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <textarea rows="5" type="text" name="description"
                                                            id="description"
                                                            class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                            placeholder="Brife Description about your property">{{ $listing->description }}</textarea>
                                                        @error('description') <span class="error">{{ $message }}</span>
                                                        @enderror
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
                                                @livewire('depended-edit-category', ['category' =>
                                                $listing->category_id, 'subCategory'
                                                => $listing->sub_category_id, 'childCategory' =>
                                                $listing->child_category_id])
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
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input value="{{ $listing->location }}" type="text"
                                                                name="location" id="location"
                                                                class="border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter the location of the property">
                                                            @error('location') <span class="error">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @livewire('depended-edit-country', ['country' =>
                                                    $listing->country_id, 'state' =>
                                                    $listing->state_id, 'city' => $listing->city_id])
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
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input value="{{ $listing->price }}" type="text"
                                                                name="price" id="price"
                                                                class="border-gray-300 focus:border-[#FF385C]
                                                        focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter the Price">
                                                            @error('price') <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="price_negotiable"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Price Negotiable
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="price_negotiable"
                                                                class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
                                                                <option value="fixed" {{ $listing->price_negotiable ==
                                                                    'fixed' ?
                                                                    'selected' : '' }}>
                                                                    Fixed
                                                                </option>
                                                                <option value="negotiable" {{ $listing->price_negotiable
                                                                    == 'negotiable'
                                                                    ? 'selected' : '' }}>
                                                                    Negotiable </option>
                                                            </select>
                                                            @error('price_negotiable') <span class="error">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 sm:col-span-1">
                                                        <label for="condition"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Condition
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="condition"
                                                                class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">

                                                                <option value="new" {{ $listing->condition == 'new' ?
                                                                    'selected' : ''
                                                                    }}>New
                                                                </option>
                                                                <option value="used" {{ $listing->condition == 'used' ?
                                                                    'selected' : ''
                                                                    }}>Used
                                                                </option>
                                                            </select>
                                                            @error('condition') <span class="error">{{ $message
                                                                }}</span>
                                                            @enderror
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
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <select name="is_published"
                                                                class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
                                                                <option value="0" {{ $listing->is_published == '0' ?
                                                                    'selected' : ''
                                                                    }}>Unpublished
                                                                </option>
                                                                <option value="1" {{ $listing->is_published == '1' ?
                                                                    'selected' : ''
                                                                    }}>Published
                                                                </option>
                                                            </select>
                                                            @error('is_published') <span class="error">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone_number"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Phone Number
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="number" value="{{ $listing->phone_number }}"
                                                                name="phone_number" id="phone_number"
                                                                class="mt-1 border-gray-300 focus:border-[#FF385C]
                                                            focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm"
                                                                placeholder="Enter Phone Number">
                                                            @error('phone_number') <span class="error">{{ $message
                                                                }}</span>
                                                            @enderror
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
                                                @livewire('edit-image-preview', ['oldFeaturedImage' =>
                                                $listing->featured_image,
                                                'oldImageOne' => $listing->image_one, 'oldImageTwo' =>
                                                $listing->image_two,
                                                'oldImageThree' => $listing->image_three])
                                            </div>
                                            <p class="text-sm flex m-4  p-1 justify-center sm:p-2  text-Rose">Note: The
                                                first one is for featured
                                                image and
                                                you can edit in order as in old images!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="px-4 py-3 bg-gray-50 sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
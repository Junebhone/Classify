<div class="grid grid-cols-6 gap-6 mt-5">
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="category_id" class="block text-sm font-medium text-gray-700">
            Country
        </label>
        <select wire:model="selectedCountry" name="country_id"
            class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($countries as $country)
            <option value="{{ $country->id }}">
                {{ $country->name }}</option>
            @endforeach
        </select>
        @error('country_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @if (!is_null($selectedCountry))
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="state_id" class="block text-sm font-medium text-gray-700">
            State
        </label>
        <select wire:model="selectedState" name="state_id"
            class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($states as $state)
            <option value="{{ $state->id }}">
                {{ $state->name }}</option>
            @endforeach
        </select>
        @error('state_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @endif
    @if (!is_null($selectedState))
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="city_id" class="block text-sm font-medium text-gray-700">
            City
        </label>
        <select name="city_id"
            class="mt-2 border-gray-300 focus:border-[#FF385C]
                                                                focus:ring focus:ring-red-300 focus:ring-opacity-50 rounded-md shadow-sm flex-1 block w-full sm:text-sm">
            @foreach ($cities as $city)
            <option value="{{ $city->id }}">
                {{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @endif

</div>
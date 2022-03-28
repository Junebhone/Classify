<div>
    <div class="flex flex-wrap gap-5 justify-center">
        <div class="file-upload">
            <div class="file-select file-select-box">

                @if ($featuredImage)
                <div class="imagePreview">
                    <img class="w-[150px] h-[150px] rounded object-cover object-center relative z-50"
                        src="{{ $featuredImage->temporaryUrl() }}">
                </div>
                @endif
                @error('featured_image')
                <span
                    class="flex text-center items-center  text-sm p-2 w-[150px] h-[150px] bg-rose-50 text-Rose rounded-lg">{{
                    $message }}</span>
                @enderror
                <button class="file-upload-custom-btn flex items-center justify-center" id="imagebtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </button>

                <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image"
                    class="relative z-10" />

            </div>
        </div>
        <div class="file-upload">
            <div class="file-select file-select-box">
                @if ($imageOne)
                <div class="imagePreview">
                    <img class="w-[150px] h-[150px] rounded object-cover object-center relative z-50"
                        src="{{ $imageOne->temporaryUrl() }}">
                </div>
                @endif
                @error('image_one')
                <span
                    class="flex text-center items-center  text-sm p-2 w-[150px] h-[150px] bg-rose-50 text-Rose rounded-lg">{{
                    $message }}</span>
                @enderror
                <button class="file-upload-custom-btn flex justify-center items-center" id="imagebtn"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg></button>

                <input wire:model="imageOne" type="file" id="image_one" name="image_one" class="relative z-10" />
            </div>
        </div>
        <div class="file-upload">
            <div class="file-select file-select-box">
                @if ($imageTwo)
                <div class="imagePreview">
                    <img class="w-[150px] h-[150px] rounded object-cover object-center relative z-50"
                        src="{{ $imageTwo->temporaryUrl() }}">
                </div>
                @endif
                @error('image_two')
                <span
                    class="flex text-center items-center  text-sm p-2 w-[150px] h-[150px] bg-rose-50 text-Rose rounded-lg">{{
                    $message }}</span>
                @enderror
                <button class="file-upload-custom-btn flex justify-center items-center" id="imagebtn"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg></button>

                <input wire:model="imageTwo" type="file" id="image_two" name="image_two" class="relative z-10" />
            </div>
        </div>
        <div class="file-upload">
            <div class="file-select file-select-box">
                @if ($imageThree)
                <div class="imagePreview z-10">
                    <img class="w-[150px] h-[150px] rounded object-cover object-center relative z-50"
                        src="{{ $imageThree->temporaryUrl() }}">
                </div>
                @endif
                @error('image_three')
                <span
                    class="flex text-center items-center  text-sm p-2 w-[150px] h-[150px] bg-rose-50 text-Rose rounded-lg">{{
                    $message }}</span>
                @enderror
                <button class="file-upload-custom-btn flex justify-center items-center" id="imagebtn"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 z-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg></button>
                @if ($imageThree)
                <div class="m-2 p-2">
                    <img class="w-[150px] h-[150px] rounded object-cover object-center relative z-50"
                        src="{{ $imageThree->temporaryUrl() }}">
                </div>
                @endif
                <input wire:model="imageThree" type="file" id="image_three" name="image_three" class="relative z-10" />
            </div>
        </div>
    </div>
</div>
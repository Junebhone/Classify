<x-main-layout>
    <x-main-heading></x-main-heading>
    <style>
        /*each image is referenced twice in the HTML, but each image only needs to be updated in the CSS*/
        .image1 {
            content: url("{{ Storage::url($listing->featured_image) }}")
        }

        .image2 {
            content: url("{{ Storage::url($listing->image_one) }}")
        }

        .image3 {
            content: url("{{ Storage::url($listing->image_two) }}")
        }

        .image4 {
            content: url("{{ Storage::url($listing->image_three) }}")
        }
    </style>
    <div
        class="product-listing mt-4 container pb-20 relative mx-auto overflow-x-hidden grid justify-center items-center
                       xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 gap-y-14 sm:px-0 px-6">
        <span class="text-xl font-extrabold">{{ $listing->title }}</span>
    </div>
    <div class="flex w-full  mx-auto px-10 mt-10">
        <div class="">
            <span class="text-sm text-gray-400">By {{ $listing->user->name }}</span>
            <span class="text-sm text-gray-400">{{ $listing->country->name }} {{ $listing->state->name }} {{
                $listing->city->name }}</span>
            <span class="text-sm text-gray-400">By {{ $listing->user->name }}</span>
        </div>
        <div class="">
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                </svg>
                Share
            </div>
        </div>
    </div>

    <section class="mx-auto my-10 max-w-6xl px-10">
        <div class="mx-auto relative overflow-hidden">
            <!-- large image on slides -->
            <div class="mySlides hidden">
                <div class="image1 w-full h-[30rem] rounded-lg object-center object-cover "></div>
            </div>
            <div class="mySlides hidden">
                <div class="image2 w-full h-[30rem] rounded-lg object-center object-cover "></div>
            </div>
            <div class="mySlides hidden">
                <div class="image3 w-full h-[30rem] rounded-lg object-center object-cover "></div>
            </div>
            <div class="mySlides hidden">
                <div class="image4 w-full h-[30rem] rounded-lg object-center object-cover "></div>
            </div>

            <!-- butttons -->
            <a class="absolute left-0 inset-y-0 flex items-center -mt-32 px-4 text-black hover:text-gray-800 cursor-pointer text-xl font-extrabold"
                onclick="plusSlides(-1)">
                <span
                    class="bg-white w-10 h-10 flex justify-center items-center rounded-full opacity-80 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-left"></i>
                </span>


            </a>
            <a class="absolute right-0 inset-y-0 flex items-center -mt-32 px-4 text-black hover:text-gray-800 cursor-pointer text-xl font-extrabold"
                onclick="plusSlides(1)">
                <span
                    class="bg-white w-10 h-10 flex justify-center items-center rounded-full opacity-80 group-hover:scale-100 hover:opacity-100 transition-all 2s ease-linear">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
            <!-- image description -->
            <!-- smaller images under description -->
            <div class="flex justify-center gap-5 my-4">
                <div>
                    <img class="image1 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                        src="#" onclick="currentSlide(1)" alt="Dog's Nose">
                </div>
                <div>
                    <img class="image2 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                        src="#" onclick="currentSlide(2)" alt="Lawnmower">
                </div>
                <div>
                    <img class="image3 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                        src="#" onclick="currentSlide(3)" alt="Globe">
                </div>
                <div>
                    <img class="image4 rounded-lg object-cover object-center w-[20rem] description h-24 opacity-50 hover:opacity-100 cursor-pointer"
                        src="#" onclick="currentSlide(4)" alt="Optical Illusion">
                </div>
            </div>
        </div>
    </section>


    <script>
        //JS to switch slides and replace text in bar//
      var slideIndex = 1;
      showSlides(slideIndex);
  
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
  
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
  
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("description");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" opacity-100", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " opacity-100";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>


    <x-main-footer></x-main-footer>
</x-main-layout>
<x-main-layout>
    <x-main-heading></x-main-heading>
    <style>
        /*each image is referenced twice in the HTML, but each image only needs to be updated in the CSS*/
        .image1 {
            content: url("{{ Storage::url($listings->featured_image) }}")
        }

        .image2 {
            content: url("{{ Storage::url($listings->image_one) }}")
        }

        .image3 {
            content: url("{{ Storage::url($listings->image_two) }}")
        }

        .image4 {
            content: url("{{ Storage::url($listings->image_three) }}")
        }
    </style>
    </head>

    <body>

        <section class="mx-auto my-10 max-w-6xl">

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
    </body>


    <x-main-footer></x-main-footer>
</x-main-layout>
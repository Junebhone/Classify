<script>
  const navigation = document.querySelector(".navgation");
const menuToggle = document.getElementById("menu-toggle");
const menuItems = document.getElementById("menu-items");
const menuLinks = document.querySelectorAll(".menu-link");


$(document).ready(function () {


  $('.products .heart').click(function(){
    if($(this).hasClass('like')){
      $(this).removeClass('like');
      $(this).addClass('unlike');
    }else{
      $(this).removeClass('unlike');
      $(this).addClass('like');
    }
    
    
  })
  $(window).click(function (e) {
    if (menuToggle.contains(e.target)) {
      menuItems.classList.toggle("scale-0");
      e.preventDefault();
    } else {
      menuItems.classList.add("scale-0");
    }
    menuLinks.forEach((n) =>
      n.addEventListener("click", () => {
        menuItems.classList.add("scale-0");
        e.preventDefault();
      })
    );
  });
  const navigationHeader = $('.navigation').height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > navigationHeader) {
      $(".navigation").addClass("bg-white");
      $(".navigation").removeClass("bg-black");
      $(".Logo").removeClass("text-white");
      $(".Logo").addClass("text-black");
      $(".logo").removeClass("hover:bg-[#484848]");
      $(".logo").addClass("hover:bg-gray-100");
    } else {
      $(".navigation").addClass("bg-black");
      $(".navigation").removeClass("bg-white");
      $(".Logo").removeClass("text-black");
      $(".Logo").addClass("text-white");
      $(".logo").addClass("hover:bg-[#484848]");
      $(".logo").removeClass("hover:bg-gray-100");
      
    }
  });

  const yourHeader = $(".listing-navigation").height();

  $(window).scroll(function () {
    if ($(this).scrollTop() > yourHeader) {
      $(".listing-nav-bar").addClass("fixed");
      $(".listing-nav-bar").addClass("shadow-xl");
      $(".nav-list").css("height", "5rem");
      $(".product-listing").addClass("top-20");
    } else {
      $(".listing-nav-bar").removeClass("fixed");
      $(".listing-nav-bar").removeClass("shadow-xl");
      $(".nav-list").css("height", "3rem");
      $(".product-listing").removeClass("top-20");
    }
  });
 
});

const buttons = document.querySelectorAll("[data-carousel-button]");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]");
    const activeSlide = slides.querySelector("[data-active]");
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;

    slides.children[newIndex].dataset.active = true;
    delete activeSlide.dataset.active;
  });
});

const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

</script>
<script>
    const menuToggle = document.querySelector(".menu-toggle");
const menuItems = document.querySelector(".menu-items");
const menuLinks = document.querySelectorAll(".menu-link");
const search = document.querySelector(".search");
const searchText = document.querySelector(".search-text");
const yourLocation = document.querySelector(".location");
const inputLocation = document.getElementById("input-location");
const guest = document.querySelector(".guest");
const listing = document.getElementById("listing");

$(document).ready(function () {
  function jj() {
    $(window).click(function (e) {
      if (
        search.contains(e.target) ||
        yourLocation.contains(e.target) ||
        guest.contains(e.target)
      ) {
        // Clicked in box
        $("#text-search").show("fast");
        e.preventDefault();

        $(window).resize(function () {
          if ($(window).width() < 1024) {
            $("search#text-search").removeAttr("id");
            $("search").hide("fast", "linear");
          } else {
            $(".search-text").attr("id", "text-search");
            $("search").show("fast", "linear");
          }
        });
      } else {
        // Clicked outside the box
        $("#text-search").hide("fast");
      }
      if (menuToggle.contains(e.target)) {
        menuItems.classList.toggle("scale-0");
      } else {
        menuItems.classList.add("scale-0");
      }
      if (search.contains(e.target) || yourLocation.contains(e.target)) {
        listing.classList.remove("scale-0");
      } else {
        listing.classList.add("scale-0");
      }
      // e.preventDefault();
    });
  }

  if ($(window).width() < 1024) {
    $("Search#text-search").removeAttr("id");
    jj();
  } else {
    jj();
  }

  menuLinks.forEach((n) =>
    n.addEventListener("click", () => {
      menuItems.classList.add("scale-0");
    })
  );

  $(".search").click(function () {
    inputLocation.focus();
  });

  $(".search").blur(function () {
    inputLocation.blur();
  });

  $(".location").click(function () {
    inputLocation.focus();
  });

  $(".search").blur(function () {
    inputLocation.blur();
  });

  
});

</script>
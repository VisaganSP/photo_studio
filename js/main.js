/*  ---------------------------------------------------
    Template Name: Photo Studio
    Description:  Photo Studio photography HTML Template
    Author: Colorlib
    Author URI: https://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

"use strict";

(function ($) {
  /*------------------
        Preloader
    --------------------*/
  $(window).on("load", function () {
    $(".loader").fadeOut();
    $("#preloder").delay(200).fadeOut("slow");
  });

  /*------------------
        Background Set
    --------------------*/
  $(".set-bg").each(function () {
    var bg = $(this).data("setbg");
    $(this).css("background-image", "url(" + bg + ")");
  });

  // Search model
  $(".search-switch").on("click", function () {
    $(".search-model").fadeIn(400);
  });

  $(".search-close-switch").on("click", function () {
    $(".search-model").fadeOut(400, function () {
      $("#search-input").val("");
    });
  });

  // Isotppe Filter
  $(".filter-controls li").on("click", function () {
    var filterData = $(this).attr("data-filter");

    $(".portfolio-filter, .gallery-filter").isotope({
      filter: filterData,
    });

    $(".filter-controls li").removeClass("active");
    $(this).addClass("active");
  });

  $(".port-filter, .gallery-filter").isotope({
    itemSelector: ".pf-item, .gf-item",
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: ".pf-item, .gf-item",
      horizontalOrder: true,
    },
  });

  //Masonary
  $(".portfolio-details-pic").masonry({
    itemSelector: ".pdp-item",
    columnWidth: ".pdp-item",
  });

  /*------------------
		Navigation
	--------------------*/
  $(".mobile-menu").slicknav({
    prependTo: "#mobile-menu-wrap",
    allowParentLinks: true,
  });

  /*------------------
        Carousel Slider
    --------------------*/
  var hero_s = $(".hs-slider");
  hero_s.owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    navText: [
      '<span class="arrow_carrot-left"></span>',
      '<span class="arrow_carrot-right"></span>',
    ],
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
  });

  /*------------------
        Team Slider
    --------------------*/
  $(".categories-slider").owlCarousel({
    loop: true,
    margin: 20,
    items: 3,
    dots: false,
    nav: true,
    navText: [
      '<span class="arrow_carrot-left"></span>',
      '<span class="arrow_carrot-right"></span>',
    ],
    stagePadding: 120,
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
        stagePadding: 0,
      },
      768: {
        items: 2,
        stagePadding: 0,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  /*------------------
        Image Popup
    --------------------*/
  $(".image-popup").magnificPopup({
    type: "image",
  });

  /*------------------
        Video Popup
    --------------------*/
  $(".video-popup").magnificPopup({
    type: "iframe",
  });
})(jQuery);

// Function to load images from JSON file and filter them
function loadImages(filter) {
  const imageContainer = document.getElementById("image-container");
  imageContainer.innerHTML = ""; // Clear existing images

  // Load JSON data
  fetch("images.json")
    .then((response) => response.json())
    .then((data) => {
      data.forEach((image) => {
        // Check if the image matches the filter or if the filter is "all"
        if (filter === "all" || image.category === filter) {
          // Create an image element
          const img = document.createElement("img");
          img.className = "mm-columns__img";
          img.src = image.src;
          img.loading = "lazy";

          // Create a div element for the image container
          const div = document.createElement("div");
          div.className = "mm-columns__item";
          div.appendChild(img);

          // Append the image container to the image container
          imageContainer.appendChild(div);

          img.addEventListener("click", () => {
            const modal = document.getElementById("image-modal");
            const modalImage = document.getElementById("full-size-image");
            modalImage.src = img.src;
            modal.style.display = "block";
          });
        }
      });
    });
}

// Initial load of all images
// loadImages("all");

// Filter images when a filter button is clicked
const filterButtons = document.querySelectorAll(".filter-button");
filterButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const filter = this.getAttribute("data-filter");
    loadImages(filter);
  });
});
const modal = document.getElementById("image-modal");
modal.addEventListener("click", (event) => {
  if (event.target === modal || event.target.className === "close") {
    modal.style.display = "none";
  }
});

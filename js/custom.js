$('.popularProductsSlider').slick({
  dots: false,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
         arrows: false,
      }
    },
    {
      breakpoint: 567,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         arrows: false,
      }
    }
  ]
});
$('.take_Word_Slider').slick({
  dots: true,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        centerMode: true,
        arrows: false,
        infinite: true
      }
    },
    {
      breakpoint: 567,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
         centerMode: true,
         infinite: true
      }
    }
  ]
});
$('.mainSlider').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1
});

$('.productSlider').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    let i = (currentSlide ? currentSlide : 0) + 1; // current slide (start from 1)
    $('.slider-count').text(i + '/' + slick.slideCount);
});
$('.productSlider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1
});
$('input[name="banner"]').on('change', function () {
  let slideIndex = $(this).val(); // 0-based index
  $('.productSlider').slick('slickGoTo', slideIndex);
});

$(".mobileToggle").on("click", function() {
      $(".mobileNavigationMenu").toggleClass("show");
});

$(".canvas_back_btn").on("click", function() {
      $(".mobileNavigationMenu").removeClass("show");
});

$(".dropdown-toggle").on("click", function() {
  $(this).siblings(".dropdown-menu").toggle();
});

// When clicking an option
$(".dropdown-menu li").on("click", function() {
  let selected = $(this).text();
  $(".dropdown-toggle").html("🌐︎ " + selected );
  $(this).parent().hide();
});

// Close dropdown if clicked outside
$(document).on("click", function(e) {
  if (!$(e.target).closest(".custom-dropdown").length) {
    $(".dropdown-menu").hide();
  }
});

$(".productViewMore").on("click", function() {
      $(".productContentView").toggleClass("show");
});






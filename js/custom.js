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
$('.productSlider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1
});
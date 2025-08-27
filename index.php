<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $isRTL="ltr";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <?php if ($isRTL == "rtl"){ ?>
     <link rel="stylesheet" href="css/rtl.css">
    <?php } ?>
</head>
<body class="<?php echo $isRTL == "rtl" ? 'rtl' : 'ltr'; ?>">
    

    <div class="topAdvertise">
        <div class="container">
            <a href="#" class="topAdvertiseText">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-[20px] w-[20px] shrink-0 stroke-brand"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46"></path></svg>
                <p>soundcore x Żywiec Męskie Granie | Enjoy the ultimate music journey and Win Big!</p>
            </a>
        </div>
    </div>
    <nav class="navigation">
        <div class="container">
            <div class="navigationSection">
                <div class="mainLogo">
                    <a href="#"><img src="images/logo.webp" alt="logo"></a>
                </div>
                <div class="navigationMenu">
                    <div class="navigationLink">
                        <a href="#" class="nav_link"> New Releases </a>
                        <div class="subnavigation"> 
                            <div class="container">
                                <div class="subnavigationLinks">
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-1.webp" alt="newReleases"></a>
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-2.webp" alt="newReleases"></a>
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-3.webp" alt="newReleases"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigationLink">
                        <a href="#" class="nav_link"> Back to School </a>
                        <div class="subnavigation"> 
                            <div class="container">
                                <div class="subnavigationLinks">
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-1.webp" alt="newReleases"></a>
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-2.webp" alt="newReleases"></a>
                                    <a href="#" class="sub_nav_link"><img src="images/newReleases-3.webp" alt="newReleases"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="mobileNavigationSection">
        <div class="container">
            <div class="mobileNavigation">
                <div class="mainLogo">
                    <a href="#"><img src="images/logo.webp" alt="logo"></a>
                </div>
                <button class="mobileToggleMenu mobileToggle" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="block h-[30px] w-[30px] "><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
                </button>
                <div class="mobileNavigationMenu">
                    <div class="mobileNavigationMenuTop">
                        <div class="container">
                            <div class="mobileTop">
                                <div class="mainLogo">
                                    <a href="#"><img src="images/logo.webp" alt="logo"></a>
                                </div>
                                <button class="mobileToggleMenu mobileToggle" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="block h-[30px] w-[30px] "><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="mobileNavigationLink">
                            <button data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">New Releases <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-4 stroke-[3]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></button>
                            <button>Back to School <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-4 stroke-[3]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- newReleaseOffCanvase -->
     <div class="offcanvas offcanvas-start mobileSubMenu" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <button type="button" class="backBtn" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path></svg>
            </button>
            <h5 class="offcanvas-title" id="staticBackdropLabel">New Releases</h5>
            <button type="button" class="backBtn canvas_back_btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path></svg>            
            </button>
            
        </div>
        <div class="offcanvas-body">
                <div class="subnavigationLinks">
                        <a href="#" class="sub_nav_link"><img src="images/newReleases-1.webp" alt="newReleases"></a>
                        <a href="#" class="sub_nav_link"><img src="images/newReleases-2.webp" alt="newReleases"></a>
                        <a href="#" class="sub_nav_link"><img src="images/newReleases-3.webp" alt="newReleases"></a>
                </div>
        </div>
    </div>
    <!-- newReleaseOffCanvase -->
    <div class="mainBannerSection">
        <div class="container">
            <div class="mainSlider slider_arrow">
                <div>
                    <div class="perfectSoundProductBox bigbanner">
                        <div class="perfectSoundProductImg">
                            <img src="images/banner1.webp" alt="">
                            <img src="images/banner1-1.webp" alt="">
                        </div>
                        <div class="perfectSoundProductText">
                            <p><b>Liberty 5</b></p>
                            <h2>Quiet the Crowd, Enjoy the Journey</h2>
                            <p>Immersive Sound with Dolby Audio 2x Stronger Voice Reduction</p>
                            <a href="#" class="button"><span>Buy Now</span></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="perfectSoundProductBox bigbanner whiteColor">
                        <div class="perfectSoundProductImg">
                            <img src="images/banner2.webp" alt="">
                            <img src="images/banner2-2.jpg" alt="">
                        </div>
                        <div class="perfectSoundProductText">
                            <p><b>Liberty 5</b></p>
                            <h2>Quiet the Crowd, Enjoy the Journey</h2>
                            <p>Immersive Sound with Dolby Audio 2x Stronger Voice Reduction</p>
                            <a href="#" class="button"><span>Buy Now</span></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="perfectSoundProductBox bigbanner">
                        <div class="perfectSoundProductImg">
                            <img src="images/banner1.webp" alt="">
                            <img src="images/banner1-1.webp" alt="">
                        </div>
                        <div class="perfectSoundProductText">
                            <p><b>Liberty 5</b></p>
                            <h2>Quiet the Crowd, Enjoy the Journey</h2>
                            <p>Immersive Sound with Dolby Audio 2x Stronger Voice Reduction</p>
                            <a href="#" class="button"><span>Buy Now</span></a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="perfectSoundSection padT100">
        <div class="container">
            <div class="mainTitle">
                <h2>Discover the Perfect Sound</h2>
                <p>Find something that hits the right note</p>
            </div>
            <div class="perfectSoundProduct">
                <div class="perfectSoundProductBox bigbanner">
                    <div class="perfectSoundProductImg">
                        <img src="images/liberty.webp" alt="">
                        <img src="images/liberty-1.webp" alt="">
                    </div>
                    <div class="perfectSoundProductText">
                        <p><b>Liberty 5</b></p>
                        <h2>Quiet the Crowd, Enjoy the Journey</h2>
                        <p>Immersive Sound with Dolby Audio 2x Stronger Voice Reduction</p>
                        <a href="#" class="button"><span>Buy Now</span></a>
                    </div>
                </div>
                <div class="perfectSoundProductBox smallbox">
                    <div class="perfectSoundProductText">
                        <p><b>Space One Pro</b></p>
                        <h3>Super Foldable Headphones</h3>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                    <div class="perfectSoundProductImg">
                        <img src="images/spaceOnePro.webp" alt="">
                    </div>
                </div>
                <div class="perfectSoundProductBox">
                    <div class="perfectSoundProductText">
                        <p><b>Sport X20</b></p>
                        <h3>Elevate Your Fitness Journey</h3>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                    <div class="perfectSoundProductImg">
                        <img src="images/sportX20.webp" alt="">
                    </div>
                </div>
                <div class="perfectSoundProductBox">
                    <div class="perfectSoundProductText">
                        <p><b>Space Q45</b></p>
                        <h3>50 Hours of Personal Space</h3>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                    <div class="perfectSoundProductImg">
                        <img src="images/spaceQ45.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mainTitle">
                <h2>We Can't Pick a Favorite, But...</h2>
                <p>Here are some of our most popular products</p>
            </div>
            <div class="popularProductsSliderBox">
                <div class="popularProductsSlider slider_arrow">
                    <div>
                        <div class="popularProductsBox">
                            <img src="images/product1.webp" alt="product">
                            <div class="popularProductsText">
                                <p><b>Liberty 4 NC | True-Wireless</b></p>
                                <p>All-New True-Wireless Earbuds Reduce</p>
                                <div class="priceSection">
                                    <p>€79.99 <span>€169.99</span></p>
                                    <a href="#" class="button">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-[22px] w-[22px]"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path></svg> 
                                            €79.99
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="popularProductsBox">
                            <img src="images/product1.webp" alt="product">
                            <div class="popularProductsText">
                                <p><b>Liberty 4 NC | True-Wireless</b></p>
                                <p>All-New True-Wireless Earbuds Reduce</p>
                                <div class="priceSection">
                                    <p>€79.99 <span>€169.99</span></p>
                                    <a href="#" class="button">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-[22px] w-[22px]"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path></svg> 
                                            €79.99
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="popularProductsBox">
                            <img src="images/product1.webp" alt="product">
                            <div class="popularProductsText">
                                <p><b>Liberty 4 NC | True-Wireless</b></p>
                                <p>All-New True-Wireless Earbuds Reduce</p>
                                <div class="priceSection">
                                    <p>€79.99 <span>€169.99</span></p>
                                    <a href="#" class="button">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-[22px] w-[22px]"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path></svg> 
                                            €79.99
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="popularProductsBox">
                            <img src="images/product1.webp" alt="product">
                            <div class="popularProductsText">
                                <p><b>Liberty 4 NC | True-Wireless</b></p>
                                <p>All-New True-Wireless Earbuds Reduce</p>
                                <div class="priceSection">
                                    <p>€79.99 <span>€169.99</span></p>
                                    <a href="#" class="button">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-[22px] w-[22px]"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path></svg> 
                                            €79.99
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="headphoneBrand">
                <a href="#">
                    <img src="images/headphoneBrand.webp" alt="headphoneBrand">
                    <img src="images/headphoneBrand-1.webp" alt="headphoneBrand">
                </a>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mainTitle">
                <h2>Get to Know Us Better</h2>
                <p>Take a deep dive into what makes us soundcore</p>
            </div>
            <div class="knowUsBetter">
                <div class="knowUsBetterBox">
                    <div class="knowUsBetterImg">
                        <img src="images/soundcore-story.webp" alt="soundcore-story">
                        <a href="">
                            <div class="knowUsBetterText">
                                <h4>soundcore's Story</h4>
                                <p>Learn about who we are and what we stand for.</p>
                                <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="knowUsBetterBox">
                    <div class="knowUsBetterImg">
                        <img src="images/soundcore-tech.webp" alt="soundcore-tech">
                        <a href="">
                        <div class="knowUsBetterText">
                                <h4>soundcore's Tech</h4>
                                <p>Go behind the scenes and learn about our innovative technology.</p>
                                <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="World_leading_Section">
        <div class="container">
            <div class="World_leading_Container">
                <div class="World_leading_box">
                    <img src="images/data-icon-1.webp" alt="icon">
                    <p>Incredible sound loved by 30 million+ people.</p>
                </div>
                <div class="line"></div>
                <div class="World_leading_box">
                    <img src="images/data-icon-2.webp" alt="icon">
                    <p>World-leading audio technology, including SweatGuard, BassUp, ACAA, and HearID.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mainTitle">
                <h2>Don't Just Take Our Word For It</h2>
                <p>Hear what others are saying about soundcore.</p>
            </div>
            <div class="take_Word_Slider slider_dot slider_arrow">
                <div>
                    <div class="knowUsBetterBox">
                        <div class="knowUsBetterImg">
                            <img src="images/endorse-1-pc.webp" alt="endorse-1-pc">
                            <a href="">
                                <div class="knowUsBetterText">
                                    <h4>soundcore's Story</h4>
                                    <p>Learn about who we are and what we stand for.</p>
                                    <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="knowUsBetterBox">
                        <div class="knowUsBetterImg">
                            <img src="images/endorse-1-pc.webp" alt="endorse-1-pc">
                            <a href="">
                                <div class="knowUsBetterText">
                                    <h4>soundcore's Story</h4>
                                    <p>Learn about who we are and what we stand for.</p>
                                    <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="knowUsBetterBox">
                        <div class="knowUsBetterImg">
                            <img src="images/endorse-1-pc.webp" alt="endorse-1-pc">
                            <a href="">
                                <div class="knowUsBetterText">
                                    <h4>soundcore's Story</h4>
                                    <p>Learn about who we are and what we stand for.</p>
                                    <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="knowUsBetterBox">
                        <div class="knowUsBetterImg">
                            <img src="images/endorse-1-pc.webp" alt="endorse-1-pc">
                            <a href="">
                                <div class="knowUsBetterText">
                                    <h4>soundcore's Story</h4>
                                    <p>Learn about who we are and what we stand for.</p>
                                    <span class="textBtn">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="inline-block size-[16px] transition-all duration-500 group-hover/link:ml-[12px]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mediaLogoContainer">
                <div class="mediaLogo">
                    <img src="images/media-1.webp" alt="">
                </div>
                <div class="mediaLogo">
                    <img src="images/media-2.webp" alt="">
                </div>
                <div class="mediaLogo">
                    <img src="images/media-3.webp" alt="">
                </div>
                <div class="mediaLogo">
                    <img src="images/media-4.webp" alt="">
                </div>
                <div class="mediaLogo">
                    <img src="images/media-5.webp" alt="">
                </div>
                <div class="mediaLogo">
                    <img src="images/media-6.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>
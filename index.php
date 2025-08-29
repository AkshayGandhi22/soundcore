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
    

    <div class="navigationContainer">
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
                        <div class="navigationLink">
                            <a href="#" class="nav_link"> Headphones </a>
                            <div class="subnavigation"> 
                                <div class="container">
                                    <div class="headphoneFlex">
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="headphonesSubNav">
                                            <a href="#">
                                                <div class="headphonesLink">
                                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                                    <p>Space One Pro</p>
                                                    <p>€199.99</p>
                                                    <span>New</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navigationLink">
                            <a href="#" class="nav_link"> Explore </a>
                            <div class="subnavigation"> 
                                <div class="container">
                                    <div class="exploreFlex">
                                        <div class="exploreLink">
                                            <p>Brand</p>
                                            <a href="">Our Story</a>
                                            <a href="">Tech</a>
                                            <a href="">Sustainability</a>
                                            <a href="">Certified Refurbished Products</a>
                                            <a href="">soundcoreCredits</a>
                                            <a href="">Member Monthly Events</a>
                                        </div>
                                        <div class="exploreLink">
                                            <p>Brand</p>
                                            <a href="">Our Story</a>
                                            <a href="">Tech</a>
                                            <a href="">Sustainability</a>
                                            <a href="">Certified Refurbished Products</a>
                                            <a href="">soundcoreCredits</a>
                                            <a href="">Member Monthly Events</a>
                                        </div>
                                        <div class="exploreLink">
                                            <p>Brand</p>
                                            <a href="">Our Story</a>
                                            <a href="">Tech</a>
                                            <a href="">Sustainability</a>
                                            <a href="">Certified Refurbished Products</a>
                                            <a href="">soundcoreCredits</a>
                                            <a href="">Member Monthly Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="languageChange">
                        <div class="custom-dropdown">
                            <button class="dropdown-toggle">
                                🌐︎ English UK

                            </button>
                            <ul class="dropdown-menu">
                                <li>English UK </li>
                                <li>Arabic</li>
                            </ul>
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
                    <div class="mobileRight">
                        <div class="custom-dropdown">
                            <button class="dropdown-toggle">
                                🌐︎ English UK
                            </button>
                            <ul class="dropdown-menu">
                                <li>English UK </li>
                                <li>Arabic</li>
                            </ul>
                        </div>
            
                        <button class="mobileToggleMenu mobileToggle" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="block h-[30px] w-[30px] "><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
                        </button>
                    </div>
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
                                <button data-bs-toggle="offcanvas" data-bs-target="#headphones" aria-controls="headphones">Headphones <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-4 stroke-[3]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></button>
                                <button data-bs-toggle="offcanvas" data-bs-target="#explore" aria-controls="explore">Explore <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-4 stroke-[3]"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></button>
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
        <!-- Headphone -->
            <div class="offcanvas offcanvas-start mobileSubMenu" data-bs-backdrop="static" tabindex="-1" id="headphones" aria-labelledby="headphonesLabel">
                <div class="offcanvas-header">
                    <button type="button" class="backBtn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path></svg>
                    </button>
                    <h5 class="offcanvas-title" id="headphonesLabel">New Releases</h5>
                    <button type="button" class="backBtn canvas_back_btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path></svg>            
                    </button>
                    
                </div>
                <div class="offcanvas-body">
                    <div class="headphoneFlex">
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                        <div class="headphonesSubNav">
                            <a href="#">
                                <div class="headphonesLink">
                                    <img src="images/Headphones-1.webp" alt="Headphones">
                                    <p>Space One Pro</p>
                                    <p>€199.99</p>
                                    <span>New</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Headphone -->
        <!-- explore -->
            <div class="offcanvas offcanvas-start mobileSubMenu" data-bs-backdrop="static" tabindex="-1" id="explore" aria-labelledby="exploreLabel">
                <div class="offcanvas-header">
                    <button type="button" class="backBtn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path></svg>
                    </button>
                    <h5 class="offcanvas-title" id="exploreLabel">New Releases</h5>
                    <button type="button" class="backBtn canvas_back_btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path></svg>            
                    </button>
                    
                </div>
                <div class="offcanvas-body">
                    <div class="exploreFlex">
                        <div class="exploreLink">
                            <p>Brand</p>
                            <a href="">Our Story</a>
                            <a href="">Tech</a>
                            <a href="">Sustainability</a>
                            <a href="">Certified Refurbished Products</a>
                            <a href="">soundcoreCredits</a>
                            <a href="">Member Monthly Events</a>
                        </div>
                        <div class="exploreLink">
                            <p>Brand</p>
                            <a href="">Our Story</a>
                            <a href="">Tech</a>
                            <a href="">Sustainability</a>
                            <a href="">Certified Refurbished Products</a>
                            <a href="">soundcoreCredits</a>
                            <a href="">Member Monthly Events</a>
                        </div>
                        <div class="exploreLink">
                            <p>Brand</p>
                            <a href="">Our Story</a>
                            <a href="">Tech</a>
                            <a href="">Sustainability</a>
                            <a href="">Certified Refurbished Products</a>
                            <a href="">soundcoreCredits</a>
                            <a href="">Member Monthly Events</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- explore -->
    </div>
    
    <div class="mainBannerSection">
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

     <footer class="footerSection">
        <div class="container">
            <div class="footer_container">
                <div class="footer_Links">
                    <p>Brand <i class="plusSign"></i></p>
                    <ul>
                        <li><a href="#">soundcore's Story</a></li>
                        <li><a href="#">Where to Buy</a></li>
                    </ul>
                </div>
                <div class="footer_Links">
                    <p>Headphones <i class="plusSign"></i></p>
                    <ul>
                        <li><a href="#">Over Ear Headphones</a></li>
                        <li><a href="#">Space One Pro</a></li>
                        <li><a href="#">Q30</a></li>
                        <li><a href="#">Space Q45</a></li>
                    </ul>
                </div>
                <div class="footer_Links">
                    <p>Earbuds <i class="plusSign"></i></p>
                    <ul>
                        <li><a href="#">TWS Earbuds</a></li>
                        <li><a href="#">ANC Earbuds</a></li>
                        <li><a href="#">Sleep A20</a></li>
                        <li><a href="#">Liberty 4 NC</a></li>
                        <li><a href="#">Sport X20</a></li>
                    </ul>
                </div>
                <div class="footer_Links">
                    <p>Others <i class="plusSign"></i></p>
                    <ul>
                        <li><a href="#">Become an Affiliate</a></li>
                        <li><a href="#">Education Discount</a></li>
                        <li><a href="#">soundcoreCredits</a></li>
                        <li><a href="#" class="playstore"><img src="images/icon_googleplay.svg" alt=""></a></li>
                        <li><a href="#" class="playstore"><img src="images/icon_appstore.svg" alt=""></a></li>
                    </ul>
                </div>
                <div class="footer_Links">
                    <p>Social</p>
                    <div class="socialMedia">
                        <a href="#"><img src="images/icon_facebook.svg" alt=""></a>
                        <a href="#"><img src="images/icon_instagram.svg" alt=""></a>
                        <a href="#"><img src="images/icon_linkedin.svg" alt=""></a>
                        <a href="#"><img src="images/icon_twitter.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="footerBottomSection">
                <div class="payment_method_icon">
                        <img src="images/icon_1.png" alt="">
                        <img src="images/icon_2.png" alt="">
                        <img src="images/icon_3.png" alt="">
                        <img src="images/icon_4.png" alt="">
                        <img src="images/icon_5.png" alt="">
                        <img src="images/icon_6.png" alt="">
                        <img src="images/icon_7.png" alt="">
                        <img src="images/icon_8.png" alt="">
                        <img src="images/icon_9.png" alt="">
                        <img src="images/icon_10.png" alt="">
                </div>
                <div class="footerSocialMediaSection">
                    <div class="SocialMediaMobile">
                        <div class="socialMedia">
                            <a href="#"><img src="images/icon_facebook.svg" alt=""></a>
                            <a href="#"><img src="images/icon_instagram.svg" alt=""></a>
                            <a href="#"><img src="images/icon_linkedin.svg" alt=""></a>
                            <a href="#"><img src="images/icon_twitter.svg" alt=""></a>
                        </div>
                        <div class="appStoreLinkMobile">
                            <div class="appStoreLinkMobileTitle">
                                <p>App</p>
                            </div>
                            <ul>
                                <li><a href="#" class="playstore"><img src="images/icon_googleplay.svg" alt=""></a></li>
                                <li><a href="#" class="playstore"><img src="images/icon_appstore.svg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clientLogoSection">
                        <div class="clientLogo"><a href="https://anker.com/eu-en"
                                class="mx-auto block w-fit" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="49"
                                    viewBox="0 0 80 49" fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <path
                                        d="M48.3326 33.5969C48.2332 33.7548 48.1048 33.8928 47.9541 34.0037C47.8086 34.1076 47.646 34.1855 47.4736 34.234C47.2803 34.2877 47.0803 34.3136 46.8796 34.3107C46.5818 34.3146 46.2859 34.2625 46.0075 34.1572C45.7419 34.053 45.5004 33.8963 45.2976 33.6967C45.085 33.4907 44.9202 33.241 44.8148 32.9652C44.7091 32.68 44.6489 32.3801 44.6364 32.0764H51.6511V31.972C51.7214 28.6101 50.2336 25.9397 46.5583 25.9397C45.8677 25.9315 45.1816 26.0523 44.5359 26.2959C43.9212 26.5351 43.3629 26.8981 42.896 27.362C42.4103 27.8402 42.0384 28.4203 41.8076 29.0599C41.5567 29.775 41.4343 30.5285 41.4461 31.2858C41.4386 31.9357 41.5316 32.5829 41.7219 33.2047C41.899 33.7721 42.18 34.3021 42.5507 34.7682C43.0196 35.3461 43.6319 35.7927 44.3274 36.0638C45.0437 36.3499 45.8836 36.4932 46.8472 36.4937C47.4115 36.4985 47.9742 36.434 48.5226 36.3018C49.0113 36.1842 49.4782 35.9907 49.9061 35.7284C50.3121 35.4739 50.6722 35.1535 50.9713 34.7805C51.2606 34.4158 51.4948 34.0111 51.6666 33.5792L48.5698 33.1087C48.5093 33.2798 48.4298 33.4435 48.3326 33.5969ZM44.8233 29.4398C44.9143 29.1788 45.0623 28.9411 45.2567 28.7436C45.4439 28.5514 45.6693 28.4001 45.9187 28.2992C46.1799 28.1977 46.4585 28.1474 46.739 28.1511C47.0054 28.1475 47.2699 28.1946 47.5184 28.29C48.3782 28.63 48.7273 29.3968 48.7752 30.2596H44.6835C44.6858 29.9806 44.733 29.7039 44.8233 29.4398ZM59.4291 26.0817L59.3611 26.0633C59.0354 25.979 58.7003 25.9365 58.3638 25.9366C58.1319 25.9345 57.9005 25.9603 57.6748 26.0134C57.4587 26.0657 57.2508 26.147 57.0568 26.2552C56.8289 26.3914 56.6225 26.5603 56.4443 26.7564C56.2764 26.9351 56.1193 27.1235 55.9738 27.3206V26.1462H53.0848V36.245H56.1855V33.0903C56.1855 32.2516 56.2056 31.5583 56.2457 31.0102C56.3631 29.2709 57.3882 28.4995 59.4291 28.97V26.0817Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M59.4063 42.2719C59.4062 42.5265 59.4567 42.7787 59.5548 43.0139C59.6528 43.2491 59.7966 43.4629 59.9777 43.6429C60.1589 43.823 60.374 43.9658 60.6108 44.0632C60.8475 44.1607 61.1012 44.2108 61.3575 44.2108C61.6137 44.2108 61.8675 44.1607 62.1042 44.0632C62.3409 43.9658 62.5561 43.823 62.7372 43.6429C62.9184 43.4629 63.0622 43.2491 63.1602 43.0139C63.2583 42.7787 63.3087 42.5265 63.3087 42.2719C63.3087 42.0173 63.2583 41.7652 63.1602 41.5299C63.0622 41.2947 62.9184 41.0809 62.7372 40.9009C62.5561 40.7209 62.3409 40.578 62.1042 40.4806C61.8675 40.3832 61.6137 40.333 61.3575 40.333C61.1012 40.333 60.8475 40.3832 60.6108 40.4806C60.374 40.578 60.1589 40.7209 59.9777 40.9009C59.7966 41.0809 59.6528 41.2947 59.5548 41.5299C59.4567 41.7652 59.4062 42.0173 59.4063 42.2719Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M66.3244 37.5301C66.3514 38.16 66.6292 38.7534 67.0965 39.1798C67.5639 39.6062 68.1825 39.8307 68.8164 39.8039C69.4503 39.777 70.0476 39.5011 70.4767 39.0367C70.9058 38.5723 71.1317 37.9576 71.1047 37.3277C71.0777 36.6978 70.8 36.1044 70.3327 35.678C69.8653 35.2516 69.2466 35.0271 68.6127 35.0539C67.9788 35.0808 67.3816 35.3567 66.9525 35.8211C66.5233 36.2855 66.2974 36.9002 66.3244 37.5301Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M68.2637 25.4589C68.2637 26.2884 68.5953 27.084 69.1856 27.6706C69.776 28.2571 70.5766 28.5867 71.4115 28.5867C72.2463 28.5867 73.047 28.2571 73.6373 27.6706C74.2276 27.084 74.5593 26.2884 74.5593 25.4589C74.5593 24.6293 74.2276 23.8337 73.6373 23.2472C73.047 22.6606 72.2463 22.3311 71.4115 22.3311C70.5766 22.3311 69.776 22.6606 69.1856 23.2472C68.5953 23.8337 68.2637 24.6293 68.2637 25.4589Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M60.1777 12.7574C60.1777 13.2914 60.2835 13.8203 60.4891 14.3137C60.6948 14.8071 60.9962 15.2554 61.3763 15.6331C61.7563 16.0108 62.2075 16.3103 62.704 16.5147C63.2006 16.7191 63.7328 16.8243 64.2702 16.8243C64.8077 16.8243 65.3399 16.7191 65.8365 16.5147C66.333 16.3103 66.7842 16.0108 67.1642 15.6331C67.5443 15.2554 67.8457 14.8071 68.0514 14.3137C68.257 13.8203 68.3628 13.2914 68.3628 12.7574C68.3628 12.2233 68.257 11.6945 68.0514 11.201C67.8457 10.7076 67.5443 10.2593 67.1642 9.88163C66.7842 9.50398 66.333 9.2044 65.8365 9.00001C65.3399 8.79563 64.8077 8.69043 64.2702 8.69043C63.7328 8.69043 63.2006 8.79563 62.704 9.00001C62.2075 9.2044 61.7563 9.50398 61.3763 9.88163C60.9962 10.2593 60.6948 10.7076 60.4891 11.201C60.2835 11.6945 60.1777 12.2233 60.1777 12.7574Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M41.9688 8.67723C41.9688 9.97133 42.4861 11.2124 43.407 12.1275C44.3279 13.0425 45.5769 13.5566 46.8793 13.5566C48.1817 13.5566 49.4307 13.0425 50.3516 12.1275C51.2725 11.2124 51.7899 9.97133 51.7899 8.67723C51.7899 7.38314 51.2725 6.14205 50.3516 5.22699C49.4307 4.31193 48.1817 3.79785 46.8793 3.79785C45.5769 3.79785 44.3279 4.31193 43.407 5.22699C42.4861 6.14205 41.9688 7.38314 41.9688 8.67723Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M25.9944 28.211C26.1475 28.2496 26.2937 28.3115 26.4277 28.3944C26.5545 28.4725 26.6677 28.5705 26.763 28.6846C26.8602 28.8012 26.9384 28.9323 26.9947 29.0729C27.07 29.3073 27.1147 29.5503 27.1276 29.796C27.158 30.1337 27.1732 30.5687 27.1732 31.1008V36.2435H30.2738V30.0017C30.2738 29.621 30.2602 29.2812 30.2329 28.9824C30.2125 28.7253 30.171 28.4704 30.1085 28.2202C30.0016 27.8002 29.7994 27.4101 29.5176 27.0796C29.3653 26.9016 29.1878 26.7465 28.9908 26.6191C28.764 26.4726 28.5225 26.3502 28.2701 26.2537C27.9923 26.1462 27.7046 26.0663 27.4111 26.015C27.1022 25.962 26.7891 25.9364 26.4756 25.9382C25.8174 25.9251 25.1638 26.0511 24.5583 26.308C23.9527 26.5648 23.409 26.9466 22.9632 27.4281V26.1462H20.0711V36.245H23.1718V31.6688C23.1718 31.1172 23.1901 30.6554 23.2267 30.2834C23.247 29.9965 23.3017 29.7131 23.3896 29.4391C23.458 29.2492 23.5595 29.0728 23.6894 28.9179C23.8264 28.7567 23.989 28.6188 24.1706 28.5096C24.3605 28.3919 24.5666 28.3022 24.7824 28.2432C25.0076 28.1831 25.2398 28.1534 25.473 28.1549C25.6485 28.1517 25.8237 28.1706 25.9944 28.211ZM14.3379 22.584H10.1195L5.39355 36.0961L5.3418 36.245H8.80707L8.8287 36.1775L9.81204 33.1402H14.6454L15.6287 36.1775L15.6503 36.245H19.1156L19.0638 36.0961L14.3379 22.584ZM10.6231 30.6219L12.1294 25.9643H12.3264L13.8327 30.6219H10.6231ZM41.7148 26.3297L41.9041 26.1462H38.0348L38.0031 26.1792L34.8067 29.4713V22.584H31.7052V36.245H34.8067V33.0182L35.6904 32.1347L38.2333 36.245H41.6012L37.7235 30.1683L41.7148 26.3297ZM5.3418 39.1886H6.09804V45.0075H5.3418V39.1886ZM10.4509 40.7337C9.75566 40.7337 9.269 41.1221 9.06044 41.5197H9.04344L9.00019 40.8289H8.32273C8.349 41.1743 8.3575 41.5281 8.3575 41.9595V45.0067H9.12223V42.4953C9.11978 42.3753 9.13727 42.2557 9.17399 42.1414C9.23897 41.9201 9.37354 41.7254 9.55799 41.5856C9.74245 41.4458 9.9671 41.3684 10.199 41.3647C10.9205 41.3647 11.1724 41.9257 11.1724 42.5989V45.0075H11.9371V42.5122C11.9371 41.0791 11.0333 40.7337 10.4509 40.7337ZM16.1517 40.7337C15.4564 40.7337 14.9698 41.1221 14.7612 41.5197H14.7442L14.701 40.8289H14.0235C14.0498 41.1743 14.0583 41.5281 14.0583 41.9595V45.0067H14.823V42.4953C14.8208 42.3753 14.8386 42.2557 14.8755 42.1414C14.9405 41.9201 15.0751 41.7254 15.2595 41.5856C15.444 41.4458 15.6687 41.3684 15.9006 41.3647C16.6213 41.3647 16.8739 41.9257 16.8739 42.5989V45.0075H17.6386V42.5122C17.6371 41.0791 16.7333 40.7337 16.1517 40.7337ZM21.5388 40.7337C20.3747 40.7337 19.4532 41.5535 19.4532 42.9527C19.4532 44.2737 20.3307 45.1019 21.4685 45.1019C22.4851 45.1019 23.5627 44.4288 23.5627 42.8829C23.5634 41.6057 22.7462 40.7337 21.5388 40.7337ZM21.5041 44.5324C20.7571 44.5324 20.2272 43.8416 20.2272 42.9266C20.2272 42.1322 20.618 41.3032 21.5218 41.3032C22.4256 41.3032 22.7817 42.2013 22.7817 42.909C22.7809 43.8508 22.234 44.5324 21.5041 44.5324ZM27.1871 43.1738C27.048 43.5537 26.9268 43.8991 26.831 44.2445H26.8047C26.7105 43.882 26.5973 43.5246 26.4656 43.1738L25.6398 40.8258H24.8241L26.4223 45.0044H27.1523L28.8031 40.8258H28.0036L27.1871 43.1738ZM33.3212 42.4431C33.3212 41.6057 33.0122 40.7337 31.7222 40.7337C31.2366 40.7262 30.7585 40.8536 30.3418 41.1014L30.5156 41.6018C30.845 41.4012 31.2238 41.2949 31.6102 41.2948C32.47 41.2948 32.5657 41.9165 32.5657 42.2619V42.3487C30.9436 42.3402 30.0375 42.8929 30.0375 43.903C30.0375 44.507 30.4716 45.1027 31.3236 45.1027C31.5725 45.1077 31.8189 45.0537 32.0426 44.9451C32.2663 44.8366 32.4607 44.6767 32.6098 44.4786H32.636L32.6971 45.0052H33.3923C33.3406 44.6751 33.3174 44.3413 33.3228 44.0074L33.3212 42.4431ZM32.5827 43.5998C32.5811 43.6821 32.5665 43.7637 32.5395 43.8416C32.4668 44.0503 32.3291 44.2307 32.1463 44.3564C31.9635 44.4822 31.7452 44.5467 31.5229 44.5408C31.132 44.5408 30.8022 44.3105 30.8022 43.8155C30.8022 43.0042 31.7492 42.8576 32.5835 42.8744L32.5827 43.5998ZM36.3176 39.6292L35.5706 39.828V40.8258H34.9194V41.4084H35.5706V43.6873C35.5706 44.1793 35.6479 44.5508 35.8657 44.7749C36.048 44.9822 36.3346 45.0942 36.6915 45.0942C36.9218 45.1015 37.1515 45.0663 37.3689 44.9906L37.3342 44.4211C37.1893 44.4575 37.0402 44.4748 36.8908 44.4725C36.4651 44.4725 36.3176 44.1793 36.3176 43.6612V41.4084H37.4145V40.8297H36.3176V39.6292ZM39.1533 40.8289H39.918V45.0075H39.1533V40.8289ZM39.5349 39.1825C39.4716 39.1805 39.4085 39.1914 39.3495 39.2145C39.2906 39.2377 39.2371 39.2726 39.1923 39.3171C39.1474 39.3617 39.1123 39.4148 39.089 39.4734C39.0657 39.532 39.0547 39.5947 39.0568 39.6576C39.0547 39.7189 39.0653 39.7799 39.0878 39.837C39.1103 39.894 39.1443 39.946 39.1877 39.9896C39.2311 40.0332 39.2829 40.0675 39.3401 40.0905C39.3973 40.1136 39.4586 40.1248 39.5202 40.1235C39.8246 40.1235 40.0154 39.9163 40.0069 39.6576C40.0103 39.5948 40.0004 39.5321 39.978 39.4733C39.9556 39.4146 39.921 39.3611 39.8766 39.3164C39.8321 39.2717 39.7788 39.2366 39.72 39.2136C39.6611 39.1905 39.5981 39.1799 39.5349 39.1825ZM43.8453 40.7337C42.6812 40.7337 41.7596 41.5535 41.7596 42.9527C41.7596 44.2737 42.6371 45.1019 43.775 45.1019C44.7915 45.1019 45.8691 44.4288 45.8691 42.8829C45.8699 41.6057 45.0526 40.7337 43.8453 40.7337ZM43.8105 44.5324C43.0635 44.5324 42.5336 43.8416 42.5336 42.9266C42.5336 42.1322 42.9245 41.3032 43.8283 41.3032C44.732 41.3032 45.0882 42.2013 45.0882 42.909C45.0874 43.8508 44.5405 44.5324 43.8105 44.5324ZM49.9199 40.7337C49.2247 40.7337 48.738 41.1221 48.5295 41.5197H48.5125L48.4692 40.8289H47.7918C47.818 41.1743 47.8265 41.5281 47.8265 41.9595V45.0067H48.5913V42.4953C48.5891 42.3753 48.6068 42.2557 48.6438 42.1414C48.7088 41.9201 48.8433 41.7254 49.0278 41.5856C49.2123 41.4458 49.4369 41.3684 49.6689 41.3647C50.3896 41.3647 50.6422 41.9257 50.6422 42.5989V45.0075H51.4069V42.5122C51.4061 41.0791 50.5023 40.7337 49.9199 40.7337ZM54.9795 42.5812C54.4319 42.374 54.18 42.2189 54.18 41.8735C54.18 41.5665 54.4319 41.304 54.8838 41.304C55.1874 41.3038 55.4851 41.3875 55.7435 41.5458L55.9343 40.9932C55.618 40.8199 55.2619 40.7308 54.9008 40.7345C53.997 40.7345 53.4501 41.2871 53.4501 41.9626C53.4501 42.463 53.8062 42.8775 54.5624 43.1454C55.1271 43.3526 55.3442 43.5514 55.3442 43.913C55.3442 44.2584 55.0838 44.5347 54.5277 44.5347C54.1718 44.5243 53.8252 44.4199 53.5234 44.2323L53.3327 44.811C53.6954 45.0054 54.1025 45.1035 54.5145 45.0958C55.5133 45.0958 56.0873 44.5777 56.0873 43.8439C56.0826 43.2206 55.7064 42.8576 54.9795 42.5812Z"
                                        fill="currentColor"></path>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://anker.com/eu-en" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="25" viewBox="0 0 58 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M50.7444 13.4223C51.8439 12.6071 52.3295 11.7544 52.2514 10.6817C52.2153 9.9538 51.8869 9.26765 51.3352 8.76756C50.7836 8.26747 50.0516 7.99239 49.2932 8.00016H44.9397V17.214H46.67V13.4223H48.7351L51.1797 17.214H53.2002L50.7444 13.4223ZM50.5714 10.6817C50.5781 10.8226 50.5559 10.9634 50.5059 11.096C50.456 11.2287 50.3793 11.3505 50.2803 11.4546C50.1813 11.5588 50.0618 11.6431 49.9289 11.7028C49.7959 11.7625 49.652 11.7964 49.5053 11.8026C49.4349 11.8105 49.3637 11.8105 49.2932 11.8026H46.6644V9.6091H49.2932C49.5965 9.57743 49.9005 9.66227 50.1389 9.84513C50.3773 10.028 50.5307 10.294 50.5658 10.5852C50.5658 10.6013 50.5672 10.6174 50.5686 10.6335C50.57 10.6496 50.5714 10.6656 50.5714 10.6817ZM31.7509 13.7709L33.9835 17.2087H36.043L32.8728 12.3282L31.7509 13.7709ZM35.4123 8.00016H33.2132L28.6867 13.8192V8.00016H26.9676V16.3935C26.9642 16.5832 27.0306 16.768 27.1552 16.9152C27.2798 17.0624 27.4546 17.1626 27.6486 17.198C27.803 17.2236 27.9618 17.2088 28.1081 17.155C28.2545 17.1012 28.383 17.0104 28.4802 16.8923L35.4123 8.00016ZM39.2467 13.4223H42.6625V11.8134H39.2467V13.4223ZM43.5667 8.00023H36.7797V16.3935C36.7768 16.5003 36.7961 16.6065 36.8365 16.7059C36.877 16.8054 36.9378 16.896 37.0153 16.9725C37.0928 17.049 37.1855 17.1098 37.2879 17.1513C37.3902 17.1928 37.5002 17.2141 37.6114 17.2141H43.5667V15.6052H38.5435V9.60917H43.5667V8.00023ZM23.4737 8.00023V13.8192L18.9416 8.00023H16.709V17.2087H18.4448V10.2045L23.6746 16.8923C23.7714 17.0109 23.8999 17.102 24.0464 17.1559C24.1928 17.2097 24.3518 17.2243 24.5062 17.198C24.7003 17.1626 24.875 17.0625 24.9996 16.9153C25.1242 16.7681 25.1906 16.5833 25.1872 16.3935V8.00023H23.4737ZM9.66531 8.499L5.2002 17.2141H7.14252L10.4914 10.6818L13.8402 17.2248H15.7658L11.3397 8.53654C11.2565 8.38088 11.1336 8.24803 10.9825 8.15039C10.8319 8.05835 10.6585 8.00652 10.4802 8.00023C10.3085 8.00083 10.1404 8.04725 9.99461 8.1343C9.84858 8.2206 9.73363 8.3479 9.66531 8.499ZM12.0133 15.9108H12.0653L12.043 15.8733L12.0133 15.9108ZM10.9044 15.9108H12.0133L9.57043 19L9.79369 16.6349H8.6216L11.1332 13.5457L10.9044 15.9108Z"
                                        fill="currentColor"></path>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://www.soundcore.com/eu" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="79" height="25" viewBox="0 0 79 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <g clip-path="url(#clip0_6171_2530)">
                                        <path
                                            d="M1.31468 16.1133C1.32117 16.0897 1.33297 16.0682 1.34902 16.0509C1.36416 16.0338 1.38334 16.0215 1.40445 16.0155C1.42557 16.0095 1.44781 16.0099 1.46872 16.0167C1.48956 16.0238 1.50834 16.0367 1.52317 16.0541C1.79789 16.3725 2.48763 17.0098 3.68854 17.1383C4.55979 17.2322 5.53945 17.0807 5.59391 16.4258C5.61942 16.1255 5.49972 15.8519 5.06066 15.7666C4.70058 15.6935 3.61054 15.5768 2.86586 15.1885C1.97793 14.7245 1.41525 13.932 1.45891 12.9587C1.45891 12.2457 1.99166 10.2585 4.74179 9.95616C6.7595 9.73643 7.8515 10.586 8.11003 10.8191C8.12818 10.8351 8.14192 10.8575 8.15026 10.882C8.15852 10.9071 8.16072 10.9341 8.15664 10.9604C8.07079 11.5038 7.93245 12.4115 7.86916 12.8227C7.86567 12.8458 7.85727 12.8677 7.84464 12.8867C7.83248 12.9053 7.81631 12.9203 7.79754 12.9305C7.77901 12.9404 7.75841 12.945 7.73776 12.9437C7.71712 12.9423 7.69715 12.9352 7.6798 12.923C7.27705 12.651 6.1144 11.9972 4.5122 12.2126C4.34541 12.235 3.58209 12.3289 3.56639 12.9699C3.56001 13.2083 3.70571 13.5336 4.3042 13.6814C4.5333 13.7379 5.30496 13.8477 5.47421 13.8723C6.63882 14.0461 7.80735 14.6371 7.80735 16.2269C7.80735 17.9921 6.39942 19.1718 4.74424 19.4523C2.41895 19.8454 1.10324 18.4113 0.834413 18.0839C0.818705 18.064 0.807862 18.0401 0.802888 18.0145C0.797915 17.9889 0.798971 17.9623 0.80596 17.9372L1.31468 16.1133ZM66.679 10.7556L66.7388 10.3449C66.7417 10.3244 66.7403 10.3035 66.7349 10.2836C66.7299 10.2635 66.7207 10.2448 66.7079 10.2292C66.6953 10.2135 66.6796 10.201 66.6621 10.1924C66.6446 10.1838 66.6256 10.1795 66.6064 10.1796H64.6677C64.6363 10.1791 64.6057 10.1907 64.5814 10.2124C64.5572 10.2341 64.5408 10.2644 64.5352 10.298L63.1023 18.9809L65.3231 18.9868L66.1055 14.2755C66.2924 13.1619 67.0901 12.2526 68.3096 12.2526C68.6493 12.2647 68.9821 12.359 69.2839 12.5289C69.3141 12.5468 69.3495 12.5512 69.3826 12.5413C69.4158 12.5313 69.4441 12.5077 69.4615 12.4755L70.4426 10.6676C70.4602 10.6352 70.4652 10.5966 70.4568 10.5602C70.4483 10.5238 70.427 10.4924 70.3975 10.4729C69.6646 9.99509 68.163 9.39671 66.679 10.7556ZM60.645 14.7384C60.644 15.373 60.438 15.981 60.071 16.4301C59.7041 16.8791 59.2062 17.1319 58.6876 17.1324C58.1686 17.1319 57.6707 16.8796 57.3037 16.4306C56.9368 15.9815 56.7303 15.373 56.7298 14.7384C56.7303 14.1037 56.9368 13.4947 57.3037 13.0456C57.6707 12.5971 58.1686 12.3443 58.6876 12.3438C59.2062 12.3449 59.7041 12.5971 60.071 13.0462C60.438 13.4947 60.644 14.1032 60.645 14.7384ZM58.6876 9.92043C57.6471 9.92149 56.6498 10.4276 55.914 11.3278C55.1781 12.2275 54.7641 13.4472 54.7626 14.7197C54.7641 15.9927 55.1776 17.213 55.9135 18.1127C56.6493 19.0124 57.6471 19.5185 58.6876 19.5201C59.7276 19.5185 60.7255 19.0124 61.4608 18.1121C62.1967 17.2124 62.6102 15.9927 62.6117 14.7203C62.6102 13.4472 62.1962 12.2275 61.4608 11.3278C60.725 10.4281 59.7276 9.92203 58.6876 9.92043ZM54.2127 10.9951C53.3915 10.226 52.3456 9.8463 51.2889 9.93269C50.2935 10.0154 49.356 10.5033 48.6467 11.3097C47.9368 12.1155 47.5007 13.187 47.4178 14.3293C47.3711 14.989 47.4439 15.6521 47.6322 16.2813C47.8174 16.9032 48.1161 17.4782 48.5103 17.9719C48.8963 18.4549 49.3715 18.8443 49.905 19.1148C50.4302 19.3805 51.0024 19.5188 51.5817 19.5201C52.5462 19.5217 53.4812 19.1377 54.2259 18.4342C54.2493 18.4113 54.2649 18.3804 54.2702 18.3467C54.2754 18.3129 54.27 18.2781 54.2549 18.2481L53.313 16.3911C53.3035 16.3714 53.2896 16.3544 53.2727 16.3419C53.2558 16.3293 53.2362 16.3215 53.2158 16.3191C53.1956 16.3169 53.1752 16.32 53.1563 16.3284C53.1375 16.3368 53.1209 16.3501 53.1079 16.3671C52.9021 16.6238 52.6457 16.8267 52.3578 16.9607C52.0742 17.0919 51.7663 17.1493 51.4586 17.1282C50.9487 17.0888 50.4709 16.8432 50.1194 16.4397C49.7566 16.0233 49.5387 15.4824 49.5032 14.9101C49.483 14.5828 49.5217 14.2544 49.617 13.9432C49.711 13.6359 49.8606 13.3521 50.0571 13.1086C50.2518 12.8686 50.4878 12.6766 50.7502 12.5449C51.0074 12.4157 51.2871 12.3479 51.5704 12.346C51.8537 12.3442 52.1341 12.4083 52.3927 12.5342C52.6492 12.659 52.8813 12.8414 53.075 13.0707C53.0885 13.0872 53.1053 13.1 53.1241 13.108C53.1426 13.1161 53.1626 13.119 53.1824 13.1166C53.2021 13.1142 53.221 13.1065 53.2374 13.0942C53.2542 13.0817 53.2681 13.0653 53.2781 13.0462L54.2406 11.1849C54.2568 11.1543 54.2629 11.1185 54.2578 11.0836C54.2527 11.0493 54.2367 11.018 54.2127 10.9951ZM15.3891 14.7384C15.3908 15.3661 15.1726 15.9709 14.7788 16.4301C14.5908 16.6499 14.3635 16.8256 14.1107 16.9463C13.858 17.0671 13.5852 17.1305 13.3091 17.1324C13.033 17.1305 12.7602 17.0671 12.5074 16.9463C12.2547 16.8256 12.0273 16.6499 11.8393 16.4301C11.4458 15.9708 11.2278 15.366 11.2296 14.7384C11.2276 14.1104 11.4456 13.5051 11.8393 13.0456C12.0274 12.8259 12.2547 12.6502 12.5075 12.5294C12.7602 12.4086 13.033 12.3453 13.3091 12.3433C13.5852 12.3452 13.8581 12.4085 14.111 12.5293C14.3638 12.6501 14.5912 12.8258 14.7793 13.0456C15.1729 13.505 15.391 14.11 15.3891 14.7379V14.7384ZM13.3091 9.92043C12.2038 9.92203 11.1442 10.4281 10.3627 11.3278C9.58125 12.2275 9.14121 13.4472 9.13974 14.7197C9.14121 15.9927 9.58125 17.2124 10.3622 18.1121C11.1442 19.0124 12.2038 19.5185 13.3091 19.5201C14.4148 19.5185 15.4749 19.0124 16.2564 18.1127C17.0384 17.213 17.4779 15.9927 17.4794 14.7197C17.4779 13.4472 17.0379 12.2275 16.2564 11.3278C15.4744 10.4271 14.4148 9.92203 13.3091 9.92043ZM27.1696 10.4537H25.3712C25.3413 10.4535 25.3124 10.4655 25.2902 10.4873C25.2671 10.5101 25.2518 10.5408 25.2471 10.5743L24.5819 15.0552C24.3223 16.7511 23.2141 17.1511 22.5671 17.1511C21.4245 17.1511 20.2634 16.3842 20.5921 14.1645C20.727 13.2494 21.0311 11.2228 21.1209 10.6239C21.1239 10.6029 21.123 10.5816 21.1182 10.561C21.1134 10.5405 21.1048 10.5212 21.0929 10.5044C21.0813 10.4886 21.0665 10.4759 21.0498 10.4671C21.0333 10.4581 21.0152 10.4536 20.9968 10.4537H19.1984C19.1685 10.4533 19.1396 10.4651 19.1174 10.4868C19.0943 10.5096 19.0791 10.5402 19.0742 10.5737L18.5346 14.1587C18.022 17.5239 20.2545 19.5201 22.5661 19.5201C24.4234 19.5201 26.1747 18.1271 26.5902 15.3688C26.7664 14.2056 27.1838 11.3476 27.2898 10.6233C27.2927 10.6028 27.2918 10.5819 27.2871 10.5617C27.2825 10.5416 27.2742 10.5226 27.2628 10.506C27.2515 10.4905 27.2373 10.4777 27.2211 10.4687C27.2054 10.4596 27.1879 10.4545 27.1701 10.4537H27.1696ZM27.4213 18.9868H29.3173C29.3485 18.9873 29.3788 18.9756 29.4027 18.9537C29.4268 18.9315 29.443 18.9007 29.4483 18.8668L30.1616 14.3805C30.4329 12.6862 31.6009 12.2862 32.2838 12.2862C33.4876 12.2862 34.7121 13.0526 34.3638 15.2701C34.2215 16.1842 33.8963 18.2172 33.8001 18.8166C33.7969 18.8377 33.7978 18.8592 33.8029 18.8798C33.808 18.9005 33.8171 18.9196 33.8296 18.9361C33.842 18.9522 33.8576 18.965 33.8751 18.9738C33.8927 18.9825 33.9118 18.987 33.9311 18.9868H35.8271C35.8583 18.9873 35.8887 18.9756 35.9125 18.9537C35.9367 18.9315 35.9528 18.9007 35.9581 18.8668L36.5331 15.2754C37.0747 11.9145 34.7209 9.92043 32.2838 9.92043C30.3254 9.92043 28.4794 11.3124 28.0413 14.0675C27.8554 15.2296 27.4065 18.0919 27.2927 18.8177C27.2881 18.8488 27.2928 18.8807 27.306 18.9087C27.3193 18.9367 27.3404 18.9594 27.3663 18.9734C27.3835 18.9822 27.4023 18.9868 27.4213 18.9868ZM44.7211 9.47778L44.4106 11.3726C43.6175 10.6403 42.5979 10.2632 41.5585 10.3177C40.5225 10.3767 39.5446 10.8561 38.8181 11.6612C38.0842 12.4744 37.6499 13.552 37.5976 14.6899C37.5705 15.3121 37.6579 15.934 37.8547 16.5191C38.0504 17.1019 38.352 17.6358 38.7416 18.0892C39.1287 18.5397 39.5962 18.8996 40.1157 19.1468C40.6337 19.3931 41.191 19.5201 41.7547 19.5206C42.7346 19.518 43.6817 19.1363 44.4263 18.4438C45.1779 17.7446 45.6821 16.7827 45.8524 15.7234C46.654 10.6255 46.7134 10.2474 46.912 9.01966C46.9155 8.99747 46.9141 8.97471 46.9079 8.95322C46.9018 8.93172 46.8911 8.9121 46.8767 8.89593C46.8623 8.88008 46.8447 8.86822 46.8252 8.86135C46.8058 8.85448 46.785 8.85281 46.7649 8.85647C46.1026 8.9802 45.4482 9.15192 44.806 9.36951C44.784 9.37758 44.7645 9.39203 44.7495 9.4113C44.7346 9.43058 44.7248 9.45394 44.7211 9.47884V9.47778ZM41.7336 17.1868C41.4601 17.1861 41.1894 17.1262 40.9374 17.0105C40.6854 16.8949 40.4571 16.7258 40.2658 16.5133C39.8753 16.0794 39.6567 15.4965 39.657 14.8895C39.6573 14.2825 39.8764 13.6998 40.2673 13.2664C40.4588 13.054 40.6873 12.8852 40.9395 12.7698C41.1917 12.6545 41.4624 12.5948 41.736 12.5945C42.0094 12.5953 42.2798 12.6552 42.5317 12.7707C42.7835 12.8863 43.0116 13.0552 43.2028 13.2675C43.5934 13.7011 43.8121 14.2838 43.8121 14.8906C43.8121 15.4975 43.5934 16.0802 43.2028 16.5138C43.0116 16.7261 42.7835 16.895 42.5317 17.0105C42.2798 17.1261 42.0094 17.186 41.736 17.1868H41.7331H41.7336ZM45.379 5.69125C46.802 5.32528 48.2583 5.13387 49.7205 5.12061C49.7402 5.12061 49.7598 5.12434 49.7779 5.13234C49.7961 5.14034 49.8123 5.1526 49.825 5.16754C49.8376 5.18191 49.8468 5.19931 49.852 5.2183C49.8572 5.2373 49.8582 5.25737 49.8549 5.27687C49.7642 5.78351 49.6411 6.47842 49.5425 7.03893C49.5362 7.06952 49.5202 7.09672 49.4973 7.11573C49.4731 7.13591 49.4435 7.14712 49.4129 7.14773C47.9658 7.18354 46.5269 7.39625 45.1234 7.78184C45.1016 7.788 45.0787 7.78861 45.0566 7.78362C45.0344 7.77862 45.0137 7.76816 44.9959 7.75304C44.9792 7.73841 44.9663 7.71929 44.9586 7.69758C44.9513 7.67629 44.9496 7.6532 44.9537 7.63091L45.2824 5.79738C45.2869 5.7719 45.2983 5.74848 45.3152 5.73018C45.3329 5.71118 45.3549 5.69772 45.379 5.69125ZM77.2434 15.7607H78.6955C78.9256 14.6302 78.7722 13.4472 78.2635 12.4299C77.7548 11.4126 76.9251 10.6293 75.9272 10.2244C75.3675 9.99714 74.7712 9.89554 74.1744 9.92576C73.0788 9.98654 72.0428 10.487 71.2671 11.3303C70.4914 12.1737 70.031 13.2998 69.9751 14.4909C69.9471 15.1397 70.0403 15.7879 70.2493 16.3964C70.4582 17.0049 70.7785 17.561 71.1907 18.0311C71.6029 18.5012 72.0986 18.8755 72.6477 19.1314C73.1968 19.3873 73.7879 19.5196 74.3853 19.5201C75.0833 19.5195 75.7711 19.3389 76.3923 18.9932C77.0136 18.6475 77.5506 18.1465 77.9591 17.5313C77.9791 17.5001 77.9871 17.4616 77.9815 17.424C77.976 17.3864 77.9572 17.3526 77.9292 17.3298L76.6032 16.2525C76.5889 16.2409 76.5726 16.2325 76.5553 16.2279C76.538 16.2232 76.52 16.2224 76.5023 16.2253C76.4847 16.2283 76.4678 16.2351 76.4526 16.2452C76.4374 16.2554 76.4242 16.2687 76.4138 16.2845C76.1576 16.6784 75.8089 16.9905 75.4041 17.1884C74.9993 17.3862 74.5531 17.4624 74.112 17.4092C73.6709 17.3561 73.251 17.1753 72.8959 16.8859C72.5408 16.5964 72.2635 16.2088 72.0929 15.7634H77.2434V15.7607ZM74.3853 12.0174C74.8738 12.0176 75.3515 12.1737 75.7591 12.4665C76.1666 12.7593 76.4861 13.1758 76.6778 13.6643H72.0963C72.2878 13.1764 72.6067 12.7603 73.0136 12.4676C73.4205 12.1748 73.8974 12.0183 74.3853 12.0174Z"
                                            fill="currentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6171_2530">
                                            <rect width="78" height="24" fill="white" transform="translate(0.799805 0.320801)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://www.eufy.com/eu-en" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="53" height="25" viewBox="0 0 53 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <path
                                        d="M17.8777 11.6387C17.4705 11.6387 17.1463 11.9705 17.1463 12.3702C17.1463 14.4665 15.4421 16.1707 13.3457 16.1707C11.2494 16.1707 9.54523 14.4665 9.54523 12.3702C9.54523 10.2738 11.2494 8.56964 13.3457 8.56964C14.2733 8.56964 15.148 8.90142 15.8342 9.49714L13.5569 11.6915C13.2628 11.9705 13.2553 12.438 13.5343 12.7321C13.6775 12.8829 13.8736 12.9583 14.0621 12.9583C14.2506 12.9583 14.4316 12.8905 14.5749 12.7547L17.3876 10.0476L17.4027 10.0325C17.4178 10.0174 17.4253 10.0099 17.4328 9.99483C17.4328 9.99483 17.4404 9.97975 17.4479 9.97221C17.4555 9.95713 17.4705 9.94959 17.4781 9.93451C17.4781 9.93451 17.4781 9.92696 17.4856 9.91942C17.4932 9.90434 17.5082 9.88926 17.5158 9.87417C17.5158 9.87417 17.5158 9.86664 17.5158 9.8591C17.5233 9.84402 17.5309 9.82139 17.5384 9.80631C17.5384 9.80631 17.5384 9.8063 17.5384 9.79876C17.5459 9.77614 17.5535 9.76107 17.561 9.73845C17.561 9.71582 17.5761 9.70073 17.5761 9.67811C17.5761 9.67811 17.5761 9.67812 17.5761 9.67058C17.5761 9.64796 17.5761 9.63287 17.5836 9.61024C17.5836 9.61024 17.5836 9.60271 17.5836 9.59517C17.5836 9.57255 17.5836 9.55748 17.5836 9.53485C17.5836 9.53485 17.5836 9.5273 17.5836 9.51976C17.5836 9.50468 17.5836 9.48205 17.5836 9.46697C17.5836 9.46697 17.5836 9.45189 17.5836 9.44435C17.5836 9.42927 17.5836 9.41419 17.5836 9.3991C17.5836 9.39156 17.5836 9.38402 17.5836 9.37648C17.5836 9.3614 17.5837 9.34632 17.5761 9.33124C17.5761 9.3237 17.5761 9.31616 17.5761 9.30862C17.5761 9.29354 17.5686 9.27846 17.561 9.26338C17.561 9.26338 17.561 9.2483 17.5535 9.24075C17.5535 9.22567 17.5384 9.21059 17.5309 9.19551C17.5309 9.19551 17.5309 9.18043 17.5233 9.17289C17.5158 9.15781 17.5082 9.14273 17.5007 9.12765C17.5007 9.12765 17.4932 9.11257 17.4856 9.10503C17.4781 9.08995 17.4705 9.07485 17.4555 9.06731C16.445 7.82309 14.9595 7.11426 13.3608 7.11426C10.4577 7.11426 8.08984 9.48207 8.08984 12.3853C8.08984 15.2884 10.4577 17.6562 13.3608 17.6562C16.264 17.6562 18.6318 15.2884 18.6318 12.3853C18.6318 11.9781 18.3 11.6538 17.9004 11.6538L17.8777 11.6387Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M35.1003 3.44156C33.758 3.15501 32.544 3.38125 31.6692 4.09008C31.0057 4.62547 30.2139 5.71888 30.2139 7.86045V8.12436C30.2139 8.12436 30.2139 8.13944 30.2139 8.14698C30.2139 8.15452 30.2139 8.16206 30.2139 8.1696V16.9094C30.2139 17.3166 30.5457 17.6408 30.9453 17.6408C31.345 17.6408 31.6768 17.309 31.6768 16.9094V8.87844H34.9344C35.3416 8.87844 35.6658 8.54664 35.6658 8.14698C35.6658 7.74732 35.334 7.41553 34.9344 7.41553H31.6843C31.7522 6.40507 32.0614 5.65855 32.5817 5.23626C32.9512 4.94217 33.6298 4.64054 34.776 4.88185C35.1757 4.9648 35.5603 4.71595 35.6508 4.31629C35.7337 3.91663 35.4849 3.53205 35.0852 3.44156H35.1003Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M45.3711 7.15177C44.9941 7.00095 44.5643 7.18946 44.421 7.5665C44.3305 7.79272 42.7469 11.8195 41.563 14.9941L38.5694 7.55895C38.4186 7.18191 37.9887 7.00095 37.6117 7.15177C37.2347 7.30258 37.0537 7.73239 37.2045 8.10943L40.809 17.0528C40.7336 17.2715 40.6582 17.475 40.5978 17.656C39.8287 19.9032 38.5543 19.8579 38.3884 19.8428C38.3733 19.8428 38.3507 19.8428 38.3356 19.8428C37.9284 19.8428 37.6041 20.1746 37.5966 20.5818C37.5966 20.9815 37.9058 21.3057 38.3205 21.3208C38.3205 21.3208 38.3281 21.3208 38.3356 21.3208C39.15 21.3133 41.005 20.9739 41.9778 18.1386C42.9279 15.341 45.7482 8.1773 45.7783 8.10943C45.9291 7.73239 45.7406 7.30256 45.3636 7.15929L45.3711 7.15177Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M27.2592 7.09912C26.852 7.09912 26.5277 7.43091 26.5277 7.83057V13.6822C26.5277 15.0546 25.4117 16.1706 24.0393 16.1706C22.6668 16.1706 21.5508 15.0546 21.5508 13.6822V7.83057C21.5508 7.42337 21.219 7.09912 20.8193 7.09912C20.4197 7.09912 20.0879 7.43091 20.0879 7.83057V13.6822C20.0879 15.8615 21.86 17.6335 24.0393 17.6335C26.2185 17.6335 27.9906 15.8615 27.9906 13.6822V7.83057C27.9906 7.42337 27.6588 7.09912 27.2592 7.09912Z"
                                        fill="currentColor"></path>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://www.seenebula.com/eu" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="73" height="25" viewBox="0 0 73 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <g clip-path="url(#clip0_6171_2535)">
                                        <path
                                            d="M3.44167 7.52114L8.00708 14.5261H8.73617V7.52114H11.1398V17.721H7.88451L3.33442 10.7317H2.60547V17.721H0.200195V7.52114H3.44167ZM23.1879 7.52114V9.58228H15.9485V11.4967H21.5311V13.4017H15.9485V15.6597H23.1879V17.7209H13.5431V7.521L23.1879 7.52114ZM31.9484 7.52114C32.4249 7.52114 32.8593 7.56398 33.2518 7.64965C33.6442 7.73532 33.9806 7.87601 34.2609 8.07113C34.5412 8.2664 34.7585 8.52614 34.9127 8.84977C35.0669 9.17369 35.1439 9.57369 35.1439 10.0498C35.1439 10.5641 35.0293 10.9926 34.8005 11.3354C34.5714 11.6782 34.2328 11.9593 33.7844 12.1782C34.4012 12.3592 34.8612 12.6761 35.165 13.1282C35.4684 13.5807 35.6204 14.1261 35.6204 14.7639C35.6204 15.2782 35.5223 15.7235 35.326 16.0995C35.1298 16.4759 34.8657 16.783 34.5341 17.0209C34.2023 17.2591 33.8239 17.4352 33.3988 17.5494C32.9711 17.664 32.5305 17.7217 32.0882 17.7209H25.5912V7.521L31.9484 7.52114ZM31.6681 11.6497C32.0605 11.6497 32.3828 11.5546 32.6352 11.3639C32.8875 11.1735 33.0135 10.8639 33.0135 10.4354C33.0135 10.1975 32.9715 10.0022 32.8875 9.84976C32.8034 9.69747 32.6912 9.57827 32.5511 9.4926C32.411 9.40693 32.2497 9.34747 32.0676 9.31409C31.8802 9.28035 31.6903 9.26362 31.5 9.26409H27.9969V11.6497H31.6681ZM31.7943 15.9782C32.0091 15.9782 32.2147 15.9567 32.411 15.9139C32.6072 15.871 32.7799 15.7997 32.9296 15.6995C33.0789 15.5995 33.1981 15.4639 33.2871 15.2924C33.3758 15.121 33.4202 14.902 33.4202 14.6352C33.4202 14.1116 33.2753 13.7377 32.9857 13.5137C32.696 13.2901 32.313 13.1781 31.8365 13.1781H27.9971V15.978L31.7943 15.9782ZM46.4642 16.6202C45.601 17.3541 44.4074 17.721 42.8836 17.721C41.3383 17.721 40.1421 17.3567 39.2951 16.6279C38.4479 15.8994 38.0243 14.775 38.0243 13.2552V7.52114H40.4295V13.2552C40.4295 13.5572 40.4561 13.8539 40.5095 14.1453C40.5628 14.4368 40.6747 14.6944 40.8452 14.9182C41.0155 15.1421 41.2528 15.3242 41.5564 15.4647C41.8602 15.6053 42.3722 15.6755 42.8836 15.6755C43.7787 15.6755 44.501 15.4803 44.8422 15.0899C45.183 14.6995 45.3538 14.0882 45.3538 13.2552V7.52114H47.7591V13.2552C47.7589 14.7646 47.3274 15.8862 46.4642 16.6202ZM52.5678 15.6599V7.52114H50.1625V17.721H58.1798L59.0157 15.6599H52.5678ZM69.703 17.721H72.2002L68.0054 7.52114H64.8123L60.5755 17.721H62.9961L63.9922 15.2672H68.7292L69.703 17.721ZM64.7534 13.3915L66.0207 10.2694H66.7457L67.9848 13.3915H64.7534Z"
                                            fill="currentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6171_2535">
                                            <rect width="72" height="24" fill="white" transform="translate(0.200195 0.320801)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://www.eufymake.com/eu-en" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="88" height="25" viewBox="0 0 88 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <g clip-path="url(#clip0_680_17189)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.9628 4.99501C23.909 4.76806 23.286 5.0456 22.9492 5.31737L22.9477 5.31881C22.4692 5.70477 22.1888 6.39141 22.1266 7.31801H25.103C25.5468 7.31801 25.8894 7.74589 25.742 8.21136C25.6523 8.49179 25.369 8.66526 25.0741 8.66526H22.1136V16.026C22.1136 16.4683 21.6857 16.8124 21.2203 16.6649C20.9398 16.5753 20.7664 16.292 20.7664 15.9971V8.01187V7.99019V7.96851V7.72565C20.7664 5.76115 21.492 4.76228 22.1021 4.26934C22.8884 3.6333 23.9856 3.41936 25.1927 3.66655C25.4933 3.72726 25.7492 3.95855 25.7752 4.26356C25.8171 4.74493 25.3936 5.08753 24.9628 4.99501ZM9.56884 11.2031C9.2537 11.2595 9.01952 11.5501 9.01952 11.871C9.01663 13.7979 7.44242 15.3634 5.5126 15.3519C3.66517 15.3417 2.10108 13.8138 2.04904 11.9664C1.99266 9.99899 3.57844 8.37997 5.53283 8.37997C6.37993 8.37997 7.18366 8.68354 7.81248 9.22851L5.75111 11.2147C5.52416 11.433 5.44176 11.7842 5.60078 12.056C5.73377 12.2858 5.96216 12.4015 6.19056 12.4015C6.35825 12.4015 6.52738 12.3393 6.65748 12.2136L9.23202 9.73156C9.23202 9.73156 9.23491 9.72722 9.2378 9.72578L9.24336 9.71988C9.24673 9.7162 9.24991 9.71272 9.2537 9.70988C9.25876 9.70409 9.26382 9.69867 9.26888 9.69325L9.26895 9.69318C9.27398 9.68779 9.27902 9.68239 9.28406 9.67663L9.29707 9.65928C9.3042 9.65114 9.31061 9.64228 9.3168 9.63371L9.32454 9.62314C9.32597 9.62099 9.32741 9.61847 9.32885 9.61596L9.32887 9.61592C9.33032 9.61339 9.33176 9.61086 9.33321 9.60869C9.33755 9.60146 9.34188 9.59459 9.34622 9.58773C9.35056 9.58086 9.35489 9.57399 9.35923 9.56677L9.36027 9.56451C9.36144 9.56191 9.3628 9.55886 9.36501 9.55665C9.37368 9.54075 9.38091 9.52485 9.38814 9.5075C9.38814 9.50461 9.38959 9.50172 9.39103 9.50027C9.39826 9.48292 9.40549 9.46413 9.40982 9.44679V9.441C9.4156 9.42222 9.41994 9.40344 9.42427 9.38467L9.42428 9.38463V9.3774L9.42616 9.36611L9.42749 9.3586C9.42974 9.34608 9.43199 9.33355 9.43295 9.32102V9.3109C9.4344 9.29356 9.43584 9.27477 9.43584 9.25742V9.24152C9.43584 9.22562 9.43584 9.20827 9.4344 9.19237C9.4344 9.18514 9.43295 9.17936 9.43151 9.17358L9.43115 9.16996V9.16994L9.43114 9.16984L9.43113 9.16977C9.4298 9.15636 9.42836 9.14196 9.42573 9.12877C9.42573 9.12395 9.42444 9.11913 9.42316 9.11431L9.42269 9.11255L9.42139 9.10708C9.4185 9.09263 9.41561 9.07817 9.41127 9.06516C9.40982 9.05793 9.40693 9.05071 9.40404 9.04492C9.3997 9.03047 9.39537 9.01746 9.38959 9.003C9.3867 8.99578 9.3838 8.98999 9.38091 8.98421C9.37513 8.96976 9.36935 8.95675 9.36212 8.94229C9.36068 8.9394 9.35887 8.93651 9.35706 8.93362C9.35526 8.93073 9.35345 8.92783 9.352 8.92494L9.34635 8.91457L9.34634 8.91456C9.34092 8.90452 9.33529 8.8941 9.32887 8.88447C9.3267 8.88158 9.32454 8.87832 9.32237 8.87507C9.3202 8.87182 9.31803 8.86857 9.31586 8.86568C9.30719 8.85267 9.29852 8.8411 9.28984 8.82954L9.28695 8.8252C8.86051 8.23542 8.28518 7.76128 7.61589 7.47506C4.05258 5.95 0.609259 8.59825 0.701774 11.9996C0.769716 14.5077 2.83542 16.5979 5.34202 16.6948C8.09292 16.8017 10.3653 14.5944 10.3653 11.8652C10.3653 11.4532 9.99528 11.1265 9.56739 11.2031H9.56884ZM18.0777 7.08832C17.7972 7.17795 17.6238 7.46127 17.6238 7.75617V13.0035C17.6238 14.0804 16.9082 15.0663 15.8558 15.2962C14.3785 15.6185 13.0674 14.4968 13.0674 13.0729V7.75617C13.0674 7.46127 12.8939 7.17795 12.6134 7.08832C12.148 6.94088 11.7201 7.28347 11.7201 7.72725V12.9558C11.7201 14.77 13.0037 16.3933 14.7991 16.6579C17.0398 16.9874 18.9725 15.2513 18.9725 13.0729V7.72725C18.9725 7.28347 18.5446 6.94088 18.0791 7.08832H18.0777ZM34.6631 7.08277C34.3176 6.94689 33.9259 7.11602 33.79 7.46295C33.709 7.66678 32.2577 11.3602 31.1706 14.2729L28.4342 7.48464C28.3243 7.21143 28.0569 7.01339 27.7634 7.03507C27.2763 7.07265 27.0074 7.55113 27.1737 7.96167L30.4796 16.1623C30.4088 16.3618 30.3438 16.5468 30.2859 16.7174C29.5834 18.7787 28.4111 18.7353 28.2622 18.7209C28.2535 18.7209 28.2452 18.7202 28.2369 18.7194L28.2369 18.7194C28.2286 18.7187 28.2202 18.718 28.2116 18.718C27.8386 18.718 27.5394 19.0201 27.5365 19.3931C27.5336 19.7617 27.8227 20.0595 28.2014 20.0667H28.2029H28.2058H28.2101H28.2246C28.9719 20.058 30.6748 19.7516 31.5609 17.151C32.434 14.5881 35.0173 8.02093 35.0433 7.95588C35.1792 7.60895 35.01 7.21865 34.6631 7.08277ZM59.3377 8.19099C59.3377 7.82093 59.6384 7.51881 60.0085 7.51881C60.3785 7.51881 60.6792 7.82093 60.6792 8.19099V15.7772C60.6792 16.1473 60.3785 16.4494 60.0085 16.4494C59.6384 16.4494 59.3377 16.1473 59.3377 15.7772V15.2901C58.4935 16.1487 57.3197 16.6836 56.0231 16.6836C53.4543 16.6836 51.3655 14.5933 51.3655 12.026C51.3655 9.45873 53.4543 7.36847 56.0231 7.36847C57.3197 7.36847 58.4921 7.90332 59.3377 8.76198V8.19099ZM52.707 12.026C52.707 13.8546 54.1944 15.3407 56.0216 15.3407C57.8488 15.3407 59.3363 13.8546 59.3363 12.026C59.3363 10.1974 57.8488 8.71138 56.0216 8.71138C54.1944 8.71138 52.707 10.1974 52.707 12.026ZM65.7511 11.8933L69.2435 8.68271C69.5168 8.42974 69.5341 8.00619 69.284 7.73298C69.0339 7.45833 68.6075 7.44098 68.3357 7.69251L64.3373 11.3671L64.334 11.3722L64.3324 11.3744L64.3301 11.3772C64.3301 11.3772 64.3272 11.3772 64.3258 11.3801C64.3148 11.391 64.3073 11.4039 64.2999 11.4167L64.2998 11.4167C64.2944 11.426 64.2891 11.4352 64.2824 11.4437L64.2751 11.4526L64.2751 11.4526C64.2384 11.4974 64.2014 11.5425 64.1783 11.594C64.1671 11.6193 64.1625 11.6458 64.1579 11.6723L64.1554 11.687L64.1534 11.6973C64.1522 11.7034 64.1509 11.7094 64.1494 11.7155C64.1463 11.7286 64.1428 11.7414 64.1392 11.7541C64.131 11.7835 64.1229 11.8124 64.1219 11.8427C64.1209 11.8789 64.1284 11.9143 64.136 11.9496C64.1386 11.9621 64.1413 11.9747 64.1436 11.9872C64.1463 12.0007 64.1478 12.0142 64.1493 12.0275C64.1518 12.0501 64.1542 12.0724 64.1624 12.0942C64.1801 12.1409 64.2099 12.1832 64.2393 12.225L64.252 12.2431C64.2558 12.2486 64.2592 12.2544 64.2624 12.2602L64.2695 12.2737C64.277 12.2883 64.2845 12.3028 64.2954 12.3154L64.2975 12.3166L64.2991 12.3177L64.2997 12.3183C64.3012 12.3197 64.3019 12.3215 64.3026 12.3233C64.3033 12.3251 64.3041 12.3269 64.3055 12.3284L68.3039 16.4771C68.4355 16.6144 68.6118 16.6838 68.7868 16.6838C68.9617 16.6838 69.1221 16.6217 69.2522 16.4959C69.5196 16.2386 69.5269 15.8136 69.2696 15.5462L65.7482 11.8918L65.7511 11.8933ZM62.2325 4.2735C62.2325 3.90344 62.5332 3.60132 62.9033 3.60132C63.2733 3.60132 63.574 3.90344 63.574 4.2735V16.0128C63.574 16.3829 63.2733 16.685 62.9033 16.685C62.5332 16.685 62.2325 16.3829 62.2325 16.0128V4.2735ZM40.8547 6.47535C40.6624 6.27875 40.3719 6.21804 40.1174 6.32068C39.863 6.42331 39.6968 6.6705 39.6968 6.94515V16.0073C39.6968 16.3803 39.9975 16.6809 40.3704 16.6809C40.7434 16.6809 41.044 16.3803 41.044 16.0073V8.60609L43.4364 11.0693L44.3891 10.1167L40.8547 6.47535ZM48.8641 6.47535C49.0564 6.27875 49.3469 6.21804 49.6013 6.32068H49.5999C49.8529 6.42476 50.0191 6.6705 50.0191 6.94515V16.0073C50.0191 16.3803 49.7184 16.6809 49.3455 16.6809C48.9725 16.6809 48.6718 16.3803 48.6718 16.0073V8.60031L46.2635 11.0722L45.3109 10.1196L48.8641 6.47535ZM44.8978 10.6456L44.8501 10.5965L44.8024 10.6456L43.9524 11.4956L43.8903 11.5578L44.8501 12.5176L45.81 11.5578L45.7493 11.4971L44.8978 10.6456ZM74.5023 7.37048C76.7935 7.37048 78.7233 9.00974 79.0905 11.2677V11.2662C79.1483 11.6204 79.0471 11.9803 78.8144 12.255C78.5788 12.5296 78.2362 12.6887 77.8748 12.6887H74.5023C74.1308 12.6887 73.8301 12.388 73.8301 12.0165C73.8301 11.645 74.1308 11.3443 74.5023 11.3443H77.7374C77.4223 9.81202 76.0837 8.7134 74.5023 8.7134C73.5974 8.7134 72.7517 9.07334 72.1229 9.72673C71.4941 10.3787 71.1674 11.2388 71.2021 12.1466C71.2657 13.8393 72.6404 15.2314 74.3303 15.3167C75.5127 15.3759 76.6432 14.7963 77.2821 13.8032C77.483 13.4909 77.8993 13.4013 78.2116 13.6022C78.5238 13.8032 78.6134 14.2195 78.4125 14.5317C77.5553 15.8616 76.0707 16.6654 74.4965 16.6654C74.4184 16.6654 74.3404 16.6639 74.2623 16.6596C71.8829 16.5396 69.9473 14.5794 69.8577 12.1986C69.8085 10.9222 70.2682 9.71372 71.1529 8.79579C72.0376 7.87643 73.2273 7.37048 74.5023 7.37048Z"
                                            fill="currentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_680_17189">
                                            <rect width="78.375" height="22" fill="currentColor" transform="translate(0.699951 0.144531)">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></div>
                        <div class="clientLogo"><a href="https://us.ankerwork.com" class="mx-auto block w-fit"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="79" height="25" viewBox="0 0 79 25"
                                    fill="none" class="h-[40px] w-auto [color:#fffa] hover:[color:var(--brand-color)]">
                                    <g clip-path="url(#clip0_6171_2542)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M28.0552 13.8565C28.0552 11.3893 30.0078 9.39213 32.42 9.39213C33.0588 9.39331 33.6898 9.53717 34.2686 9.81367C34.8475 10.0902 35.3604 10.4926 35.7713 10.9929C36.1823 11.4932 36.4816 12.0792 36.6481 12.7101C36.8146 13.341 36.8445 14.0014 36.7355 14.6453H30.1391C30.4509 15.6355 31.3698 16.3404 32.4364 16.3404C33.1912 16.3404 33.864 15.9879 34.307 15.4341H36.5058C35.8823 17.1292 34.2906 18.3208 32.42 18.3208C30.0078 18.3208 28.0552 16.3236 28.0552 13.8565ZM32.42 11.3725C31.3534 11.3725 30.4509 12.0774 30.1227 13.0677H34.7172C34.4055 12.0774 33.4865 11.3725 32.42 11.3725ZM6.85008 6.48193C7.00455 6.58626 7.12591 6.7344 7.19932 6.90821L11.8595 18.2369H9.79194L8.46281 15.0313H4.19647L2.86734 18.2369H0.799805L5.45996 6.90821C5.53337 6.7344 5.65473 6.58626 5.8092 6.48193C5.96367 6.3776 6.14453 6.3216 6.32964 6.3208C6.51475 6.3216 6.69561 6.3776 6.85008 6.48193ZM6.32964 9.82849L5.00051 13.0509H7.65877L6.32964 9.82849ZM26.5837 18.2369L23.6619 14.8299V18.2369H21.7305V6.3208H23.6619V12.6481L26.6003 9.47604H29.258L25.3127 13.739L29.159 18.2369H26.5837ZM42.2826 11.4397C40.929 11.4397 39.8229 12.5642 39.8229 13.9404H39.8064V18.2369H37.875V13.9404C37.875 11.4732 39.8394 9.47604 42.2661 9.47604H42.3156L42.9099 11.4397H42.2826ZM55.8519 13.8565C55.8519 11.3893 57.8164 9.39213 60.243 9.39213C62.6696 9.39213 64.634 11.3893 64.634 13.8565C64.634 16.3236 62.6696 18.3208 60.243 18.3208C57.8164 18.3208 55.8519 16.3236 55.8519 13.8565ZM57.7998 13.8565C57.7998 15.2327 58.8894 16.3404 60.243 16.3404C61.5966 16.3404 62.6861 15.2327 62.6861 13.8565C62.6861 12.4802 61.5966 11.3725 60.243 11.3725C58.8894 11.3725 57.7998 12.4802 57.7998 13.8565ZM13.9554 10.6509C14.6953 9.89865 15.6988 9.47604 16.7451 9.47604C17.7915 9.47604 18.795 9.89865 19.5349 10.6509C20.2748 11.4031 20.6905 12.4234 20.6905 13.4872V13.5208V18.2369H18.7591V13.4872C18.7591 12.3628 17.8512 11.4565 16.7451 11.4565C15.6391 11.4565 14.7312 12.3628 14.7312 13.4872V18.2369H12.7998V13.4872C12.7998 12.4234 13.2155 11.4031 13.9554 10.6509ZM65.4099 18.2369V13.9404C65.4099 11.4732 67.3743 9.47604 69.801 9.47604H70.1806V11.4397H69.801C68.4473 11.4397 67.3413 12.5642 67.3413 13.9404V18.2369H65.4099ZM72.8879 14.8299V18.2369H70.9565V6.3208H72.8879V12.6481L75.8263 9.47604H78.484L74.5387 13.739L78.385 18.2369H75.8098L72.8879 14.8299ZM45.7327 18.2369V18.2201L42.1835 6.3208H44.181L46.7397 14.8635L48.7206 8.25087C48.8527 7.84807 49.2158 7.56276 49.645 7.56276C49.8521 7.558 50.055 7.62286 50.2221 7.74728C50.3893 7.87169 50.5114 8.04871 50.5695 8.25087L52.5504 14.8802L55.1091 6.33758H57.1065L53.5574 18.2369V18.2537H51.5599V18.2369L49.6615 11.876L47.7631 18.2201V18.2369H45.7327Z"
                                            fill="currentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6171_2542">
                                            <rect width="78" height="24" fill="white" transform="translate(0.799805 0.320801)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>
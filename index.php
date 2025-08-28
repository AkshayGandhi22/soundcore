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
                                🌐 English <span class="arrow">▼</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>Spanish</li>
                                <li>Italian</li>
                                <li>Japanese</li>
                                <li>German</li>
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
                    <p>Brand</p>
                    <a href="#">soundcore's Story</a>
                    <a href="#">Where to Buy</a>
                </div>
                <div class="footer_Links">
                    <p>Headphones</p>
                    <a href="#">Over Ear Headphones</a>
                    <a href="#">Space One Pro</a>
                    <a href="#">Q30</a>
                    <a href="#">Space Q45</a>
                </div>
                <div class="footer_Links">
                    <p>Earbuds</p>
                    <a href="#">TWS Earbuds</a>
                    <a href="#">ANC Earbuds</a>
                    <a href="#">Sleep A20</a>
                    <a href="#">Liberty 4 NC</a>
                    <a href="#">Sport X20</a>
                </div>
                <div class="footer_Links">
                    <p>Others</p>
                    <a href="#">Become an Affiliate</a>
                    <a href="#">Education Discount</a>
                    <a href="#">soundcoreCredits</a>
                    <a href="#" class="playstore"><img src="images/icon_googleplay.svg" alt=""></a>
                    <a href="#" class="playstore"><img src="images/icon_appstore.svg" alt=""></a>
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
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>
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

    <div class="fromBanner">
        <div class="container">
            <h2>Kindly provide the required details in the form below</h2>
            <p>Please ensure the details entered are accurate before submission.</p>
        </div>
    </div>
    <div class="formDesignSection padT100">
        <div class="container">
            <form action="" class="formDesign">
                <div class="inputBox">
                    <label for="firstname">First name</label>
                    <input type="text" id="firstname" placeholder="First name">
                </div>
                <div class="inputBox">
                    <label for="lastname">Last name</label>
                    <input type="text" id="lastname" placeholder="Last name">
                </div>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" placeholder="Mobile">
                </div>
                <div class="inputBox">
                    <label for="country">Country</label>
                    <select name="" id="">
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                <div class="inputBox w-100">
                    <label for="comment">Comment </label>
                    <textarea name="" id="comment" placeholder="Comment" rows="3"></textarea>
                </div>
                <div class="inputBox">
                    <label for="invoiceAttachment">Invoice Attachment </label>
                    <input type="file" id="invoiceAttachment">
                </div>
                <div class="inputBox w-100">
                    <button class="button "> Submit </button>
                </div>
            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
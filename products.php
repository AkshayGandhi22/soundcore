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
    <div class="product_Liberty_Section">
        <div class="container">
            <div class="product_Liberty_Container">
                <div class="productSlider slider_arrow">
                    <div>
                        <img src="images/Liberty_5.webp" alt="Liberty_5">
                    </div>
                    <div>
                        <img src="images/Liberty-2.webp" alt="Liberty">
                    </div>
                    <div>
                        <img src="images/Liberty-3.webp" alt="Liberty">
                    </div>
                    <div>
                        <img src="images/Liberty-4.webp" alt="Liberty">
                    </div>
                    <div>
                        <img src="images/Liberty-5.webp" alt="Liberty">
                    </div>
                    <div>
                        <img src="images/Liberty-6.webp" alt="Liberty">
                    </div>
                </div>
                <div class="productContent">
                    <h3>Liberty 5｜Noise-Cancelling Earbuds with Dolby Audio</h3>
                    <p>Enjoy Dolby Audio, long-lasting noise cancellation, and an immersive audio journey.</p>
                    <div class="pricingText">
                        <h3>€93.99 <span> Save €9.39</span></h3>
                    </div>
                    <div class="color_radio">
                        <h5>Color: <span>Black</span></h5>
                        <div class="color_radio_input">
                            <label for="black"><img src="images/black.webp" alt=""> <input type="radio" name="color" id="black" checked></label>
                            <label for="white"><img src="images/white.webp" alt=""> <input type="radio" name="color" id="white"></label>
                            <label for="blue"><img src="images/navy-blue.png" alt=""> <input type="radio" name="color" id="blue"></label>
                            <label for="apricot"><img src="images/apricot.webp" alt=""> <input type="radio" name="color" id="apricot"></label>
                        </div>
                    </div>
                    <div class="services_benefits">
                        <h5>Services and benefits</h5>
                        <div class="services_benefits_Box">
                            <div class="services_benefits_text">
                                <img src="images/services_benefits-1.png" alt="">
                                <p>Fast, Shipping</p>
                            </div>
                            <div class="services_benefits_text">
                                <img src="images/services_benefits-2.webp" alt="">
                                <p>30-Day Money-Back Guarantee</p>
                            </div>
                            <div class="services_benefits_text">
                                <img src="images/services_benefits-3.webp" alt="">
                                <p>Hassle-Free Warranty</p>
                            </div>
                            <div class="services_benefits_text">
                                <img src="images/services_benefits-4.png" alt="">
                                <p>Lifetime Customer Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="want_perks_accodion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Want More Perks?  <a href="#">Become a Member Now!</a>
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Priority Shipping</li>
                                        <li>Member Pricing on Selected Products</li>
                                        <li>Birthday Gift</li>
                                        <li>Unlock Benefits with soundcoreCredits <a href="#">Learn More</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="payment_method">
                        <p>Payment Method</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mainTitle left">
                <h3>Overview</h3>
            </div>
            <div class="overviewContainer">
                <div class="three">
                    <div class="overviewBox ">
                        <img src="images/overview-1.webp" alt="overview">
                        <div class="overviewText">
                            <h4>Silences Noise in Real Time</h4>
                        </div>
                    </div>
                </div>
                <div class="one">
                    <div class="overviewBox ">
                        <img src="images/overview-2.webp" alt="overview">
                        <div class="overviewText">
                            <h4>Ultra-Long Battery Life</h4>
                        </div>
                    </div>
                </div>
                <div class="two">
                    <div class="overviewBox whiteText">
                        <img src="images/overview-3.webp" alt="overview">
                        <div class="overviewText">
                            <h4>Immersive Dolby Audio</h4>
                        </div>
                    </div>
                </div>
                <div class="two">
                    <div class="overviewBox">
                        <img src="images/overview-4.webp" alt="overview">
                        <div class="overviewText">
                            <h4>Electrifying, Crisp Highs</h4>
                        </div>
                    </div>
                </div>
                <div class="overviewBox one">
                    <img src="images/overview-5.webp" alt="overview">
                    <div class="overviewText">
                        <h4>Thunderous Bass</h4>
                    </div>
                </div>
                <div class="one">
                    <div class="overviewBox ">
                        <img src="images/overview-6.webp" alt="overview">
                        <div class="overviewText">
                            <h4>IP55 Water and Dust-Resistant</h4>
                        </div>
                    </div>
                </div>
                <div class="two">
                    <div class="overviewBox ">
                        <img src="images/overview-7.webp" alt="overview">
                        <div class="overviewText">
                            <h4>Crystal-Clear Calls</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="quiettheCrowd">
            <img src="images/quiettheCrowd.webp" alt="">
            <img src="images/quiettheCrowd-1.webp" alt="">
            <div class="quiettheCrowdText padT100 whiteText">
                <div class="container">
                    <div class="mainTitle">
                        <h2>Quiet the Crowd, Enjoy the Journey</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="productSpec">
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Advanced ANC, Superior Voice Reduction</h3>
                        <p>Adaptive ANC 3.0 adjusts noise cancellation every 0.3s³, while a purpose-built acoustic
                            cavity dampens human voices, delivering 2x more effective voice reduction.</p>
                        <p>3. Calculated based on the recalibration frequency of the ANC algorithm, which is three times
                            per second when no audio is playing.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-1.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>True Awareness</h3>
                        <p>Upgraded with two mics on each bud. Turn on Transparency mode, and you hear the world as it
                            is—just like you're not wearing earbuds at all.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-2.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Small Stem, Big Control</h3>
                        <p>This little stem lets you mute, skip tracks, answer calls, and more—all faster and easier
                            than ever.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-3.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Ready, Pose, Snap</h3>
                        <p>Simply tap the stem when your phone camera is ready to capture a moment. No awkward arm
                            twisting, just a quick selfie in seconds.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-4.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Just the Right Size for You</h3>
                        <p>Shield your favorite tunes from noise with six sizes of ear tips, delivering a snug seal and
                            bespoke fit for your ears.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-5.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Sound Tailored to Your Ears</h3>
                        <p>soundcore's HearID 4.0 assesses your hearing, compares it to the average for your age group,
                            and tests your music taste to personalize your listening experience.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-6.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>Dual Connections, Simplified</h3>
                        <p>Connect and juggle between two devices smoothly, even with LDAC enabled. Google Fast Pair
                            adds convenience with auto-connection.</p>
                        <p>Note: Google and Android are trademarks of Google LLC.</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-6.webp" alt="productSpecImg">
                    </div>
                </div>
                <div class="productSpecBox">
                    <div class="productSpecText">
                        <h3>What's in the Box</h3>
                        <p>· soundcore Liberty 5<br>
                            · Charging Case<br>
                            · Ear Tips (Size XXS/XS/S/M/L/XL)<br>
                            · USB-C Cable</p>
                    </div>
                    <div class="productSpecImg">
                        <img src="images/productSpecImg-6.webp" alt="productSpecImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padT100">
        <div class="container">
            <div class="mainTitle">
                <h2>Specs</h2>
            </div>
            <table class="specsTable">
                <tr>
                    <td>Drivers</td>
                    <td>9.2mm Wool-Paper Diaphragm Drivers</td>
                </tr>
                <tr>
                    <td>Playtime</td>
                    <td>12H/ 48H</td>
                </tr>
                <tr>
                    <td>Sound</td>
                    <td>Hi-Fi Sound with Wool-Paper Diaphragms</td>
                </tr>
                <tr>
                    <td>Water Resistance</td>
                    <td>IP55</td>
                </tr>
                <tr>
                    <td>Bluetooth Version</td>
                    <td>5.4</td>
                </tr>
                <tr>
                    <td>Active Noise Cancellation</td>
                    <td>Adaptive ANC 3.0</td>
                </tr>
                <tr>
                    <td>Fast Charging</td>
                    <td>10 Mins = 5 Hrs</td>
                </tr>
                <tr>
                    <td>Calls</td>
                    <td>6 Mics with Al</td>
                </tr>
                <tr>
                    <td>Multipoint Connection</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Customized EQ</td>
                    <td>HearID 4.0</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>4.6g (Without case)</td>
                </tr>
                <tr>
                    <td>Special Features</td>
                    <td>Dolby Audio</td>
                </tr>
                <tr>
                    <td>Design</td>
                    <td>In-Ear</td>
                </tr>
                <tr>
                    <td>Control</td>
                    <td>Earbud Stem Control</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>
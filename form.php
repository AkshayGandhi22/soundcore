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

    <div class="formDesignSection">
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
</body>
</html>
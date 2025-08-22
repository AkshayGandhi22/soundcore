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
                    </div>
                    <div class="perfectSoundProductText">
                        <p><b>Liberty 5</b></p>
                        <h2>Quiet the Crowd, Enjoy the Journey</h2>
                        <p>Immersive Sound with Dolby Audio 2x Stronger Voice Reduction</p>
                        <a href="#" class="button">Buy Now</a>
                    </div>
                </div>
                <div class="perfectSoundProductBox">
                    <div class="perfectSoundProductImg">
                        <img src="images/spaceOnePro.webp" alt="">
                    </div>
                    <div class="perfectSoundProductText">
                        <p><b>Space One Pro</b></p>
                        <h2>Super Foldable Headphones</h2>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                </div>
                <div class="perfectSoundProductBox">
                    <div class="perfectSoundProductImg">
                        <img src="images/sportX20.webp" alt="">
                    </div>
                    <div class="perfectSoundProductText">
                        <p><b>Sport X20</b></p>
                        <h2>Elevate Your Fitness Journey</h2>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                </div>
                <div class="perfectSoundProductBox">
                    <div class="perfectSoundProductImg">
                        <img src="images/spaceQ45.webp" alt="">
                    </div>
                    <div class="perfectSoundProductText">
                        <p><b>Space Q45</b></p>
                        <h2>50 Hours of Personal Space</h2>
                        <a href="#" class="textBtn">Buy Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="size-[16px] md:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
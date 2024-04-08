<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheetah</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fontawesome/css/all.min.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="mediacss.css">

    <link rel="stylesheet" href="css/templatemo-cheetha.css">

    <link rel="phpresponseform" href="process_form.php">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="path/to/magnific-popup.min.js"></script>

    <link rel="stylesheet" href="path/to/magnific-popup.css">

    <script src="path/to/jquery.magnific-popup.min.js"></script>

    <link rel="stylesheet" href="demo-media/dist/prod/css/demo.css">

    <script src="dist/prod/vendor/js/jquery.min.js"></script>

    <script type="text/javascript" src="dist/prod/js/jQuery-face-cursor.js"></script>

    <script>
/* JavaScript for handling mouse hover on photoset in gallery page  */
        var bReady;
        $(document).ready(function () {
            $(".ps-photoset").hover(function () {
                bReady = false;
                setTimeout(function () {
                    bReady = true;
                }, 600);
            });

            $(".ps-photo").hover(function () {
                if (bReady == true) {
                    $(".ps-photo").css("z-index", "auto");
                    $(this).css("z-index", "4");
                } else {
                    
                }
            });
        });
    /* close here  */

    /* JavaScript for fading out video container after 5 seconds  */
    $(document).ready(function() {
        $('.Cheetha-main-nav').hide();
        setTimeout(function() {
            $('.Cheetha-color-gray-2-video-container').fadeOut(function() {
                $('.Cheetha-main-nav').fadeIn();
            });
        }, 5000);
    });


    $(document).ready(function() {
        if ($(window).width() <= 667) {
            $('.Cheetha-main-nav').show(); 
        }
    });
    /*  close here  */

    /*  JavaScript for opening inline popup on button click for contact page  */
    $(document).ready(function () {
        $('#inline').on('click', function (e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '#contact',
                    type: 'inline'
                },
                showCloseBtn: false  
            });
        });
    });
    /* close here  */

    /*  JavaScript for handling gallery filtering  */
    document.addEventListener("DOMContentLoaded", function () {
        var lastSelectedCategory = localStorage.getItem('selectedCategory');
        if (!lastSelectedCategory) {
            lastSelectedCategory = 'all';
        }
        document.querySelector(".Cheetha-gallery-link[data-filter='" + lastSelectedCategory + "']").classList.add("active");
        showCategory(lastSelectedCategory);
        document.querySelectorAll(".Cheetha-gallery-link").forEach(function (link) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                document.querySelectorAll(".Cheetha-gallery-link").forEach(function (el) {
                    el.classList.remove("active");
                });
                this.classList.add("active");
                var category = this.getAttribute("data-filter");
                localStorage.setItem('selectedCategory', category);
                showCategory(category);
            });
        });
    });

    function showCategory(category) {
        document.querySelectorAll(".Cheetha-gallery-item").forEach(function (item) {
            item.style.display = 'none';
        });
        document.querySelectorAll("." + category).forEach(function (item) {
            item.style.display = 'block';
        });
    } 
    /*  close here */  
    </script>
  </head>
<body>
        <!-- Header section -->
    <header class="Cheetha-site-header container-fluid">
        <div class="Cheetha-mt-0 Cheetha-mb-15 text-center">
            <span class="Cheetha-color-primary">Halfmoon Cheetah</span>
        </div>
    </header>
        <!-- Header section close here -->

    <!-- Video banner section -->
<div class="main">
    <div id="Cheetha-video-container">
        <video autoplay muted loop id="Cheetha-video">
            <source src="video/cheetah.mp4" type="video/mp4">
        </video>
        <i id="Cheetha-video-control-button" class="fas fa-pause"></i>
        <div class="text-box shadow">
            <div class="Cheetha-video-container-mt-0 Cheetha-video-container-mb-15 text-center">
                <span class="Cheetha-color-gray-2-video-container">Cheetah</span>
            </div>
        </div>
    </div> 
    <!-- Navigation Section -->      
    <div class="row container-row body-row" id="row">
        <div class="col-sm-12" >
            <img class="background-image" src="img/background.jpg" srcset="img/background.jpg 600w" alt="Background Image for Mobile">
            <nav class="Cheetha-main-nav">
                <ul id="inline-popups">
                    <div class="sticky">
                        <li class="Cheetha-nav-item Cheetha-nav-item:nth-child(1) card">
                            <a href="#intro" data-effect="mfp-move-from-top" class="Cheetha-nav-link Cheetha-nav-link-icons">
                                <span style="position:absolute;left:50%;transform: translateX(-50%); color: white; margin-top: 5px;">
                                Introduction
                                </span>
                                <i class="fas fa-3x  Cheetha-nav-link-i">
                                <span style="position:absolute;left:50%;transform: translateX(-50%); margin-top:35px;">
                                <img src="img/handshake1.png" alt="gallery Icon" class="Cheetha-nav-link-img handshake"></span>
                                </i>   
                            </a>
                        </li>
                    
                        <li class="Cheetha-nav-item Cheetha-nav-item:nth-child(2) card">
                            <a href="#gallery" data-effect="mfp-move-from-top" class="Cheetha-nav-link Cheetha-nav-link-icons"
                                id="Cheetha-gallery-link">
                                <span style="position:absolute;left:50%;transform: translateX(-50%); color: white; margin-top: 5px;">
                                Gallery
                                </span>
                                <i class="far fa-3x  Cheetha-nav-link-i">
                                <span style="position:absolute;left:50%;transform: translateX(-50%);margin-top:35px;">
                                <img src="img/gallery2.png" alt="gallery Icon" class="Cheetha-nav-link-img"></span>
                                </i> 
                            </a>
                        </li>

                        <li class="Cheetha-nav-item Cheetha-nav-item:nth-child(3) card">
                            <a href="#testimonials" data-effect="mfp-move-from-top" class="Cheetha-nav-link Cheetha-nav-link-icons">
                                <span style="position:absolute;left:50%;transform: translateX(-50%); color: white; margin-top: 5px;">Testimonials</span>
                                <i class="far fa-3x  Cheetha-nav-link-i">
                                <span style="position:absolute;left:50%;transform: translateX(-50%);margin-top:35px;"><img src="img/feedback3.png" alt="feedback Icon" class="Cheetha-nav-link-img"></span>
                                </i> 
                            </a>
                        </li>

                        <li class="Cheetha-nav-item Cheetha-nav-item:nth-child(4) card">
                            <a href="#about" data-effect="mfp-move-from-top" class="Cheetha-nav-link Cheetha-nav-link-icons">
                            <span style="position:absolute;left:50%;transform: translateX(-50%); color: white; margin-top: 5px;"> About </span>
                                <i class="far fa-3x  Cheetha-nav-link-i">
                                <span style="position:absolute;left:50%;transform: translateX(-50%);margin-top:35px;">
                                <img src="img/about.png" alt="about Icon" class="Cheetha-nav-link-img"></span>
                                </i>
                            </a>
                        </li>                           
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</div>
    
 <!-- Popup Sections -->
<div class="Cheetha-container">
        <!-- Introduction Sections -->       
    <div id="intro" class="popup mfp-with-anim mfp-hide Cheetha-bg-black">
            <a href="#" class="Cheetha-close-popup">
                <i class="fas fa-times"></i>
            </a>
            <h2 class="Cheetha-page-title">
                Introduction
            </h2>
            <div class="container">
                <div class="row box-container">
                    <div class="col">
                        <div class="intro-box1" id="overflow-intro" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;border: 5px solid black;">                       
                            <article>                          
                                <p class="intro intro-article" id="scrolbar-intro"> 
                                    Hi, i am "manish", a professional who applies engineering principles to 
                                    the design, development, maintenance,and testing of software systems. 
                                    I, possess a deep understanding of programming languages, algorithms, 
                                    data structures. "Indian rocket" aka "sarthak" play a crucial role in 
                                    creating and maintaining that powers our modern world, from mobile apps and websites.   
                                </p>
                            </article>
                        </div>                     
                    </div>
                    <div class="col">
                        <div class="intro-box1 intro-box2" id="overflow-intro" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;border: 5px solid black;">                       
                            <article>                          
                                <p class="intro intro-article" id="scrolbar-intro"> 
                                    I often work closely with other professionals, such 
                                    designers, and quality assurance testers, to bring 
                                    software projects from concept to completion. As
                                    technology continues to advance at a rapid pace,
                                    my role of the software engineer remains in high 
                                    demand, with opportunities for specialization 
                                    in areas such as artificial intelligence,
                                    cybersecurity, and cloud computing.
                                </p>
                            </article>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="intro-box2" style="border: 5px solid black;">                       
                            <img src="img/img/introduction.jpg" alt="Image" class="intro-box2-img">
                        </div>      
                    </div>
                </div>
            </div>    
        </div>
    </div>
        <!-- Gallery Sections -->
    <div id="gallery" class="popup mfp-with-anim mfp-hide Cheetha-bg-black">
        <a href="#" class="Cheetha-close-popup"> 
            <i class="fas fa-times"></i>
        </a>
        <h2 class="Cheetha-mt-35 Cheetha-page-title">
            Gallery
        </h2>
        <div class="Cheetha-col Cheetha-gallery-right">
            <div class="Cheetha-gallery-right-inner">
                <ul class="Cheetha-gallery-links menuItems">
                    <a href="#" class="Cheetha-gallery-link active" data-filter="all">   
                    </a>
                    <li class="icon-sports">
                        <a href="#" class="Cheetha-gallery-link Cheetha-gallery-link-icon Category-pair Portraits " data-filter="portrait">
                            <img class="Cheetha-gallery-link-icon " src="img/img/sports-icon.png" alt="Sports Icon">
                            Sports
                        </a>
                    </li>
                    <li class="icon-nature">
                        <a href="#" class="Cheetha-gallery-link Cheetha-gallery-link-icon Category-pair Nature" data-filter="nature">
                            <img class="Cheetha-gallery-link-icon Ocean-vibes-gallery-link-icon-nature" src="img/img/nature-icon.png" alt="Sports Icon">
                            Nature
                        </a>
                    </li>
                    <li class="icon-animal">
                        <a href="#" class="Cheetha-gallery-link Cheetha-gallery-link-icon Animal" data-filter="animal">
                            <img class="Cheetha-gallery-link-icon" src="img/img/animals-icon.png" alt="Sports Icon">
                            Animals
                        </a>
                    </li>
                    <li class="icon-architecture">
                        <a href="#" class="Cheetha-gallery-link Cheetha-gallery-link-icon Building" data-filter="building">
                            <img class="Cheetha-gallery-link-icon Ocean-vibes-gallery-link-icon-nature" src="img/img/architecture-icon.png" alt="Sports Icon">
                            Architecture
                        </a>
                    </li>
                </ul>
            </div>
            <div class="Cheetha-gallery-container" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                <aside class="ps-container effect-chico Cheetha-gallery-item portrait">
                    <section class="ps-photoset">
                        <img class="ps-photo" src="img/img/sports-3.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/sports-1.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/sports-2.jpg" alt="Image" />
                    </section>
                </aside>
                <aside class="ps-container effect-chico Cheetha-gallery-item nature">
                    <section class="ps-photoset">
                        <img class="ps-photo" src="img/img/nature-3.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/nature-1.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/nature-2.jpg" alt="Image" />
                    </section>
                </aside>
                <aside class="ps-container effect-chico Cheetha-gallery-item animal">
                    <section class="ps-photoset">
                        <img class="ps-photo" src="img/img/animals-3.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/animal.jpeg" alt="Image" />
                        <img class="ps-photo" src="img/img/animals-2.jpg" alt="Image" />
                    </section>
                </aside>
                <aside class="ps-container effect-chico Cheetha-gallery-item building">
                    <section class="ps-photoset">
                        <img class="ps-photo" src="img/img/architecture-3.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/architecture-1.jpg" alt="Image" />
                        <img class="ps-photo" src="img/img/architecture-2.jpg" alt="Image" />
                    </section>
                </aside> 
            </div>
        </div>
    </div>
        <!-- Testimonials Sections -->
    <div id="testimonials" class="popup mfp-with-anim mfp-hide Cheetha-bg-black">
        <div class="d-flex bd-highlight align-self-center text-center">
            <div class="p-2 bd-highlight align-self-center">
                <a href="#" class="Cheetha-close-popup">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <div class="p-2 flex-grow-1 bd-highlight align-self-center">
                <h2 class="Cheetha-mt-35 Cheetha-page-title"> Testimonials </h2>
            </div>
        </div>
        <div class="container container-testimonials">
            <!-- Clients Review Section -->
            <div class="row row-cols-1 row-cols-md-3 g-4 reviewSection">
                <!-- Clients Review-1 Section Starts from Here  -->
                <div class="col">
                    <div class="reviewItem" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        <div class="top container-icons-first">
                            <ul class="container-icons">
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                            </ul>
                            <h5 class="testmonials-h5" id="scrollbar-horzental">Soika</h5>
                        </div>
                        <article>
                            <p class="review testimonials-articls review-text" id="scrolbar-testmonials"> I have been using "cheetah"
                                 for quite some time now and I must say, 
                                 it has completely transformed the way I work.
                                 I am always looking for ways to improve my 
                                 productivity and this software has definitely helped me.
                            </p>
                        </article>
                    </div>
                    <div class="clientImage">
                        <img src="img/img/testimonials-girl-1.jpg" alt="">
                    </div>
                </div>

                <!-- Clients Review-2 Section Starts from Here  -->
                <div class="col">
                    <div class="reviewItem" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        <div class="top container-icons-second">
                            <ul class="container-icons ">
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                            <h5 class="testmonials-h5" id="scrollbar-horzental">Brad</h5>
                        </div>
                        <article>
                            <p class="review testimonials-articls review-text" id="scrolbar-testmonials"> The user-friendly interface and efficient
                                features have made my work much easier and faster. 
                                I am based in delhi and this software "cheetah" has
                                been a game-changer for me. 
                            </p>
                        </article>
                    </div>
                    <div class="clientImage">
                        <img src="img/img/testimonials-boy-2.jpg" alt="">
                    </div>
                </div>

                <!-- Clients Review-3 Section Starts from Here  -->
                <div class="col" style="align-content: center;">
                    <div class="reviewItem" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        <div class="top">
                            <ul class="container-icons container-icons-third" style="margin-top: 10px;">
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-solid fa-star filled"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                            <h5 class="testmonials-h5" id="scrollbar-horzental">Nohn foe</h5>
                        </div>
                        <article>
                            <p class="review testimonials-articls" id="scrolbar-testmonials">I highly recommend it to anyone
                                looking to streamline their work process and
                                increase their efficiency. Thank you, cheetah,
                                for making my work life so much better!
                            </p>
                        </article>
                    </div>
                    <div class="clientImage">
                        <img src="img/img/testimonials-boy-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>    
    </div>
        <!--  About Sections -->
    <div id="about" class="popup mfp-with-anim mfp-hide Cheetha-bg-black">
        <a href="#" class="Cheetha-close-popup"> 
            <i class="fas fa-times"></i>
        </a>
        <h2 class="Cheetha-mt-35 Cheetha-page-title">
        About
        </h2>
        <div class="Cheetha-row Cheetha-about-row box-container-about">
            <div class=" Cheetha-about-col Ocean-vibes-about-left Cheetha-img">
                <img src="img/img/about-us.jpg" alt="Image" class="Cheetha-mb-30 Cheetha-about-img Cheetha-img">
            </div>
            <div class="Cheetha-col Cheetha-about-col bg-color" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;"> 
                <p class="Cheetha-mb-40 bg-color-text about-article " id="scrolbar-p">
                    At "halvemoon", we are fueled by passion. We are passionate about
                    creating exceptional web applications that make a difference for
                    our clients. Our enthusiasm drives us to constantly learn, innovate,
                    and deliver solutions that exceed expectations. We are excited to
                    embark on this journey with our clients, helping them unlock their
                    full potential in the digital world.
                    Our team at Halvemoon comprises highly skilled and passionate
                    professionals who are dedicated to delivering outstanding web
                    applications. our team members work 
                    collaboratively to bring our clients' visions to life.
                </p>
            </div>
        </div>
    </div>
        <!--  Contact Sections -->
    <div id="contact" class="popup mfp-with-anim mfp-hide Cheetha-bg-black">
        <a href="#" class="Cheetha-close-popup">
            <i class="fas fa-times"></i>
        </a>
        <h2 class="Cheetha-mt-35 Cheetha-page-title">
        Contact Us
        </h2>
        <div class="Cheetha-row Ocean-vibes-contact-row" >
            <div class="Cheetha-col Cheetha-contact-col Cheetha-contact-col-center">
                <div class="center  Cheetha-contact-col-center" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <form action="process_form.php" method="POST" class="form">
                        <div class="inputbox">
                            <input type="text" name="full_name" required="required" >
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="subject" required="required">
                            <span>Subject</span>
                        </div>
                        <div class="inputbox ">
                            <textarea name="message" required="required" class="input" id="#overflow" style="overflow: hidden;"></textarea>
                            <span>Message</span>
                        </div>
                        <div class="inputbox">
                            <input type="submit" name="submit" value="Send">
                        </div>
                    </form>
                </div>   
            </div>
            <div class="Cheetha-col Cheetha-contact-col Cheetha-contact-col-r Cheetha-contact-col-map">
                <!-- Map -->
                <div class="mapouter Cheetha-mb-40 mapouter-map ">
                    <div class="gmap_canvas mapouter-li">
                        <embed width="100%" height="520" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14030.581381516777!2d77.0264679435671!3d28.46010556987771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d184fd62727b7%3A0x124a7d2d637f4ae2!2sSector%2015%20Part%202%2C%20Sector%2015%2C%20Gurugram%2C%20Haryana%20122022!5e0!3m2!1sen!2sin!4v1708690830578!5m2!1sen!2sin"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </embed>
                    </div>
                </div>
                <div class="row row-li row-li-address" style="background-image: url('img/background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="col-sm-6 font-size">
                        <!-- Address -->
                        <div style="display: flex; align-items: center; font-size: 10px;">
                            <img src="img/img/address-icon.png" alt="Address Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                            <span style="color: black; font-size: 15px;">Address:</span>
                        </div>
                        <address class="font-size" style="text-align: center; color: black; font-size: 15px; font-weight: bold;text-align: justify;">
                            Halvemoon, Sector 15 Part 2,
                            Village Silokhera, Gurugram, 
                            Haryana-122002
                        </address>                           
                        <!-- Email -->
                        <div style="display: flex; align-items: center;">
                            <img src="img/img/email-icon.png" alt="Email Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                            <span style="color: black; font-size:15px;">Email:</span>
                        </div>
                        <a href="mailto:info@company.com"id="overflow-mail" style="text-align: center; color: black;font-size: 15px; font-weight: bold; ">
                            halfmoon.ccs@gmail.com
                        </a>                            
                    </div>                        
                    <div class="col-sm-6">
                        <!-- Mobile -->
                        <div style="display: flex; align-items: center;">
                            <img src="img/img/mobile-icon.png" alt="Mobile Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                            <span style="color: black; font-size:15px;">Mobile:</span>
                        </div>
                        <a href="#" style="text-align: center; color: black;  font-size: 15px; font-weight: bold;">
                            9205910419
                        </a>
                        <!-- Website -->
                        <div style="display: flex; align-items: center;padding-top: 80px; ">
                            <img src="img/img/website-icon.png" alt="Website Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                            <span style="color: black; font-size:15px;">Website:</span>
                        </div>
                        <a href="https://www.halvemoon.com/" class="website-icon" style="text-align: center; color: black; font-size: 15px; font-weight: bold;" target="_blank">
                            halvemoon.com
                        </a>                            
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>    
<!-- Footer Section -->
<footer class="Cheetha-footer">
<div id="overflow">
    <span class="footer-span">Copyright &copy; 2024 </span>
    <a href="#contact" id="inline" data-effect="mfp-move-from-top" class="footer-a">Contact Us</a>
    <a href="https://icons8.com/" data-effect="mfp-move-from-top" class="footer-icons footer-a" target="_blank">Icons8</a>
    <a href="https://www.freepik.com/" data-effect="mfp-move-from-top" class="footer-icons footer-a" target="_blank">Freepik</a>
</div>
</footer>

   <!-- Additional Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-script.js"></script>

    <!-- jQuery-face-cursor Script -->
    <script type="text/javascript" src="dist/prod/js/jQuery-face-cursor.js"></script>
    <script>
        $(".card").faceCursor();
    </script>
</body>
</html>
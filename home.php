<?php
$title ='Bunyan || Home';
include('./components/head.php')
?>
    <link rel="stylesheet" href="./assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/styles/owl.theme.default.min.css"> 
</head>

<body>
<?php 
include('./components/header.php')
?>
    <div class="  min-h-100   relative  ">
        <div class="video_container absolute top-0 left-0 w-full h-full">
            <span class="absolute  left-0 w-full  hero-overlay-2 z-5"></span>
            <span class="absolute top-0 left-0 w-full  hero-overlay-1 "></span>
            <span class="absolute top-0 left-0 w-full  hero-overlay z-5"></span>
            <video src="https://designinguru.com/video/bunyanintro.mp4" autoplay muted loop class="relative"></video>
        </div>
        <div class="max-width flex align-end justify-start min-h-100 top-0 container-y">
            <h1 class="text-white mb-1 relative z-7">A Title Include A <span>Brand</span> <br>
                Message</h1>
        </div>
    </div>
    <div class=" max-width pt-9 pb-9 flex dir-col justify-center min-h-100 relative">
        <div class="img_container absolute w-full h-full top-0 left-0 ">
            <img src="./assets/images/home/bg/company_achievement-bg.webp" class="object-fit-contain" alt="Company Achievments">
        </div>
        <div class=" mb-2   flex dir-col align-center relative">
            <h4 class="mb-1 title text-blue text-center">A Title Related to Company <br> Achievments</h4>
            <p class="lead text-grey mb-2 col-6 text-center kaff-light lh-28">
                Through our high quality and proven track
                record, we endeavor to assist
                individuals and establishments to reach their maximum level of brilliance.
            </p>
            <a href="#" class="text-uppercase text-primary text-underline  kaff-light">
                Learn More
            </a>
        </div>
        <div class="max-width">
            <div class="flex col-12 justify-center mt-3 relative">
                <div class="col-10 flex justify-between counter">
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">6</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Academies</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">4</span>K<span>+</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Students</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">24</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Programs</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center ">
                        <span class="text-primary text-60 text-light"><span class="count">5</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Awarding</span>
                    </div>
                </div>

            </div>

        </div>



    </div>
    <div class="  bg-blue  min-h-100 flex dir-col  relative justify-center Services">
        <span class="absolute top-0 left-0  w-full h-full service_section_overlay z-5">

        </span>
        <div class="max-width pt-9 pb-9 z-7">
            <div class="flex dir-col  align-center">
                <span class="text-primary text-uppercase text-light   ls-1-1 kaff-light mb-1-2">Our Services</span>
                <h4 class="title text-white mb-4 text-center">A Title Related to Bunyan <br>
                    Services
                </h4>
            </div>
            <div class="flex justify-between mb-3">
                <div class="col-4 card align-center justify-end   relative flex dir-col row-gap-1 p-1 text-white">

                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/services/training.webp" alt="Training" class="imgZoomHover">
                    </div>
                    <span class="text-32 relative z-5">Training</span>
                    <span class="relative text-center ls-1-1 kaff-light lh-24 z-5">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolorem temporibus maiores!</span>
                    <a href="#" class="text-underline ls-1-1 text-uppercase kaff-light z-5">Learn More</a>
                </div>
                <div class="col-4 card align-center justify-end   relative flex dir-col row-gap-1 p-1 text-white">

                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/services/advisory_consultant.webp" alt="Advisory & Consultancy"
                            class="imgZoomHover ">
                    </div>
                    <span class="text-32 relative text-center z-7">Advisory & Consultancy</span>
                    <span class="relative text-center z-7 ls-1-1 kaff-light lh-24">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolorem temporibus maiores!</span>
                    <a href="#" class="text-underline ls-1-1 text-uppercase  z-7 kaff-light">Learn More</a>
                </div>
                <div class="col-4 card align-center justify-end   relative flex dir-col row-gap-1  p-1 text-white">

                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/services/operation_management.webp" alt="Operation Managemnet"
                            class="imgZoomHover">
                    </div>
                    <span class="text-32 relative text-center z-7">Operation Managemnet</span>
                    <span class="relative text-center z-7 ls-1-1 kaff-light lh-24">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolorem temporibus maiores!</span>
                    <a href="#" class="text-underline ls-1-1 text-uppercase  z-7 kaff-light">Learn More</a>
                </div>
            </div>
            <div class="flex justify-center pt-2 ">
                <a href="#" class="text-uppercase text-white text-underline ls-1-1 kaff-light  primary-hover">See ALL
                    The Services</a>
            </div>
        </div>
    </div>
    <div class=" min-h-100 flex dir-col justify-center ">
        <div class=" pb-9 pt-9">
            <div class=" flex dir-col  align-center col-7  mlr-auto  ">
                <span class="text-center text-uppercase text-primary kaff-light   ls-1-1 mb-1-2">Our Partners</span>
                <h4 class="title mb-1 text-blue mb-1 text-center">
                    A Title Related to Companies <br>
                    Partners
                </h4>
                <span class="lead  kaff-light text-grey text-center lh-28">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium atque rem a quis sequi ducimus
                    voluptatum suscipit, assumenda officia quisquam molestiae? Ut, quos repellendus. </span>
            </div>
            <div class="Slider pt-5 max-width-1440">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="./assets/images/home/partner/partner1.png" alt="partner1"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner2.png" alt="partner2"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner3.png" alt="partner3"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner4.png" alt="partner4"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner5.png" alt="partner5"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner6.png" alt="partner6"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner7.png" alt="partner7"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner8.png" alt="partner8"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner2.png" alt="partner9"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner5.png" alt="partner10"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner4.png" alt="partner11"></div>
                    <div class="item"><img src="./assets/images/home/partner/partner7.png" alt="partner12"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="   justify-end   flex dir-col text-white relative h-600">
        <span class="absolute top-0 left-0  w-full h-full accreditation_overlay z-5">

        </span>
        <div class="absolute top-0 left-0 img_container w-full h-full">
            <img src="./assets/images/home/become-partner/accreditation.jpg" alt="Accreditation">
        </div>
        <div class="max-width container-y justify-end   flex dir-col col-12 z-7">
            <h4 class="title mb-1 relative">A Title Related to Accreditation</h4>
            <span class="mb-3 col-5  lead relative kaff-light lh-28">
                Students of Bunyan benefit form our established partnership with hospitality
                industry leaders and is accredited to various academic bodies<span>;</span> including Ecole hoteliere de Lausanne for our tourism, hospitality and entertainment programs and our executive programs.

            </span>
            <a href="#" class="btn btn-primary mb-3 partnerBtn" data-text='Become a Partner'> </a>
        </div>
    </div>
    <div class="   min-h-100 flex dir-col justify-center NEWS pt-9 pb-9">
        <div class="flex dir-col align-center max-width">
            <span class="text-uppercase text-primary text-light ls-1-1 mb-1-2 kaff-light">Our News</span>
            <h4 class="title text-blue mb-3">A Title Related to Company News</h4>
            <div class="flex justify-between mb-3 col-12  ">
                <div
                    class="col-4 card align-start p-1 relative flex dir-col row-gap-1 p-1 text-white justify-end bg-blue">
                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/news/qoot.webp" alt="Qoot" class="imgZoomHover">
                    </div>
                    <span class=" text-primary relative lead z-7">5 April, 2019</span>
                    <span class=" mb-1 relative text-28 ls-1-1 z-7">Establish Qoot academy in <br> riyadh.</span>
                    <a href="#" class="kaff-light text-underline z-7 ls-1-1 text-uppercase text-white">Learn More</a>
                </div>
                <div class="col-4 card align-start p-1 relative flex dir-col row-gap-1 p-1 text-white justify-end">
                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/news/hospitality.webp" alt="Hospitality" class="imgZoomHover">
                    </div>
                    <span class=" text-primary relative lead z-7">5 April, 2019</span>
                    <span class=" mb-1 relative text-28 ls-1-1 z-7">Localization solution in the
                        hospitality & tourism sector.</span>
                    <a href="#" class="kaff-light text-underline z-7 ls-1-1 text-uppercase text-white">Learn More</a>
                </div>
                <div class="col-4 card align-start p-1 relative flex dir-col row-gap-1 p-1 text-white justify-end">
                    <div class="img_container absolute top-0 left-0 w-full h-full">
                        <span class="absolute top-0 left-0  w-full h-full service_card_overlay z-5">

                        </span>
                        <img src="./assets/images/home/news/tourism.webp" alt="Tourism" class="imgZoomHover">
                    </div>
                    <span class=" text-primary relative lead z-7">5 April, 2019</span>
                    <span class=" mb-1 relative text-28 ls-1-1 z-7">Localization solution in the
                        hospitality & tourism sector.</span>
                    <a href="#" class="kaff-light text-underline ls-1-1 z-7 text-uppercase text-white">Learn More</a>
                </div>
            </div>
            <div class="flex justify-center pt-2">
                <a href="#" class="text-uppercase text-primary kaff-light text-underline ls-1-1 blue-hover ">See ALL The
                    News</a>
            </div>

        </div>
    </div>
       <?php
        include('./components/footer.php')
        ?>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/numberAnimation.js"></script>
    <script src="./assets/js/partnersCarousel.js"></script>
</body>

</html>
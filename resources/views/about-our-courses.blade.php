@extends("common/head")
@section("content")



<!--site-main start-->
<div class="site-main">

    <!--about_fea-section-->
    <section class="cmt-row about_fea-section cmt-bgcolor clearfix" id="contacts-main-main-main-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-xs-12" id="second-page-contactus">
                    <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                            <div class="cmt-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="pr-40 res-991-pr-0 res-991-pb-40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <!-- <h5>ABOUT AGENCY</h5> -->
                                        <h2 class="title" id="texxxxt"><strong>IELTS PTE DUOLINGO
                                                COACHING</strong>
                                        </h2>
                                    </div>
                                </div><!-- section title end -->
                                <p id="texxxt-p">Try our online and offline coaching to get instant scores on
                                    English proficiency tests like IELTS, PTE, DUOLINGO, DUOLINGO,
                                    and Foreign Languages.
                                </p><br>

                                <div class="call-number-fie">
                                    <input style="background-color: #ffff; width: 100%; box-shadow: 2px 5px 6px #4c4c4c; padding: 12px 10px 12px 60px;" type="tel" id="phoneInput" placeholder="Enter phone number">
                                    &nbsp;&nbsp;&nbsp;<button class="new-contact-btn"><a class="arrow-new-contact" onclick="openLogin()"><br><br><i class="fa-solid fa-arrow-right fa-shake"></i></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 col-xs-8 mx-auto">
                    <div class=" cmt-col-bgcolor-yes pt-10 pl-10 pr-10 pb-10 z-index-999992" id="images-conta">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                        <div class="layer-content">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper text-center">
                                <img style="border-radius: 25px; height: fit-content; width: 100%;" class="img-fluid" src="images/slides/visitor-visa.png" alt="single_10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about_fea-sectio end-->
    <!-- <p class="We-are-professional">Education That Benefits</p>
            <h2 class="We-are-our-office">Our Coaching Mediums</h2> -->
    <br>

    <!-- courses section start -->
    <section style="background-color:  rgba(236, 255, 255, 0.425);" class="cmt-row team-section clearfix">
        <div class="container">

            <div class="section-title title-style-center_text">
                <div class="title-header">
                    <p class="We-are-professional">Education That Benefits</p>
                    <h2 class="We-are-our-office">Our Coaching Mediums</h2>
                </div>
            </div>

            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 3}}, {"breakpoint":678,"settings":{"slidesToShow": 1 }}, {"breakpoint":460,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/about-course-our-0.png" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">Inhouse Coaching
                            </h5>
                            <p class="card-text text-center text-course-hidden">Take advantage of our in-house
                                coaching programs to sharpen your English, learn foreign languages, and succeed
                                on English proficiency exams like the TOEFL, PTE, and IELTS.

                            </p>
                            <br>
                            <p class="text-center"><a href="/inhouse-courses" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses-two.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/about-course-our-2.webp" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">Online Coaching
                            </h5>
                            <p class="card-text text-center text-course-hidden">Take advantage of our in-house
                                coaching programs to sharpen your English, learn foreign languages, and succeed
                                on English proficiency exams like the TOEFL, PTE, and IELTS.

                            </p>
                            <br>
                            <p class="text-center"><a href="/online-coaching" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses-three.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/about-course-our-1.webp" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">Practice Packs
                            </h5>
                            <p class="card-text text-center text-course-hidden">Take advantage of our in-house
                                coaching programs to sharpen your English, learn foreign languages, and succeed
                                on English proficiency exams like the TOEFL, PTE, and IELTS.</p>
                            <br>
                            <p class="text-center"><a href="/practic-packs" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>




                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses-four.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/ielts-course-icon-four.png" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">FRENCH
                            </h5>
                            <p class="card-text text-center text-course-hidden">Millions of people speak French,
                                a Romance language, worldwide. It is well-known for its grace, diverse cultural
                                legacy,
                                and literary, culinary, and artistic influences. Numerous nations, notably
                                France, Canada.</p>
                            <br>
                            <p class="text-center"><a href="#" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses-five.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/ielts-course-icon-five.png" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">SPOKEN ENGLISH
                            </h5>
                            <p class="card-text text-center text-course-hidden">Master English speaking with
                                Indowest
                                Our institute offers vibrant, joyful learning, inspiring progress. Join now for
                                an
                                enriching experience that compels you to excel in communication skills."</p>
                            <br>
                            <p class="text-center"><a href="#" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex a-col-4">
                    <div class="card a-card" style="width: 100%; padding: 20px;">
                        <img src="/images/slides/about-our-courses-six.png" class="card-img-top" alt="...">
                        <div class="card-body c-aniket">
                            <p class="text-center ani-i"><img src="/images/client/ielts-course-icon-six.png" alt="">
                            </p>

                            <h5 class="card-title text-center fs-3">PTE FOR UKVI
                            </h5>
                            <p class="card-text text-center text-course-hidden">"For the Pearson Test of
                                English, PTE MKVI provides professional coaching. With the help of our
                                customized instruction,
                                ace your PTE exam. Come and get your language proficiency evaluated with us
                                immediately."</p>
                            <br>
                            <p class="text-center"><a href="#" class="Packages ms-auto me-auto">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses section End -->
    <br>
    <br>
    <br>
    <br>

    <p class="We-are-professional">Proficiency Tests to Language Courses</p>
    <h2 class="We-are-our-office">Our Range of Courses</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 heroSlider-fixed">
                <!-- Slider -->
                <div class="slider responsive">
                    <div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/IELTS.png" alt="" />
                            <h2 class="text-about-our">IELTS</h2>
                        </div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/FRENCH.png" alt="" />
                            <h2 class="text-about-our">FRENCH</h2>
                        </div>
                    </div>
                    <div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/PTE.png" alt="" />
                            <h2 class="text-about-our">PTE</h2>
                        </div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/PTE FOR UKVI.png" alt="" />
                            <h2 class="text-about-our">PTE FOR UKVI</h2>
                        </div>
                    </div>
                    <div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/DUOLINGO.png" alt="" />
                            <h2 class="text-about-our">DUOLINGO</h2>
                        </div>
                        <!-- <div class="shubham-1">
                                    <img class="about-our-courses-image" src="/images/slides/image-range-courses.webp"
                                        alt="" />
                                    <h2 class="text-about-our">IELTS</h2>
                                </div> -->
                    </div>
                    <div>
                        <div class="shubham-1">
                            <img class="about-our-courses-image" src="/images/slides/SPOKEN ENGLISH.png" alt="" />
                            <h2 class="text-about-our">SPOKEN ENGLISH</h2>
                        </div>
                        <!-- <div class="shubham-1">
                                    <img class="about-our-courses-image" src="/images/slides/image-range-courses.webp"
                                        alt="" />
                                    <h2 class="text-about-our">IELTS</h2>
                                </div> -->
                    </div>
                    <!-- <div>
                                <div class="shubham-1">
                                    <img class="about-our-courses-image" src="/images/slides/image-range-courses.webp"
                                        alt="" />
                                    <h2 class="text-about-our">IELTS</h2>
                                </div>
                                <div class="shubham-1">
                                    <img class="about-our-courses-image" src="/images/slides/image-range-courses.webp"
                                        alt="" />
                                    <h2 class="text-about-our">IELTS</h2>
                                </div>
                            </div> -->
                    <!-- <div>
                                <div class="shubham-1">
                                    <img class="about-our-courses-image" src="/images/slides/image-range-courses.webp"
                                        alt="" />
                                    <h2 class="text-about-our">IELTS</h2>
                                </div>
                            </div> -->
                </div>
                <!-- control arrows  -->
                <div class="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </div>
                <div class="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid study-visa-image-gallery-maincontainer">
        <div class="nitin">

            <div class="container ">
                <!-- section 1 -->
                <div class="row my-3 image-gallery-row">
                    <div class="col-sm-3">
                        <h2 class="image-galle-study">Image Gallery</h2>
                        <div class="image-1x1">
                            <img src="/images/client/image-gallery-3.JPG" width="100%" height="fit-content" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 study-image-gallery">
                        <div class="image-1x1">
                            <img src="/images/client/image-gallery-2.JPG" width="100%" height="fit-content" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 study-image-gallery">
                        <div class="image-1x1">
                            <img src="/images/client/image-gallery-1.JPG" width="100%" height="fit-content" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 study-visa-image-gallery-sec">
                        <div class="mt-auto mb-auto">
                            <h2 class="image-gallery-study">Image Gallery</h2>
                            <div class="header_btn mr-20">
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="image-gallery-btn" href="/web-media-gallery">View All
                                    <i class="fa-solid fa-arrow-right fa-shake"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid study-visa-image-gallery-maincontainer d-flex justify-content-end" id="study-gallery-maincontainer">
        <div class="nitin-1">

            <div class="container ">

                <!-- section 1 -->
                <div class="row my-3">
                    <div class="col-sm-3 ">
                        <div class="study-visa-video-gallery">
                            <h2 class="image-gallery-stu">Video Gallery</h2>
                            <div class="header_btn mr-20 video-btn-gallery">
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="image-gallery-btn" href="#">View All
                                    <i class="fa-solid fa-arrow-right fa-shake"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="image-1x1">
                            <iframe width="100%" height="fit-content" src="https://www.youtube.com/embed/egg7bazM0KE" title="&quot;Satisfied client, grateful for the outstanding support.&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-3 study-image-gallery">
                        <div class="image-1x1">
                            <iframe width="100%" height="fit-content" src="https://www.youtube.com/embed/cA7N4aeUKeQ" title="🎊Congratulations, Vinod Kumar, on your USA tourist visa!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-3 study-image-gallery">
                        <div class="image-1x1">
                            <iframe width="100%" height="fit-content" src="https://www.youtube.com/embed/W_cNVT9bJ5A" title="USA TOURIST VISA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>

                <div class="header_btn mr-20 image-galle-study">
                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="image-gallery-btn" href="#">View All
                        <i class="fa-solid fa-arrow-right fa-shake"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>



    <!--testimonial-section-->
    <section id="testimonials-background-imagenew" class="cmt-row imonial-section clearfix">
        <div class="section-title title-style-center_text">
            <div class="title-header">
                <p class="We-are-professional">Testimonials</p>
                <h2 class="We-are-our-office">Client Feedback Our Greatest Reward</h2>
            </div>
        </div>
        <section id="testim" class="testim">
            <div class="wrap">
                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">

                    <div class="active">
                        <div class="img"><img src="/images/testimonial/Nishi-Dhiman-testimonials.png" alt="">
                        </div>
                        <h2>Nishi Dhiman</h2>
                        <p>Hy everyone, I am from Ambala city and want to share my great experience with
                            institute. Their faculty is very good and
                            I like the way they are assisting in every process whether its visa application or
                            any other related matter. It's a very
                            good institute and highly recommend to everyone.
                        </p>
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonial/Harleen-Kaur.png" alt="">
                        </div>
                        <h2>Harleen Kaur</h2>
                        <p>It was a wonderful experience from indo west. Many of my family members have got
                            their visa from indo west (Study visa's
                            and tourist Visa's too) . So trustworthy and they work with efficiency. It was a
                            cheerful experience with them and Vimmi
                            mam is so kind . 💗
                        </p>
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonial/harsh-testimonials.png" alt="">
                        </div>
                        <h2>Harsh Sarwara</h2>
                        <p>Recently I got my Canadian study visa from Indo west academy and within a few weeks I
                            received my ppr moreover my
                            overall experience was great
                        </p>
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonial/Varsha-2003.png" alt=""></div>
                        <h2>Varsha</h2>
                        <p>Great institute for ielts and pte classes and also for visa 🤗🤗🎉🎉🎉🎉 suggest
                            everyone to visit indowest academy
                        </p>
                    </div>

                    <div>
                        <div class="img"><img src="/images/testimonial/Jassujatt-Jassu-testimonials.png" alt="">
                        </div>
                        <h2>Jassujatt Jassu</h2>
                        <p>I achieved my dreams by applying for my study visa with indo west academy I would
                            recommend everyone who want to achieve
                            their goal of studying or visiting abroad , to visit once indo west the no 1
                            institute of ielts and precursor in ambala
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--testimonial-section end-->






    <div style="background-color: #fff;" class="gallery-container">
        <br>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <!-- <p class="We-are-professional">Proficiency Tests to Language Courses</p> -->
                        <h2 class="We-are-our-office">Instagram Feed</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->

        <section class="section">
            <div class="grid">

                <div class="item item--large">
                </div>
                <div class="item item--large">

                </div>
                <div class="item item--large">
                </div>
                <div class="item item--large">
                </div>
                <div class="item item--large">
                </div>
                <div class="item item--large">
                </div>


            </div>
    </div>
</div>


<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->



<script>
    const phoneInput = document.querySelector("#phoneInput");

    // Initialize intlTelInput
    const iti = window.intlTelInput(phoneInput, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
    });

    // Set initial country to India
    iti.promise.then(() => {
        iti.setCountry("in");
    });

    // Listen for the country change event
    phoneInput.addEventListener("countrychange", function() {
        const countryCode = iti.getSelectedCountryData().iso2;
        console.log("Selected country code:", countryCode);
    });
</script>
<script>
    $(".responsive").slick({
        dots: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
@endsection
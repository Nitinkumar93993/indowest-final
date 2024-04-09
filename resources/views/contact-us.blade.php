@extends('common/head')
@section('content')




    <!--site-main start-->
    <div class="site-main">

        <!--about_fea-section-->
        <section class="cmt-row about_fea-section cmt-bgcolor clearfix" id="contacts-main-main-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-xs-12" id="second-page-contactus">
                        <div
                            class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="pr-40 res-991-pr-0 res-991-pb-40">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <!-- <h5>ABOUT AGENCY</h5> -->
                                            <h2 class="title" id="texxxxt"><strong>Contact Us</strong>
                                            </h2>
                                        </div>
                                    </div><!-- section title end -->
                                    <p id="texxxt-p">Please feel free to ask any questions you may have or for help
                                        if you need it related to immigration and visa services.
                                        At Indo-West, our professionals will give you the greatest advice and
                                        information.
                                    </p><br>

                                    <div class="call-number-fie">
                                        <input
                                            style="background-color: #ffff; width: 100%; box-shadow: 2px 5px 6px #4c4c4c; padding: 12px 10px 12px 60px;"
                                            type="tel" id="phoneInput" placeholder="Enter phone number">
                                        &nbsp;&nbsp;&nbsp;<button class="new-contact-btn"><a class="arrow-new-contact"
                                                onclick="openLogin()"><br><br><i
                                                    class="fa-solid fa-arrow-right fa-shake"></i></a></button>
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
                                    <img style="border-radius: 25px; height: fit-content; width: 100%;" class="img-fluid"
                                        src="images/slides/contact-contact-2.jpg" alt="single_10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--about_fea-sectio end-->

        <!--cta-section-->
        <section style="background-color:  rgba(236, 255, 255, 0.425);"
            class="cmt-row cta_2-section bg-img6  cmt-bg cmt-bgimage-yes cmt-bg-pattern clearfix">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center text-lg-left text-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="row-title mb-20 res-991-mb-30">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2>Hotline Assistance</h2>
                                    <p id="texxxt-p">Indo-West can assist you! Learn about our hotline services and
                                        important
                                        contact information to receive all the
                                        assistance
                                        you need for coaching and visa services. We appreciate your interest. For
                                        further information, please visit the branch
                                        tha
                                        t is closest to you to speak with an expert.</p>
                                </div>
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5><a href="tel:+91 999-6114-545">+91 999-6114-545</a></h5>
                                        </div>
                                        <!-- <div class="featured-desc">
                                                    <p>Drop Us a Line</p>
                                                </div> -->
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                                            <i class="fa-brands fa-square-whatsapp"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5><a href="tel:+91 999-6114-545">+91 999-6114-545</a></h5>
                                        </div>
                                        <!-- <div class="featured-desc">
                                                    <p>Drop Us a Line</p>
                                                </div> -->
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5><a href="mailto:Info@IndoWestacademy.com">Info@IndoWestacademy.com</a></h5>
                                        </div>
                                        <!-- <div class="featured-desc">
                                                    <p>Drop Us a Line</p>
                                                </div> -->
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div><!-- section title end -->
                            <!-- <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-white mt-15 res-991-mt-10"
                                        href="contact-us-1.html">book a consultation</a> -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="float-lg-right">
                            <div class="ttm_single_image-wrapper text-center">
                                <img style="border-radius: 25px; height: fit-content; width: 100%;" class="img-fluid"
                                    src="images/slides/twenty-four-by-seven-.png" alt="single_10">
                            </div>

                            <!-- <a href="https://youtu.be/7e90gBu4pas" target="_self" class="cmt_prettyphoto">
                                        <div
                                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round mb-0">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a> -->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--cta-section end-->
        <br>
        <br>
        <br>




        <!-- last section nitin tabing start -->

        <p class="We-are-professional">We are professional Expert in Immigrations Visa</p>
        <h2 class="We-are-our-office">Our Offices</h2>
        <br>

        <div class="tab scroller">
            <h2 class="We-are-our-office-tab">Our Offices</h2>
            <button class="tablinks active" onmouseover="openCity(event, 'AMBALA')">AMBALA CITY</button>
            <button class="tablinks" onmouseover="openCity(event, 'AMBALACANTT')">AMBALA CANTT</button>
        </div>

        <div id="AMBALA" class="tabcontent shubham">

            <div class="row">
                <div class="col-sm-4">
                    <h4 class="tab-load-head">Ambala City Office</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-location-dot color-icon"></i>&nbsp;Office No.
                        27-28,
                        Shopping
                        Complex, Vikas Vihar, Prem Nagar, Ambala,
                        Haryana 134003</p>
                    <hr>
                    <h4 class="tab-load-head">Contact Details</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-globe color-icon"></i>&nbsp;<a
                            href="#">Info@Indo-Westacademy.com</a></p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa-brands fa-square-whatsapp color-icon"></i>&nbsp;<a
                            href="#">+91
                            999-6114-545</a></p>
                </div>

                <div class="col-sm-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.5662094054123!2d76.78831507453526!3d30.36327597476451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc8547b20b277%3A0x6fd5b963ff671dfd!2sINDO%20WEST%20Study%20and%20Immigration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1705083845139!5m2!1sen!2sin"
                        width="100" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div id="AMBALACANTT" class="tabcontent">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="tab-load-head">Ambala Cantt Office</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-location-dot color-icon"></i>&nbsp;Office No.
                        27-28,
                        Shopping
                        Complex, Vikas Vihar, Prem Nagar, Ambala,
                        Haryana 134003</p>
                    <hr>
                    <h4 class="tab-load-head">Contact Details</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-globe color-icon"></i>&nbsp;<a
                            href="#">Info@Indo-Westacademy.com</a></p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa-brands fa-square-whatsapp color-icon"></i>&nbsp;<a
                            href="#">+91
                            999-6114-545</a></p>
                </div>

                <div class="col-sm-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.5662094054123!2d76.78831507453526!3d30.36327597476451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc8547b20b277%3A0x6fd5b963ff671dfd!2sINDO%20WEST%20Study%20and%20Immigration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1705083845139!5m2!1sen!2sin"
                        width="100" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- last section nitin tabing start -->
    </div><!--site-main end-->

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



    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    </div><!-- page end -->
    <!-- Javascript -->
    <!-- Javascript end-->
        <script>
        const phoneInput = document.querySelector("#phoneInput");

        // Initialize intlTelInput
        const iti = window.intlTelInput(phoneInput, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
        });

        // Set initial country to India
        iti.promise.then(() => {
            iti.setCountry("in");
        });

        // Listen for the country change event
        phoneInput.addEventListener("countrychange", function () {
            const countryCode = iti.getSelectedCountryData().iso2;
            console.log("Selected country code:", countryCode);
        });

    </script>
    

  

  @endsection
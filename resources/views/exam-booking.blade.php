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
                                        <h2 class="title" id="texxxxt"><strong>Book Exam at Discounted
                                                Price</strong>
                                        </h2>
                                    </div>
                                </div><!-- section title end -->
                                <p id="texxxt-p">Exam Booking for IELTS, PTE & DUOLINGO
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
</div>

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

{{-- hello --}}
<script src="js/modal.js"></script>
<!-- Javascript end-->

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

@endsection
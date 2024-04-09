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
                                        <h2 class="title" id="texxxxt"><strong>All About PTE UKVI</strong>
                                        </h2>
                                    </div>
                                </div><!-- section title end -->
                                <p id="texxxt-p">PTE UKVI is a UKVI-approved English proficiency test. Recognized globally, it's crucial for UK visa applications. Prepare with us for success
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
                                <img style="border-radius: 25px; height: fit-content; width: 100%;" class="img-fluid" src="images/pte-ukvi.png" alt="single_10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about_fea-sectio end-->

    <div class="container-fluid about-text-section">

        <h4 class="h4-about mt-4">
            Welcome to Indowest Your Trusted Destination for PTE UKVI Preparation
        </h4>

        <p class="p-about">
            It's essential to prove your English language skills if you intend to apply for a visa to enter the United Kingdom. The UK Visas and Immigration (UKVI) department recognizes and accepts the Pearson Test of English (PTE UKVI), which provides a trustworthy evaluation of your English proficiency.
        </p>

        <div class="ttm_single_image-wrapper text-center">
            <img style="border-radius: 25px; height: 700px; width: 100%;" class="img-fluid" src="/img/q1.webp" alt="single_10">
        </div>

        <h4 class="h4-about ">
            PTE UKVI: What is it?
        </h4>
        <p class="p-about">
            The UKVI has authorized the PTE UKVI as an English language competency exam for immigration and visa purposes. It assesses applicants' fluency in speaking, writing, listening, and reading English to make sure they meet the language standards needed to apply for a UK visa.
        </p>

        <p class="p-about">
            <b>Why Choose PTE UKVI?</b>
        </p>

        <ul class="ani-ul">
            <li> <b> UKVI Approved: </b> PTE UKVI is officially recognized by the UKVI, making it a trusted choice for visa applicants.</li>
            <li> <b> Accurate Assessment: </b> The test provides an accurate evaluation of your English language skills, helping you meet the necessary visa requirements</li>
            <li> <b> Convenient Test Format: </b> PTE UKVI is a computer-based test, offering flexibility and convenience for test-takers.</li>
            <li> <b> Quick Results: </b> With fast score reporting, you can streamline your visa application process and meet tight deadlines.</li>
        </ul>

        <h4 class="h4-about ">
            How Can We Help?
        </h4>

        <p class="p-about">
            We at Indowest are experts in offering thorough PTE UKVI preparation so that our students get the results they want. To help you ace the test, our knowledgeable teachers provide practice questions, individualized coaching, and insightful advice.
        </p>

        <p class="p-about">
            <span class="ani-span2">Why Choose Us?</span>
        </p>
        <ul class="ani-ul">
            <li> <b> Experienced Instructors: </b> Our instructors have extensive experience in PTE UKVI preparation and are dedicated to helping you reach your goals.</li>
            <li> <b> Customized Approach: </b> We understand that every student is unique, which is why we offer personalized coaching to address your specific needs and challenges</li>
            <li> <b> Proven Track Record: </b> Our students have achieved outstanding results in the PTE UKVI exam, gaining confidence and success in their visa applications</li>
            <li> <b> Supportive Learning Environment: </b> We provide a supportive and encouraging atmosphere where you can learn and grow your English skills with confidence</li>
        </ul>




        <h4 class="h4-about ">
            Get Started Today with Indowest
        </h4>


        <p class="p-about">
            Make sure your language skills don't stand in the way of your UK visa application. Come down to Indowest and start your PTE UKVI journey to success. Make the first move toward realizing your ambition of studying, working, or relocating to the UK by getting in touch with us right now to find out more about our PTE UKVI preparation classes.
        </p>









    </div>
</div>


<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->
</div><!-- page end -->

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
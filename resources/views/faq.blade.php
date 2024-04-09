@extends("common/head")
@section("content")





<!--site-main start-->
<div class="site-main">

    <!--about_fea-section-->
    <section class="cmt-row about_fea-section clearfix inhouse-section-main">
        <div class="container faq-background">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                    <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                        <div class="layer-content">
                            <div class="inhouse-heading-tit">
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="inhouse-course-heading">FAQ'S</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-7 col-sm-7 col-xs-8 mx-auto">
                    <div class="faq-wrapp">
                        <section class="three-column-images">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="faq-main-search">
                                            <div class="search">
                                                <input style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;" type="text" class="searchTerm" placeholder="Search....">
                                                <button type="submit" class="searchButton">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-4">
                                        <select class="basic simple">

                                            <option class="select-branch-head" value="ca" selected="selected">
                                                Select
                                                FAQ
                                                Category
                                            </option>
                                        </select>

                                    </div>

                                    <div class="col-xs-6 col-sm-4">
                                        <select class="basic simple">

                                            <option class="select-branch-head" value="ca" selected="selected">
                                                Select
                                                Toipc
                                            </option>
                                        </select>

                                    </div>

                                </div> <!-- Row -->

                            </div> <!-- Container -->
                        </section>
                    </div>
                    <div class="header_btn mr-20 faq-reset-btn">
                        <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="clear-all-btn-posts" href="">Reset</a>
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
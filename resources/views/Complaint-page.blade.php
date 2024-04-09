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
                                        <h2 class="inhouse-course-heading">Complaint</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-7 col-sm-7 col-xs-8 mx-auto">
                    <div class="faq-wrapp">
                        <div class="booknowrealityform">
                            <section class="three-column-images">
                                <div class="container ">
                                    <div class="layer-content">
                                        <div class="submit-your-basic-heading-tit">
                                            <div class="">
                                                <div class="title-header">
                                                    <h2 class="Submit-Your-Basic-Information">Submit Your
                                                        Information</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="formGroupExampleInput" class="form-label">First
                                                Name</label> -->
                                            <input type="text" class="form-control" placeholder="Enter Your Name" aria-label="First name" required>
                                        </div>

                                        <div class="col-md-6 mt-15">
                                            <input type="number" class="form-control" placeholder="Mobile No." aria-label="Phone" required>
                                        </div>

                                        <div class="col-md-6 mt-15">

                                            <input type="email" class="form-control" id="inputEmail4 " placeholder="Email" aria-label="" required>
                                        </div>

                                        <div class="col-md-6 mt-15">

                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Subject" aria-label="" required>
                                        </div>

                                        <div class="col-md-12 mt-15">
                                            <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required"></textarea></span>
                                        </div>
                                        <div class="col-md-12 mt-20">
                                            <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
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
    function openCity(evt, cityName) {
        var i, acercontent, hplinks;
        acercontent = document.getElementsByClassName("acercontent");
        for (i = 0; i < acercontent.length; i++) {
            acercontent[i].style.display = "none";
        }
        hplinks = document.getElementsByClassName("hplinks");
        for (i = 0; i < hplinks.length; i++) {
            hplinks[i].className = hplinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="aceropen" and click on it
    document.getElementById("aceropen").click();
</script>

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
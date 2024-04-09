@extends("common/head")
@section("content")




<!--site-main start-->
<div class="site-main">

    <!--about_fea-section-->
    <section class="cmt-row about_fea-section clearfix inhouse-section-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                    <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                        <div class="layer-content">
                            <div class="inhouse-heading-tit">
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="inhouse-course-heading">PRACTICE PACKS</h2>
                                    </div>
                                    <div class="title-header">
                                        <p class="lets-find-inhouse-course">Let's Find Your Courses. What are
                                            you looking for?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-details">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 col-xs-8 mx-auto onlinecourse-section">
                    <h4 class="Select-Your-Preferred-Branch">Select Your Course</h4>
                    <select id="course-select" class="basic simple course-select">
                        <option value="Course">Select Course</option>
                        <option value="IELTS">IELTS</option>
                        <option value="PTE">PTE</option>
                    </select>
                </div>

                <div class="geeks-section" style="display: none;">
                    <div id="geeks-container" class="geeks-container"></div>
                </div>

                <div id="pte-cards" class="container" style="margin-top: 30px; display: none;">
                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/inhouse-course-cepil-image-sec.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">PTE- ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Premium Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            2203</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/inhouse-course-cepil-image-sec.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">PTE- ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Mega Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1694</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/inhouse-course-cepil-image-sec.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">PTE- ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">SKILLED PACK</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1355</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/inhouse-course-cepil-image-sec.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">PTE- ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Value Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 15 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1101</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ielts-cards" class="container" style="margin-top: 30px; display: none;">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">IELTS Speaking Pack</p>
                                        <p class="card-text">Module: SPEAKING</p>
                                        <p class="card-text">Duration: 15 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1499</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1017</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Ace Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                3999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            3050</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Premium Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            2203</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Mega Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1694</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Skilled Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1355</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - GT</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Value Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 15 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1101</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">IELTS Speaking</p>
                                        <p class="card-text">Module: SPEAKING</p>
                                        <p class="card-text">Duration: 15 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1499</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1017</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Ace Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, SPEAKING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                3999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            3050</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Premium Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            2203</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Mega Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                2599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1694</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Skilled Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 30 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1999</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1355</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col-xs-12 mt-25">
                            <div class="card celpip-card-border">
                                <div class="celpip-body">
                                    <div class="card-image" style="color:#bc3330;">
                                        <img class="celpip-image-main" src="/images/slides/ielts-course-img.webp" alt="">

                                    </div>
                                    <h4 class="celpip-title">IELTS - ACADEMIC</h4>
                                    <div class="celpip-text">
                                        <p class="card-text">Value Pack</p>
                                        <p class="card-text">Module: LISTENING, READING, WRITING</p>
                                        <p class="card-text">Duration: 15 Days</p>
                                        <p class="card-text">Price: <span style=" text-decoration: line-through;">INR
                                                1599</span></p>
                                    </div>
                                    <div class="celpip-link d-flex justify-content-around  align-items-center mt-4">
                                        <a href="#">More Information</a>
                                        <button type="button" class="btn btn-celpip">Buy Now: INR
                                            1101</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div id="display-section"></div> -->
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
    // document.getElementById('branch-select').addEventListener('change', function () {
    //     var branch = this.value;
    //     if (branch !== 'ca') {
    // Hide branch section if a branch is selected
    // document.querySelector('.col-xl-6').style.display = 'none';
    // Show courses section
    // /
    // Show branch section if "Select Branch" is selected
    // document.querySelector('.col-xl-6').style.display = 'block';
    // Hide courses section
    //         document.querySelector('.onlinecourse-section').style.display = 'none';
    //     }
    // });

    document.querySelector('.course-select').addEventListener('change', function() {
        var course = this.value;
        // Display course details in the column
        document.querySelector('.course-details').innerText = 'Selected course: ' + course;
        // Show course details section
        document.querySelector('.course-details').style.display = 'block';
        // Hide course section
        document.querySelector('.onlinecourse-section').style.display = 'none';
    });
</script>
<script>
    // Function to display selected cards container based on course selection
    function displayCardsContainer(course) {
        document.getElementById('pte-cards').style.display = course === 'PTE' ? 'block' : 'none';
        // document.getElementById('duolingo-cards').style.display = course === 'DUOLINGO' ? 'block' : 'none';
        document.getElementById('ielts-cards').style.display = course === 'IELTS' ? 'block' : 'none';
    }

    // Event listener for course select
    document.getElementById('course-select').addEventListener('change', function() {
        const selectedCourse = this.value;
        displayCardsContainer(selectedCourse);
    });

    // Event listener for branch select
    document.getElementById('branch-select').addEventListener('change', function() {
        const selectedCourse = document.getElementById('course-select').value;
        displayCardsContainer(selectedCourse);
    });
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
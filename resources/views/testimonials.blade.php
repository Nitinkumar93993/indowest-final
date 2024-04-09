@extends('common/head')
@section('content')
    <!--site-main start-->
    <div class="site-main">

        <!--about_fea-section-->
        <section class="cmt-row about_fea-section clearfix inhouse-section-main">
            <div class="container faq-background">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                        <div
                            class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                            <div class="layer-content">
                                <div class="inhouse-heading-tit">
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h2 class="inhouse-course-heading">TESTIMONIALS</h2>
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
                                                    <input
                                                        style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;"
                                                        type="text" class="searchTerm"
                                                        placeholder="Search testimonials...">
                                                    <button type="button" class="searchButton"
                                                        onclick="filterTestimonials()">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-4">
                                            <select id="categoryFilter" class="basic simple">
                                                <option class="select-branch-head" value="" disabled selected>Select Category</option>
                                                <option class="select-branch-head" value="academytestimonials">Academy testimonials</option>
                                                <option class="select-branch-head" value="visatestimonials">Visa testimonials</option>
                                            </select>
                                        </div>

                                        <div class="col-xs-6 col-sm-4">
                                            <select id="timeFilter" class="basic simple">
                                                <option class="select-branch-head" value="all" selected="selected">Select
                                                    Upload Time</option>
                                                <option class="select-branch-head" value="this_week">This Week</option>
                                                <option class="select-branch-head" value="this_month">This Month</option>
                                                <option class="select-branch-head" value="last_six_month">Last Six Months
                                                </option>
                                                <option class="select-branch-head" value="this_year">This Year</option>
                                                <option class="select-branch-head" value="last_year">Last Year</option>
                                                <option class="select-branch-head" value="previous_year">Previous Year
                                                </option>
                                            </select>
                                        </div>
                                    </div> <!-- Row -->
                                </div> <!-- Container -->
                            </section>
                        </div>

                        <div class="header_btn mr-20 faq-reset-btn">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                                href="">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script>
            function filterTestimonials() {
                var searchKeyword = document.querySelector('.searchTerm').value.toLowerCase();
                var testimonials = document.querySelectorAll('.cotnainer_boxOuter');
                testimonials.forEach(function(testimonial) {
                    var name = testimonial.querySelector('h6').innerText.toLowerCase();
                    var content = testimonial.querySelector('.testiMoNiAlContant p:nth-child(3)').innerText
                        .toLowerCase();
                    if (name.includes(searchKeyword) || content.includes(searchKeyword)) {
                        testimonial.style.display = 'block';
                    } else {
                        testimonial.style.display = 'none';
                    }
                });
            }
        </script>

<script>
    document.getElementById('categoryFilter').addEventListener('change', function() {
    var category = this.value.toLowerCase(); // Convert selected value to lowercase for comparison
    var testimonials = document.querySelectorAll('.cotnainer_boxOuter');

    testimonials.forEach(function(testimonial) {
        var categoryElement = testimonial.querySelector('.testiMoNiAlContant p:last-child');
        if (categoryElement) {
            var testimonialCategory = categoryElement.textContent.trim().toLowerCase();
            if (category === "" || testimonialCategory === category) {
                testimonial.style.display = 'block'; // Display testimonials with matching category or if no category selected
            } else {
                testimonial.style.display = 'none'; // Hide testimonials with non-matching category
            }
        }
    });
});


</script>

        <script>
            document.getElementById('timeFilter').addEventListener('change', function() {
                var timePeriod = this.value;
                var testimonials = document.querySelectorAll('.cotnainer_boxOuter');

                testimonials.forEach(function(testimonial) {
                    var createdDate = testimonial.querySelector('.testiMoNiAlContant span').textContent;
                    var currentDate = new Date();
                    var filterDate = new Date(createdDate);

                    if (timePeriod === 'all') {
                        testimonial.style.display = 'block';
                    } else if (timePeriod === 'this_week') {
                        var oneWeekAgo = new Date();
                        oneWeekAgo.setDate(oneWeekAgo.getDate() - 7);
                        if (filterDate >= oneWeekAgo && filterDate <= currentDate) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    } else if (timePeriod === 'this_month') {
                        var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
                        if (filterDate >= firstDayOfMonth && filterDate <= currentDate) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    } else if (timePeriod === 'last_six_month') {
                        var sixMonthsAgo = new Date();
                        sixMonthsAgo.setMonth(sixMonthsAgo.getMonth() - 6);
                        if (filterDate >= sixMonthsAgo && filterDate <= currentDate) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    } else if (timePeriod === 'this_year') {
                        var firstDayOfYear = new Date(currentDate.getFullYear(), 0, 1);
                        if (filterDate >= firstDayOfYear && filterDate <= currentDate) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    } else if (timePeriod === 'last_year') {
                        var firstDayOfLastYear = new Date(currentDate.getFullYear() - 1, 0, 1);
                        var lastDayOfLastYear = new Date(currentDate.getFullYear() - 1, 11, 31);
                        if (filterDate >= firstDayOfLastYear && filterDate <= lastDayOfLastYear) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    } else if (timePeriod === 'previous_year') {
                        var firstDayOfPreviousYear = new Date(currentDate.getFullYear() - 2, 0, 1);
                        var lastDayOfPreviousYear = new Date(currentDate.getFullYear() - 2, 11, 31);
                        if (filterDate >= firstDayOfPreviousYear && filterDate <= lastDayOfPreviousYear) {
                            testimonial.style.display = 'block';
                        } else {
                            testimonial.style.display = 'none';
                        }
                    }
                });
            });
        </script>


        <style>
            .allTestimonialPage {
                /* border: 2px solid green; */
                width: 100%;
                /* height: 15rem; */
                /* overflow: hidden; */
            }

            .cotnainer_box {
                /* border: 1px solid red; */
                display: flex;
                width: 90%;
                height: 12rem;
                background-color: white;
                margin: 1rem auto;
                /* border: 5px solid lightyellow; */
                border-radius: 2rem 0;
                box-shadow: 0px 0px 5px gray;
            }

            .testiMoNiAlImage {
                /* border: 1px solid black; */
                width: 15%;
                /* padding: 1%; */
                display: flex;
            }

            .testiMoNiAlImage img {
                border-radius: 0;
                width: 70%;
                margin: auto;
                /* border: 2px solid red; */
            }

            .testiMoNiAlContant {
                /* border: 1px solid ; */
                width: 80%;
                padding: 2% 1%;
            }

            .marginfivetop {
                margin-top: 3rem;
            }

            .marginfivebottom {
                margin-bottom: 2rem;
            }
        </style>

        <!--about_fea-sectio end-->

        {{-- <p class="We-are-professional marginfivetop">Testimonials</p>
        <h2 class="We-are-our-office marginfivebottom">Client Feedback Our Greatest Reward</h2>
        <div class="allTestimonialPage">
            @foreach ($testimonialData as $testimonial)
                <div class="cotnainer_boxOuter">
                    <div class="cotnainer_box">
                        <div class="testiMoNiAlImage">
                            <img src="{{ asset(str_replace('public/', 'storage/', $testimonial->testimonial_image)) }}"
                                alt="No Image">
                        </div>
                        <div class="testiMoNiAlContant">
                            <h6>{{ $testimonial->testimonial_name }}</h6>
                            <p>''{{ $testimonial->testimonial_content }}''</p>
                            <p>{{ $testimonial->testimonial_category }}</p>
                            <span>{{ \Carbon\Carbon::parse($testimonial->created_at)->format('j-M-Y') }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        
<p class="We-are-professional marginfivetop">Testimonials</p>
<h2 class="We-are-our-office marginfivebottom">Client Feedback Our Greatest Reward</h2>
<div class="allTestimonialPage">
    @foreach ($testimonialData as $testimonial)
        <div class="cotnainer_boxOuter">
            <div class="cotnainer_box">
                <div class="testiMoNiAlImage">
                    <img src="{{ asset(str_replace('public/', 'storage/', $testimonial->testimonial_image)) }}"
                        alt="No Image">
                </div>
                <div class="testiMoNiAlContant">
                    <h6>{{ $testimonial->testimonial_name }}</h6>
                    <p>{{ $testimonial->testimonial_content }}</p>
                    <p>{{ $testimonial->testimonial_category }}</p>
                    <span>{{ \Carbon\Carbon::parse($testimonial->created_at)->format('j-M-Y') }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>


        <div style="background-color: #fff;" class="gallery-container">
            <br>
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <!-- <p class="We-are-professional">Proficiency Tests to Language Courses</p> -->
                            <h2 class="We-are-our-office marginfivetop marginfivebottom">Instagram Feed</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->



            <div id="instafeed-container">
            </div>
            <br><br><br>
            <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
            <script type="text/javascript">
                var userFeed = new Instafeed({
                    get: 'user',
                    limit: 6,
                    target: "instafeed-container",
                    resolution: 'low_resolution',
                    accessToken: 'IGQWROVFVWY3puc1ZARR3ZAwZAy1PXzl1V2ZAMSmJvbS1YX2xnYXpBcktyTmlxV3N2dUdGNGxrVGdFMURySmV4SWwwcXZAtSGktaEtmMDRvdHFQWkVReHBRQzlJdHByYl9ZAdnFrcVpBUkdFbVdOVVpHMjBvVm9JT0p1OUEZD'
                });
                userFeed.run();
            </script>
        </div>



        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->

    <!-- Javascript end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"></script>

    <script>
        const phoneInput = document.querySelector("#phoneInput");

        // Initialize intlTelInput
        const iti = window.intlTelInput(phoneInput, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
        });

        // Set initial country based on the user's location
        iti.promise.then(() => {
            const countryCode = iti.getSelectedCountryData().iso2;
            iti.setCountry(countryCode);
        });

        // Listen for the country change event
        phoneInput.addEventListener("countrychange", function() {
            const countryCode = iti.getSelectedCountryData().iso2;
            console.log("Selected country code:", countryCode);
        });
    </script>

    <!-- gallery -->
@endsection

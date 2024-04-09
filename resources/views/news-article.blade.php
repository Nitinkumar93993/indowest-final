@extends("common/head")
@section("content")



<!--site-main start-->
<div class="site-main">
    <section class="cmt-row about_fea-section clearfix article-section-main">
        <!-- article-tabbbbbb start -->

        <p class="We-are-professional">Reading Resources</p>
        <h2 class="We-are-our-office">Articles, News, Test Prep Material</h2>

        <!-- <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button> -->
        <div class="shikva">
            <button class="tablink" onclick="window.location.href = '/posts-article';">ARTICLES</button>
            <button class="tablink" onclick="window.location.href = '/test-prep-materials';">TEST-PREP
                MATERIAL</button>
            <button class="tablink" onclick="openPage('About', this, '#d9070a')" id="defaultOpen">NEWS</button>
        </div>

        <div id="News" class="mitva">
            <div class=" Article-background">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                            <div class="layer-content">
                                <div class="inhouse-heading-tit">
                                    <!-- <div class="section-title">
                                                <div class="title-header">
                                                    <h2 class="inhouse-course-heading">FAQ'S</h2>
                                                </div>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-7 col-sm-7 col-xs-8 mx-auto">
                        <div class="faq-wrapp">
                            <section class="three-column-images">
                                <div class="">
                                    <div class="row">

                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Content Type</h5>
                                            <select class="basic simple">
                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select
                                                </option>
                                                <option class="select-branch-head" value="me">Article</option>

                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">PTE</option>
                                                <option class="select-branch-head" value="me">IELTS
                                                </option>
                                                <option class="select-branch-head" value="me">DUOLINGO
                                                </option>
                                                <option class="select-branch-head" value="me">French
                                                </option>
                                                <option class="select-branch-head" value="me">German
                                                </option>
                                                <option class="select-branch-head" value="me">Visa
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Sub Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                                <option class="select-branch-head" value="me">Informative
                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Upload Time</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <!-- <option class="select-branch-head" value="ca" selected="selected">
                                                            Select Upload Time
                                                        </option> -->
                                                <option class="select-branch-head" value="me">This Week</option>
                                                <option class="select-branch-head" value="me">This Month
                                                </option>
                                                <option class="select-branch-head" value="me">Last Six Month
                                                </option>
                                                <option class="select-branch-head" value="me">This Year
                                                </option>
                                                <option class="select-branch-head" value="me">Last Year
                                                </option>
                                                <option class="select-branch-head" value="me">Previous Year
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm post-article-searches">
                                            <div class="faq-main-search">
                                                <h5 class="hidden-search-article">Select Content Type</h5>
                                                <div class="search">
                                                    <input style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;" type="text" class="searchTerm" placeholder="Search....">
                                                    <button type="submit" class="searchButton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="header_btn mr-20 faq-reset-btn">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="clear-all-btn-posts" href="">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Contact" class="mitva">
            <div class=" Article-background">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                            <div class="layer-content">
                                <div class="inhouse-heading-tit">
                                    <!-- <div class="section-title">
                                                                <div class="title-header">
                                                                    <h2 class="inhouse-course-heading">FAQ'S</h2>
                                                                </div>
                                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-7 col-sm-7 col-xs-8 mx-auto">
                        <div class="faq-wrapp">
                            <section class="three-column-images">
                                <div class="">
                                    <div class="row">

                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Content Type</h5>
                                            <select class="basic simple">
                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select
                                                </option>
                                                <option class="select-branch-head" value="me">Article</option>

                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">PTE</option>
                                                <option class="select-branch-head" value="me">IELTS
                                                </option>
                                                <option class="select-branch-head" value="me">DUOLINGO
                                                </option>
                                                <option class="select-branch-head" value="me">French
                                                </option>
                                                <option class="select-branch-head" value="me">German
                                                </option>
                                                <option class="select-branch-head" value="me">Visa
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Sub Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                                <option class="select-branch-head" value="me">Informative
                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Upload Time</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <!-- <option class="select-branch-head" value="ca" selected="selected">
                                                            Select Upload Time
                                                        </option> -->
                                                <option class="select-branch-head" value="me">This Week</option>
                                                <option class="select-branch-head" value="me">This Month
                                                </option>
                                                <option class="select-branch-head" value="me">Last Six Month
                                                </option>
                                                <option class="select-branch-head" value="me">This Year
                                                </option>
                                                <option class="select-branch-head" value="me">Last Year
                                                </option>
                                                <option class="select-branch-head" value="me">Previous Year
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm post-article-searches">
                                            <div class="faq-main-search">
                                                <h5 class="hidden-search-article">Select Content Type</h5>
                                                <div class="search">
                                                    <input style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;" type="text" class="searchTerm" placeholder="Search....">
                                                    <button type="submit" class="searchButton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="header_btn mr-20 faq-reset-btn">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="clear-all-btn-posts" href="">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="About" class="mitva">
            <div class=" Article-background">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
                            <div class="layer-content">
                                <div class="inhouse-heading-tit">
                                    <!-- <div class="section-title">
                                                                    <div class="title-header">
                                                                        <h2 class="inhouse-course-heading">FAQ'S</h2>
                                                                    </div>
                                                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-7 col-sm-7 col-xs-8 mx-auto">
                        <div class="faq-wrapp">
                            <section class="three-column-images">
                                <div class="">
                                    <div class="row">

                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Content Type</h5>
                                            <select class="basic simple">
                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select
                                                </option>
                                                <option class="select-branch-head" value="me">Article</option>

                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">PTE</option>
                                                <option class="select-branch-head" value="me">IELTS
                                                </option>
                                                <option class="select-branch-head" value="me">DUOLINGO
                                                </option>
                                                <option class="select-branch-head" value="me">French
                                                </option>
                                                <option class="select-branch-head" value="me">German
                                                </option>
                                                <option class="select-branch-head" value="me">Visa
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Sub Category</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                                <option class="select-branch-head" value="me">Informative
                                                </option>
                                                <option class="select-branch-head" value="me">Canada</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm mt-15">
                                            <h5 class="card-title">Select Upload Time</h5>
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Select

                                                </option>
                                                <!-- <option class="select-branch-head" value="ca" selected="selected">
                                                            Select Upload Time
                                                        </option> -->
                                                <option class="select-branch-head" value="me">This Week</option>
                                                <option class="select-branch-head" value="me">This Month
                                                </option>
                                                <option class="select-branch-head" value="me">Last Six Month
                                                </option>
                                                <option class="select-branch-head" value="me">This Year
                                                </option>
                                                <option class="select-branch-head" value="me">Last Year
                                                </option>
                                                <option class="select-branch-head" value="me">Previous Year
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm post-article-searches">
                                            <div class="faq-main-search">
                                                <h5 class="hidden-search-article">Select Content Type</h5>
                                                <div class="search">
                                                    <input style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;" type="text" class="searchTerm" placeholder="Search....">
                                                    <button type="submit" class="searchButton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="header_btn mr-20 faq-reset-btn">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="clear-all-btn-posts" href="">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="cmt-row grid-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style3">
                            <div class="cmt-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="images/blog/blog-one-720X620.jpg" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-header">
                                    <div class="post-title featured-title">
                                        <h5><a href="blog-single.html">Why Indian Students Choose To Study
                                                Abroad?</a></h5>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <span class="cmt-meta-line byline">
                                        <img class="img-fluid" src="images/blog/b_thumbb-01.jpg" alt="post-img /">Admin
                                    </span>
                                    <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>12 April
                                        2020</span>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Many young Indian students today wish to pursue their studies in
                                        universities abroad.</p>
                                </div>
                                <div class="post-bottom cmt-post-link">
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="blog-single.html" tabindex="0"><i class="fa fa-minus"></i>Read
                                        more</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>





                </div>

                <!-- <div class="book-reality-load-more">
                            <div class="header_btn mr-20">
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round"
                                    id="become-a-member-1" href="">&nbsp;&nbsp;Load More &nbsp;&nbsp;</a>
                            </div>
                        </div> -->


            </div>
        </section>
        <!-- article-tabbbbbb End -->
    </section>




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
    function openPage(pageName, elmnt, color) {
        var i, mitva, tablinks;
        mitva = document.getElementsByClassName("mitva");
        for (i = 0; i < mitva.length; i++) {
            mitva[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
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
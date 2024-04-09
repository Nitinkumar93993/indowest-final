@extends("common/head")
@section("content")




<!--site-main start-->
<div style="background-color: #F1FFFF;" class="site-main">

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
                                        <h2 class="inhouse-course-heading">LATEST WEB MEDIA</h2>
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
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="faq-main-search">
                                            <div class="search">
                                                <input style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;" type="text" class="searchTerm" placeholder="Search....">
                                                <button type="submit" class="searchButton">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-3">
                                        <select class="basic simple">

                                            <option class="select-branch-head" value="ca" selected="selected">
                                                Select Web Category
                                            </option>
                                            <option class="select-branch-head" value="me">Academy testimonials
                                            </option>
                                        </select>

                                    </div>

                                    <div class="col-xs-6 col-sm-3">
                                        <select class="basic simple">

                                            <option class="select-branch-head" value="ca" selected="selected">
                                                Select Type
                                            </option>
                                            <option class="select-branch-head" value="me">Image
                                            </option>
                                            <option class="select-branch-head" value="me">Video
                                            </option>
                                        </select>

                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <select class="basic simple">

                                            <option class="select-branch-head" value="ca" selected="selected">
                                                Select Upload Time
                                            </option>
                                            <option class="select-branch-head" value="me">This Week</option>
                                            <option class="select-branch-head" value="me">This Month</option>
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

                                </div> <!-- Row -->

                            </div> <!-- Container -->
                        </section>
                    </div>
                    <div class="header_btn mr-20 faq-reset-btn">
                        <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="clear-all-btn-posts" href="">Clear All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about_fea-sectio end-->
    <div class="container">
        <div id="gallery">
        </div>
        <p class="book-reality-load-more">
            <button class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="viewMore">&nbsp;&nbsp;Load More
                &nbsp;&nbsp;</button>
        </p>
    </div>
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
<!-- gallery -->
<script>
    const galleryContainer = document.getElementById('gallery');
    const viewMoreButton = document.getElementById('viewMore');

    // Your array of image URLs
    const imageArray = [
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',
        'images/slides/3-in-1-online-1.jpeg',

        // Add more image URLs as needed
    ];

    let currentIndex = 0;
    const imagesPerPage = 8;

    function showImages(startIndex) {
        const endIndex = startIndex + imagesPerPage;
        for (let i = startIndex; i < endIndex && i < imageArray.length; i++) {
            const imageUrl = imageArray[i];
            const galleryItem = document.createElement('div');
            galleryItem.classList.add('gallery-item');
            const img = document.createElement('img');
            img.src = imageUrl;
            galleryItem.appendChild(img);
            galleryContainer.appendChild(galleryItem);
        }
    }

    function onViewMoreClick() {
        showImages(currentIndex);
        currentIndex += imagesPerPage;

        if (currentIndex >= imageArray.length) {
            viewMoreButton.disabled = true;
        }
    }

    viewMoreButton.addEventListener('click', onViewMoreClick);

    // Initial load
    onViewMoreClick();
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
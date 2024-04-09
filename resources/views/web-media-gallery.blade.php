@extends('common/head')
@section('content')
    <!--site-main start-->
    <div style="background-color: #F1FFFF;" class="site-main">

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
                                                    <input id="searchInput"
                                                        style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;"
                                                        type="text" class="searchTerm" placeholder="Search....">
                                                    <button type="button" class="searchButton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3">
                                            <select class="basic simple" id="categorySelect">
                                                <option class="select-branch-head" value="" selected="selected">
                                                    Select Web Category
                                                </option>

                                                <option class="select-branch-head"value="academy testimonials">academy
                                                    testimonials</option>
                                                <option class="select-branch-head"value="event testimonials">event
                                                    testimonials</option>
                                                <option class="select-branch-head"value="course testimonials">course
                                                    testimonials</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <select id="contentTypeFilter" class="basic simple" onchange="filterContent()">
                                                <option value="all">All</option>
                                                <option value="image">Image</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <select id="timeFilter" class="basic simple">
                                                <option value="ca" selected>Select Upload Time</option>
                                                <option value="this_week">This Week</option>
                                                <option value="this_month">This Month</option>
                                                <option value="last_six_month">Last Six Months</option>
                                                <option value="this_year">This Year</option>
                                                <option value="last_year">Last Year</option>
                                                <option value="previous_year">Previous Year</option>
                                            </select>
                                        </div>
                                    </div> <!-- Row -->

                                </div> <!-- Container -->
                            </section>
                        </div>
                        <div class="header_btn mr-20 faq-reset-btn">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                                href="">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about_fea-sectio end-->
        <div class="container">
            <div id="gallery">
                <style>
                    .imageWebMediaViewDiv {
                        /* border: 1px solid green; */
                        width: 100%;
                        display: flex;
                        flex-wrap: wrap;
                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                        border-radius: 10px;
                        height: fit-content;
                        background-color: white;
                    }

                    .imageWebMediaViewDivinner {
                        /* border: 1px solid red; */
                        width: 100%;
                        /* margin: 1rem; */
                        height: fit-content;
                        display: flex;
                        padding: 1rem;
                        flex-wrap: wrap;
                    }

                    .galleryImageVideoSection {
                        /* border: 2px solid yellow; */
                        box-shadow: 0px 0px 4px gray;
                        width: 23.5%;
                        margin: 1rem auto;
                        height: 22rem;
                        border-radius: 1rem;
                    }

                    .borderDivImage2 {
                        width: 100%;
                        height: 15rem;
                        padding: 0.5rem;
                        overflow: auto;
                        /* box-shadow: inset 0px 0px 25px #b3955f; */
                        border-radius: 1rem;
                        background-color: white;
                    }

                    .borderDivImage2 img {
                        border-radius: 0.5rem;
                    }

                    .titleCategoryCreated {
                        /* background-color: brown; */
                        /* color: white; */
                        padding: 0.5rem;
                    }
                </style>
                <div class="imageWebMediaViewDiv">
                    <div class="imageWebMediaViewDivinner"> {{-- Image Section --}}
                        @foreach ($images as $image)
                            <?php
                            $image_print = str_replace('public/', 'storage/', $image->image);
                            ?>
                            <div class="imageItem galleryImageVideoSection" data-title="{{ $image->image_title }}"
                                data-category="{{ $image->web_category }}" data-upload-time="{{ $image->created_at }}">
                                <div class="borderDivImage2">
                                    <img src="{{ asset($image_print) }}" alt="Image Not Found" width="100%"
                                        height="">
                                </div>
                                <div class="titleCategoryCreated">
                                    <h5>{{ $image->image_title }}</h5>
                                    <p>{{ $image->web_category }}</p>
                                    <p>{{ $image->created_at }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="video-unique-identity"> {{-- Video Section --}}
                        @if ($videos->count() > 0)
                            <ul>
                                @foreach ($videos as $video)
                                    <?php
                                    $vedio = str_replace('public/', 'storage/', $video->videoFile);
                                    ?>
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset($vedio) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endforeach
                            </ul>
                        @else
                            <p>No videos uploaded yet.</p>
                        @endif
                    </div>
                    <script>
                        function filterContent() {
                            var selectedType = document.getElementById('contentTypeFilter').value;

                            // Hide all content items
                            var allContentItems = document.querySelectorAll(
                                '.imageItem, #video-unique-identity video, #video-unique-identity p');
                            allContentItems.forEach(function(item) {
                                item.style.display = 'none';
                            });

                            // Show selected type content
                            if (selectedType === 'image' || selectedType === 'all') {
                                var imageItems = document.querySelectorAll('.imageItem');
                                imageItems.forEach(function(item) {
                                    item.style.display = 'block';
                                });
                            }

                            if (selectedType === 'video' || selectedType === 'all') {
                                var videoItems = document.querySelectorAll('#video-unique-identity video, #video-unique-identity p');
                                videoItems.forEach(function(item) {
                                    item.style.display = 'block';
                                });
                            }
                        }
                    </script>



                    <script>
                        $(document).ready(function() {
                            $('#searchInput').on('input', function() {
                                var searchText = $(this).val().toLowerCase().trim();
                                $('.imageItem').each(function() {
                                    var title = $(this).data('title').toLowerCase();
                                    if (title.includes(searchText)) {
                                        $(this).show(); // Display the image item
                                    } else {
                                        $(this).hide(); // Hide the image item
                                    }
                                });
                            });
                        });
                    </script>
                    <script>
                        $(document).ready(function() {
                            $('#categorySelect').change(function() {
                                var selectedCategory = $(this).val();
                                $('.imageItem').each(function() {
                                    var category = $(this).data('category');
                                    if (selectedCategory === '' || category === selectedCategory) {
                                        $(this).show(); // Display the image item
                                    } else {
                                        $(this).hide(); // Hide the image item
                                    }
                                });
                            });
                        });
                    </script>

                    <script>
                        $(document).ready(function() {
                            $('#timeFilter').change(function() {
                                var selectedTime = $(this).val();
                                $('.imageItem').each(function() {
                                    var uploadTime = $(this).data('upload-time');
                                    var filterCondition = true;

                                    if (selectedTime === 'this_week') {
                                        filterCondition = moment(uploadTime).isSame(moment(), 'week');
                                    } else if (selectedTime === 'this_month') {
                                        filterCondition = moment(uploadTime).isSame(moment(), 'month');
                                    } else if (selectedTime === 'last_six_month') {
                                        filterCondition = moment(uploadTime).isAfter(moment().subtract(6,
                                            'months'));
                                    } else if (selectedTime === 'this_year') {
                                        filterCondition = moment(uploadTime).isSame(moment(), 'year');
                                    } else if (selectedTime === 'last_year') {
                                        filterCondition = moment(uploadTime).isSame(moment().subtract(1, 'year'),
                                            'year');
                                    } else if (selectedTime === 'previous_year') {
                                        filterCondition = moment(uploadTime).isBefore(moment().subtract(1, 'year'),
                                            'year');
                                    }
                                    if (filterCondition) {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                });
                            });
                        });
                    </script>


                </div>

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
    {{-- <script>
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
    </script> --}}
@endsection

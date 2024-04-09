@extends('common/head')
@section('content')
    <!--site-main start-->
    <div class="site-main">
        <section class="cmt-row about_fea-section clearfix article-section-main">
            <!-- article-tabbbbbb start -->

            <p class="We-are-professional">Reading Resources</p>
            <h2 class="We-are-our-office">Articles, News, Test Prep Material</h2>

            <!-- <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button> -->
            <div class="shikva">
                <button class="tablink" onclick="openPage('News', this, '#d9070a')" id="defaultOpen">ARTICLES</button>
                <button class="tablink" onclick="window.location.href = '/test-prep-materials';">TEST-PREP
                    MATERIAL</button>
                <button class="tablink" onclick="window.location.href = '/news-article';">NEWS</button>
            </div>

            <div id="News" class="mitva">
                <div class=" Article-background">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-xs-12" id="second-page-inhouse">
                            <div
                                class="cmt-col-bgcolor-yes cmt-bgcolor cmt-col-bgimage-yes cmt-bg col-bg-img-six cmt-left-span cmt-bg-pattern">
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

                                            <div class="col-xs-6 col-sm">
                                                <h5 class="card-title text-center">Select Content Type</h5>
                                                <select id="content-type" class="basic simple filter-select">
                                                    <option class="select-branch-head" value="all" selected="selected">
                                                        Select</option>
                                                    <option class="select-branch-head" value="Article">Article</option>
                                                    <!-- Add other options as needed -->
                                                </select>
                                            </div>
                                            <div class="col-xs-6 col-sm">
                                                <h5 class="card-title text-center">Select Category</h5>
                                                <select id="category-filter" class="basic simple filter-select">
                                                    <option class="select-branch-head" value="all" selected="selected">
                                                        Select</option>
                                                    <option class="select-branch-head" value="PTE">PTE</option>
                                                    <option class="select-branch-head" value="IELTS">IELTS</option>
                                                    <option class="select-branch-head" value="DUOLINGO">DUOLINGO</option>
                                                    <option class="select-branch-head" value="French">French</option>
                                                    <option class="select-branch-head" value="German">German</option>
                                                    <option class="select-branch-head" value="Visa">Visa</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6 col-sm">
                                                <h5 class="card-title text-center">Select Sub Category</h5>
                                                <select id="sub-category-filter" class="basic simple filter-select">
                                                    <option class="select-branch-head" value="all" selected="selected">
                                                        Select</option>
                                                    <option class="select-branch-head" value="Canada">Canada</option>
                                                    <option class="select-branch-head" value="Informative">Informative
                                                    </option>
                                                    <option class="select-branch-head" value="Speaking">Speaking</option>
                                                </select>
                                            </div>
                                            {{-- <div class="col-xs-6 col-sm">
                                                <h5 class="card-title text-center">Select Upload Time</h5>
                                                <select id="upload-time-filter" class="basic simple filter-select">
                                                    <option class="select-branch-head" value="all" selected="selected">
                                                        Select</option>
                                                    <option class="select-branch-head" value="this_week">This Week</option>
                                                    <option class="select-branch-head" value="this_month">This Month
                                                    </option>
                                                    <option class="select-branch-head" value="last_six_months">Last Six
                                                        Months</option>
                                                    <option class="select-branch-head" value="this_year">This Year</option>
                                                    <option class="select-branch-head" value="last_year">Last Year</option>
                                                    <option class="select-branch-head" value="previous_year">Previous Year
                                                    </option>
                                                </select>
                                            </div> --}}
                                            <div class="col-xs-6 col-sm">
                                                <h5 class="card-title text-center">Select Upload Time</h5>
                                                <select id="upload-time-dropdown" class="basic simple">
                                                    <option class="select-branch-head" value="all" selected>Select
                                                    </option>
                                                    <option class="select-branch-head" value="this-week">This Week</option>
                                                    <option class="select-branch-head" value="this-month">This Month
                                                    </option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>






                                            <div class="col-xs-6 col-sm">
                                                <div class="faq-main-search">
                                                    <h5 class="hidden-search-article">Select Content Type</h5>
                                                    <div class="search">
                                                        <input
                                                            style="border-radius: 2px 0px 0px 2px ; border: 1px solid #1a1f31;"
                                                            type="text" class="searchTerm" placeholder="Search....">
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
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                                    href="">Clear All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="cmt-row grid-section clearfix">
                <div class="container">
                    <div id="blogPosts" class="row">
                        @foreach ($newsBlog as $newsBlogs)
                            <div class="col-lg-4 col-md-4 col-sm-6 blog-post"
                                data-sub-category="{{ $newsBlogs->second_paragraph }}"
                                data-category="{{ $newsBlogs->first_paragraph }}"
                                data-content-type="{{ $newsBlogs->blog_italic }}"
                                data-upload-time="{{ $newsBlogs->created_at->format('Y-m-d') }}">
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-post style3">
                                    <div class="cmt-post-thumbnail featured-thumbnail">
                                        <?php $imageurl = str_replace('public/', 'storage/', $newsBlogs->images); ?>
                                        <img class="img-fluid" src="{{ asset($imageurl) }}" alt="image"
                                            height="">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-header">
                                            <div class="post-title featured-title">
                                                <h5><a href="/blog-single">{{ $newsBlogs->blog_title }}</a></h5>
                                            </div>
                                        </div>
                                        <div class="post-meta">
                                            <span class="cmt-meta-line byline">
                                                <img class="img-fluid" src="images/blog/b_thumbb-01.jpg"
                                                    alt="post-img /">Admin
                                            </span>
                                            <span class="cmt-meta-line post-date"><i
                                                    class="fa fa-calendar"></i>{{ $newsBlogs->created_at }}</span>
                                        </div>
                                        <div class="post-desc featured-desc">
                                            <p>{{ $newsBlogs->blog_desc }}</p> {{-- content description --}}
                                        </div>
                                        <span>{{ $newsBlogs->blog_italic }}</span>{{-- content type --}}
                                        <span>{{ $newsBlogs->first_paragraph }}</span>{{-- content category --}}
                                        <span>{{ $newsBlogs->second_paragraph }}</span>{{-- content sub category --}}
                                        <div class="post-bottom cmt-post-link">
                                            <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline"
                                                href="/blog-single" tabindex="0"><i class="fa fa-minus"></i>Read
                                                more</a>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div>
                        @endforeach
                    </div>

                    <div class="book-reality-load-more">
                        <div class="header_btn mr-20">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                                href="">&nbsp;&nbsp;Load More &nbsp;&nbsp;</a>
                        </div>
                    </div>


                </div>
            </section>
            <!-- article-tabbbbbb End -->
        </section>

        <script>
            // Function to filter blog posts based on upload time
            function filterPostsByUploadTime(uploadTime) {
                $('#blogPosts .blog-post').hide(); // Hide all blog posts

                if (uploadTime === 'all') {
                    $('#blogPosts .blog-post').show(); // Show all posts if "All" is selected
                } else if (uploadTime === 'this-week') {
                    var today = new Date();
                    var firstDayOfWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - today.getDay());
                    var lastDayOfWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() + (6 - today.getDay()));

                    $('#blogPosts .blog-post').each(function() {
                        var postUploadDate = new Date($(this).data('upload-time'));
                        if (postUploadDate >= firstDayOfWeek && postUploadDate <= lastDayOfWeek) {
                            $(this).show();
                        }
                    });
                }
            }

            // Event listener for dropdown change
            $('#upload-time-dropdown').change(function() {
                var selectedUploadTime = $(this).val();
                filterPostsByUploadTime(selectedUploadTime); // Call the filter function
            });

            // Initial filtering on page load (optional)
            $(document).ready(function() {
                filterPostsByUploadTime('all'); // Show all posts initially
            });
        </script>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Function to filter blog posts based on selected options
                function filterBlogPosts() {
                    var selectedContentType = $('#content-type').val();
                    // Show all blog posts if "All" is selected
                    if (selectedContentType === 'all') {
                        $('.blog-post').show();
                    } else {
                        // Hide all blog posts
                        $('.blog-post').hide();
                        // Show only the blog posts that match the selected content type
                        $('.blog-post[data-content-type="' + selectedContentType + '"]').show();
                    }
                }
                // Bind change event to filter options
                $('.filter-select').change(function() {
                    filterBlogPosts();
                });

                // Initial filtering on page load
                filterBlogPosts();
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Function to filter blog posts based on selected options
                function filterBlogPosts() {
                    var selectedCategory = $('#category-filter').val();

                    // Show all blog posts if "All" is selected
                    if (selectedCategory === 'all') {
                        $('.blog-post').show();
                    } else {
                        // Hide all blog posts
                        $('.blog-post').hide();

                        // Show only the blog posts that match the selected category
                        $('.blog-post[data-category="' + selectedCategory + '"]').show();
                    }
                }

                // Bind change event to filter options
                $('.filter-select').change(function() {
                    filterBlogPosts();
                });

                // Initial filtering on page load
                filterBlogPosts();
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Function to filter blog posts based on selected options
                function filterBlogPosts() {
                    var selectedSubCategory = $('#sub-category-filter').val();

                    // Show all blog posts if "All" is selected
                    if (selectedSubCategory === 'all') {
                        $('.blog-post').show();
                    } else {
                        // Hide all blog posts
                        $('.blog-post').hide();

                        // Show only the blog posts that match the selected sub-category
                        $('.blog-post[data-sub-category="' + selectedSubCategory + '"]').show();
                    }
                }

                // Bind change event to filter options
                $('.filter-select').change(function() {
                    filterBlogPosts();
                });

                // Initial filtering on page load
                filterBlogPosts();
            });
        </script>


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

    0

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
@endsection

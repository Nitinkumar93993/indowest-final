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
                                            <h2 class="inhouse-course-heading">UPCOMING EVENTS</h2>
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
                                                        placeholder="Search By Event Title">
                                                    <button type="submit" class="searchButton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-4">
                                            <select class="basic simple">

                                                <option class="select-branch-head" value="ca" selected="selected">
                                                    Filter By Events Type
                                                </option>
                                                <option class="select-branch-head" value="me">Webinar</option>
                                                <!-- <option class="select-branch-head" value="me">AMBALA CITY (Branch)
                                                        </option>
                                                        <option class="select-branch-head" value="me">AMBALA CANTT (Branch)
                                                        </option> -->

                                            </select>

                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="faq-main-search">
                                                <input type="date" value="2024-01-25" min="2005-01-01" max="2030-01-01">
                                            </div>
                                        </div>

                                    </div> <!-- Row -->

                                </div> <!-- Container -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about_fea-sectio end-->

       

        <div class="container">
            <div class="nitin-book">
                <style>
                    .flex-display-section{
                        display: flex;
                        /* border: 2px solid red; */
                    }
                </style>
                <div class="flex-display-section">
                  @foreach ($view_Every_Events as $eventIndexView)
                <div class="row mt-5 mb-5 justify-content">
             
                    <div class="col-4 eventTwo">
                        <div class="card" style="width: 370px; height: 100%;">
                            <div class="card-body mt-3">
                                <?php
                                $event_img = str_replace('public/', 'storage/', $eventIndexView->event_image);
                                ?>
                                <img class="events-image-main-change" src="{{asset($event_img)}}"
                                    alt="No Image">
                                <h5 style="padding: 15px 0px 0px 0px;" class="card-title text-center"></h5>

                                <h6 class="card-subtitle mb-2 mt-3  text-center"></h6>
                                <div class="card-text index-events">
                                    <div class="text1-heading d-flex align-items-center ms-4 mt-3">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span class="branch-any">Event Type : {{$eventIndexView->event_type}}</span>
                                    </div>
                                    <div class="text1-heading2 d-flex align-items-center ms-4 mt-3"><i
                                            class="bi bi-calendar-check"></i> <span class="branch-any">Date : {{$eventIndexView->event_date}}</span>
                                    </div>
                                    <div class="text1-heading2 d-flex align-items-center ms-4 mt-3"><i
                                            class="bi bi-clock"></i><span class="branch-any">Time : {{$eventIndexView->event_timing}}</span>
                                    </div>
                                    <div class="card-link d-flex justify-content-center  align-items-center mt-4">

                                        <button type="button" class="btn btn-danger">Book Now For Free</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div> @endforeach
            </div>
        </div>
    </div>
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
@endsection

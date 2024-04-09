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
                                            <h2 class="inhouse-course-heading">REALITY TEST</h2>
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
                                            <select id="testType" class="basic simple" onchange="filterResults()">
                                                <option class="select-branch-head" value="All">All Test Types</option>
                                                <option class="select-branch-head" value="CAEL">CAEL</option>
                                                <option class="select-branch-head" value="CD-IELTS">CD-IELTS</option>
                                                <option class="select-branch-head" value="CELPIP">CELPIP</option>
                                                <option class="select-branch-head" value="DUOLINGO">DUOLINGO</option>
                                                <option class="select-branch-head" value="FRENCH">FRENCH</option>
                                                <option class="select-branch-head" value="GERMAN">GERMAN</option>
                                                <option class="select-branch-head" value="IELTS">IELTS</option>
                                                <option class="select-branch-head" value="OET">OET</option>
                                                <option class="select-branch-head" value="PTE">PTE</option>
                                                <option class="select-branch-head" value="SPANISH">SPANISH</option>
                                                <option class="select-branch-head" value="SpokenEnglish">Spoken English
                                                </option>
                                                <option class="select-branch-head" value="DUOLINGO">DUOLINGO</option>
                                                <option class="select-branch-head" value="UKVIIELTS">UKVI IELTS</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="faq-main-search">
                                                <input id="testDate" type="date" value="2024-01-25" min="2005-01-01"
                                                    max="2030-01-01" onchange="filterResults()">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <select id="testVenue" class="basic simple" onchange="filterResults()">
                                                <option class="select-branch-head" value="All">All Venues</option>
                                                <option class="select-branch-head" value="Online">Online</option>
                                                <option class="select-branch-head" value="Ambala Cantt">AMBALA CANTT(BRANCH)
                                                </option>
                                                <option class="select-branch-head" value="Ambala City">AMBALA CITY(BRANCH)
                                                </option>
                                            </select>
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
                <div class="row mt-5 mb-5 justify-content">
                    @foreach ($bookrealitytest as $bookrealitytests)
                        <div class="col-4">
                            <div class="card" style="width: 370px; height: 310px;">
                                <div class="card-body mt-3">
                                    <h5 class="card-title text-center">REALITY TEST | {{ $bookrealitytests->test_type }}
                                    </h5>
                                    <h6 class="card-subtitle mb-2 mt-3  text-center">{{ $bookrealitytests->test_type }}</h6>
                                    <div class="card-text">
                                        <div class="text1-heading d-flex align-items-center ms-4 mt-3">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <span class="branch-any">branch | {{ $bookrealitytests->test_vanue }}</span>
                                        </div>
                                        <div class="text1-heading2 d-flex align-items-center ms-4 mt-3"><i
                                                class="bi bi-calendar-check"></i> <span class="branch-any">Date:
                                                {{ $bookrealitytests->testDate }}</span></div>
                                        <div class="text1-heading2 d-flex align-items-center ms-4 mt-3"><i
                                                class="bi bi-clock"></i><span class="branch-any">Time:
                                                {{ $bookrealitytests->testTimeStart }} |
                                                {{ $bookrealitytests->testTimeEnd }}</span></div>
                                    </div>
                                    <div class="card-link d-flex justify-content-around align-items-center mt-4">INR
                                        {{ $bookrealitytests->testCharges }}</a>
                                        <button type="button" class="btn btn-danger">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="book-reality-load-more">
                <div class="header_btn mr-20">
                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                        href="">&nbsp;&nbsp;Load More &nbsp;&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function filterResults() {
            var testType = document.getElementById("testType").value;
            var testVenue = document.getElementById("testVenue").value;
            var selectedDate = new Date(document.getElementById("testDate").value);

            var cards = document.getElementsByClassName("card");

            for (var i = 0; i < cards.length; i++) {
                var card = cards[i];
                var cardTestType = card.querySelector(".card-title").textContent.split("|")[1].trim();
                var cardTestVenue = card.querySelector(".branch-any").textContent.split("|")[1].trim();
                var cardDate = new Date(card.querySelector(".text1-heading2 span").textContent);

                if ((testType == "All" || cardTestType == testType) &&
                    (testVenue == "All" || cardTestVenue == testVenue) &&
                    (isNaN(selectedDate.getTime()) || cardDate.toDateString() === selectedDate.toDateString())) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            }
        }
    </script>



    </div>


    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    </div><!-- page end -->
@endsection

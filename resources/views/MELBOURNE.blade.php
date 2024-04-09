@extends('common/head')
@section('content')
    <!--site-main start-->
    <div class="site-main">




        <br>
        <br>
        <br>




        <!-- last section nitin tabing start -->

        <p class="We-are-professional">We are professional Expert in Immigrations Visa</p>
        <h2 class="We-are-our-office">Our Offices</h2>
        <br>

        <div class="tab scroller">
            <h2 class="We-are-our-office-tab">Our Offices</h2>
            <button class="tablinks active" onmouseover="openCity(event, 'AMBALA')">AMBALA CITY</button>
            <button class="tablinks" onmouseover="openCity(event, 'AMBALACANTT')">AMBALA CANTT</button>
        </div>

        <div id="AMBALA" class="tabcontent shubham">

            <div class="row">
                <div class="col-sm-4">
                    <h4 class="tab-load-head">Ambala City Office</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-location-dot color-icon"></i>&nbsp;Office No.
                        27-28,
                        Shopping
                        Complex, Vikas Vihar, Prem Nagar, Ambala,
                        Haryana 134003</p>
                    <hr>
                    <h4 class="tab-load-head">Contact Details</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-globe color-icon"></i>&nbsp;<a
                            href="#">Info@Indo-Westacademy.com</a></p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa-brands fa-square-whatsapp color-icon"></i>&nbsp;<a
                            href="#">+91
                            999-6114-545</a></p>
                </div>

                <div class="col-sm-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.5662094054123!2d76.78831507453526!3d30.36327597476451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc8547b20b277%3A0x6fd5b963ff671dfd!2sINDO%20WEST%20Study%20and%20Immigration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1705083845139!5m2!1sen!2sin"
                        width="100" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div id="AMBALACANTT" class="tabcontent">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="tab-load-head">Ambala Cantt Office</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-location-dot color-icon"></i>&nbsp;Office No.
                        27-28,
                        Shopping
                        Complex, Vikas Vihar, Prem Nagar, Ambala,
                        Haryana 134003</p>
                    <hr>
                    <h4 class="tab-load-head">Contact Details</h4>
                    <p class="address-tab-load"><i class="fa-solid fa-globe color-icon"></i>&nbsp;<a
                            href="#">Info@Indo-Westacademy.com</a></p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa fa-phone color-icon"></i>&nbsp;<a href="#">+91
                            999-6114-545</a>
                    </p>
                    <p class="address-tab-load"><i class="fa-brands fa-square-whatsapp color-icon"></i>&nbsp;<a
                            href="#">+91
                            999-6114-545</a></p>
                </div>

                <div class="col-sm-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.5662094054123!2d76.78831507453526!3d30.36327597476451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc8547b20b277%3A0x6fd5b963ff671dfd!2sINDO%20WEST%20Study%20and%20Immigration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1705083845139!5m2!1sen!2sin"
                        width="100" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- last section nitin tabing start -->







    </div><!--site-main end-->

    <div style="background-color: #fff;" class="gallery-container">
        <br>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <!-- <p class="We-are-professional">Proficiency Tests to Language Courses</p> -->
                        <h2 class="We-are-our-office">Instagram Feed</h2>
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

    {{-- hello --}}
    <script src="js/modal.js"></script>
    <!-- Javascript end-->

    0
@endsection

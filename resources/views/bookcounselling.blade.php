@extends('common/head')
@section('content')
    <!--site-main start-->
    <div class="site-main">
        <!--about_fea-section-->
        <section class="cmt-row about_fea-section cmt-bgcolor-white clearfix">
            <div class="contaner-fluid d-flex justify-content-center">
                <div class=" shad"
                    style="border: 15px solid rgb(255, 255, 255); border-radius: 2px; box-shadow: 20px black; width: 90%;">
                    <img src="images/slides/bookcounsellingbannerimage.png" alt="" style="width: 100%;">

                </div>
            </div>
        </section>
        <!--about_fea-sectio end-->

        <div class="container-fluid mt-5 book-text-sec">
            <h4 class="virtual-counselling-heading">
                VIRTUAL STUDY VISA COUNSELLING
            </h4>
            <h2 class="We-are-our-office">As simple as</h2>

            <div class="col-lg-12 book-counselling-paragraph-text">
                <p class="p-Service-book">
                    <i class="fa-solid fa-check-to-slot" style="color: #d9070a;"></i>
                    Select a Service
                </p>
                <p class="p-Service-book">
                    <i class="fa-solid fa-check-to-slot" style="color: #d9070a;"></i>
                    Choose the time that suits you
                </p>
                <p class="p-Service-book">
                    <i class="fa-solid fa-check-to-slot" style="color: #d9070a;"></i>
                    Receive a Virtual Counselling
                </p>
            </div>
        </div>
        {{-- 
        <form id="bookingForm" action="{{ url('/') }}/bookcounselling" method="post">
            @csrf
            <div class="container book-sec-2">
                <div class="row">
                    <div class="col-sm-6 mt-20">
                        <label class="label-heading-modal" for="fullName">Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="col-sm-6 mt-20">
                        <label class="label-heading-modal" for="phoneNumber">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Your Phone Number"
                            required>
                    </div>
                    <div class="col-sm-6 mt-20">
                        <label class="label-heading-modal" for="email">Email ID</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email ID" required>
                    </div>
                    <div class="col-sm-6 mt-20">
                        <label class="label-heading-modal" for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter Your City" required>
                    </div>
                    <div class="col-sm-6 mt-20" id="countryForm">
                        <label class="label-heading-modal" for="selectCountry">Select Preferred Country</label>
                        <select class="basic simple" id="selectCountry" name="selectCountry">
                            <option class="select-branch-head" value="">Choose Country</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mt-20">
                        <label class="label-heading-modal" for="selectService">Select Service</label>
                        <select class="basic simple" id="selectService" name="selectService">
                            <option class="select-branch-head" value="ca" selected="selected">Select service
                            </option>
                            <option class="select-branch-head" value="me">Virtual Counselling</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mt-50">
                        <label class="label-heading-modal" for="eventDate">Select Date</label>
                        <div class="col-md-12">
                            <div class="time-slot">
                                <!-- Radio inputs for date selection -->
                                <input type="radio" id="985" name="date_radios" value="985"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="985">13th Feb 24</label>

                                <input type="radio" id="986" name="date_radios" value="986"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="986">14th Feb 24</label>

                                <input type="radio" id="987" name="date_radios" value="987"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="987">15th Feb 24</label>

                                <input type="radio" id="988" name="date_radios" value="988"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="988">16th Feb 24</label>

                                <input type="radio" id="989" name="date_radios" value="989"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="989">19th Feb 24</label>

                                <input type="radio" id="990" name="date_radios" value="990"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="990">20th Feb 24</label>

                                <input type="radio" id="991" name="date_radios" value="991"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="991">21th Feb 24</label>

                                <input type="radio" id="992" name="date_radios" value="992"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="992">22th Feb 24</label>

                                <input type="radio" id="993" name="date_radios" value="993"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="993">23th Feb 24</label>

                                <input type="radio" id="994" name="date_radios" value="994"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="994">26th Feb 24</label>

                                <input type="radio" id="995" name="date_radios" value="995"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="995">28th Feb 24</label>

                                <input type="radio" id="996" name="date_radios" value="996"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="996">29th Feb 24</label>

                                <input type="radio" id="997" name="date_radios" value="997"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="997">1th Feb 24</label>

                                <input type="radio" id="998" name="date_radios" value="998"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="998">4th Feb 24</label>

                                <input type="radio" id="999" name="date_radios" value="999"
                                    onchange="showTimeSlots()">
                                <label class="enabled" for="999">6th Feb 24</label>
                            </div>
                            <span class="valid-feedback">
                                <p>The Event date field is required.</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-50">
                        <label class="label-heading-modal" for="timeSlot">Choose Time Slot</label>
                        <div class="col-md-12">
                            <div class="time-slot loadTimeSlotDiv" style="display: none;">
                                <!-- Radio inputs for time slot selection -->
                                <input type="radio" id="11:00" name="time_radios" value="11:00"><label
                                    class="enabled" for="11:00">11:00</label>

                                <input type="radio" id="12:00" name="time_radios" value="12:00"><label
                                    class="enabled" for="12:00">12:00</label>

                                <input type="radio" id="12:30" name="time_radios" value="12:30"><label
                                    class="enabled" for="12:30">12:30</label>

                                <input type="radio" id="01:30" name="time_radios" value="01:30"><label
                                    class="enabled" for="01:30">01:30</label>

                                <input type="radio" id="02:30" name="time_radios" value="02:30"><label
                                    class="enabled" for="02:30">02:30</label>

                                <input type="radio" id="03:00" name="time_radios" value="03:00"><label
                                    class="enabled" for="03:00">03:00</label>

                                <input type="radio" id="03:30" name="time_radios" value="03:30"><label
                                    class="enabled" for="03:30">03:30</label>

                                <input type="radio" id="04:00" name="time_radios" value="04:00"><label
                                    class="enabled" for="04:00">04:00</label>
                            </div>
                            <span class="valid-feedback">
                                <p>The Your Time slot field is required.</p>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 text-right" style="margin-top:15px;">
                        <button type="submit" name="bvc" class="btn btn-red text-uppercase">Book Virtual
                            Counselling</button>
                        <span style="margin-left:10px; margin-right:10px;"> OR </span>
                        <button type="submit" name="rcb" class="btn btn-blue text-uppercase">Request a Call
                            Back</button>
                    </div>
                </div>
            </div>
            
        </form> --}}
        <div class="shdhiv" style="width:50%; margin:auto;">
            <form id="bookingForm" action="{{ url('/') }}/bookcounselling" method="post">
                @csrf
                <label for="fullName">Name:</label><br>
                <input type="text" id="fullName" name="fullName" required><br>

                <label for="phoneNumber">Phone Number:</label><br>
                <input type="tel" id="phoneNumber" name="phoneNumber" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="city">City:</label><br>
                <input type="text" name="city" id="city" required>

                <label for="selectCountry">Country:</label><br>
                <select id="selectCountry" name="selectCountry" required>
                    <option value="" disabled selected>Select Country</option>
                    <option value="country1">Country 1</option>
                    <option value="country2">Country 2</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="selectService">Select Service:</label><br>
                <select id="selectService" name="selectService" required>
                    <option value="" disabled selected>Select Service</option>
                    <option value="service1">Service 1</option>
                    <option value="service2">Service 2</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="eventDate">Date:</label><br>
                <select id="eventDate" name="eventDate" required>
                    <option value="" disabled selected>Select Date</option>
                    <option value="2024-04-05">April 5, 2024</option>
                    <option value="2024-04-06">April 6, 2024</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="timeSlot">Time:</label><br>
                <select id="timeSlot" name="timeSlot" required>
                    <option value="" disabled selected>Select Time</option>
                    <option value="09:00">9:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <!-- Add more options as needed -->
                </select><br><br>
                <div class="col-md-12 text-right" style="margin-top:15px;">
                    <button type="submit" name="bvc" class="btn btn-red text-uppercase">Book Virtual
                        Counselling</button>
                    <span style="margin-left:10px; margin-right:10px;"> OR </span>
                    <button type="submit" name="rcb" class="btn btn-blue text-uppercase">Request a Call
                        Back</button>
                </div>
            </form>


        </div>

        <div class="container-fluid">
            <h2 class="bookheadingvideo">LATEST VIDEO</h2>
            <div class="containerlatestvideo">
              
                <div class="main-video-container">
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
                    {{-- <video class="main-video" src="images/slides/academic-6.mp4" loop controls></video> --}}
                    <h3 class="main-video__title">Lorem, ipsum.</h3>
                </div>

                <div class="video-list-container">

                    <div class="list active">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>
                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="list">
                        <video class="list__video" src="images/slides/travel-abroad-new.mp4"></video>

                        <h3 class="list__title">Lorem, ipsum dolor.</h3>
                    </div>

                </div>
                <div class="card-link d-flex justify-content-center   align-items-center mt-4 mb-25">
                    <button id="viewAllBtn" type="button" class="btn btn-viewall">View All</button>
                </div>
            </div>

        </div><!--site-main end-->

        <div style="background-color: #f5faff;" class="gallery-container">
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

    <!-- Javascript end-->
    <script>
        var select = document.getElementById("selectCountry");

        var countries = new Array(
            "Afghanistan",
            "Albania",
            "Algeria",
            "Andorra",
            "Angola",
            "Antarctica",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas",
            "Bahrain",
            "Bangladesh",
            "Barbados",
            "Belarus",
            "Belgium",
            "Belize",
            "Benin",
            "Bermuda",
            "Bhutan",
            "Bolivia",
            "Bosnia and Herzegovina",
            "Botswana",
            "Brazil",
            "Brunei",
            "Bulgaria",
            "Burkina Faso",
            "Burma",
            "Burundi",
            "Cambodia",
            "Cameroon",
            "Canada",
            "Cape Verde",
            "Central African Republic",
            "Chad",
            "Chile",
            "China",
            "Colombia",
            "Comoros",
            "Congo, Democratic Republic",
            "Congo, Republic of the",
            "Costa Rica",
            "Cote d'Ivoire",
            "Croatia",
            "Cuba",
            "Cyprus",
            "Czech Republic",
            "Denmark",
            "Djibouti",
            "Dominica",
            "Dominican Republic",
            "East Timor",
            "Ecuador",
            "Egypt",
            "El Salvador",
            "Equatorial Guinea",
            "Eritrea",
            "Estonia",
            "Ethiopia",
            "Fiji",
            "Finland",
            "France",
            "Gabon",
            "Gambia",
            "Georgia",
            "Germany",
            "Ghana",
            "Greece",
            "Greenland",
            "Grenada",
            "Guatemala",
            "Guinea",
            "Guinea-Bissau",
            "Guyana",
            "Haiti",
            "Honduras",
            "Hong Kong",
            "Hungary",
            "Iceland",
            "India",
            "Indonesia",
            "Iran",
            "Iraq",
            "Ireland",
            "Israel",
            "Italy",
            "Jamaica",
            "Japan",
            "Jordan",
            "Kazakhstan",
            "Kenya",
            "Kiribati",
            "Korea, North",
            "Korea, South",
            "Kuwait",
            "Kyrgyzstan",
            "Laos",
            "Latvia",
            "Lebanon",
            "Lesotho",
            "Liberia",
            "Libya",
            "Liechtenstein",
            "Lithuania",
            "Luxembourg",
            "Macedonia",
            "Madagascar",
            "Malawi",
            "Malaysia",
            "Maldives",
            "Mali",
            "Malta",
            "Marshall Islands",
            "Mauritania",
            "Mauritius",
            "Mexico",
            "Micronesia",
            "Moldova",
            "Mongolia",
            "Morocco",
            "Monaco",
            "Mozambique",
            "Namibia",
            "Nauru",
            "Nepal",
            "Netherlands",
            "New Zealand",
            "Nicaragua",
            "Niger",
            "Nigeria",
            "Norway",
            "Oman",
            "Pakistan",
            "Panama",
            "Papua New Guinea",
            "Paraguay",
            "Peru",
            "Philippines",
            "Poland",
            "Portugal",
            "Qatar",
            "Romania",
            "Russia",
            "Rwanda",
            "Samoa",
            "San Marino",
            " Sao Tome",
            "Saudi Arabia",
            "Senegal",
            "Serbia and Montenegro",
            "Seychelles",
            "Sierra Leone",
            "Singapore",
            "Slovakia",
            "Slovenia",
            "Solomon Islands",
            "Somalia",
            "South Africa",
            "Spain",
            "Sri Lanka",
            "Sudan",
            "Suriname",
            "Swaziland",
            "Sweden",
            "Switzerland",
            "Syria",
            "Taiwan",
            "Tajikistan",
            "Tanzania",
            "Thailand",
            "Togo",
            "Tonga",
            "Trinidad and Tobago",
            "Tunisia",
            "Turkey",
            "Turkmenistan",
            "Uganda",
            "Ukraine",
            "United Arab Emirates",
            "United Kingdom",
            "United States",
            "Uruguay",
            "Uzbekistan",
            "Vanuatu",
            "Venezuela",
            "Vietnam",
            "Yemen",
            "Zambia",
            "Zimbabwe"
        );

        //console.log(countries);
        //console.log(select);

        for (var i = 0; i < countries.length; i++) {
            var option = document.createElement("option");
            //for every turn of the loop create an option tag
            //console.log(option);
            var txt = document.createTextNode(countries[i]);
            //for every turn of the loop create the inner text
            //console.log(txt);
            option.appendChild(txt);
            //for every turn of the loop put the words from txt inside the <option> tags
            //console.log(option);
            option.setAttribute("value", countries[
                i]); //for every turn of the loop set the value attribute to corresponding country name
            //console.log(option);
            select.insertBefore(option, select.lastChild);
            //console.log(select);
        }
        document.addEventListener(
            "DOMContentLoaded",
            function() {
                //console.log('DOM fully loaded and parsed');
                document.querySelector(
                    'select[name="selectCountry"]'
                ).onchange = alertCountry;
            },
            false
        );

        function alertCountry(event) {
            //console.log('DOM loaded');
            //use "this" to refer to selected element
            if (!event.target.value) alert("Please select a country");
            else alert("You chose " + event.target.value + ". Yay, grab a beer!");
        }
    </script>

    <script>
        function showTimeSlots() {
            var selectedDate = document.querySelector('input[name="date_radios"]:checked');
            var timeSlotDiv = document.querySelector('.loadTimeSlotDiv');
            if (selectedDate) {
                timeSlotDiv.style.display = 'block'; // Show time slots
            } else {
                timeSlotDiv.style.display = 'none'; // Hide time slots if no date is selected
            }
        }
    </script>
    <script>
        let videoList = document.querySelectorAll(".video-list-container .list");

        videoList.forEach((vid) => {
            vid.onclick = () => {
                videoList.forEach((remove) => {
                    remove.classList.remove("active");
                });
                vid.classList.add("active");

                let src = vid.querySelector(".list__video").src;
                let title = vid.querySelector(".list__title").innerHTML;

                document.querySelector(".main-video-container .main-video").src = src;
                document.querySelector(".main-video-container .main-video").play();
                document.querySelector(
                    ".main-video-container .main-video__title"
                ).innerHTML = title;
            };
        });
    </script>
    <script>
        document.getElementById("viewAllBtn").addEventListener("click", function() {
            // Replace 'https://www.youtube.com/watch?v=VIDEO_ID' with your actual YouTube video link
            var youtubeLink = "https://www.youtube.com/channel/UC8v_0zOOJpC3msbpO9PMhHQ";
            window.open(youtubeLink, '_blank');
        });
    </script>
@endsection

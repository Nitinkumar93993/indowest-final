@extends('common/head')
@section('content')
    <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Team Details</h2>
                            @if ($teamMember)
                                <p>{{ $teamMember->member_since }}</p>
                            @endif
                        </div>
                        <div class="breadcrumb-wrapper"> <span> <a title="Homepage" href="index.html">Home</a>
                            </span>
                            @if ($teamMember)
                                <span>Team {{ $teamMember->id }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row cmt-team-single-contents clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="left-content pr-20 res-991-pr-0 res-991-pb-40">
                            <?php $member_img = str_replace('public/', 'storage/', $teamMember->member_image); ?>
                            <img class="img-fluid w-100" src="{{ asset($member_img) }}" alt="team-img" />
                            <div class="content-info pt-25 pl-25 pr-25 pb-25 box-shadow">
                                <div class="content-header mb-20">
                                    @if ($teamMember)
                                        <h4 class="headings">{{ $teamMember->member_name }}</h4>
                                    @endif
                                    @if ($teamMember)
                                        <i>{{ $teamMember->member_title }}</i>
                                    @endif
                                </div>
                                <div class="content-desc">
                                    @if ($teamMember)
                                        <p>{{ $teamMember->undefine }}</p>
                                    @endif
                                </div>
                                <div class="cmt-horizontal_sep width-100 mt-25 mb-25"></div>
                                <h4>Personal Information</h4>
                                <div class="pt-5">
                                    <div class="row mb-10">
                                        <div class="col-4"><b>Phone</b></div>
                                        <div class="col-8">
                                            @if ($teamMember)
                                                <p>{{ $teamMember->member_contact }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-10">
                                        <div class="col-4"><b>Email</b></div>
                                        <div class="col-8">
                                            @if ($teamMember)
                                                <p>{{ $teamMember->member_email }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-10">
                                        <div class="col-4"><b>Websites</b></div>
                                        <div class="col-8">
                                            @if ($teamMember)
                                                <p>{{ $teamMember->member_website }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-10">
                                        <div class="col-4"><b>Fax</b></div>
                                        <div class="col-8">
                                            @if ($teamMember)
                                                <p>{{ $teamMember->member_fax }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="cmt-horizontal_sep width-100 mt-25 mb-25"></div>
                                <h4>Skills</h4>
                                <div class="pt-5">

                                    <div class="cmt-progress-bar" data-percent="80%">
                                        <div class="progressbar-title font-weight-normal">
                                            @if ($teamMember)
                                                <p>{{ $teamMember->member_skill }}</p>
                                            @endif
                                        </div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                        </div>
                                    </div>
                                    <div class="cmt-progress-bar clearfix" data-percent="75%">
                                        <div class="progressbar-title font-weight-normal">Study and work visa</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cmt-horizontal_sep width-100 mt-35 mb-30"></div>
                                <ul class="social-icons circle social-hover cmt-textcolor-skincolor pb-10">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank"
                                            href="{{ $teamMember->facebook_url }}" data-tooltip="Facebook"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank"
                                            href="{{ $teamMember->facebook_url }}" data-tooltip="Twitter"><i
                                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class=" tooltip-top" target="_blank"
                                            href="{{ $teamMember->facebook_url }}" data-tooltip="Google+"><i
                                                class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class=" tooltip-top" target="_blank"
                                            href="{{ $teamMember->facebook_url }}" data-tooltip="LinkedIn"><i
                                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="right-content">
                            <h4>About Me</h4>
                            @if ($teamMember)
                                <p>{{ $teamMember->about_me }}</p>
                            @endif
                            <div class="pt-15">
                                <h4>Qualifications</h4>
                                @if ($teamMember)
                                    <p>{{ $teamMember->qualification }}</p>
                                @endif
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="featured-icon-box icon-align-top-content style8 text-left box-shadow">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                    <i class="flaticon-boarding-pass-2"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="content-inner">
                                                    <div class="featured-title">
                                                        <h5>Private <br>Coaching</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="featured-icon-box icon-align-top-content style8 text-left box-shadow">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                    <i class="flaticon-boarding-pass-2"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="content-inner">
                                                    <div class="featured-title">
                                                        <h5>Private <br>Coaching</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="featured-icon-box icon-align-top-content style8 text-left box-shadow">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                    <i class="flaticon-boarding-pass-2"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="content-inner">
                                                    <div class="featured-title">
                                                        <h5>Private <br>Coaching</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-15">
                                <h4>Achivements</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor mb-10">
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">London sport academy Lifetime
                                                    membership</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Editor’s Award: national award in
                                                    2018</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Best player sport of 2019 in
                                                    USA</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Specials awards form
                                                    president</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor mb-10">
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">London sport academy Lifetime
                                                    membership</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Editor’s Award: national award in
                                                    2018</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Best player sport of 2019 in
                                                    USA</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor ti ti-minus"></i><span
                                                    class="cmt-list-li-content">Specials awards form
                                                    president</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-30">
                                <h4>Contact Me</h4>
                                <form id="contact_form" class="contact_form wrap-form pt-15 clearfix" method="post"
                                    novalidate="novalidate" action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text"
                                                        value="" placeholder="Your Name"
                                                        required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label>
                                                <span class="text-input"><input name="address" type="text"
                                                        value="" placeholder="Your Email"
                                                        required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <label>
                                        <span class="text-input">
                                            <textarea name="message" rows="5" placeholder="Message" required="required"></textarea>
                                        </span>
                                    </label>
                                    <button
                                        class="submit cmt-btn cmt-btn-size-lg cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark"
                                        type="submit">Send Message!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    </div>

    <!-- Javascript -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.js"></script>
    <script src="/js/jquery-waypoints.js"></script>
    <script src="/js/jquery-validate.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/numinate.min.js"></script>
    <script src="/js/imagesloaded.min.js"></script>
    <script src="/js/jquery-isotope.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/modal.js"></script>
    <!-- Javascript end-->

        <script>
        const phoneInput = document.querySelector("#phoneInput");

        // Initialize intlTelInput
        const iti = window.intlTelInput(phoneInput, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
        });

        // Set initial country to India
        iti.promise.then(() => {
            iti.setCountry("in");
        });

        // Listen for the country change event
        phoneInput.addEventListener("countrychange", function () {
            const countryCode = iti.getSelectedCountryData().iso2;
            console.log("Selected country code:", countryCode);
        });

    </script>
@endsection

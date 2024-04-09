@extends('Admin.admin_head.common_section')
@section('main-content')
<div class="details-box">

    @include('Admin.admin_head.admin_sidebar')


    <div>

    @foreach ($teamMembers as $teammeber)
        <main class="container-fluid p-3 border">
            <div class="section-main ">

                <div class="section-one">
                    <?php $member_img = str_replace('public/', 'storage/', $teammeber->member_image); ?>
                    <img class="img-fluid" src="{{ asset($member_img) }}" alt="image" width="40%">
                </div>


                <div class="section-two pt-4">
                    <h6 class="headings">{{ $teammeber->member_name }}</h6>
                    <i>{{ $teammeber->member_title }}</i>


                    <h6 class="headings">Team Details</h6>
                    <p>{{ $teammeber->member_since }}</p>
                </div>

                <div class="section-three  pt-4">
                    <h6 class="headings">Personal Information</h6>
                    <div class="inline-block">
                        <b>Phone:</b>
                        <p>{{ $teammeber->member_contact }}</p>
                    </div>
                    <div class="inline-block">
                        <b>Email:</b>
                        <p>{{ $teammeber->member_email }}</p>
                    </div>


                    <div class="inline-block">
                        <b>Websites:</b>
                        <p>{{ $teammeber->member_website }}</p>
                    </div>


                    <div class="inline-block">

                        <b>Fax:</b>
                        <p>{{ $teammeber->member_fax }}</p>

                    </div>


                    <div class="inline-block line-height">
                        <b>Skills:</b>
                        <p>{{ $teammeber->member_skill }}</p>
                    </div>


                </div>

            </div>
            <span> Home: </span>
            <span> Team: </span>
            <div class="icon pt-2 pb-2">
                <i class="fa-brands fa fa-twitter" aria-hidden="true"> </i><span> -
                    {{ $teammeber->twitter_url }}</span><br><br>
                <i class="fa-brands fa-facebook"></i><span> - {{ $teammeber->facebook_url }}</span><br><br>
                <i class="fa-brands fa-square-instagram"></i><span> - {{ $teammeber->instagram_url }}</span><br><br>
            </div>
            <!-- page-title end -->
            <!--site-main start-->
            <div class="site-main pt-2">
                <p>{{ $teammeber->undefine }}</p>

                <h6 class="headings pt-3">About Me:</h6>
                <p>{{ $teammeber->about_me }}</p>
                <h6 class="headings">Qualifications:</h6>
                <p>{{ $teammeber->qualification }}</p>
                <h6 class="headings">Achivements:</h6>
                <p>{{ $teammeber->achivement }}</p>
            </div>
        </main>
    @endforeach
    </div></div>


@endsection




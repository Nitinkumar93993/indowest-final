@extends('Admin.admin_head.common_section')
@section('main-content')
    <!-- Required meta tags -->
    <div class="details-box">

        @include('Admin.admin_head.admin_sidebar')


        <div>

    <form action="{{ url('/') }}/Admin/TeamMember" method="post" enctype="multipart/form-data">
        @csrf
        <main class="container-fluid p-3 border">
            <h2 class="text-center"><u>Team Member Details</u></h2>
            <div class="section-main ">

                <div class="section-one">                  
                    <div class="icon p-4">
                        <i class="fa-brands fa fa-twitter text-primary" aria-hidden="true"></i>
                        <input type="text" name="twitter_url" id=""><br>
                        <i class="fa-brands fa-facebook text-primary"></i>
                        <input type="text" name="facebook_url" id=""><br>
                        <i class="fa-brands fa-square-instagram text-danger"></i>
                        <input type="text" name="instagram_url" id=""><br>
                    </div>


                    <div class="section-two p-4 box-border-one">
                        <h6 class="headings">Profile Information</h6>
                        <b>Name:</b><br>
                        <input type="text" name="member_name" id=""><br>
                        <b>Image: </b><br>
                        <input type="file" name="member_image" id=""><br>
                        <b>Title:</b><br>
                        <input type="text" name="member_title" id=""><br>
                        <b>Describe</b>
                        <input type="text" name="undefine" id="">
                        <b>Since:</b><br>
                        <input type="text" name="member_since" id="">

                       

                        
                        <h6 class="headings pt-3">About Me:</h6>
                        <input type="text" name="about_me" id="">
                        <h6 class="headings">Qualifications:</h6>
                        <input type="text" name="qualification" id="">
                        <h6 class="headings">Achivements:</h6>
                        <input type="text" name="achivement" id="">
                    </div>
                    <!--site-main start-->
                    <div class="site-main p-4 box-border-one">                       
                        <h6 class="headings">Personal Information</h6>
                        <b>Phone:</b><br>
                        <input type="text" name="member_contact" id=""><br>
                        <b>Email:</b><br>
                        <input type="email" name="member_email" id=""><br>
                        <b>Websites:</b><br>
                        <input type="text" name="member_website" id=""><br>
                        <b>Fax:</b><br>
                        <input type="text" name="member_fax" id=""><br>
                        <b>Skills:</b><br>
                        <input type="text" name="member_skill" id="">
                    </div>

                </div>
        </main>
        <div class="block-display">
            <button class="bg-success text-white" name="update_profile" type="submit">Update</button>
        </div>

    </form>
        </div></div>


@endsection
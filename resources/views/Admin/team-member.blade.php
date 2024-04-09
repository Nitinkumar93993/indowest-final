@extends('Admin.admin_head.common_section')
@section('main-content')
    <!-- Required meta tags -->
    <div class="details-boxteam">

        @include('Admin.admin_head.admin_sidebar')

        <style>
            .details-boxteam {
                width: 100%;
                display: flex;
                padding: 3%
            }

            .teamInput {
                border: 1px solid gray;
                width: 100%;
                padding: 1rem;
                margin: 0.6rem auto 1rem;
            }

            .teamInputbtn {
                width: 100%;
                padding: 1rem;
                margin: auto;
                border: none;
                text-align: center;
                font-size: 1.2rem;
                font-weight: 500;

            }

            .teamInputbtndiv {
                /* border:1px solid gray; */
                display: flex;

            }

            .container_fluid {
                background-color: lightgoldenrodyellow;
                width: 85%;
                margin: auto;
            }

            .headingTeam {
                background-color: burlywood;
                padding: 1rem;
                text-align: center;
                color: white;
            }

            .widthHundredFlex {
                /* border:1px solid green; */
                width: 50%;
                margin: auto;
                background-color: lightgoldenrodyellow;
                padding: 3% 0;
            }

            .container_fluid_create {
                width: 85%;
                margin: auto;
                background-color: lightgoldenrodyellow;
            }

            .teamInputMember {
                width: 100%;
                border: none;
                padding: 1rem;
                background-color: #fff;
                margin: 0.5rem 0 1rem;
            }

            @media(max-width:768px) {
                .container_fluid_create {
                    width: 85%;
                    margin: auto;
                    background-color: lightgoldenrodyellow;
                }

                .widthHundredFlex {
                    width: 90%;
                    margin: auto;
                    background-color: lightgoldenrodyellow;
                    padding: 5% 0;
                }

                .details-boxteam {
                    width: 100%;
                    display: block;
                    padding: 3%
                }
            }
        </style>
        <div class="widthHundredFlex">
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <main class="container_fluid_create">
                    <h2 class="headingTeam">{{ $title }}</h2>

                    <div class="section-one">
                        <i class="fa-brands fa fa-twitter text-primary" aria-hidden="true"></i>
                        <input type="text" class="teamInputMember" name="twitter_url" id=""
                            value="{{ $teammeber ? $teammeber->twitter_url : '' }}"><br>
                        <i class="fa-brands fa-facebook text-primary"></i>
                        <input type="text" class="teamInputMember" name="facebook_url" id=""
                            value="{{ $teammeber ? $teammeber->facebook_url : '' }}"><br>
                        <i class="fa-brands fa-square-instagram text-danger"></i>
                        <input type="text" class="teamInputMember" name="instagram_url" id=""
                            value="{{ $teammeber ? $teammeber->instagram_url : '' }}"><br>


                        <h6 class="headings">Profile Information</h6>
                        <b>Name:</b><br>
                        <input type="text" class="teamInputMember" name="member_name" id=""
                            value="{{ $teammeber ? $teammeber->member_name : '' }}"><br>
                        <b>Image: </b><br>
                        <input type="file" class="teamInputMember" name="member_image" id=""
                            value="{{ $teammeber ? $teammeber->member_image : '' }}"><br>
                        <b>Title:</b><br>
                        <input type="text" class="teamInputMember" name="member_title" id=""
                            value="{{ $teammeber ? $teammeber->member_title : '' }}"><br>
                        <b>Describe</b>
                        <input type="text" class="teamInputMember" name="undefine" id=""
                            value="{{ $teammeber ? $teammeber->undefine : '' }}"><br>
                        <b>Since:</b><br>
                        <input type="text" class="teamInputMember" name="member_since" id=""
                            value="{{ $teammeber ? $teammeber->member_since : '' }}"><br>




                        <h6 class="headings pt-3">About Me:</h6>
                        <input type="text" class="teamInputMember" name="about_me" id=""
                            value="{{ $teammeber ? $teammeber->about_me : '' }}">
                        <h6 class="headings">Qualifications:</h6>
                        <input type="text" class="teamInputMember" name="qualification" id=""
                            value="{{ $teammeber ? $teammeber->qualification : '' }}">
                        <h6 class="headings">Achivements:</h6>
                        <input type="text" class="teamInputMember" name="achivement" id=""
                            value="{{ $teammeber ? $teammeber->achivement : '' }}">

                        <h6 class="headings">Personal Information</h6>
                        <b>Phone:</b><br>
                        <input type="text" class="teamInputMember" name="member_contact" id=""
                            value="{{ $teammeber ? $teammeber->member_contact : '' }}"><br>
                        <b>Email:</b><br>
                        <input type="email" class="teamInputMember" name="member_email" id=""
                            value="{{ $teammeber ? $teammeber->member_email : '' }}"><br>
                        <b>Websites:</b><br>
                        <input type="text" class="teamInputMember" name="member_website" id=""
                            value="{{ $teammeber ? $teammeber->member_website : '' }}"><br>
                        <b>Fax:</b><br>
                        <input type="text" class="teamInputMember" name="member_fax" id=""
                            value="{{ $teammeber ? $teammeber->member_fax : '' }}"><br>
                        <b>Skills:</b><br>
                        <input type="text" class="teamInputMember" name="member_skill" id=""
                            value="{{ $teammeber ? $teammeber->member_skill : '' }}">

                    </div>
                    <div class="teamInputbtndiv">
                        <button class="bg-success text-white teamInputbtn" name="update_profile"
                            type="submit">Update</button>

                    </div>
                </main>
            </form>
        </div>
    </div>
@endsection

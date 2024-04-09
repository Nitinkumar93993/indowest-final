@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .teamInput_saat {
            border: 1px solid gray;
            width: 100%;
            padding: 1rem;
            margin: 0.6rem auto 1rem;
        }

        .teamInput_saatbtn {
            width: 93%;
            padding: 1rem;
            margin: auto;
            border: none;
            text-align: center;
            font-size: 1.2rem;
            font-weight: 500;

        }

        .teamInput_saatbtndiv {
            /* border:1px solid gray; */
            display: flex;

        }

        .container_fluid {
            background-color: lightgoldenrodyellow;
            width: 85%;
            margin: auto;
        }

        .headingTeam {
            background-color: lightcoral;
            padding: 1rem;
            text-align: center;
            /* color: white; */
        }

        .w-hundred {
            /* border: 2px solid green; */
        }

        .seventyPercent {
            margin: 5% auto;
            width: 70%;
            background-color: lightgoldenrodyellow;
        }

        .heading_saat {
            background-color: burlywood;
            text-align: center;
            font-size: 1.7rem;
            font-weight: 600;
            color: white;
            padding: 1.2rem;
            margin-top: 0;
        }

        .teamInput_saat {
            padding: 1rem;
            border: none;
            width: 95%;
            background-color: white;
        }

        .heading_black {
            color: black;
            font-size: 1.2rem;
            margin: 1rem 0;
        }

        .teamInput_saatbtnstyle {
            width: 100%;
            background-color: green;
            padding: 1.1rem;
            color: white;
            font-size: 1rem;
            border: none;
            font-weight: 600;
            margin: 1rem 0 3rem;
        }

        .team_saatbtndiv {
            width: 100%;
            /* background-color: gray; */
        }

        @media(max-width:768px) {
            .seventyPercent {
                margin: 5% auto;
                width: 90%;
                background-color: lightgoldenrodyellow;
            }
            .teamInput_saat {
            padding: 1rem;
            border: none;
            width: 88%;
            background-color: white;
        }

        }
    </style>
    <div class="w-hundred">
        <div class="seventyPercent">
            <h3 class="heading_saat">{{ $title }}</h3>
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <main class="container_fluid">

                    <div class="section-main ">
                        <div class="section-one">
                            <i class="fa-brands fa fa-twitter text-primary" aria-hidden="true"></i>
                            <input type="text" class="teamInput_saat" placeholder="Twitter URL" name="twitter_url"
                                id="" value="{{ $teammeber ? $teammeber->twitter_url : '' }}"><br>
                            <i class="fa-brands fa-facebook text-primary"></i>
                            <input type="text" class="teamInput_saat" placeholder="Facebook URL" name="facebook_url"
                                id="" value="{{ $teammeber ? $teammeber->facebook_url : '' }}"><br>
                            <i class="fa-brands fa-square-instagram text-danger"></i>
                            <input type="text" class="teamInput_saat" placeholder="Instagram URL" name="instagram_url"
                                id="" value="{{ $teammeber ? $teammeber->instagram_url : '' }}"><br>


                            <h6 class="heading_black">Profile Information</h6>
                            <b>Name:</b><br>
                            <input type="text" class="teamInput_saat" name="member_name" id=""
                                value="{{ $teammeber ? $teammeber->member_name : '' }}"><br>
                            <b>Image: </b><br>
                            <input type="file" class="teamInput_saat" name="member_image" id=""
                                value="{{ $teammeber ? $teammeber->member_image : '' }}"><br>
                            <b>Title:</b><br>
                            <input type="text" class="teamInput_saat" name="member_title" id=""
                                value="{{ $teammeber ? $teammeber->member_title : '' }}"><br>
                            <b>Describe</b><br>
                            <input type="text" class="teamInput_saat" name="undefine" id=""
                                value="{{ $teammeber ? $teammeber->undefine : '' }}"><br>
                            <b>Since:</b><br>
                            <input type="text" class="teamInput_saat" name="member_since" id=""
                                value="{{ $teammeber ? $teammeber->member_since : '' }}"><br>


                            <h6 class="heading_black">Personal Information</h6>
                            <b>Phone:</b><br>
                            <input type="text" class="teamInput_saat" name="member_contact" id=""
                                value="{{ $teammeber ? $teammeber->member_contact : '' }}"><br>
                            <b>Email:</b><br>
                            <input type="email" class="teamInput_saat" name="member_email" id=""
                                value="{{ $teammeber ? $teammeber->member_email : '' }}"><br>
                            <b>Websites:</b><br>
                            <input type="text" class="teamInput_saat" name="member_website" id=""
                                value="{{ $teammeber ? $teammeber->member_website : '' }}"><br>
                            <b>Fax:</b><br>
                            <input type="text" class="teamInput_saat" name="member_fax" id=""
                                value="{{ $teammeber ? $teammeber->member_fax : '' }}"><br>
                            <b>Skills:</b><br>
                            <input type="text" class="teamInput_saat" name="member_skill" id=""
                                value="{{ $teammeber ? $teammeber->member_skill : '' }}">


                            <h6 class="heading_black pt-3">About Me:</h6>
                            <input type="text" class="teamInput_saat" name="about_me" id=""
                                value="{{ $teammeber ? $teammeber->about_me : '' }}">
                            <h6 class="heading_black">Qualifications:</h6>
                            <input type="text" class="teamInput_saat" name="qualification" id=""
                                value="{{ $teammeber ? $teammeber->qualification : '' }}">
                            <h6 class="heading_black">Achivements:</h6>
                            <input type="text" class="teamInput_saat" name="achivement" id=""
                                value="{{ $teammeber ? $teammeber->achivement : '' }}">
                            <!--site-main start-->


                        </div>
                    </div>
                    <div class="team_saatbtndiv">
                        <button class="teamInput_saatbtnstyle" name="update_profile" type="submit">Update</button>

                    </div>
                </main>
            </form>
        </div>
    </div>
@endsection

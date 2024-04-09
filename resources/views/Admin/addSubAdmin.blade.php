@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="flex_style_display">
        @include('Admin.admin_head.admin_sidebar')
        <style>
            .mainContentDiv {
                /* border: 2px solid gray; */
                /* display: flex; */
                width: 70%;
            }

            .sb_input {
                border: none;
                width: 100%;
                padding: 1rem;
                background-color: #fff;
                margin: 0.5rem auto;
            }

            .sbA_input {
                border: none;
                padding: 1rem;
                width: 100%;
                margin: 0.5rem auto 1rem;
            }

            .formAddSubAdmin {
                /* border:1px solid red; */
                width: 80%;
                background-color: lightgoldenrodyellow;
                margin: 5% auto;
                padding: 5%;
                /* display: flex;             */
            }

            .headingLabel {
                font-size: 1.5rem;
                background-color: burlywood;
                padding: 1rem;
                margin: 1rem 0;
                text-align: center;
                color: #fff;
            }

            .submitSubAdminBTN {
                padding: 1rem;
                width: 100%;
                border: none;
                background-color: cornflowerblue;
                color: white;
                font-size: 1.5rem;
                font-weight: 700;
            }

            .flex_style_display {
                display: flex;
                width: 95%;
                margin: auto;
            }

            @media(max-width:768px) {
                .mainContentDiv {
                    width: 100%;
                }

                .sb_input {
                    width: 100%;
                }

                .formAddSubAdmin {
                    width: 90%;
                }

                .headingLabel {
                    font-size: 1.5rem;
                    background-color: burlywood;
                    padding: 1rem;
                    margin: 1rem 0;
                    text-align: center;
                    color: #fff;
                }

                .flex_style_display {
                    display: block;
                    width: 95%;
                    margin: auto;
                }
            }
        </style>

        <div class="mainContentDiv">
            <div class="formAddSubAdmin">
                <h3 class="headingLabel">add sub admin</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <input class="sb_input" placeholder="Enter Sub Admin Name" type="text" name="sbname"
                        id=""><br>
                    <input class="sb_input" placeholder="Enter Sub Admin File" type="file" name="sbfile"
                        id=""><br>
                    <input class="sb_input" placeholder="Enter Sub Admin Email" type="email" name="sbemail"
                        id=""><br>
                    <input class="sb_input" placeholder="Enter Sub Admin Username" type="text" name="sbusername"
                        id=""><br>
                    <input class="sb_input" placeholder="Enter Sub Admin Password" type="password" name="sbpassword"
                        id=""><br>

                    {{-- sub admin --}}
                    <h5 class="headingLabel">Sub Admin</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" placeholder="Access / Deny" name="sbAdd" id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" placeholder="Access / Deny" name="sbEdit" id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" placeholder="Access / Deny" name="sbView" id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" placeholder="Access / Deny" name="sbDelete" id=""><br>


                    {{-- blog --}}
                    <h5 class="headingLabel">Blog</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="blogAdd" placeholder="Access / Deny" id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="blogEdit" placeholder="Access / Deny" id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="blogView" placeholder="Access / Deny" id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="blogDelete" placeholder="Access / Deny"
                        id=""><br>
                    {{-- testimonial --}}

                    <h5 class="headingLabel">Testimonial</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="testimonialAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="testimonialEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="testimonialView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="testimonialDelete" placeholder="Access / Deny"
                        id=""><br>

                    {{-- course --}}
                    <h5 class="headingLabel">Course</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="courseAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="courseEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="courseView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="courseDelete" placeholder="Access / Deny"
                        id=""><br>
                    {{-- team --}}
                    <h5 class="headingLabel">Team Member</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="teamAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="teamEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="teamView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="teamDelete" placeholder="Access / Deny"
                        id=""><br>

                    {{-- event --}}
                    <h5 class="headingLabel">Event</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="eventAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="eventEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="eventView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="eventDelete" placeholder="Access / Deny"
                        id=""><br>

                    {{-- one add --}}
                    <h5 class="headingLabel">Misleneous</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="oneAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="oneEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="oneView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="oneDelete" placeholder="Access / Deny"
                        id=""><br>
                    {{-- two add --}}
                    <h5 class="headingLabel">Misleneous</h5>
                    <label for="">Add</label><br>
                    <input type="text" class="sbA_input" name="twoAdd" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Edit</label><br>
                    <input type="text" class="sbA_input" name="twoEdit" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Update</label><br>
                    <input type="text" class="sbA_input" name="twoView" placeholder="Access / Deny"
                        id=""><br>
                    <label for="">Delete</label><br>
                    <input type="text" class="sbA_input" name="twoDelete" placeholder="Access / Deny"
                        id=""><br><br>
                    <button type="submit" class="submitSubAdminBTN">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

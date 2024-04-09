@extends('Admin.admin_head.common_section')
@section('main-content')
    <style>
        .subAdminVIewdiv {
            border: 1px solid gray;
            width: 75%;
        }

        .profile_view {
            /* border: 1px solid gray; */
            width: 45%;
            height: fit-content;
            margin: 2rem auto 0;
            padding: 1rem;
            border-radius: 4px;
            box-shadow: 0px 0px 3px darkslategray;
        }

        .border-div-style {
            /* border: 2px solid red; */
            width: 75%;
            display: flex;
            flex-wrap: flex;
            padding: 0 1rem;
        }

        .sub_admin_permit {
            background-color: #606af3;
            padding: 1rem;
            border-radius: 5px;
            width: 45%;
            margin: 0.5rem auto;
            color: white;
            text-align: center;
            font-weight: 500;
            /* height: 1rem; */
        }

        #sub_admin_permit {
            border: 1px solid grey;
            height: 100%
        }

        .boxFlexDiv {
            border: 1px solid green;
            display: flex;
            flex-wrap: wrap;
            margin: 0.6rem;
        }

        .span_badge {
            background-color: beige;
            color: white;
            padding: 0.1rem 1rem 0.5rem;
            border-radius: 0.8rem;
        }
    </style>


    <div class="details-box">
        @include('Admin.admin_head.admin_sidebar')
        <div class="border-div-style">
            @foreach ($AddSubAdmin as $AddSubAdmins)
                <div class="profile_view">


                    <div class="box-image-container">
                        <?php
                        $imagePath = str_replace('public/', 'storage/', $AddSubAdmins->sbfile);
                        ?>
                        <img src="{{ asset($imagePath) }}" alt="" width="10%">

                    </div>
                    <h3 id="heading_three">{{ $AddSubAdmins->sbname }}</h3>
                    <p><b>Email :</b> {{ $AddSubAdmins->sbemail }}</p>
                    <div id="sub_admin_permit"><b>Permission : </b> <br>

                        <script>
                            // sb add
                            var sbAddValue = "{{ $AddSubAdmins->sbAdd }}";
                            var sbAdd = document.getElementById('sbAdd');
                            if (sbAddValue !== "access") {
                                sbAdd.style.backgroundColor = "green";
                            } else {
                                sbAdd.style.backgroundColor = "red";
                            }
                            // sb edit
                            var sbEditValue = "{{ $AddSubAdmins->sbEdit }}";
                            var sbEdit = document.getElementById('sbEdit');
                            if (sbEditValue !== "access") {
                                sbEdit.style.backgroundColor = "green";
                            } else {
                                sbEdit.style.backgroundColor = "red";
                            }
                            // sb view
                            var sbViewValue = "{{ $AddSubAdmins->sbView }}";
                            var sbView = document.getElementById('sbView');
                            if (sbViewValue !== "access") {
                                sbView.style.backgroundColor = "green";
                            } else {
                                sbView.style.backgroundColor = "red";
                            }

                            // sb delete
                            var sbDeleteValue = "{{ $AddSubAdmins->sbDelete }}";
                            var sbDelete = document.getElementById('sbDelete');
                            if (sbDeleteValue !== "access") {
                                sbDelete.style.backgroundColor = "green";
                            } else {
                                sbDelete.style.backgroundColor = "red";
                            }


                            // blog add
                            var blogAddValue = "{{ $AddSubAdmins->blogAdd }}";
                            var blogAdd = document.getElementById('blogAdd');
                            if (blogAddValue !== "access") {
                                blogAdd.style.backgroundColor = "green";
                            } else {
                                blogAdd.style.backgroundColor = "red";
                            }
                            // blog edit
                            var blogEditValue = "{{ $AddSubAdmins->blogEdit }}";
                            var blogEdit = document.getElementById('blogEdit');
                            if (blogEditValue !== "access") {
                                blogEdit.style.backgroundColor = "green";
                            } else {
                                blogEdit.style.backgroundColor = "red";
                            }
                            // blog view
                            var blogViewValue = "{{ $AddSubAdmins->blogView }}";
                            var blogView = document.getElementById('blogView');
                            if (blogViewValue !== "access") {
                                blogView.style.backgroundColor = "green";
                            } else {
                                blogView.style.backgroundColor = "red";
                            }
                            // blog delete
                            var blogDeleteValue = "{{ $AddSubAdmins->blogDelete }}";
                            var blogDelete = document.getElementById('blogDelete');
                            if (blogDeleteValue !== "access") {
                                blogDelete.style.backgroundColor = "green";
                            } else {
                                blogDelete.style.backgroundColor = "red";
                            }
                            // testimonial

                            var testimonialAddValue = "{{ $AddSubAdmins->testimonialAdd }}";
                            var testimonialAdd = document.getElementById('testimonialAdd');
                            if (testimonialAddValue !== "access") {
                                testimonialAdd.style.backgroundColor = "green";
                            } else {
                                testimonialAdd.style.backgroundColor = "red";
                            }

                            //testimonial
                            var testimonialEditValue = "{{ $AddSubAdmins->testimonialEdit }}";
                            var testimonialEdit = document.getElementById('testimonialEdit');
                            if (testimonialEditValue !== "access") {
                                testimonialEdit.style.backgroundColor = "green";
                            } else {
                                testimonialEdit.style.backgroundColor = "red";
                            }
                            //testimonial
                            var testimonialViewValue = "{{ $AddSubAdmins->testimonialView }}";
                            var testimonialView = document.getElementById('testimonialView');
                            if (testimonialViewValue !== "access") {
                                testimonialView.style.backgroundColor = "green";
                            } else {
                                testimonialView.style.backgroundColor = "red";
                            }
                            //testimonial
                            var testimonialDeleteValue = "{{ $AddSubAdmins->testimonialDelete }}";
                            var testimonialDelete = document.getElementById('testimonialDelete');
                            if (testimonialDeleteValue !== "access") {
                                testimonialDelete.style.backgroundColor = "green";
                            } else {
                                testimonialDelete.style.backgroundColor = "red";
                            }



                            //course

                            var courseAddValue = "{{ $AddSubAdmins->courseAdd }}";
                            var courseAdd = document.getElementById('courseAdd');
                            if (courseAddValue !== "access") {
                                courseAdd.style.backgroundColor = "green";
                            } else {
                                courseAdd.style.backgroundColor = "red";
                            }

                            //course
                            var courseEditValue = "{{ $AddSubAdmins->courseEdit }}";
                            var courseEdit = document.getElementById('courseEdit');
                            if (courseEditValue !== "access") {
                                courseEdit.style.backgroundColor = "green";
                            } else {
                                courseEdit.style.backgroundColor = "red";
                            }
                            //course
                            var courseViewValue = "{{ $AddSubAdmins->courseView }}";
                            var courseView = document.getElementById('courseView');
                            if (courseViewValue !== "access") {
                                courseView.style.backgroundColor = "green";
                            } else {
                                courseView.style.backgroundColor = "red";
                            }
                            //course
                            var courseDeleteValue = "{{ $AddSubAdmins->courseDelete }}";
                            var courseDelete = document.getElementById('courseDelete');
                            if (courseDeleteValue !== "access") {
                                courseDelete.style.backgroundColor = "green";
                            } else {
                                courseDelete.style.backgroundColor = "red";
                            }
                        </script>
                        <div class="boxFlexDiv">
                            <p class="sub_admin_permit">sbAdd: <br> <span class="span_badge"
                                    id="sbAdd">{{ $AddSubAdmins->sbAdd }}</span></p>
                            <p class="sub_admin_permit">sbEdit: <br> <span class="span_badge"
                                    id="sbEdit">{{ $AddSubAdmins->sbEdit }}</span></p>
                            <p class="sub_admin_permit">sbView: <br> <span class="span_badge"
                                    id="sbView">{{ $AddSubAdmins->sbView }}</span></p>
                            <p class="sub_admin_permit">sbDelete: <br> <span class="span_badge"
                                    id="sbDelete">{{ $AddSubAdmins->sbDelete }}</span></p>
                        </div>
                        <div class="boxFlexDiv">

                            <p class="sub_admin_permit">blogAdd: <br> <span class="span_badge"
                                    id="blogAdd">{{ $AddSubAdmins->blogAdd }}</span></p>
                            <p class="sub_admin_permit">blogEdit: <br> <span class="span_badge"
                                    id="blogEdit">{{ $AddSubAdmins->blogEdit }}</span></p>
                            <p class="sub_admin_permit">blogView: <br> <span class="span_badge"
                                    id="blogView">{{ $AddSubAdmins->blogView }}</span></p>
                            <p class="sub_admin_permit">blogDelete: <br> <span class="span_badge"
                                    id="blogDelete">{{ $AddSubAdmins->blogDelete }}</span></p>
                        </div>
                        <div class="boxFlexDiv">
                            <p class="sub_admin_permit">testimonialAdd: <br> <span class="span_badge"
                                    id="testimonialAdd">{{ $AddSubAdmins->testimonialAdd }}</span></p>
                            <p class="sub_admin_permit">testimonialEdit: <br> <span class="span_badge"
                                    id="testimonialEdit">{{ $AddSubAdmins->testimonialEdit }}</span></p>
                            <p class="sub_admin_permit">testimonialView: <br> <span class="span_badge"
                                    id="testimonialView">{{ $AddSubAdmins->testimonialView }}</span></p>
                            <p class="sub_admin_permit">testimonialDelete: <br> <span class="span_badge"
                                    id="testimonialDelete">{{ $AddSubAdmins->testimonialDelete }}</span></p>
                        </div>
                        <div class="boxFlexDiv">

                            <p class="sub_admin_permit">courseAdd: <br> <span class="span_badge"
                                    id="courseAdd">{{ $AddSubAdmins->courseAdd }}</span></p>
                            <p class="sub_admin_permit">courseEdit: <br> <span class="span_badge"
                                    id="courseEdit">{{ $AddSubAdmins->courseEdit }}</span></p>
                            <p class="sub_admin_permit">courseView: <br> <span class="span_badge"
                                    id="courseView">{{ $AddSubAdmins->courseView }}</span></p>
                            <p class="sub_admin_permit">courseDelete: <br> <span class="span_badge"
                                    id="courseDelete">{{ $AddSubAdmins->courseDelete }}</span></p>
                        </div>
                        <div class="boxFlexDiv">

                            <p class="sub_admin_permit">teamAdd: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->teamAdd }}</span></p>
                            <p class="sub_admin_permit">teamEdit: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->teamEdit }}</span></p>
                            <p class="sub_admin_permit">teamView: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->teamView }}</span></p>
                            <p class="sub_admin_permit">teamDelete: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->teamDelete }}</span></p>
                        </div>
                        <div class="boxFlexDiv">

                            <p class="sub_admin_permit">eventAdd: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->eventAdd }}</span></p>
                            <p class="sub_admin_permit">eventEdit: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->eventEdit }}</span></p>
                            <p class="sub_admin_permit">eventView: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->eventView }}</span></p>
                            <p class="sub_admin_permit">eventDelete: <br> <span
                                    class="span_badge">{{ $AddSubAdmins->eventDelete }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

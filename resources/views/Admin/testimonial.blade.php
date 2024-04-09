@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="flex_style_display">

        @include('Admin.admin_head.admin_sidebar')



        <style>
            .flex_style_display {
                display: flex;
                width: 95%;
                margin: auto;
            }

            .box-style {
                /* border: 2px solid gray; */
                width: 70%;
                padding: 2% 10%;
                height: fit-content;
                /* margin: auto; */
            }

            .test-input {
                width: 100%;
                background-color: white;
                border: none;
                padding: 1rem;
                margin: 0.6rem auto 1rem;
            }

            .display_block {
                display: block;
                width: 95%;
                margin: auto;
            }

            .headingTest {
                text-align: center;
                margin: 0 auto 1rem;
                /* width: 65%; */
                background-color: burlywood;
                padding: 1.3rem;
                color: white;
                /* border:2px solid gray; */
            }

            .testi-div-style {
                /* border:1px solid gray; */
                background-color: lightgoldenrodyellow;
            }

            @media(max-width:768px) {
                .flex_style_display {
                    display: block;
                    width: 95%;
                    margin: auto;
                }

                .box-style {
                    /* border: 2px solid gray; */
                    width: 90%;
                    padding: 0%;
                    height: fit-content;
                    margin: auto;
                }


            }
        </style>
        <div class="box-style">

            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <main>
                    <div class="testi-div-style">
                        <h2 class="headingTest">{{ $title }}</h2>
                        <div class="icon display_block p-4">
                            <b>Name:</b><br>
                            <input type="text" class="test-input" name="testimonial_name" id=""
                                value="{{ $TestimonialData ? $TestimonialData->testimonial_name : '' }}"><br>
                            <b>Category:</b><br>
                            <select id="" name="testimonial_category">
                                <option value="" disabled selected>Select Category</option>
                                <option value="academytestimonials">Academy testimonials</option>
                                <option value="visatestimonials">Visa testimonials</option>
                                <!-- Add more options as needed -->
                            </select><br>                            
                            <b>Image: </b><br>
                            
                            <input type="file" class="test-input" name="testimonial_image" id=""
                                value="{{ $TestimonialData ? $TestimonialData->testimonial_image : '' }}"><br>
                            <b>Describe</b><br>
                            <input type="text" class="test-input" name="testimonial_content" id=""
                                value="{{ $TestimonialData ? $TestimonialData->testimonial_content : '' }}"><br><br>
                            <button class="bg-success text-white test-input" name="testimonial_submit"
                                type="submit">Update</button>
                        </div>
                    </div>
                </main>
            </form>
        </div>
    </div>
@endsection

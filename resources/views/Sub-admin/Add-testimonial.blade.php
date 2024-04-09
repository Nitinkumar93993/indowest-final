@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .box-style_saatdiv {
            padding: 2% 20%;
            height: fit-content;
        }

        .test-input_saatyle {
            width: 95%;
            background-color: white;
            border: none;
            padding: 1rem;
            margin: 0.6rem auto 1rem;
        }

        .display_block {
            display: block;
            width: 80%;
            margin: auto;
            padding-bottom: 5%;
        }

        .headingTest {
            text-align: center;
            margin: 0 auto 2rem;
            /* width: 65%; */
            background-color: burlywood;
            padding: 1.4rem;
            color: white;
            /* border:2px solid gray; */
        }

        .testi-div-style {
            /* border:1px solid gray; */
            background-color: lightgoldenrodyellow;
        }

        .btn_style_saating {
            border: none;
            padding: 1rem;
            width: 100%;
            color: white;
            background-color: green;
            font-size: 1.1rem;
            font-weight: 600;
        }

        @media(max-width:768px) {
            .box-style_saatdiv {
                padding: 5%;
            }
            .test-input_saatyle {
            width: 87.5%;
        }
        }
    </style>
    <div class="box-style_saatdiv">
        <form action="{{ $url }}" method="post" enctype="multipart/form-data">
            @csrf
            <main>
                <div class="testi-div-style">
                    <h2 class="headingTest">{{ $title }}</h2>
                    <div class="icon display_block p-4">
                        <b>Name:</b><br>
                        <input type="text" class="test-input_saatyle" name="testimonial_name" id=""
                            value="{{ $TestimonialData ? $TestimonialData->testimonial_name : '' }}"><br>
                        <b>Image: </b><br>
                        {{-- <input type="file"  name="testimonial_image" id=""><br>                       --}}
                        <input type="file" class="test-input_saatyle" name="testimonial_image" id=""
                            value="{{ $TestimonialData ? $TestimonialData->testimonial_image : '' }}"><br>
                        <b>Describe</b><br>
                        <input type="text" class="test-input_saatyle" name="testimonial_content" id=""
                            value="{{ $TestimonialData ? $TestimonialData->testimonial_content : '' }}"><br><br>
                        <button class="btn_style_saating" name="testimonial_submit" type="submit">Update</button>
                    </div>
                </div>
            </main>
        </form>
    </div>
@endsection

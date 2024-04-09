@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .flex-div {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            padding: 5%;
        }

        .testimonial_div_style {
            width: 26%;
            margin: 1rem auto;
            box-shadow: 0px 0px 5px gray;
            padding: 1rem 0.5rem;
        }

        .test-div h3 {
            margin: 0;
        }

        .test-div img {
            width: 40%;
        }

        .image-div {
            /* border: 2px solid green; */
            width: 100%;
            text-align: center;
        }

        .image-div-block {
            display: block;
            margin: 1rem;
        }

        .flexdisplaybtn {
             width: 96%;
            margin: auto;
            display: flex;
            padding: 0 2%;
        }
        .btnedstyle{
            border:none;
            width: 100%;
            padding: 1rem;

        }
        .flexdisplaybtnlink{
            width: 45%;
            margin: auto;
        }
    </style>
    <div class="flex-div">
        @foreach ($testimonialData as $TestimonialDataView)
            <div class="testimonial_div_style">

                <?php
                $testimonialImage = str_replace('public/', 'storage/', $TestimonialDataView->testimonial_image);
                
                ?>
                <div class="image-div"> <img src="{{ asset($testimonialImage) }}" alt=""></div>

                <div class="image-div-block ">
                    <h3>Name: {{ $TestimonialDataView->testimonial_name }}</h3>
                    <p><b>Description:</b> {{ $TestimonialDataView->testimonial_content }}</p>
                </div>
                <div class="flexdisplaybtn">
                    <a class="flexdisplaybtnlink" href="{{ url('/Sub-admin/edit_testimonial') }}/{{ $TestimonialDataView->id }}"><button class="btnedstyle">Edit</button></a>
                    <a class="flexdisplaybtnlink" href="{{ url('/Sub-admin/delete_testimonial') }}/{{ $TestimonialDataView->id }}"><button class="btnedstyle">Delete</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

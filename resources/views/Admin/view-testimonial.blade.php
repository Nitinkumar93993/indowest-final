@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="flex_style_display">

        @include('Admin.admin_head.admin_sidebar')

        <style>
            .flex-div {
                display: flex;
                flex-wrap: wrap;
                width: 70%;
                margin: auto;
            }

            .test-div {
                /* border: 2px solid red; */
                width: 45%;
                margin: 1rem auto;
                box-shadow: 0px 0px 5px gray;
                padding: 1rem 0.5rem;
                /* display: flex; */
                /* height: 35%; */
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

            .flex_style_display {
                display: flex;
                width: 95%;
                margin: auto;
            }

            .innerflexdiv {
                display: flex;
                width: 85%;
                margin: auto;
                flex-wrap: wrap;
            }
            .flexdisplaybtnvt{
                width: 96%;margin: auto;
                display: flex;
            }
            .flexdisplaybtnvt a{
                width: 100%;margin: auto;display: flex;
            }
            .flexdisplaybtnvt button{
                width: 95%;
                padding: 1rem;
                border: none;
                background-color: rgb(83, 38, 243);
                margin: auto;
                color:white;

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

                .flex-div {
                    display: block;
                    width: 100%;
                    margin: auto;
                }

                .innerflexdiv {
                    display: flex;
                    width: 92%;
                    margin: auto;
                    flex-wrap: wrap;
                }

                .test-div {
                    width: 95%;
                    margin: 1rem auto;

                }
            }
        </style>
        <div class="flex-div">
            <div class="innerflexdiv">
                @foreach ($testimonialData as $TestimonialDataView)
                    <div class="test-div">

                        <?php
                        $testimonialImage = str_replace('public/', 'storage/', $TestimonialDataView->testimonial_image);
                        
                        ?>
                        <div class="image-div"> <img src="{{ asset($testimonialImage) }}" alt=""></div>
                        <br>
                        <div class="image-div-block ">
                            <h3>Name: {{ $TestimonialDataView->testimonial_name }}</h3><br>
                            <p><b>Description:</b> {{ $TestimonialDataView->testimonial_content }}</p>
                        </div>
                        <div class="flexdisplaybtnvt">
                            <a
                                href="{{ url('/Admin/edit_testimonial') }}/{{ $TestimonialDataView->id }}"><button>Edit</button></a>
                            <a
                                href="{{ url('/Admin/delete_testimonial') }}/{{ $TestimonialDataView->id }}"><button>Delete</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

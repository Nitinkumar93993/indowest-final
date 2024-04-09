@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box">

        @include('Admin.admin_head.admin_sidebar')

 
        <div class="flex-div">
            @foreach ($testimonialData as $TestimonialDataView)
                <div class="test-div">

                    <?php
                    $testimonialImage = str_replace('public/', 'storage/', $TestimonialDataView->testimonial_image);
                    
                    ?>
                    <div class="image-div"> <img src="{{ asset($testimonialImage) }}" alt=""></div>
                    <div class="image-div-block ">
                        <h3>Name: {{ $TestimonialDataView->testimonial_name }}</h3>
                        <p><b>Description:</b> {{ $TestimonialDataView->testimonial_content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('Admin.admin_head.common_section')
@section('main-content')
<div class="details-box">

    @include('Admin.admin_head.admin_sidebar')


    <div>

    <form action="{{ url('/') }}/Admin/testimonial" method="post" enctype="multipart/form-data">
        @csrf
        <main class="container-fluid p-3 border">
            <h2 class="text-center"><u>Add Testimonial+</u></h2>
            <div class="section-main ">

                <div class="section-one">                  
                    <div class="icon p-4">
                        <h6 class="headings">New Testimonial</h6>
                        <b>Name:</b><br>
                        <input type="text" name="testimonial_name" id=""><br>
                        <b>Image: </b><br>
                        {{-- <input type="file" name="testimonial_image" id=""><br>                       --}}
                      <input type="file" name="testimonial_image" id=""><br>
                        <b>Describe</b>
                        <input type="text" name="testimonial_content" id="">                        
                    </div>
                </div>
        </main>
        <div class="block-display">
            <button class="bg-success text-white" name="testimonial_submit" type="submit">Update</button>
        </div>

    </form>
    </div></div>

@endsection


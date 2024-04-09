@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .viewCourseDiv {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        /* all course */
        .border-div-border {
            border: none;
            width: 30%;
            height: fit-content;
            margin: 1rem auto;
            padding: 1rem;
            box-shadow: 0px 0px 3px gray;
        }

        .botton-style {
            border: none;
            padding: 1rem;
            width: 49%;
            margin: 2rem 0 0 0;
        }
        .image_div_width{
            /* border:1px solid lightgray; */
            width: 47%;
            margin: auto;
            background-color: lightyellow;
            height: 10rem;
        }
        .image_flex_displayfix{
            width: 100%;
            display: flex;
        }
        @media(max-width:768px){
            .border-div-border {          
            width: 70%;         
        }
        .viewCourseDiv {
            width: 100%;
            display: block;
            /* flex-wrap: wrap; */
        }
        }
    </style>

    <div class="viewCourseDiv">
        @foreach ($courseindexinserts as $courseindexinsert)
            <div class="border-div-border">
                <h3>{{ $courseindexinsert->course_name }}</h3>
                <p>{{ $courseindexinsert->course_desc }}</p>
                <div class="image_flex_displayfix">               
                <div class="image_div_width">
                    ICON : 
                    <?php $icon_image = str_replace('public/', 'storage/', $courseindexinsert->course_icon); ?>
                    <img src="{{ asset($icon_image) }}" alt="No Image">
                </div>
                <div class="image_div_width">
                    IMAGE : 
                    <?php $course_image_var = str_replace('public/', 'storage/', $courseindexinsert->course_image); ?>
                    <img src="{{ asset($course_image_var) }}" alt="No Image">
                </div>
            </div>
                <a href="{{ url('/Sub-admin/edit-course/') }}/{{ $courseindexinsert->course_id }}"><button
                        class="botton-style">Edit</button> </a>
                <a href="{{ url('/Sub-admin/delete-course') }}/{{ $courseindexinsert->course_id }}"> <button
                        class="botton-style">Delete</button></a>

            </div>
        @endforeach
    </div>
@endsection

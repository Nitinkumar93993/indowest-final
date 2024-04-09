@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box">

        @include('Admin.admin_head.admin_sidebar')


        <div>
            @foreach ($courseindexinserts as $courseindexinsert)
                <div class="border-div-border">
                    <h3>{{ $courseindexinsert->course_name }}</h3>
                    <a href="{{url('/Admin/edit-course/')}}/{{$courseindexinsert->course_id}}"><button>Edit Course</button></a>
                    <p>{{ $courseindexinsert->course_desc }}</p>
                    <?php $icon_image = str_replace('public/', 'storage/', $courseindexinsert->course_icon); ?>
                    <img src="{{ asset($icon_image) }}" alt="No Image">
                    <?php $course_image_var = str_replace('public/', 'storage/', $courseindexinsert->course_image); ?>

                    <img src="{{ asset($course_image_var) }}" alt="No Image">
                </div>
            @endforeach
        </div>
    </div>
@endsection

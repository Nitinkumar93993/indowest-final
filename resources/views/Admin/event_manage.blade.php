@extends('Admin.admin_head.common_section')
@section('main-content')
<div class="details-box">

    @include('Admin.admin_head.admin_sidebar')


  
    <div class="container-event">
        <h3>Event Add</h3>
        <form action="{{url('/')}}/Admin/event_manage" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Image </label><br>
            <input type="file" name="event_image" id=""><br><br>
            <label for="">Event Type </label><br>
            <input type="text" name="event_type" id=""> <br><br>
            <label for="">Event Date </label><br>
            <input type="text" name="event_date" id=""><br><br>
            <label for="">Event Timing </label><br>
            <input type="text" name="event_timing" id=""><br><br>
            <button type="submit" name="event_submit">Event Submit</button>
        </form>
    </div>
    </div>
@endsection

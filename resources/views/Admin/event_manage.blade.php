@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box">

        @include('Admin.admin_head.admin_sidebar')
        <style>
            .formEvent {
                width: 90%;
                margin: auto;
                padding: 3% 0;
            }

            /* event manage */
            .container-event {
                /* border: 2px solid blue; */
                margin: 3rem auto;
                background-color: lightgoldenrodyellow;
                width: 60%;
                height: fit-content;
            }

            .eventInput {
                width: 100%;
                padding: 1rem;
                margin: 0.7rem 0 1rem;
                border: 1px solid gray;
                background-color: white;
            }

            .btn-styling {
                color: white;
                font-size: 1.2rem;
                background-color: green;
            }

            .headingEvent {
                text-align: center;
                margin: 0 auto;
                /* width: 70%;  */
                background-color: lightcoral;
                padding: 1.2rem;
                color: white;
                /* border:2px solid gray; */
            }
        </style>
        <div class="container-event">
            <h3 class="headingEvent">{{$title}}</h3>
            <div class="formEvent">
                <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Image </label><br>
                    <input type="file" class="eventInput" name="event_image" id="" value="{{$eventmanager ? $eventmanager->event_image  : '' }}"><br>
                    
                    <label for="">Event Type </label><br>
                    <select class="eventInput" name="event_type" id="">
                        <option value="" selected>Events Type</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                        <option value="Webinar">Webinar</option>                       
                    </select><br>
                    <label for="">Event Title </label><br>
                    <input type="text" class="eventInput" name="event_title" id="" value="{{$eventmanager ? $eventmanager->event_title  : '' }}"><br>
              
                    <label for="">Event Date </label><br>
                    <input type="text" class="eventInput" name="event_date" id="" value="{{$eventmanager ? $eventmanager->event_date  : '' }}"><br>
                    <label for="">Event Timing </label><br>
                    <input type="text" class="eventInput" name="event_timing" id="" value="{{$eventmanager ? $eventmanager->event_timing : '' }}"><br>
                    <button type="submit" class="eventInput btn-styling" name="event_submit">Event Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

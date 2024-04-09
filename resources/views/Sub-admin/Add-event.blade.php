@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .add_event_div {
            background-color: lightgoldenrodyellow;
            width: 60%;
            margin: 1% auto 5%;
        }

        .formEvent_saae {
            /* background-color: gray; */
            width: 75%;
            margin: auto;
        }

        .eventInput_saae {
            border: none;
            width: 95%;
            padding: 1rem;
            margin: 0.5rem 0 1rem;
            background-color: white;
        }

        .headingEvent_saae {
            font-size: 1.7rem;
            background-color: burlywood;
            padding: 1.5rem;
            color: white;
            text-align: center;
        }

        .btn-styling_saae {
            border: none;
            width: 100%;
            padding: 1.2rem;
            background-color: green;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            margin: 2% 0 8%;
        }

        @media(max-width:768px) {
            .add_event_div {
                width: 82%;
            }
            .eventInput_saae {          
            width: 93%;            
        }

        }
    </style>

    <div class="add_event_div">
        <h3 class="headingEvent_saae">{{ $title }}</h3>
        <div class="formEvent_saae">
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Image </label><br>
                <input type="file" class="eventInput_saae" name="event_image" id=""
                    value="{{ $eventmanager ? $eventmanager->event_image : '' }}"><br>
                <label for="">Event Type </label><br>
                <input type="text" class="eventInput_saae" name="event_type" id=""
                    value="{{ $eventmanager ? $eventmanager->event_type : '' }}"> <br>
                <label for="">Event Date </label><br>
                <input type="text" class="eventInput_saae" name="event_date" id=""
                    value="{{ $eventmanager ? $eventmanager->event_date : '' }}"><br>
                <label for="">Event Timing </label><br>
                <input type="text" class="eventInput_saae" name="event_timing" id=""
                    value="{{ $eventmanager ? $eventmanager->event_timing : '' }}"><br>
                <button type="submit" class="btn-styling_saae" name="event_submit">Event Submit</button>
            </form>
        </div>
    </div>
@endsection

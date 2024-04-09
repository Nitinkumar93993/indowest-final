@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .event_div_section {
            /* border: 1px solid blue; */
            width: 25%;
            padding: 1rem 1rem;
            height: fit-content;
            box-shadow: 0px 0px 3px gray;
            margin: 1rem auto;
        }

        .center_aligns {
            /* border: 1px solid green; */
            /* text-align: center; */
            width: 100%;
            height: 10rem;
            margin: 0 0 1rem 0;

        }

        .center_aligns img {
            width: 100%;
            height: 100%;
        }

        .evntDivStyle_saae {
            /* border:1px solid grey; */
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            padding: 0 5%;
        }

        .botton-style {
            border: none;
            padding: 1rem;
            width: 45%;
            margin: auto
        }
        .btnStyle_saae{
            display: flex;
            width: 100%;
        }

        @media(max-width:768px) {
            .evntDivStyle_saae {

                width: 96%;
                display: block;
                /* flex-wrap: wrap; */
                padding: 0 2%;
            }

            .event_div_section {
                width: 85%;
            }
        }
    </style>


    <div class="evntDivStyle_saae ">
        @foreach ($eventmanager as $eventmanagers)
            <?php
            $event_img = str_replace('storage/', 'public/', $eventmanagers->event_image);
            ?>
            <div class="event_div_section">
                <div class="center_aligns">
                    <img src="{{ asset($event_img) }}" alt="">
                </div>

                <p>Event Type : {{ $eventmanagers->event_type }}</p>

                <p>Event Date : {{ $eventmanagers->event_date }}</p>

                <p>Event Timing : {{ $eventmanagers->event_timing }}</p>
                <div class="btnStyle_saae">
                    <a href="{{ url('/Sub-admin/edit-event') }}/{{ $eventmanagers->id }}">
                        <button class="botton-style">Edit</button></a>
                    <a href="{{ url('/Sub-admin/delete-event') }}/{{ $eventmanagers->id }}">
                        <button class="botton-style">Delete</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box-allevent">

        @include('Admin.admin_head.admin_sidebar')
        <style>
            .event_div_section {
                /* border: 1px solid blue; */
                width: 45%;
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

            .details-box-allevent {
                display: flex;
                width: 100%;
                padding: 2%;
            }

            .evntDivStyle {
                /* border:1px solid grey; */
                width: 75%;
                display: flex;
                flex-wrap: wrap;
            }
            .editdeletebtnale{
                width: 100%;
                display: flex;

            }
            .editdeletebtnale a{
                width: 45%;
              margin: auto;
                
            }

            .botton-style {
                border: none;
                padding: 0.7rem;
                width: 100%;
                color:white;
                background-color: rgb(76, 76, 236);
                margin: auto;
            }

            @media(max-width:768px) {
                .evntDivStyle {
                    /* border:1px solid grey; */
                    width: 100%;
                    display: block;
                    /* flex-wrap: wrap; */
                }

                .details-box-allevent {
                    display: block;
                    width: 100%;
                    padding: 2%;
                }

                .event_div_section {
                    /* border: 1px solid blue; */
                    width: 88%;
                }
            }
        </style>


        <div class="evntDivStyle">
            @foreach ($eventmanager as $eventmanagers)
                <?php
                $event_img = str_replace('storage/', 'public/', $eventmanagers->event_image);
                ?>
                <div class="event_div_section">
                    <div class="center_aligns">
                        <img src="{{ asset($event_img) }}" alt="">
                    </div>
                    <p>Event Title : {{ $eventmanagers->event_title }}</p>
                    <p>Event Type : {{ $eventmanagers->event_type }}</p>
                    <p>Event Date : {{ $eventmanagers->event_date }}</p>
                    <p>Event Timing : {{ $eventmanagers->event_timing }}</p>
                    <div class="editdeletebtnale">
                        <a href="{{ url('/Admin/edit_event') }}/{{ $eventmanagers->id }}">
                            <button class="botton-style">Edit</button></a>
                        <a href="{{ url('/Admin/delete_event') }}/{{ $eventmanagers->id }}">
                            <button class="botton-style">Delete</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

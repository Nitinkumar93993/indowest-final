@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box">

        @include('Admin.admin_head.admin_sidebar')




        @foreach ($eventmanagers as $eventmanager)
            <?php
            $event_img = str_replace('public/', 'storage/', $eventmanager->event_image);
            ?>
            <div class="event_div_section">
                <div class="center_aligns">
                    <img src="{{ asset($event_img) }}" alt="">
                </div>

                <p>Event Type : {{ $eventmanager->event_type }}</p>

                <p>Event Date : {{ $eventmanager->event_date }}</p>

                <p>Event Timing : {{ $eventmanager->event_timing }}</p>
            </div>
        @endforeach
    </div>
@endsection

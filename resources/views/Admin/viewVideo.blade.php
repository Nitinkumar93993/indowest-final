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

            .editdeletebtnale {
                width: 100%;
                display: flex;

            }

            .editdeletebtnale a {
                width: 45%;
                margin: auto;

            }

            .botton-style {
                border: none;
                padding: 0.7rem;
                width: 100%;
                color: white;
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
        <h2>Uploaded Videos</h2>

        @if ($videos->count() > 0)
            <ul>
                @foreach ($videos as $video)
                    <?php
                    $vedio = str_replace('public/', 'storage/', $video->videoFile);
                    ?>
                    <video width="320" height="240" controls>
                        <source src="{{ asset($vedio) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endforeach
            </ul>
        @else
            <p>No videos uploaded yet.</p>
        @endif
    </div>
@endsection

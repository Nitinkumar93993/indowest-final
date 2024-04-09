@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .container_luid {
            width: 45%;
            /* border:1px solid gray; */
            margin: 1rem auto;
            padding: 0.8rem;
            box-shadow: 0px 0px 5px gray;
        }

        .flexing-display {
            display: flex;
        }

        .seventy-percentSavt {
            width: 94%;
            display: flex;
            flex-wrap: wrap;
            padding: 3%;
        }

        .savt_image_div {
            /* border: 2px solid gray; */

        }

        .savt_member_div {
            /* border: 2px solid yellow; */
            width: 22%;
            box-shadow: 0px 0px 3px gray;
            margin: 2% auto;
            padding: 0.6rem;
        }

        .headings_savt {
            margin: 0.5rem 0;
            font-size: 1.2rem;
        }

        .textblackcolor {
            color: black;
        }

        .btn_style_savt {
            width: 100%;
            padding: 0.8rem;
            border: none;
            color: white;
            background-color: rgb(123, 79, 226);
        }
        .btnstylesavtdiv{
            width: 100%;
            display: flex;
        }
        .savt_linkbtn{
            width: 45%;
            margin: auto;
        }
    </style>
    <div class="seventy-percentSavt">

        @foreach ($teamMembers as $teammeber)
            <div class="savt_member_div">
                <div class="savt_image_div">
                    <?php $member_img = str_replace('public/', 'storage/', $teammeber->member_image); ?>
                    <img class="img-fluid" src="{{ asset($member_img) }}" alt="image" width="40%">
                </div>



                <h6 class="headings_savt">{{ $teammeber->member_name }}</h6>
                <p class="textblackcolor">{{ $teammeber->member_title }}</p>

                <h6 class="headings_savt">Personal Information</h6>
                <div class="inline-block">

                    <p class="textblackcolor"> <b>Phone:</b> {{ $teammeber->member_contact }}</p>
                </div>
                <div class="inline-block">

                    <p class="textblackcolor"><b>Email:</b>{{ $teammeber->member_email }}</p>
                </div>


                <div class="inline-block">

                    <p class="textblackcolor"> <b>Websites:</b>{{ $teammeber->member_website }}</p>
                </div>


                <div class="inline-block">


                    <p class="textblackcolor"> <b>Fax:</b>{{ $teammeber->member_fax }}</p>

                </div>


                <div class="inline-block line-height">

                    <p class="textblackcolor"> <b>Skills:</b>{{ $teammeber->member_skill }}</p>
                </div>
                <div class="btnstylesavtdiv">
                    <a class="savt_linkbtn" href="{{ url('/Admin/edit-team') }}/{{ $teammeber->id }}">
                        <button class="btn_style_savt">Edit</button></a>

                    <a class="savt_linkbtn" href="{{ url('/Admin/delete-team') }}/{{ $teammeber->id }}">
                        <button class="btn_style_savt">Delete</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

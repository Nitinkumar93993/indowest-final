@extends('Admin.admin_head.common_section')

@section('main-content')
    <style>
        .border-div-style {
            /* border: 2px solid red; */
            width: 75%;
            display: flex;
            flex-wrap: flex;
            padding: 0 1rem;
        }

        .profile_view {
            /* border: 1px solid gray; */
            width: 31%;
            height: fit-content;
            margin: 2rem auto 0;
            padding: 1rem;
            border-radius: 4px;
            box-shadow: 0px 0px 3px darkslategray;
        }

        .subAdminRevise {
            width: 32%;
            padding: 0.5rem;
            background-color: #f76157;
            border-radius: 15px;
            color: white;
        }
        .subAdminRevise:hover {
            background-color: #f59b95;
            
        }
        .#heading_three {}
        
    </style>
    <div class="details-box">
        @include('Admin.admin_head.admin_sidebar')
        <div class="border-div-style">
            @foreach ($sub_admins as $sub_admin)
                <div class="profile_view">


                    <div class="box-image-container">
                        <?php
                        $imagePath = str_replace('public/', 'storage/', $sub_admin->user_image);
                        ?>
                        <img src="{{ asset($imagePath) }}" alt="" width="10%">

                    </div>
                    <h3 id="heading_three">{{ $sub_admin->name }}</h3>
                    <p><b>Contact :</b> {{ $sub_admin->contact }}</p>
                    <p><b>Email :</b> {{ $sub_admin->auth_email }}</p>
                    <p><b>Permission Category : </b> <br>{{ $sub_admin->set_permission }}</p>

                    <a href=""><button class="delete_btn_style subAdminRevise">Freeze</button></a>
                    <a href="{{ url('/Admin/edit/') }}/{{ $sub_admin->id }}"><button
                            class="delete_btn_style subAdminRevise">Amend</button></a>
                    <a href="{{ url('/Admin/delete/') }}/{{ $sub_admin->id }}"><button
                            class="delete_btn_style subAdminRevise">Discard</button></a>

                </div>
            @endforeach
        </div>
    </div>
@endsection

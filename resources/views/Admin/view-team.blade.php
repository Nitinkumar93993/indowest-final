@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="flexing-display">
        @include('Admin.admin_head.admin_sidebar')
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
                width: 100%;
                padding: 2%;
            }

            .seventy-percent {
                width: 75%;
                display: flex;
                flex-wrap: wrap;
            }

            .viewTeamDive {
                color: black;
            }

            .btnEditDeletestyle {
                /* border: 1px solid green; */
                width: 100%;
                display: flex;
            }

            .btnEditDeletestyle a {
                width: 47%;
                margin: auto;
                display: flex;
            }

            .btnEditDeletestyle button {
                width: 100%;
                border: none;
                background-color: rgb(50, 50, 211);
                padding: 1rem;
                color: white;
            }
            @media(max-width:768px){
                .flexing-display{
                    display: block;
                }
                .seventy-percent {
                width: 100%;
                display: block;
            }
            .container_luid {
                width: 87%;}
            }
        </style>
        <div class="seventy-percent">

            @foreach ($teamMembers as $teammeber)
                <main class="container_luid">
                    <div class=" ">

                        <div class="">
                            <?php $member_img = str_replace('public/', 'storage/', $teammeber->member_image); ?>
                            <img class="img-fluid" src="{{ asset($member_img) }}" alt="image" width="40%">
                        </div>


                        <div class="pt-4">
                            <h6 class="headings">{{ $teammeber->member_name }}</h6>
                            <p class="viewTeamDive">{{ $teammeber->member_title }}</p>


                            <h6 class="headings">Team Details</h6>
                            <p class="viewTeamDive">{{ $teammeber->member_since }}</p>
                        </div>

                        <div class="pt-4">
                            <h6 class="headings">Personal Information</h6>
                                <b>Phone:</b>
                                <p class="viewTeamDive">{{ $teammeber->member_contact }}</p>
                                <b>Email:</b>
                                <p class="viewTeamDive">{{ $teammeber->member_email }}</p>


                                <b>Websites:</b>
                                <p class="viewTeamDive">{{ $teammeber->member_website }}</p>


                                <b>Fax:</b>
                                <p class="viewTeamDive">{{ $teammeber->member_fax }}</p>
                                <b>Skills:</b>
                                <p class="viewTeamDive">{{ $teammeber->member_skill }}</p>
                        </div>
                        <div class="btnEditDeletestyle">
                            <a href="{{ url('/Admin/edit-team') }}/{{ $teammeber->id }}">
                                <button>Edit</button></a>
                            <a href="{{ url('/Admin/delete-team') }}/{{ $teammeber->id }}">
                                <button>Delete</button></a>
                        </div>
                    </div>

                </main>
            @endforeach
        </div>
    </div>
@endsection

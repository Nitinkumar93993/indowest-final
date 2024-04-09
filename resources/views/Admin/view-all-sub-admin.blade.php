@extends('Admin.admin_head.common_section')

@section('main-content')
    <div class="details-box">
        @include('Admin.admin_head.admin_sidebar')
        <div class="border-div-style">
            @foreach ($sub_admins as $sub_admin)
                <div class="profile_view">


                    <div class="box-image-container">
                        <?php
                        $imagePath = str_replace('public/', 'storage/', $sub_admin->user_image);                       
                        ?>
                         <img src="{{asset($imagePath)}}" alt="" width="10%">
                        <h2 id="three-dot-span" onclick="displayBlockDiv()">
                            <span>0</span><br><span>0</span><br><span>0</span>
                        </h2>
                        <div class="box-permission-div" id="threeDotDiv">
                            <p>Freeze</p>
                            <p><a href="{{ url('/Admin/edit/') }}/{{ $sub_admin->id }}"> <button
                                        class="delete_btn_style">Amend</button></a></p>
                            <p><a href="{{ url('/Admin/delete/') }}/{{ $sub_admin->id }}"><button
                                        class="delete_btn_style">Discard</button></a></p>
                        </div>
                        {{-- {{ $sub_admin->user_image }} --}}
                    </div>
                    <h3>{{ $sub_admin->name }}</h3>
                    <p>Contact: {{ $sub_admin->contact }}</p>
                    <p>Email: {{ $sub_admin->auth_email }}</p>
                    <p>Username: {{ $sub_admin->username }}</p>
                    <p>Password: {{ $sub_admin->password }}</p>
                    <p>Permission Category: {{ $sub_admin->set_permission }}</p>
                    <p>hello</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

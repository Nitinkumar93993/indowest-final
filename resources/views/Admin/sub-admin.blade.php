@extends('Admin.admin_head.common_section')

@section('main-content')
    <div class="details-box">
       @include('Admin.admin_head.admin_sidebar')


        <div class="form-design">        
            <h2>{{ $title }}</h2>
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="text" name="name" id="" placeholder="Enter Name"
                    value="{{ $sub_admin ? $sub_admin->name : '' }}" required><br>


                <input type="file" name="user_image" id=""
                    value="{{ $sub_admin ? $sub_admin->user_image : '' }}" required><br>


                <input type="number" name="contact" id="" placeholder="Enter Contact"
                    value="{{ $sub_admin ? $sub_admin->contact : '' }}" required><br>


                <input type="email" name="auth_email" id="" placeholder="Enter Email"
                    value="{{ $sub_admin ? $sub_admin->auth_email : '' }}" required><br>


                <input type="text" name="username" id="" placeholder="Enter Username"
                    value="{{ $sub_admin ? $sub_admin->username : '' }}" required><br>


                <input type="password" name="password" id="" placeholder="Enter Password"
                    value="{{ $sub_admin ? $sub_admin->password : '' }}" required><br>



                <div class="input-label">
                    <label class="border-label" for="">My Discount code</label>
                    <input type="checkbox" name="permissions[]" value="My Discount code"> <br>

                    <label for="">wallet </label>
                    <input type="checkbox" name="permissions[]" value="wallet"> <br>


                    <label for="">my orders </label>
                    <input type="checkbox" name="permissions[]" value="my orders"> <br>


                    <label for="">my classroom </label>
                    <input type="checkbox" name="permissions[]" value="my classroom"> <br>


                    <label for="">practical portal </label>
                    <input type="checkbox" name="permissions[]" value="practical portal"> <br>


                    <label for="">mock test report </label>
                    <input type="checkbox" name="permissions[]" value="mock test report"> <br>


                    <label for="">reality test booking</label>
                    <input type="checkbox" name="permissions[]" value="reality test booking"> <br>


                    <label for="">reality test report </label>
                    <input type="checkbox" name="permissions[]" value="reality test report"> <br>


                    <label for="">exam booking</label>
                    <input type="checkbox" name="permissions[]" value="exam booking"> <br>


                    <label for="">event booking</label>
                    <input type="checkbox" name="permissions[]" value="event booking"> <br>


                    <label for="">student request</label>
                    <input type="checkbox" name="permissions[]" value="student request"> <br>


                    <label for="">my complaint</label>
                    <input type="checkbox" name="permissions[]" value="my complaint"> <br>


                </div>


                <button type="submit" class="submit-button-design">Set Authority</button>
            </form>
        </div>
    </div>
@endsection

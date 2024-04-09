<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/admin_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sbloginInput {
            border: none;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="full-width-login">
        <div class="left-sider">
            <img src="{{ asset('/images/WhatsApp Image 2024-04-01 at 13.23.18_d51257d6.jpg') }}" alt="" width="100%" height="100%"
                id="image-radius">
        </div>
        <div class="login-main-container">
            <h4><i class="fa fa-user fa-fa-user-icon"></i><br>Sub Admin Login</h4>

            <!-- Sub-admin login form -->
            <form action="{{ route('subadmin.login') }}" method="post">
                @csrf
                {{-- <label for="">Username</label><br> --}}
                <div class="small-icons">
                    <span class="small-icons-span"><i class="fa fa-user"></i></span>
                    <input class="sbloginInput" type="text" id="sbusername" name="sbusername"><br>
                </div>
                {{-- <label for="">Password</label><br> --}}
                <div class="small-icons">
                    <span class="small-icons-span"><i class="fa fa-lock"></i></span>
                    <input class="sbloginInput" type="password" id="sbpassword" name="sbpassword"><br>
                </div>
                <button type="submit" class="login-button-style">Enter</button>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p class="">{{ session()->get('success') }}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <p class="">{{ session()->get('error') }}</p>
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>

</html>

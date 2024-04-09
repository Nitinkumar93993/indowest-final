<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/admin_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="full-width-login">
        <div class="left-sider">
            <img src="{{ asset('/images/images.jpeg') }}" alt="" width="100%" height="100%" id="image-radius">
        </div>
        <div class="login-main-container">
            <h3><i class="fa fa-user fa-fa-user-icon"></i><br>Admin Login</h3>
            <form action="" method="">
                {{-- <label for="">Username</label><br> --}}
                <div class="small-icons">
                    <span class="small-icons-span"><i class="fa fa-user"></i></span>
                    <input type="text" name="" id="" placeholder="Username"><br>
                </div>
                {{-- <label for="">Password</label><br> --}}
                <div class="small-icons">
                    <span class="small-icons-span"><i class="fa fa-lock"></i></span>
                    <input type="password" name="" id="" placeholder="Password"><br>
                </div>
                <button type="submit" class="login-button-style">Enter</button>
                <a href="/Admin/dashboard">Dashboard</a>
                <a href="/Sub-admin/sa-header"> Sub Admin</a>
            </form>
        </div>
    </div>
</body>

</html>
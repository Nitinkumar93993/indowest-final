<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-dashboard.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_profile_view.css')}}">
</head>

<body>
    <div class="container-main">
        <div class="header-class">
            <header>
                <img src="/images/3-2.png" id="logo-icon-img" alt="logo" width="20%" class="margin-auto">
            </header>
            {{-- <button class="logout-btn">Logout</button> --}}
            <div class="image-images-style">
                <img src="{{ asset('images/sub-admin-img.jpeg') }}" alt="" onclick="dropDownDiv()">
                <div id="dropdowndiv">
                    <button>Home</button><br>
                    <button>About</button><br>
                    <button>Logout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="details-box">
        <div class="nav-bar-menu">
            <p> one </p>
            <p> two </p>
            <p> three </p>
            <p> four </p>
            <p> five </p>
            <p> six </p>
            <p> seven </p>
        </div>
        <div class="dash-details-section">
            <div class="container-single-border"></div>
            <div class="container-single-border"></div>
            <div class="container-single-border"></div>
            <div class="container-single-border"></div>
        </div>
    </div>
    <script src="/js/modify-script.js"></script>

</body>

</html>

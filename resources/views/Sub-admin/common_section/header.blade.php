<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin_profile_view.css') }}">
    <script src="{{ asset('js/adminAlter.js') }}"></script>

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
                    <a href="{{ url('/') }}/Sub-admin/Dashboard">
                        <button>Dashboard</button>
                    </a> <br>
                    <button>About</button><br>
                    <!-- Logout form -->
                    <form action="{{ route('subadmin.logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

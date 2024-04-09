<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/admin-dashboard.css" />
    <link rel="stylesheet" href="/css/admin_profile_view.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
   
    <title>Admin dashboard</title>
</head>

<body>
    <div class="container-main">
        <div class="header-class">
            <header>
                <img src="/images/3-2.png" id="logo-icon-img" alt="logo" width="20%" class="margin-auto">
            </header>
            {{-- <button class="logout-btn">Logout</button> --}}
            <div class="image-images-style">
                <img src="{{ asset('images/images.jpeg') }}" alt="" onclick="dropDownDiv()">
                <div id="dropdowndiv">
                   <button>Home</button><br>
                   <button>About</button><br>
                   <button>Logout</button>
                </div>
            </div>
        </div>
    </div>
    
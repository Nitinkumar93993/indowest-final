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

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="{{ asset('/js/adminAlter.js') }}"></script>
    <title>Admin dashboard</title>
    <style>
        .headerDivForAdmin {
            /* border: 1px solid green; */
            width: 20%;
            display: flex;
        }

        .headerDivForAdminImg {
            border: 1px solid lightgoldenrodyellow;
            margin: auto;
            padding: 0.5rem;
        }

        .image-images-style {
            margin-right: 1rem;
            text-align: end;
            width: 100%;
        }

        .adminPictureDiv {
            /* border: 1px solid red; */
            width: 15%;
            float: inline-end;
            height: 100%;
            display: flex;
        }

        .image-images-style img {
            height: 90%;
            width: 50%;
            margin: auto;
            border-radius: 5px;
            /* margin: 20% 10% 0; */
        }

        @media(max-width:768px) {
            .headerDivForAdmin {
                /* border: 1px solid green; */
                width: 60%;
                display: flex;
            }

            .adminPictureDiv {
                /* border: 1px solid red; */
                width: 35%;
                float: inline-end;
                height: 100%;
                display: flex;
            }

            .image-images-style {
                margin-right: 0rem;
                text-align: end;
                width: 100%;
            }

            .image-images-style img {
                height: 70%;
                width: 70%;
                margin: auto;
                border-radius: 5px;
                /* margin: 20% 10% 0; */
            }

            .headerDivForAdminImg {
                border: 1px solid lightgoldenrodyellow;
                margin: auto;
                padding: 1rem 0.5rem;
            }
            
        }
    </style>
</head>

<body>
    <div class="container-main">
        <div class="header-class">
            <div class="headerDivForAdmin">
                <img src="/images/3-2.png" id="logo-icon-img" alt="logo" width="85%"
                    class="headerDivForAdminImg">
            </div>
            <div class="image-images-style">
                <div class="adminPictureDiv">
                    <img src="{{ asset('images/images.jpeg') }}" alt="" onclick="dropDownDiv()">
                </div>
            </div>
            {{-- <button class="logout-btn">Logout</button> --}}
        </div>
        <div id="dropdowndiv">           
            <button>Admin</button><br>
            <a href="{{ url('/') }}/admin-logout"><button>Logout</button></a>
        </div>
    </div>

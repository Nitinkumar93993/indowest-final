<style>
    .flex_dis_play {
        display: flex;
        width: 75%
    }
    a{
        text-decoration: none;
    }

    .category_div_border {
        box-shadow: 0px 0px 5px gainsboro;
        display: flex;
        width: 98%;
        height: 20%;
        padding: 2rem 0;
    }

    .paragraph_accessed {
        background-color: yellow;
        margin: 0;
        text-align: center;
    }

    /* Dropdown button */
    .dropbtn {
        background-color: white;
        margin: 10px 5px;
        padding: 15px 15px;
        font-size: 16px;
        font-family: sans-serif;
        font-weight: 500;
        color: red;
        border: 1px solid lightgray;
        border-top: none;
        border-right: none;
        text-align: left;
        width: 100%;
        border-radius: 0 0 5px 5px;
        box-shadow: -1px 1px 1px darkslategray;
        cursor: pointer;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        /* min-width: 160px; */
        width: 50%;
        left: 50%;
        /* float: inline-end; */
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        text-align: center;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu when dropdown button is clicked */
    .show {
        display: block;
    }

    .display_row {
        display: flex;
        font-family: cursive;
    }


    .nav-bar-menu {
        width: 30%;
        padding-bottom: 15rem;
    }

    @media(max-width:768px) {
        .nav-bar-menu {
            margin: auto;
            width: 90%;
            padding-bottom: 2rem;
        }
    }
</style>

<div class="nav-bar-menu">
    <a href="{{ url('/') }}/Admin/dashboard">
        <p> Dashboard </p>
    </a>
    {{-- Sub Admin --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('subAdminDropdown')">Sub Admin</button>
        <div class="dropdown-content" id="subAdminDropdown">

            <a href="{{ url('/') }}/Admin/addSubAdmin">Add</a>
            <a href="{{ route('admin.adminDashboardView') }}">Edit</a>
            <a href="{{ route('admin.adminDashboardView') }}">View</a>
            <a href="{{ route('admin.adminDashboardView') }}">Delete</a>
        </div>
    </div>
    {{-- course --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('CourseDropdown')">Course</button>
        <div class="dropdown-content" id="CourseDropdown">
            <a href="{{ url('/') }}/Admin/create-course">Add</a>
            <a href="{{ url('/') }}/Admin/all-courses">Edit</a>
            <a href="{{ url('/') }}/Admin/all-courses">View</a>
            <a href="{{ url('/') }}/Admin/all-courses">Delete</a>
        </div>
    </div>

    {{-- event --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('eventDropdown')">Event</button>
        <div class="dropdown-content" id="eventDropdown">
            <a href="{{ url('/') }}/Admin/event_manage">Add</a>
            <a href="{{ url('/') }}/Admin/all-event">Edit</a>
            <a href="{{ url('/') }}/Admin/all-event">View</a>
            <a href="{{ url('/') }}/Admin/all-event">Delete</a>
        </div>
    </div>
    {{-- blog --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('blogDropdown')">Blog</button>
        <div class="dropdown-content" id="blogDropdown">
            <a href="{{ url('/') }}/Admin/addBlog">Add</a>
            <a href="{{ url('/') }}/Admin/viewBlog">Edit</a>
            <a href="{{ url('/') }}/Admin/viewBlog">View</a>
            <a href="#">Delete</a>
        </div>
    </div>
    {{-- Team --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('teamDropdown')">Team</button>
        <div class="dropdown-content" id="teamDropdown">
            <a href="{{ url('/') }}/Admin/TeamMember">Add</a>
            <a href="{{ url('/') }}/Admin/view-team">Edit</a>
            <a href="{{ url('/') }}/Admin/view-team">View</a>
            <a href="{{ url('/') }}/Admin/view-team">Delete</a>
        </div>
    </div>
    {{-- Testimonial --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('testimonialDropdown')">Testimonial</button>
        <div class="dropdown-content" id="testimonialDropdown">

            <a href="{{ url('/') }}/Admin/testimonial">Add</a>
            <a href="{{ url('/') }}/Admin/view_testimonial">Edit</a>
            <a href="{{ url('/') }}/Admin/view_testimonial">View</a>
            <a href="{{ url('/') }}/Admin/view_testimonial">Delete</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('contactInfo')">Contact</button>
        <div class="dropdown-content" id="contactInfo">

            <a href="{{url('/')}}/Admin/contactInfo">Add</a>
            <a href="">Edit</a>
            <a href="">View</a>
            <a href="">Delete</a>
        </div>
    </div>
{{-- Counselling --}}
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleTwoDropdown('bookCounselling')">Contact</button>
        <div class="dropdown-content" id="bookCounselling">           
            <a href="{{url('/')}}/Admin/ViewBookCounselling">View</a>
            <a href="">Delete</a>
        </div>
    </div>

    <a href="{{ url('/') }}/admin-logout"><p>Logout</p></a>
</div>

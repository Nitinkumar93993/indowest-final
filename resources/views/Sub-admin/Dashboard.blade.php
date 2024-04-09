@extends('Sub-admin.common_section.head')
@section('sub-section')

    <style>
        .flex_dis_play {
            display: flex;
            width: 75%
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
            width: 11%;
            left: 15%;
            /* float: inline-end; */
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
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
    </style>

    <div class="details-box">
        <div class="nav-bar-menu">
            <a href="{{ url('/') }}/Sub-admin/Dashboard">
                <p> Dashboard </p>
            </a>
            {{-- course --}}
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown('courseDropdown')">Course</button>
                <div class="dropdown-content" id="courseDropdown">
                    <a href="{{ url('/') }}/Sub-admin/create-course">Add</a>
                    <a href="{{ url('/') }}/Sub-admin/viewCourse">Edit</a>
                    <a href="{{ url('/') }}/Sub-admin/viewCourse">View</a>
                    <a href="{{ url('/') }}/Sub-admin/viewCourse">Delete</a>
                </div>
            </div>

            {{-- event --}}
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown('eventDropdown')">Event</button>
                <div class="dropdown-content" id="eventDropdown">
                    <a href="{{ url('/') }}/Sub-admin/Add-event">Add</a>
                    <a href="{{ url('/') }}/Sub-admin/view-event">Edit</a>
                    <a href="{{ url('/') }}/Sub-admin/view-event">View</a>
                    <a href="{{ url('/') }}/Sub-admin/view-event">Delete</a>
                </div>
            </div>
            {{-- blog --}}
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown('blogDropdown')">Blog</button>
                <div class="dropdown-content" id="blogDropdown">
                    <a href="{{url('/')}}/Sub-admin/addBlog">Add</a>
                    <a href="{{url('/')}}/Sub-admin/viewBlog">Edit</a>
                    <a href="{{url('/')}}/Sub-admin/viewBlog">View</a>
                    <a href="{{url('/')}}/Sub-admin/viewBlog">Delete</a>
                </div>
            </div>
            {{-- Team --}}
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown('teamDropdown')">Team</button>
                <div class="dropdown-content" id="teamDropdown">
                    <a href="{{ url('/') }}/Sub-admin/TeamMember">Add</a>
                    <a href="{{ url('/') }}/Sub-admin/viewTeam">Edit</a>
                    <a href="{{ url('/') }}/Sub-admin/viewTeam">View</a>
                    <a href="{{ url('/') }}/Sub-admin/viewTeam">Delete</a>
                </div>
            </div>
            {{-- Testimonial --}}
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown('TestimonialDropdown')">Testimonial</button>
                <div class="dropdown-content" id="TestimonialDropdown">
                    <a href="{{ url('/') }}/Sub-admin/Add-testimonial">Add</a>
                    <a href="{{ url('/') }}/Sub-admin/view-testimonial">Edit</a>
                    <a href="{{ url('/') }}/Sub-admin/view-testimonial">View</a>
                    <a href="{{ url('/') }}/Sub-admin/view-testimonial">Delete</a>
                </div>
            </div>
            <a href="{{ url('/') }}/Sub-admin/Dashboard">
                <p> Contact </p>
            </a>
            <a href="">
                <p> Logout </p>
            </a>
        </div>
        <div class="flex_dis_play">
            <div class="dash-details-section">
                {{-- blog --}}
                <h3>Blog Permission</h3>
                <div class="category_div_border">

                    @if ($user->blogAdd === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">blog add</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->blogEdit === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">blog edit</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>

                        </div>
                    @endif
                    <br>


                    @if ($user->blogView === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">blog view</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>

                        </div>
                    @endif
                    <br>


                    @if ($user->blogDelete === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">blog delete</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>

                        </div>
                    @endif
                    <br>

                </div>
                {{-- testimonial --}}
                <h3>Testimonial Permission</h3>
                <div class="category_div_border">

                    @if ($user->testimonialAdd === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Testimonial Add</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->testimonialEdit === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Testimonial Edit</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->testimonialView === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Tesimonial View</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->testimonialDelete === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Testimonial Delete</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>

                </div>
                {{-- course --}}
                <h3>Course Permission</h3>
                <div class="category_div_border">

                    @if ($user->courseAdd === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Course Add</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->courseEdit === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Course Edit</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->courseView === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Course View</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->courseDelete === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Course Delete</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>

                </div>
                {{-- teams --}}
                <h3>Team Permission</h3>
                <div class="category_div_border">

                    @if ($user->teamAdd === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Team Add</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->teamEdit === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Team Edit</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->teamView === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Team View</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->teamDelete === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Team Delete</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>

                </div>
                {{-- events --}}
                <h3>Event Permission</h3>
                <div class="category_div_border">

                    @if ($user->eventAdd === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Event Add</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->eventEdit === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Event Edit</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->eventView === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Event View</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>


                    @if ($user->eventDelete === 'access')
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/open-blue-lock.png') }}" alt="no found"
                                width="100%" height="90%">
                            <p class="paragraph_accessed">Event Delete</p>
                        </div>
                    @else
                        <div class="permission_access" id="firstAccess">
                            <img src="{{ asset('images/backend_icon/lock-blue-bg.png') }}" alt="no found" width="100%"
                                height="90%">
                            <p class="paragraph_accessed">not permission</p>
                        </div>
                    @endif
                    <br>

                </div>
            </div>
        </div>
    </div>
@endsection

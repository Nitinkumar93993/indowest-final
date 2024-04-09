@extends('Admin.admin_head.common_section')
@section('main-content')
    <style>
        .viewBlogDiv {
            /* border: 1px solid green; */
            box-shadow: 0px 0px 3px gray;
            width: 45%;
            margin: 1rem auto;
            height: 12rem;
            padding: 2%;
        }

        .details-box-blogview {
            display: flex;
            width: 100%;
            padding: 3%;
        }

        .fle_xdisplay_vbdiv {
            width: 70%;
        }

        .fle_xdisplay_vbdivinner {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            margin: auto;
        }

        .innerDivBtnStylevb {
            width: 100%;
            display: flex;
        }

        .innerDivBtnStylevb a {
            width: 45%;
            margin: auto;
        }

        .innerDivBtnStylevb button {
            width: 100%;
            margin: auto;
            border: none;
            padding: 0.5rem;
            color: white;
            background-color: rgb(77, 77, 233)
        }

        @media(max-width:768px) {
            .details-box-blogview {
                display: block;
                width: 100%;
                padding: 3%;
            }
            .fle_xdisplay_vbdiv {
            width: 100%;
        }
        }
    </style>
    <div class="details-box-blogview">

        @include('Admin.admin_head.admin_sidebar')
        <div class="fle_xdisplay_vbdiv">
            <div class="fle_xdisplay_vbdivinner">
                @foreach ($newsBlog as $newsBlogs)
                    <div class="viewBlogDiv">
                        <h5>Title : {{ $newsBlogs->blog_title }}</h5>
                        <p>Disc : {{ $newsBlogs->blog_desc }}</p>
                        <div class="innerDivBtnStylevb">
                            <a href="{{ url('/Admin/editBlog') }}/{{ $newsBlogs->id }}"><button>Edit</button></a>
                            <a href="{{ url('/Admin/deleteBlog') }}/{{ $newsBlogs->id }}"><button>Delete</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

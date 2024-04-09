@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .viewBlogDiv {
            /* border: 1px solid green; */
            width: 25%;
            margin: 1% auto;
            height: 15rem;
            padding: 1%;
            box-shadow: 0px 0px 3px gray;
        }

        .flex_view_all_blog {
            width: 90%;
            padding: 5%;
            /* background-color: yellow; */
            display: flex;
            flex-wrap: wrap;
        }

        .inner_savb {
            width: 100%;
            border: 1px solid white;
            height: 75%;
        }

        .inner_savb_link {
            width: 45%;
            margin: auto;
            /* padding: 0.8rem; */
        }
        .inner_savb_link button{
            width: 100%;
            padding: 1rem;
            color: white;

            border: none;
            background-color: burlywood;
        }

        .whundredflex {
            width: 100%;
            display: flex;
        }
        @media(max-width:768px){
            .viewBlogDiv {           
            width: 95%;
            margin: 3% auto;
            height: 15rem;
            padding: 1%;
            box-shadow: 0px 0px 3px gray;
        }
        }
    </style>
    <div class="flex_view_all_blog">
        @foreach ($newsBlog as $newsBlogs)
            <div class="viewBlogDiv">
                <div class="inner_savb">
                    <h2>{{ $newsBlogs->blog_title }}</h2>
                    <p>{{ $newsBlogs->blog_desc }}</p>
                </div>
                <div class="whundredflex">
                    <a class="inner_savb_link" href="{{ url('/Sub-admin/editBlog') }}/{{ $newsBlogs->id }}"><button
                            >Edit</button></a>
                    <a  class="inner_savb_link" href="{{ url('/Sub-admin/deleteBlog') }}/{{ $newsBlogs->id }}"><button
                           >Delete</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

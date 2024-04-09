@extends('Admin.admin_head.common_section')
@section('main-content')
    <div class="details-box-blogadd">

        @include('Admin.admin_head.admin_sidebar')

        <style>
            .createCourse {
                /* border: 1px solid gray; */
                background-color: lightgoldenrodyellow;
                width: 55%;
                height: fit-content;
                margin: 1rem auto;
            }

            .createCourseDiv {
                width: 90%;
                margin: 5% auto;
            }

            .heading_cc {
                text-align: center;
                /* margin: 0 0 1.5rem; */
                background-color: lightcoral;
                padding: 1rem;
            }

            .input_ad {
                border: none;
                width: 68%;
                padding: 0.65rem;
            }

            .label_ad {
                /* border: 1px solid red; */
                width: 30%;
                margin: 0.3rem 0;
                padding: 0.5rem 0;
            }

            .details-box-blogadd {
                display: flex;
                width: 100%;
                padding: 2.5%;
            }

            @media(max-width:768px) {
                .details-box-blogadd {
                    display: block;
                }

                .createCourse {
                    width: 85%;
                }
            }
        </style>


        <div class="createCourse">
            <h3 class="heading_cc"> {{ $title }} </h3>
            <div class="createCourseDiv">

                <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="label_ad" for="">Content Title</label>
                    <input type="text" class="input_ad" name="blog_title"
                        value="{{ $newsBlog ? $newsBlog->blog_title : '' }}"><br>

                    <label class="label_ad" for="">Content Desciption</label>
                    <input type="text" class="input_ad" name="blog_desc"
                        value="{{ $newsBlog ? $newsBlog->blog_desc : '' }}"><br>

                    <label class="label_ad" for="">Image</label>
                    <input type="file" class="input_ad" name="images"><br>

                    <label class="label_ad" for="">Content Type</label>
                    <select class="input_ad" name="blog_italic" id="">
                        <option value="" selected>Select</option>
                        <option value="Article">Article</option>
                        <option value="News">News</option>
                    </select>


                    <label class="label_ad" for="">Content Category</label>
                    <select class="input_ad" name="first_paragraph" id="">
                        <option value="" selected> Select </option>
                        <option value="PTE">PTE</option>
                        <option value="IELTS">IELTS</option>
                        <option value="DUOLINGO">DUOLINGO</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="Visa">Visa</option>
                    </select>

                    <label class="label_ad" for="">Content Sub Category</label>
                    <select class="input_ad" name="second_paragraph" id="">
                        <option value="" selected> Select </option>
                        <option value="Informative">Informative</option>
                        <option value="Canada">Canada</option>
                        <option value="Speaking">Speaking</option>
                    </select>


                    <label class="label_ad" for="">I Section</label>
                    <input type="text" class="input_ad" name="third_paragraph"
                        value="{{ $newsBlog ? $newsBlog->third_paragraph : '' }}"><br>

                    <label class="label_ad" for="">II Section</label>
                    <input type="text" class="input_ad" name="fourth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fourth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">III Section</label>
                    <input type="text" class="input_ad" name="fifth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fifth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">IV Section</label>
                    <input type="text" class="input_ad" name="sixth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->sixth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">V Section</label>
                    <input type="text" class="input_ad" name="seventh_paragraph"
                        value="{{ $newsBlog ? $newsBlog->seventh_paragraph : '' }}"><br>

                    <label class="label_ad" for="">VI Section</label>
                    <input type="text" class="input_ad" name="eighth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eighth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">VII Section</label>
                    <input type="text" class="input_ad" name="ninth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->ninth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">VIII Section</label>
                    <input type="text" class="input_ad" name="tenth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->tenth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">IX Section</label>
                    <input type="text" class="input_ad" name="eleventh_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eleventh_paragraph : '' }}"><br>

                    <label class="label_ad" for="">X Section</label>
                    <input type="text" class="input_ad" name="twelveth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->twelveth_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XI Section</label>
                    <input type="text" class="input_ad" name="thirteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->thirteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XII Section</label>
                    <input type="text" class="input_ad" name="fourteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fourteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XIII Section</label>
                    <input type="text" class="input_ad" name="fifteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fifteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XIV Section</label>
                    <input type="text" class="input_ad" name="sixteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->sixteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XV Section</label>
                    <input type="text" class="input_ad" name="seventeen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->seventeen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XVI Section</label>
                    <input type="text" class="input_ad" name="eighteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eighteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XVII Section</label>
                    <input type="text" class="input_ad" name="nineteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->nineteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XVIII Section</label>
                    <input type="text" class="input_ad" name="twenteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->twenteen_paragraph : '' }}"><br>

                    <label class="label_ad" for="">XIX Section</label>
                    <input type="text" class="input_ad" name="first_images"
                        value="{{ $newsBlog ? $newsBlog->first_images : '' }}"><br>

                    <label class="label_ad" for="">XX Section</label>
                    <input type="text" class="input_ad" name="second_images"
                        value="{{ $newsBlog ? $newsBlog->second_images : '' }}"><br>



                    <button type="submit" class="btn_cc"> Add </button>
                </form>
            </div>
        </div>
    @endsection

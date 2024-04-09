@extends('Sub-admin.common_section.head')
@section('sub-section')
    <div class="details-box">


        <style>
            .createCourse {
                /* border: 1px solid gray; */
                background-color: lightgoldenrodyellow;
                width: 55%;
                height: fit-content;
                margin: 5% auto 10%;
            }

            .createCourseDiv {
                width: 80%;
                margin: 5% auto 10%;
            }

            .heading_saab {
                text-align: center;
                margin: 0 0 1.5rem;
                background-color: burlywood;
                padding: 1.5rem;
                color: white;
                font-size: 1.7rem;
                font-weight: 600;
            }

            .input_style_saab {
                border: none;
                width: 95%;
                padding: 1rem;
                margin: 0.5rem 0;
            }

            .label_style_saab {
                /* border: 1px solid red; */
                width: 100%;
                margin: 0.3rem 0;
                font-size: 1.1rem;
                color: gray;
                font-weight: 600;
                padding: 0.5rem 0;
            }

            .btnStyleSaab {
                border: none;
                color: white;
                padding: 1.2rem;
                background-color: green;
                width: 100%;
            }

            @media(max-width:768px) {
                .createCourse {
                    width: 80%;
                }

                .input_style_saab {
                    width: 89%;
                }
            }
        </style>


        <div class="createCourse">
            <h3 class="heading_saab"> {{ $title }} </h3>
            <div class="createCourseDiv">

                <form action="{{ $url }}" method="post">
                    @csrf

                    <p class="label_style_saab">Blog Title</label></p>

                    <input type="text" class="input_style_saab" name="blog_title"
                        value="{{ $newsBlog ? $newsBlog->blog_title : '' }}"><br>

                    <p class="label_style_saab">Blog Desc</label></p>
                    <input type="text" class="input_style_saab" name="blog_desc"
                        value="{{ $newsBlog ? $newsBlog->blog_desc : '' }}"><br>

                    <p class="label_style_saab">Blog Italic</label></p>
                    <input type="text" class="input_style_saab" name="blog_italic"
                        value="{{ $newsBlog ? $newsBlog->blog_italic : '' }}"><br>

                    <p class="label_style_saab">First Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="first_paragraph"
                        value="{{ $newsBlog ? $newsBlog->first_paragraph : '' }}"><br>

                    <p class="label_style_saab">Second Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="second_paragraph"
                        value="{{ $newsBlog ? $newsBlog->second_paragraph : '' }}"><br>

                    <p class="label_style_saab">Third Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="third_paragraph"
                        value="{{ $newsBlog ? $newsBlog->third_paragraph : '' }}"><br>

                    <p class="label_style_saab">Fouth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="fourth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fourth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Fouth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="fifth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fifth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Sixth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="sixth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->sixth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Seventh Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="seventh_paragraph"
                        value="{{ $newsBlog ? $newsBlog->seventh_paragraph : '' }}"><br>

                    <p class="label_style_saab">Eighth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="eighth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eighth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Ninth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="ninth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->ninth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Tenth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="tenth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->tenth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Eleventh Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="eleventh_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eleventh_paragraph : '' }}"><br>

                    <p class="label_style_saab">Twelveth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="twelveth_paragraph"
                        value="{{ $newsBlog ? $newsBlog->twelveth_paragraph : '' }}"><br>

                    <p class="label_style_saab">Thirteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="thirteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->thirteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Fourteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="fourteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fourteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Fifteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="fifteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->fifteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Sixteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="sixteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->sixteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Seventeen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="seventeen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->seventeen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Eighteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="eighteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->eighteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Nineteen Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="nineteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->nineteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">Twenteth Paragraph</label></p>
                    <input type="text" class="input_style_saab" name="twenteen_paragraph"
                        value="{{ $newsBlog ? $newsBlog->twenteen_paragraph : '' }}"><br>

                    <p class="label_style_saab">index Image</label></p>
                    <input type="text" class="input_style_saab" name="first_images"
                        value="{{ $newsBlog ? $newsBlog->first_images : '' }}"><br>

                    <p class="label_style_saab">Details Image</label></p>
                    <input type="text" class="input_style_saab" name="second_images"
                        value="{{ $newsBlog ? $newsBlog->second_images : '' }}"><br>

                    <p class="label_style_saab">b/w Image</label></p>
                    <input type="text" class="input_style_saab" name="third_images"
                        value="{{ $newsBlog ? $newsBlog->third_images : '' }}"><br><br>

                    <button type="submit" class="btnStyleSaab"> Add </button>
                </form>
            </div>
        </div>
    @endsection

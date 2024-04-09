@extends('Sub-admin.common_section.head')
@section('sub-section')
    <style>
        .Sa_create_course {
            margin: 5% auto;
            width: 70%;
            background-color: lemonchiffon;
            padding: 2% 0 5%;
        }

        .inner_sacc {
            margin: auto;
            width: 80%;
        }

        .heading_sacc {
            text-align: center;
            font-size: 1.7rem;
            background-color: burlywood;
            padding: 1rem 0;
            color: white;
        }

        .input_sacc {
            border: none;
            width: 95%;
            padding: 1rem;
            margin: 0.5rem 0 1rem;
            background-color: #fff;
        }
        @media(max-width:768px){
            .input_sacc {          
            width: 88.5%;            
        }
        .Sa_create_course {          
            width: 85%;          
        }
        }
    </style>

    <div class="Sa_create_course">
        <div class="inner_sacc">
            <h3 class="heading_sacc">{{ $title }}</h3>
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="label_cc" for="">Course Name(Index)</label><br>
                <input type="text" class="input_sacc" name="course_name" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_name : '' }}"><br>

                <label class="label_cc" for="">Course Desc(Index)</label><br>
                <input type="text" class="input_sacc" name="course_desc" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_desc : '' }}"><br>

                <label class="label_cc" for="">Course Icon(Index)</label><br>
                <input type="file" class="input_sacc" name="course_icon" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_icon : '' }}"><br>

                <label class="label_cc" for="">Course Image(Index)</label><br>
                <input type="file" class="input_sacc" name="course_image" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_image : '' }}"><br>

                <label class="label_cc" for="">Course Heading(DetailS Page)</label><br>
                <input type="text" class="input_sacc" name="course_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_heading : '' }}"><br>

                <label class="label_cc" for="">Course Describe(DetailS Page)</label><br>
                <input type="text" class="input_sacc" name="course_describe" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_describe : '' }}"><br>

                <label class="label_cc" for="">Course Heading Image(DetailS Page)</label><br>
                <input type="file" class="input_sacc" name="course_heading_image" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->course_heading_image : '' }}"><br>

                <label class="label_cc" for="">First Heading</label><br>
                <input type="text" class="input_sacc" name="first_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->first_heading : '' }}"><br>
                <label class="label_cc" for="">First Paragraph</label><br>
                <input type="text" class="input_sacc" name="first_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->first_paragraph : '' }}"><br>

                <label class="label_cc" for="">Second Heading</label><br>
                <input type="text" class="input_sacc" name="second_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->second_heading : '' }}"><br>
                <label class="label_cc" for="">Second Paragraph</label><br>
                <input type="text" class="input_sacc" name="second_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->second_paragraph : '' }}"><br>

                <label class="label_cc" for="">Third Heading</label><br>
                <input type="text" class="input_sacc" name="third_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->third_heading : '' }}"><br>
                <label class="label_cc" for="">Third Paragraph</label><br>
                <input type="text" class="input_sacc" name="third_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->third_paragraph : '' }}"><br>


                <label class="label_cc" for="">Fourth Heading</label><br>
                <input type="text" class="input_sacc" name="fourth_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->fourth_heading : '' }}"><br>
                <label class="label_cc" for="">Fourth Paragraph</label><br>
                <input type="text" class="input_sacc" name="fourth_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->fourth_paragraph : '' }}"><br>


                <label class="label_cc" for="">Fifth Heading</label><br>
                <input type="text" class="input_sacc" name="fifth_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->fifth_heading : '' }}"><br>
                <label class="label_cc" for="">Fifth Paragraph</label><br>
                <input type="text" class="input_sacc" name="fifth_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->fifth_paragraph : '' }}"><br>


                <label class="label_cc" for="">Sixth Heading</label><br>
                <input type="text" class="input_sacc" name="sixth_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->sixth_heading : '' }}"><br>
                <label class="label_cc" for="">Sixth Paragraph</label><br>
                <input type="text" class="input_sacc" name="sixth_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->sixth_paragraph : '' }}"><br>


                <label class="label_cc" for="">Seveth Heading</label><br>
                <input type="text" class="input_sacc" name="seventh_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->seventh_heading : '' }}"><br>
                <label class="label_cc" for="">Seventh Paragraph</label><br>
                <input type="text" class="input_sacc" name="seventh_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->seventh_paragraph : '' }}"><br>


                <label class="label_cc" for="">Eighth Heading</label><br>
                <input type="text" class="input_sacc" name="eight_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->eight_heading : '' }}"><br>
                <label class="label_cc" for="">Eighth Paragraph</label><br>
                <input type="text" class="input_sacc" name="eight_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->eight_paragraph : '' }}"><br>


                <label class="label_cc" for="">Ninth Heading</label><br>
                <input type="text" class="input_sacc" name="ninth_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->ninth_heading : '' }}"><br>
                <label class="label_cc" for="">Ninth Paragraph</label><br>
                <input type="text" class="input_sacc" name="ninth_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->ninth_paragraph : '' }}"><br>


                <label class="label_cc" for="">Tenth Heading</label><br>
                <input type="text" class="input_sacc" name="tenth_heading" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->tenth_heading : '' }}"><br>
                <label class="label_cc" for="">Tenth Paragraph</label><br>
                <input type="text" class="input_sacc" name="tenth_paragraph" id=""
                    value="{{ $courseindexinsert ? $courseindexinsert->tenth_paragraph : '' }}"><br>

                <button type="submit" class="btn_cc"> Add </button>
            </form>
        </div>
    </div>
@endsection

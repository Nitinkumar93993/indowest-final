<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="bookrealitytestmain">
        <div class="bookrealitytestinner">
            <form action="{{url('/')}}/Admin/FAQ" method="post">
                @csrf
                <label for="faq_question">FAQ Question</label>
                <input type="text" name="faq_question" id="faq_question"><br>
                <label for="faq_answer">FAQ Answer</label>
                <input type="text" name="faq_answer" id="faq_answer"><br>
                <label for="faq_category">FAQ Category</label>
                <select name="faq_category" id="faq_category">
                    <option value="" selected>Select FAQ Category</option>
                    <option value="one">one</option>
                    <option value="two">two</option>
                    <option value="three">three</option>
                    <option value="fourth">fourth</option>
                </select><br>
                <label for="faq_topic">FAQ Topic</label>
                <select name="faq_topic" id="faq_topic">
                    <option value="" selected>Select FAQ Topic</option>
                    <option value="course">Course</option>
                    <option value="event">Event</option>
                    <option value="testimonial">Testimonial</option>
                    <option value="blog">Blog</option>
                </select><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>

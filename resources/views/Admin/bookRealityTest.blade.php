<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bookrealitytestmain {
            border: 1px solid gray;
            width: 100%;
            display: flex;
        }

        .bookrealitytestinner {
            border: 1px solid green;
            width: 25%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="bookrealitytestmain">
        <div class="bookrealitytestinner">
            <form action="{{url('/')}}/Admin/bookRealityTest" method="post">
                @csrf
                <label for="test_type">Test Type</label>
                <select name="test_type" id="test_type">
                    <option value="" selected>Test Type</option>
                    <option value="CAEL">CAEL</option>
                    <option value="CD-IELTS">CD-IELTS</option>
                    <option value="CELPIP">CELPIP</option>
                    <option value="DUOLINGO">DUOLINGO</option>
                    <option value="FRENCH">FRENCH</option>
                    <option value="GERMAN">GERMAN</option>
                    <option value="IELTS">IELTS</option>
                    <option value="OET">OET</option>
                    <option value="PTE">PTE</option>
                    <option value="SPANISH">SPANISH</option>
                    <option value="SpokenEnglish">Spoken English</option>
                    <option value="DUOLINGO">DUOLINGO</option>
                    <option value="UKVIIELTS">UKVI IELTS</option>
                </select><br>
                <label for="test_vanue">Vanue</label>
                <select name="test_vanue" id="test_vanue">
                    <option value="" selected>All Vanue</option>
                    <option value="Online">Online</option>
                    <option value="Ambala Cantt">AMBALA CANTT(BRANCH)</option>
                    <option value="Ambala City">AMBALA CITY(BRANCH)</option>
                </select><br>
                <label for="testDate">Test Date</label>
                <input type="date" name="testDate" id="testDate"><br>
                <label for="testTimeStart">Test time start</label>
                <input type="time" name="testTimeStart" id="testTimeStart"><br>
                <label for="testTimeEnd">Test time end</label>
                <input type="time" name="testTimeEnd" id="testTimeEnd"><br>
                <label for="testCharges">Test Charges</label>
                <input type="test" name="testCharges" id="testCharges"><br>

                <button type="submit" name="submit">submit</button>
            </form>
        </div>
    </div>
</body>

</html>

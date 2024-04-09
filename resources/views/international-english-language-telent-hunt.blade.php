@extends("common/head")
@section("content")



<!--site-main start-->
<div class="site-main">
    <div class="container-fluid mt-5 forex-text-section">
        <h4 class="h4-about">
            Global English Language Talent Search
        </h4>
        <p class="p-about">
            The International English Language Talent Hunt (IELTH) is an aptitude test powered by Indo-West to
            assess students'
            English aptitude and comprehension skills. The
            main aim and objective of the IELTH test is to elevate English language learning to the next level.
            This test serves as
            a fantastic way to evaluate what students have
            learned and aids in planning their future learning endeavors. Let's explore below to understand the
            benefits, the
            process, key elements, etc., of IELTH.
        </p>

        <h4 class="h4-about mt-5">
            Advantages of the IELTH exam
        </h4>

        <ul class="ani-ul">
            <li>A comprehensive method for assessing English language ability.</li>
        </ul>
        <ul class="ani-ul">
            <li>It highlights the child's abilities.</li>
        </ul>
        <ul class="ani-ul">
            <li>Lessen kids' test-related anxiety.</li>
        </ul>
        <ul class="ani-ul">
            <li>Assess each person's aptitude for writing. </li>
        </ul>
        <ul class="ani-ul">
            <li>Evaluates how well students will use their knowledge in various English-language scenarios.
            </li>
        </ul>
        <h4 class="h4-about mt-5">
            What more do you need to know about the test?
        </h4>
        <p class="p-about">
            Now that you are aware of its goals and advantages, let's examine how well it is carried out.
            Indo-West's excellent project, IELTH, allows students in Class XII to complete Level 1 and Level 2
            exams. In the
            beginning, it took place in 2022 in the states of
            Punjab and Haryana. It encompassed most of these two states' districts, including Ambala, Sonipat,
            Patiala, Bathinda,
            Amritsar, Kurukshetra, Karnal, and others.
            Each district's approximately 100 schools took the IELTH exam. It was equally permissible for
            private and public schools
            to take this test. The tremendous
            collaboration of the schools was crucial to the success of this event. In addition, Indo-West
            intends to include
            additional states and districts in the next exams.
            Follow Indo-West to receive these updates.</p>
        <h4 class="h4-about mt-5">
            LEVEL - I
        </h4>
        <p class="p-about">
            It is the initial stage of taking part in the competition. The test was taken by 12th graders from
            several schools in
            each district. The exam's
            fundamental purpose in this phase is to assess students' vocabulary, comprehension, and aptitude. A
            golden ticket
            allowing entry into Level II is awarded to those who
            qualify at this stage. To motivate them, a participation certificate is presented to each candidate.
            Indo-West seeks to
            develop each participant's interest in and
            proficiency with the English language by providing a friendly and upbeat atmosphere.</p>
        <h4 class="h4-about mt-5">
            LEVEL - II
        </h4>
        <p class="p-about">
            This is the IELTH test's second step. The Level I qualifiers have the opportunity to advance toward
            victory in this
            phase. Every district uses a
            common location for Level II. In addition to vocabulary, interpretation, and aptitude analysis, a
            writing module is
            included to assess various text structures,
            concepts, and fluency and coherence. The three district winners from Level II were chosen for
            additional recognition.
            Indo-West is still offering a venue for
            participants to demonstrate their command of the English language, with an emphasis on a
            comprehensive assessment that
            takes into account both oral and writing
            competency.

        </p>
        <h4 class="h4-about mt-5">
            Awards and Recognitions:-
        </h4>
        <table border="1" cellpadding="15" cellspacing="10" width="100%" class="table table-bordered border-secondary internation-table">
            <tbody>
                <tr>
                    <th>Number of prizes drawn (Each district)</th>
                    <th>Prize value (Each district)</th>
                </tr>
                <tr>
                    <td>First (1st) Rank</td>
                    <td>Rs. 51,000 INR</td>
                </tr>
                <tr>
                    <td>Second (2nd) Rank</td>
                    <td>Rs. 21,000 INR</td>
                </tr>
                <tr>
                    <td>Third (3rd) Rank</td>
                    <td>Rs. 11,000 INR</td>
                </tr>
            </tbody>
        </table>
        <p class="p-about">
            For schoolchildren, the International English Language Talent Hunt is
            an amazing chance to evaluate their English proficiency and earn rewards and legitimate
            certifications. This is a
            fantastic
            opportunity for those who wish to pursue higher education
            . Additionally, individuals can
            get clarity on their
            doubts by
            posing questions to seasoned experts. If you'd like additional information, Indo-West would be
            delighted to hear from
            you.
        </p>

    </div>
</div>




<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

{{-- hello --}}
<script src="js/modal.js"></script>
<!-- Javascript end-->

<script>
    const phoneInput = document.querySelector("#phoneInput");

    // Initialize intlTelInput
    const iti = window.intlTelInput(phoneInput, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
    });

    // Set initial country to India
    iti.promise.then(() => {
        iti.setCountry("in");
    });

    // Listen for the country change event
    phoneInput.addEventListener("countrychange", function() {
        const countryCode = iti.getSelectedCountryData().iso2;
        console.log("Selected country code:", countryCode);
    });
</script>

@endsection
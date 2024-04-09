@extends("common/head")
@section("content")




<!--site-main start-->
<div class="site-main">
    <div class="container-fluid mt-5 forex-text-section">
        <h4 class="h4-about">
            Indo-West Career Counsel
        </h4>
        <p class="p-about">
            With the support of Indo-West Career Counsel, schools may provide their students with comprehensive
            career counsel,
            enabling them to
            select the subject stream and career path that best suits their interests and core abilities. They
            receive assistance in
            the process from the committed, knowledgeable,
            and well-equipped team at Indo-West. It helps users choose from over 500 institutions and colleges
            in India and
            elsewhere that offer the subjects they want to study.
        </p>
        <p class="p-about">
            The knowledgeable staff of career counselors at Indo-West focuses on improving each client's unique
            profile, opening up
            a world of possibilities for them to plunge in
            and forge successful lifetime paths.
        </p>

        <h4 class="h4-about mt-5">
            The services at Indo-West Career Counsel include
        </h4>
        <ul class="ani-ul">
            <li>Test of Cognitive Ability</li>
        </ul>
        <ul class="ani-ul">
            <li>IELTS/PTE/DUOLINGO Classes at School</li>
        </ul>
        <ul class="ani-ul">
            <li>Career Guidance for Universities and Colleges at the Domestic and International Level</li>
        </ul>
        <ul class="ani-ul">
            <li>Profile enhancement through a range of events and programs, such as summer school, Olympiads,
                MuNs, and NGO projects </li>
        </ul>
        <ul class="ani-ul">
            <li>Guidance and placement for internships (based on student availability and areas of interest)
            </li>
        </ul>
        <ul class="ani-ul">
            <li>College and University Fair

            </li>
        </ul>
        <ul class="ani-ul">
            <li>VISA processing for International English Language Talent Hunt (IELTH) Colleges and Seven
                Foreign University Applicants.

            </li>
        </ul>


        <h4 class="h4-about mt-5">
            To improve the students' profiles, we engage them in the following activities:
        </h4>
        <ul class="ani-ul">
            <li>Legislative debate conferences and model UN conferences</li>
        </ul>
        <ul class="ani-ul">
            <li>Research Paper Writing </li>
        </ul>
        <ul class="ani-ul">
            <li>Students in the Arts Building Portfolios</li>
        </ul>
        <ul class="ani-ul">
            <li>Meetings/Workshops </li>
        </ul>
        <ul class="ani-ul">
            <li>MOOCs
            </li>
        </ul>


        <p class="p-about">
            At Indo-West Career Counsel, we prioritize giving students a wide range of experiences in order to
            match the
            expectations of the cutthroat world of higher education.
            From the ninth through the twelfth grades, we help them create a multifaceted Curriculum Vitae.
            Indo-West considers each
            student's key skills while creating a
            personalized timetable based on their subjects, future course selections, and university
            preferences.</p>
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
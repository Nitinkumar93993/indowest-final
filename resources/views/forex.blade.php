@extends("common/head")
@section("content")




<!--site-main start-->
<div class="site-main">
    <div class="container-fluid mt-5 forex-text-section">
        <h4 class="h4-about">
            Foreign Exchange | Indo-West
        </h4>
        <p class="p-about">
            You'll need a new currency when you move to a new location or nation. To
            facilitate hassle-free money usage and easy transfers during your visit, Indo-West offers foreign
            exchange services. A
            worldwide
            exchange market for exchanging currencies between nations is known as foreign exchange. You may
            therefore put your
            concerns
            regarding foreign exchange to rest if you intend to study, work, or relocate abroad. All you need is
            foreign exchange
            once you have
            your visa, airline ticket, and insurance. Thus, Indo-West provides you with all-inclusive and
            practical FX solutions.

        </p>

        <h4 class="h4-about mt-5">
            What We Offer in Our Services?
        </h4>
        <p class="p-about">
            Embark on a journey of educational excellence with Indo-West, the pioneers of the Reality
            Test. Trusted by over 3
            lakh test takers in 21 cities, our legacy is built on innovation and reliability. With a track
            record of 1000+
            successful test conductions, we continue to set new benchmarks in the realm of educational
            assessments. Choose Indo-West
            for a pioneering experience in testing where your aspirations meet reality.

        </p>
        <ol>
            <li><b class="subheading-forex">Remittance:</b> <span class="forex-sub-2"> It enables people to send
                    and receive money to and from friends, family,
                    and relatives who live
                    . Remittance services with secure execution facilities are
                    provided by Indo-West.
                    Remittance services
                    allow you to send money to friends and relatives to help them out financially.</span>
                <ul><br>
                    <li><b class="subheading-forex">Tuition Fee Remittance:</b> <span class="forex-sub-2">
                            Indo-West is a safe way to transfer money from your college or university's bank
                            account to another country
                            It takes between 12 and 48 hours for the fee payment to reach the recipient's
                            account, thus in order to start the fee
                            payment, we
                            require the bank account data of your college or university as well as a fast code.
                            You can pay for living expenses and
                            college
                            tuition for study abroad anywhere in the world with our foreign exchange
                            services.</span></li><br>
                    <li><b class="subheading-forex">Maintenance &amp; Gift Remittance:</b> <span class="forex-sub-2"> You can also exchange your domestic currency to cover living
                            expenses, maintenance costs, and other
                            financial requirements at your foreign destination. When you move to a new nation,
                            you have to pay for housing, food,
                            shopping, and
                            transportation. Maintenance remittance is one way to handle all of these charges.
                            Additionally, you may get remittances
                            as gifts
                            from your international family on holidays and special occasions. When it comes to
                            managing these remittance services,
                            Indo-West is
                            your reliable partner.</span></li><br>
                    <li><b class="subheading-forex">GIC payment:</b> <span class="forex-sub-2"> GIC stands for
                            Guaranteed Investment Certificate. It's a Canadian term used for investment for some
                            fixed period and
                            gets back to students in the form of living expenses every month. So, having a GIC
                            before applying for a study visa is
                            mandatory.
                            So, Indo-West assists you in opening a GIC account and transferring 10,000 CAD to
                            this account..</span></li><br>
                    <li><b class="subheading-forex">Block account:</b> <span class="forex-sub-2">When applying
                            for a visa, particularly to a European country, a block account is proof that you
                            have sufficient access
                            to financial resources. In order to pay your expenses when traveling
                            , we
                            will assist you in opening an account
                            and
                            transferring money at reasonable fees. When it comes to managing these financial
                            arrangements, Indo-West is your
                            reliable partner.</span>
                    </li><br>
                </ul>
            </li>
            <li><b class="subheading-forex">Travel Card:</b> <span class="forex-sub-2"> This is for you if you
                    enjoy traveling and seeing new places! Your trip and tourism abroad will be aided by the
                    travel
                    card. Travel cards can be used for dining, shopping, and sightseeing at a variety of
                    locations. To make

                    payments easier,
                    create your travel card with Indo-West right now..</span></li><br>
            <li><b class="subheading-forex">Foreign Currency:</b> <span class="forex-sub-2"> To meet your
                    financial demands if you're going to relocate abroad, visit Indo-West to convert your local
                    money to
                    foreign cash. To convert your native money to foreign currency and make inexpensive and
                    convenient
                    payments for
                    things like
                    investments, salary, and products and services, go with Indo-West.</span> </li><br>
        </ol>
        <h4 class="h4-about mt-5">
            Why choose Indo-West?
        </h4>
        <p class="p-about">
            For business travel, study abroad, and living expenditures, Indo-West offers the greatest
            and most dependable foreign exchange services at competitive prices. As previously indicated, we
            also provide a range of
            foreign
            exchange services, including travel cards, foreign currency exchange, and remittance. Indo-West
            offers prices that are
            both
            competitive and reasonably priced in the business. We are a simple tool that allows you to quickly
            exchange your
            currencies.
            Your money will be sent safely, and we utilize the greatest techniques to protect data. Our team
            will make sure that it
            is safe.
            The four main benefits we offer for currency conversion are price, quickness, security, and
            accessibility. We have
            forged
            partnerships with the top networks to ensure smooth transactions and round-the-clock support. Safety
            precautions are our
            first
            priority when it comes to client money and data. For your demands and budget, we provide flexible
            alternatives at the
            best pricing.
            To start the transfers and exchange services, we employ the most effective methods. So, Indo-West is
            pleased to help if
            you're
            searching for the top foreign exchange company in the world!
        </p>

        <p class="p-about">
            Please send your questions to <a class="forex-underline" href="mailto:Info@Indo-Westacademy.com">Info@Indo-Westacademy.com</a>
            Also, give us a call at <a class="forex-underline" href="tel:+91 999-6114-545">+91 999-6114-545</a>
            for
            prompt assistance. To convert your local currency to foreign currency, select Indo-West.
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
<!-- Javascript end-->]
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
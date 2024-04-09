@extends("common/head")
@section("content")


        <!--site-main start-->
        <div class="site-main">

            <div class="">
                <div class="slideshowContainer">
                    <!-- Replace the image 'src' with the images in your project.
                    Javascript is set up so that you can add as many images as you like, but make sure that you match the number of 'circle' span elements (below) to the number of images -->
                    <img class="imageSlides img-fluid" src="/images/client/slid-banner-1.png"
                        alt="beach side city view">

                    <!-- <img class="imageSlides img-fluid" src="/images/client/slid-banner-2.png" alt="leaf on the ground">


                    <img class="imageSlides img-fluid" src="/images/client/slid-banner-3.png"> -->
                    <!-- <img class="imageSlides" height="100%" src="13.png"> -->

                    <!-- I would recommend to replace these 'span' elements with 'img' files
                    for each the left and right arrow that fits your project, and size accordingly.
                    I've shown 'span' elements because I didn't want to upload files. -->
                    <span id="leftArrow" class="slideshowArrow">&#8249;</span>
                    <span id="rightArrow" class="slideshowArrow">&#8250;</span>

                    <!-- <div class="slideshowCircles">
                        Filled 'dot' class is set to first image in slideshow, and then via Javascript the filled 'dot' class follows the current image.
                    Make sure you match the number of these 'circle' span elements to the number of images in your slideshow.
                         <span class="circle dot"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                    </div> -->
                </div>
            </div>


            <div class="container" style="position: relative; margin-top: -85vh; padding: 5px 20px 120px 120px;">
                <div class="row">
                    <div class="col-md-6" style="background-color: transparent; height: 100vh;"></div>
                    <div class="col-md-6">
                        <div class="form-card" style="width: 100%; position: relative; ">
                            <div class="card" id="banner-ca-from">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6 mt-10">
                                            <label for="formGroupExampleInput"
                                                class="form-label Indo-West-ca-label-text">First Name</label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name" required>
                                        </div>

                                        <div class="col-md-6 mt-10">
                                            <label for="formGroupExampleInput"
                                                class="form-label Indo-West-ca-label-text">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name" required>
                                        </div>


                                        <div class="col-md-6 mt-10">
                                            <label for="formGroupExampleInput"
                                                class="form-label Indo-West-ca-label-text">Countery
                                                Code</label>
                                            <select style="padding: 8px 8px 8px 8px;" class="form-select "
                                                aria-label="Default select example" required>
                                                <option data-countryCode="IN" value="91" Selected>India (+91)
                                                </option>
                                                <option data-countryCode="GB" value="44">UK (+44)
                                                </option>
                                                <option data-countryCode="US" value="1">USA (+1)</option>
                                                <optgroup label="Other countries">
                                                    <option data-countryCode="DZ" value="213">Algeria (+213)
                                                    </option>
                                                    <option data-countryCode="AD" value="376">Andorra (+376)
                                                    </option>
                                                    <option data-countryCode="AO" value="244">Angola (+244)
                                                    </option>
                                                    <option data-countryCode="AI" value="1264">Anguilla (+1264)
                                                    </option>
                                                    <option data-countryCode="AG" value="1268">Antigua &amp;
                                                        Barbuda (+1268)</option>
                                                    <option data-countryCode="AR" value="54">Argentina (+54)
                                                    </option>
                                                    <option data-countryCode="AM" value="374">Armenia (+374)
                                                    </option>
                                                    <option data-countryCode="AW" value="297">Aruba (+297)
                                                    </option>
                                                    <option data-countryCode="AU" value="61">Australia (+61)
                                                    </option>
                                                    <option data-countryCode="AT" value="43">Austria (+43)
                                                    </option>
                                                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)
                                                    </option>
                                                    <option data-countryCode="BS" value="1242">Bahamas (+1242)
                                                    </option>
                                                    <option data-countryCode="BH" value="973">Bahrain (+973)
                                                    </option>
                                                    <option data-countryCode="BD" value="880">Bangladesh (+880)
                                                    </option>
                                                    <option data-countryCode="BB" value="1246">Barbados (+1246)
                                                    </option>
                                                    <option data-countryCode="BY" value="375">Belarus (+375)
                                                    </option>
                                                    <option data-countryCode="BE" value="32">Belgium (+32)
                                                    </option>
                                                    <option data-countryCode="BZ" value="501">Belize (+501)
                                                    </option>
                                                    <option data-countryCode="BJ" value="229">Benin (+229)
                                                    </option>
                                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)
                                                    </option>
                                                    <option data-countryCode="BT" value="975">Bhutan (+975)
                                                    </option>
                                                    <option data-countryCode="BO" value="591">Bolivia (+591)
                                                    </option>
                                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina
                                                        (+387)</option>
                                                    <option data-countryCode="BW" value="267">Botswana (+267)
                                                    </option>
                                                    <option data-countryCode="BR" value="55">Brazil (+55)
                                                    </option>
                                                    <option data-countryCode="BN" value="673">Brunei (+673)
                                                    </option>
                                                    <option data-countryCode="BG" value="359">Bulgaria (+359)
                                                    </option>
                                                    <option data-countryCode="BF" value="226">Burkina Faso
                                                        (+226)</option>
                                                    <option data-countryCode="BI" value="257">Burundi (+257)
                                                    </option>
                                                    <option data-countryCode="KH" value="855">Cambodia (+855)
                                                    </option>
                                                    <option data-countryCode="CM" value="237">Cameroon (+237)
                                                    </option>
                                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                    <option data-countryCode="CV" value="238">Cape Verde Islands
                                                        (+238)</option>
                                                    <option data-countryCode="KY" value="1345">Cayman Islands
                                                        (+1345)</option>
                                                    <option data-countryCode="CF" value="236">Central African
                                                        Republic (+236)</option>
                                                    <option data-countryCode="CL" value="56">Chile (+56)
                                                    </option>
                                                    <option data-countryCode="CN" value="86">China (+86)
                                                    </option>
                                                    <option data-countryCode="CO" value="57">Colombia (+57)
                                                    </option>
                                                    <option data-countryCode="KM" value="269">Comoros (+269)
                                                    </option>
                                                    <option data-countryCode="CG" value="242">Congo (+242)
                                                    </option>
                                                    <option data-countryCode="CK" value="682">Cook Islands
                                                        (+682)</option>
                                                    <option data-countryCode="CR" value="506">Costa Rica (+506)
                                                    </option>
                                                    <option data-countryCode="HR" value="385">Croatia (+385)
                                                    </option>
                                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                    <option data-countryCode="CY" value="90392">Cyprus North
                                                        (+90392)</option>
                                                    <option data-countryCode="CY" value="357">Cyprus South
                                                        (+357)</option>
                                                    <option data-countryCode="CZ" value="42">Czech Republic
                                                        (+42)</option>
                                                    <option data-countryCode="DK" value="45">Denmark (+45)
                                                    </option>
                                                    <option data-countryCode="DJ" value="253">Djibouti (+253)
                                                    </option>
                                                    <option data-countryCode="DM" value="1809">Dominica (+1809)
                                                    </option>
                                                    <option data-countryCode="DO" value="1809">Dominican
                                                        Republic (+1809)</option>
                                                    <option data-countryCode="EC" value="593">Ecuador (+593)
                                                    </option>
                                                    <option data-countryCode="EG" value="20">Egypt (+20)
                                                    </option>
                                                    <option data-countryCode="SV" value="503">El Salvador (+503)
                                                    </option>
                                                    <option data-countryCode="GQ" value="240">Equatorial Guinea
                                                        (+240)</option>
                                                    <option data-countryCode="ER" value="291">Eritrea (+291)
                                                    </option>
                                                    <option data-countryCode="EE" value="372">Estonia (+372)
                                                    </option>
                                                    <option data-countryCode="ET" value="251">Ethiopia (+251)
                                                    </option>
                                                    <option data-countryCode="FK" value="500">Falkland Islands
                                                        (+500)</option>
                                                    <option data-countryCode="FO" value="298">Faroe Islands
                                                        (+298)</option>
                                                    <option data-countryCode="FJ" value="679">Fiji (+679)
                                                    </option>
                                                    <option data-countryCode="FI" value="358">Finland (+358)
                                                    </option>
                                                    <option data-countryCode="FR" value="33">France (+33)
                                                    </option>
                                                    <option data-countryCode="GF" value="594">French Guiana
                                                        (+594)</option>
                                                    <option data-countryCode="PF" value="689">French Polynesia
                                                        (+689)</option>
                                                    <option data-countryCode="GA" value="241">Gabon (+241)
                                                    </option>
                                                    <option data-countryCode="GM" value="220">Gambia (+220)
                                                    </option>
                                                    <option data-countryCode="GE" value="7880">Georgia (+7880)
                                                    </option>
                                                    <option data-countryCode="DE" value="49">Germany (+49)
                                                    </option>
                                                    <option data-countryCode="GH" value="233">Ghana (+233)
                                                    </option>
                                                    <option data-countryCode="GI" value="350">Gibraltar (+350)
                                                    </option>
                                                    <option data-countryCode="GR" value="30">Greece (+30)
                                                    </option>
                                                    <option data-countryCode="GL" value="299">Greenland (+299)
                                                    </option>
                                                    <option data-countryCode="GD" value="1473">Grenada (+1473)
                                                    </option>
                                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)
                                                    </option>
                                                    <option data-countryCode="GU" value="671">Guam (+671)
                                                    </option>
                                                    <option data-countryCode="GT" value="502">Guatemala (+502)
                                                    </option>
                                                    <option data-countryCode="GN" value="224">Guinea (+224)
                                                    </option>
                                                    <option data-countryCode="GW" value="245">Guinea - Bissau
                                                        (+245)</option>
                                                    <option data-countryCode="GY" value="592">Guyana (+592)
                                                    </option>
                                                    <option data-countryCode="HT" value="509">Haiti (+509)
                                                    </option>
                                                    <option data-countryCode="HN" value="504">Honduras (+504)
                                                    </option>
                                                    <option data-countryCode="HK" value="852">Hong Kong (+852)
                                                    </option>
                                                    <option data-countryCode="HU" value="36">Hungary (+36)
                                                    </option>
                                                    <option data-countryCode="IS" value="354">Iceland (+354)
                                                    </option>
                                                    <!-- <option data-countryCode="IN" value="91">India (+91)
                                                                                                                                                                    </option> -->
                                                    <option data-countryCode="ID" value="62">Indonesia (+62)
                                                    </option>
                                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                    <option data-countryCode="IQ" value="964">Iraq (+964)
                                                    </option>
                                                    <option data-countryCode="IE" value="353">Ireland (+353)
                                                    </option>
                                                    <option data-countryCode="IL" value="972">Israel (+972)
                                                    </option>
                                                    <option data-countryCode="IT" value="39">Italy (+39)
                                                    </option>
                                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)
                                                    </option>
                                                    <option data-countryCode="JP" value="81">Japan (+81)
                                                    </option>
                                                    <option data-countryCode="JO" value="962">Jordan (+962)
                                                    </option>
                                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)
                                                    </option>
                                                    <option data-countryCode="KE" value="254">Kenya (+254)
                                                    </option>
                                                    <option data-countryCode="KI" value="686">Kiribati (+686)
                                                    </option>
                                                    <option data-countryCode="KP" value="850">Korea North (+850)
                                                    </option>
                                                    <option data-countryCode="KR" value="82">Korea South (+82)
                                                    </option>
                                                    <option data-countryCode="KW" value="965">Kuwait (+965)
                                                    </option>
                                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)
                                                    </option>
                                                    <option data-countryCode="LA" value="856">Laos (+856)
                                                    </option>
                                                    <option data-countryCode="LV" value="371">Latvia (+371)
                                                    </option>
                                                    <option data-countryCode="LB" value="961">Lebanon (+961)
                                                    </option>
                                                    <option data-countryCode="LS" value="266">Lesotho (+266)
                                                    </option>
                                                    <option data-countryCode="LR" value="231">Liberia (+231)
                                                    </option>
                                                    <option data-countryCode="LY" value="218">Libya (+218)
                                                    </option>
                                                    <option data-countryCode="LI" value="417">Liechtenstein
                                                        (+417)</option>
                                                    <option data-countryCode="LT" value="370">Lithuania (+370)
                                                    </option>
                                                    <option data-countryCode="LU" value="352">Luxembourg (+352)
                                                    </option>
                                                    <option data-countryCode="MO" value="853">Macao (+853)
                                                    </option>
                                                    <option data-countryCode="MK" value="389">Macedonia (+389)
                                                    </option>
                                                    <option data-countryCode="MG" value="261">Madagascar (+261)
                                                    </option>
                                                    <option data-countryCode="MW" value="265">Malawi (+265)
                                                    </option>
                                                    <option data-countryCode="MY" value="60">Malaysia (+60)
                                                    </option>
                                                    <option data-countryCode="MV" value="960">Maldives (+960)
                                                    </option>
                                                    <option data-countryCode="ML" value="223">Mali (+223)
                                                    </option>
                                                    <option data-countryCode="MT" value="356">Malta (+356)
                                                    </option>
                                                    <option data-countryCode="MH" value="692">Marshall Islands
                                                        (+692)</option>
                                                    <option data-countryCode="MQ" value="596">Martinique (+596)
                                                    </option>
                                                    <option data-countryCode="MR" value="222">Mauritania (+222)
                                                    </option>
                                                    <option data-countryCode="YT" value="269">Mayotte (+269)
                                                    </option>
                                                    <option data-countryCode="MX" value="52">Mexico (+52)
                                                    </option>
                                                    <option data-countryCode="FM" value="691">Micronesia (+691)
                                                    </option>
                                                    <option data-countryCode="MD" value="373">Moldova (+373)
                                                    </option>
                                                    <option data-countryCode="MC" value="377">Monaco (+377)
                                                    </option>
                                                    <option data-countryCode="MN" value="976">Mongolia (+976)
                                                    </option>
                                                    <option data-countryCode="MS" value="1664">Montserrat
                                                        (+1664)</option>
                                                    <option data-countryCode="MA" value="212">Morocco (+212)
                                                    </option>
                                                    <option data-countryCode="MZ" value="258">Mozambique (+258)
                                                    </option>
                                                    <option data-countryCode="MN" value="95">Myanmar (+95)
                                                    </option>
                                                    <option data-countryCode="NA" value="264">Namibia (+264)
                                                    </option>
                                                    <option data-countryCode="NR" value="674">Nauru (+674)
                                                    </option>
                                                    <option data-countryCode="NP" value="977">Nepal (+977)
                                                    </option>
                                                    <option data-countryCode="NL" value="31">Netherlands (+31)
                                                    </option>
                                                    <option data-countryCode="NC" value="687">New Caledonia
                                                        (+687)</option>
                                                    <option data-countryCode="NZ" value="64">New Zealand (+64)
                                                    </option>
                                                    <option data-countryCode="NI" value="505">Nicaragua (+505)
                                                    </option>
                                                    <option data-countryCode="NE" value="227">Niger (+227)
                                                    </option>
                                                    <option data-countryCode="NG" value="234">Nigeria (+234)
                                                    </option>
                                                    <option data-countryCode="NU" value="683">Niue (+683)
                                                    </option>
                                                    <option data-countryCode="NF" value="672">Norfolk Islands
                                                        (+672)</option>
                                                    <option data-countryCode="NP" value="670">Northern Marianas
                                                        (+670)</option>
                                                    <option data-countryCode="NO" value="47">Norway (+47)
                                                    </option>
                                                    <option data-countryCode="OM" value="968">Oman (+968)
                                                    </option>
                                                    <option data-countryCode="PW" value="680">Palau (+680)
                                                    </option>
                                                    <option data-countryCode="PA" value="507">Panama (+507)
                                                    </option>
                                                    <option data-countryCode="PG" value="675">Papua New Guinea
                                                        (+675)</option>
                                                    <option data-countryCode="PY" value="595">Paraguay (+595)
                                                    </option>
                                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                    <option data-countryCode="PH" value="63">Philippines (+63)
                                                    </option>
                                                    <option data-countryCode="PL" value="48">Poland (+48)
                                                    </option>
                                                    <option data-countryCode="PT" value="351">Portugal (+351)
                                                    </option>
                                                    <option data-countryCode="PR" value="1787">Puerto Rico
                                                        (+1787)</option>
                                                    <option data-countryCode="QA" value="974">Qatar (+974)
                                                    </option>
                                                    <option data-countryCode="RE" value="262">Reunion (+262)
                                                    </option>
                                                    <option data-countryCode="RO" value="40">Romania (+40)
                                                    </option>
                                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                    <option data-countryCode="RW" value="250">Rwanda (+250)
                                                    </option>
                                                    <option data-countryCode="SM" value="378">San Marino (+378)
                                                    </option>
                                                    <option data-countryCode="ST" value="239">Sao Tome &amp;
                                                        Principe (+239)</option>
                                                    <option data-countryCode="SA" value="966">Saudi Arabia
                                                        (+966)</option>
                                                    <option data-countryCode="SN" value="221">Senegal (+221)
                                                    </option>
                                                    <option data-countryCode="CS" value="381">Serbia (+381)
                                                    </option>
                                                    <option data-countryCode="SC" value="248">Seychelles (+248)
                                                    </option>
                                                    <option data-countryCode="SL" value="232">Sierra Leone
                                                        (+232)</option>
                                                    <option data-countryCode="SG" value="65">Singapore (+65)
                                                    </option>
                                                    <option data-countryCode="SK" value="421">Slovak Republic
                                                        (+421)</option>
                                                    <option data-countryCode="SI" value="386">Slovenia (+386)
                                                    </option>
                                                    <option data-countryCode="SB" value="677">Solomon Islands
                                                        (+677)</option>
                                                    <option data-countryCode="SO" value="252">Somalia (+252)
                                                    </option>
                                                    <option data-countryCode="ZA" value="27">South Africa (+27)
                                                    </option>
                                                    <option data-countryCode="ES" value="34">Spain (+34)
                                                    </option>
                                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)
                                                    </option>
                                                    <option data-countryCode="SH" value="290">St. Helena (+290)
                                                    </option>
                                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)
                                                    </option>
                                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)
                                                    </option>
                                                    <option data-countryCode="SD" value="249">Sudan (+249)
                                                    </option>
                                                    <option data-countryCode="SR" value="597">Suriname (+597)
                                                    </option>
                                                    <option data-countryCode="SZ" value="268">Swaziland (+268)
                                                    </option>
                                                    <option data-countryCode="SE" value="46">Sweden (+46)
                                                    </option>
                                                    <option data-countryCode="CH" value="41">Switzerland (+41)
                                                    </option>
                                                    <option data-countryCode="SI" value="963">Syria (+963)
                                                    </option>
                                                    <option data-countryCode="TW" value="886">Taiwan (+886)
                                                    </option>
                                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)
                                                    </option>
                                                    <option data-countryCode="TH" value="66">Thailand (+66)
                                                    </option>
                                                    <option data-countryCode="TG" value="228">Togo (+228)
                                                    </option>
                                                    <option data-countryCode="TO" value="676">Tonga (+676)
                                                    </option>
                                                    <option data-countryCode="TT" value="1868">Trinidad &amp;
                                                        Tobago (+1868)</option>
                                                    <option data-countryCode="TN" value="216">Tunisia (+216)
                                                    </option>
                                                    <option data-countryCode="TR" value="90">Turkey (+90)
                                                    </option>
                                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)
                                                    </option>
                                                    <option data-countryCode="TM" value="993">Turkmenistan
                                                        (+993)</option>
                                                    <option data-countryCode="TC" value="1649">Turks &amp;
                                                        Caicos Islands (+1649)</option>
                                                    <option data-countryCode="TV" value="688">Tuvalu (+688)
                                                    </option>
                                                    <option data-countryCode="UG" value="256">Uganda (+256)
                                                    </option>
                                                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                    <option data-countryCode="UA" value="380">Ukraine (+380)
                                                    </option>
                                                    <option data-countryCode="AE" value="971">United Arab
                                                        Emirates (+971)</option>
                                                    <option data-countryCode="UY" value="598">Uruguay (+598)
                                                    </option>
                                                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)
                                                    </option>
                                                    <option data-countryCode="VU" value="678">Vanuatu (+678)
                                                    </option>
                                                    <option data-countryCode="VA" value="379">Vatican City
                                                        (+379)</option>
                                                    <option data-countryCode="VE" value="58">Venezuela (+58)
                                                    </option>
                                                    <option data-countryCode="VN" value="84">Vietnam (+84)
                                                    </option>
                                                    <option data-countryCode="VG" value="84">Virgin Islands -
                                                        British (+1284)</option>
                                                    <option data-countryCode="VI" value="84">Virgin Islands - US
                                                        (+1340)</option>
                                                    <option data-countryCode="WF" value="681">Wallis &amp;
                                                        Futuna (+681)</option>
                                                    <option data-countryCode="YE" value="969">Yemen
                                                        (North)(+969)</option>
                                                    <option data-countryCode="YE" value="967">Yemen
                                                        (South)(+967)</option>
                                                    <option data-countryCode="ZM" value="260">Zambia (+260)
                                                    </option>
                                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>


                                        <div class="col-md-6 mt-10">
                                            <label for="formGroupExampleInput"
                                                class="form-label Indo-West-ca-label-text">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="+91"
                                                aria-label="Phone" required>
                                        </div>


                                        <div class="col-md-6 mt-10">
                                            <label for="inputEmail4"
                                                class="form-label Indo-West-ca-label-text">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4 "
                                                placeholder="email" aria-label="ram@gmail.com" required>
                                        </div>


                                        <div class="col-md-6 mt-10">
                                            <label for="inputdate"
                                                class="form-label Indo-West-ca-label-text">DOB</label>
                                            <input type="date" class="form-control" id="inputEmail4 "
                                                placeholder="email" aria-label="ram@gmail.com" required>
                                        </div>


                                        <div class="col-md-12 mt-10">
                                            <label for="formGroupExampleInput"
                                                class="form-label Indo-West-ca-label-text">Services</label>
                                            <select class="form-select" aria-label="Default select example" required>
                                                <option selected> Select Services</option>
                                                <option value="1">TEST PREP -PRACTIC PACKS</option>
                                                <option value="2">EXPRESS ENTRY</option>
                                                <option value="3">STUDY PERMIT (EXTENSION)</option>
                                                <option value="4">POST GRADUATION WORK PERMIT</option>
                                                <option value="5">FAMILY / SPOUSAL SPONSORSHIP</option>
                                                <option value="6">SUPER VISA / VISITOR VISA</option>
                                                <option value="7">LABOUR MARKET IMPACT ASSESSMENT (LMIA)</option>
                                                <option value="8">INVESTOR / ENTREPRENEUR VISA</option>
                                                <option value="9">SPOUSAL OPEN WORK PERMIT</option>
                                                <option value="10">STUDY VISA</option>
                                                <option value="11">ABOUT ONLINE COACHING</option>
                                                <option value="12">TEST PREP -ONLINE REALITY TEST</option>

                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Message</label>
                                            <span class="text-input"><textarea name="message" rows="1" maxlength="50"
                                                    placeholder="Message" required="required"></textarea></span>


                                        </div>


                                        <!-- <div class="col-md-12">
                                            <select class="form-select" aria-label="Default select example" required>
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->


                                        <!-- <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="floatingTextarea" required></textarea>
                                            <label for="floatingTextarea">Comments</label>
                                        </div> -->

                                        <div class="col-md-12 mt-20">
                                            <button
                                                class=" float-right submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor"
                                                type="submit">Send</button>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- //////////////////////////////////////////////////////////// -->

            <div class="container-fluid" style="margin-top: -150px; padding-bottom: 50px;">
                <div class="container d-flex justify-content-center">
                    <img src="/images/cropped-2.png" width="60%" alt="" class="img-fluid ">
                </div>
            </div>

            <div class="container-fluid mt-5 mb-50">
                <div class="container  justify-content-center">
                    <div class="display-4 fw-semibold">
                        <!-- <p class="text-center">Who we <span style="color: #d00000;"> Are</span></p> -->
                        <h2 class="We-are-our-office">Who we <span style="color: #d00000;"> Are</span></h2>

                    </div>
                    <p class="p-express">One of Canada's leading immigration consultants, Indo-West is
                        well-known for providing a wide range of services, including business, LMIA, Express Entry, PNP,
                        spousal open work
                        permits, study,
                        and post-graduation work permits. With a staff of licensed Canadian immigration consultants
                        (RCICs), Indo-West works
                        closely with a
                        wide range of universities, colleges, and official channel partners. With a commitment to
                        ethical standards and a wealth
                        of
                        international experience, the committed staff thoroughly evaluates profiles. Maintaining
                        absolute customer
                        confidentiality,
                        Indo-West provides excellent visa solutions based on reliable evaluations. In charge is Mr.
                        Ankit Kumar, our
                        International Director,
                        who is also a College of Immigration and Citizenship Consultants-registered Regulated Canadian
                        Immigration Consultant.
                        His own
                        experience as an immigrant emphasizes how important it is to receive honest and correct advise.
                    </p>
                    <p class="p-express">Because of its
                        dedication to moral
                        principles, Indo-West Immigration has been able to form alliances with respectable global
                        education providers and expand
                        its agent
                        network both locally and internationally. To put it simply, Indo-West stands out as the Best
                        Immigration Consultant in
                        Canada
                        because it values openness and provides its clients with unmatched services.</p>
                </div>
            </div>

            <div class="container-fluid" style="background-color: #F1FFFF; padding: 80px 100px 20px 100px;">
                <div class="container visa-imm">
                    <div class="row  visa-row">
                        <div class="col-md-12" style="padding: 8px 50px 8px 50px;">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-start">
                                    <div class="mt-auto mb-auto">
                                        <!-- <p class="fs-3 fw-semibold"><br> sit amet.</p> -->
                                        <h4 class="about-express-heading">VISA & IMMIGRATION SERVICES</h4>

                                        <p class=" mt-auto mb-auto">
                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji ">Study
                                                    visa</button></a>

                                            <a href="" class="herf me-2 ms-2"><button type="button"
                                                    class="btn btn-secondary btn-ji">Post
                                                    study
                                                    visa</button>
                                            </a>

                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji " id="aqn">After Visa
                                                    service</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <img src="/images/client/slid-banner-second-section-1.png" height="300px" alt="">
                                </div>
                            </div>
                        </div>
                        <hr class="">
                        <div class="col-md-12 " style="padding-left: 50px; padding-right: 50px;">
                            <p class="p-express">With our professional immigration and VISA services, you can apply for
                                a visa extension, study permit, or work permit in
                                Canada. In
                                order to make the process of obtaining your visa simple, we also handle PR and
                                citizenship cases and cover a variety of
                                visa
                                categories. Trust us and go through the knowledgeable visa advisers at RCIC.</p>
                            <a href="" class="herf"><button type="button" class="btn btn-secondary click-btn  mb-3
                                    " id="aqn">Click here <span class="arow"></span><i class="bi bi-arrow-right"></i>
                                </button></a>

                        </div>
                    </div>

                    <div class="row  visa-row mt-5">
                        <div class="col-md-12" style="padding: 8px 50px 8px 50px;">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-start">
                                    <div class="mt-auto mb-auto">
                                        <h4 class="about-express-heading">TEST PREP ONLINE COACHING</h4>
                                        <!-- <p class="fs-3 fw-semibold">Lorem ipsum dolor <br> sit amet.</p> -->
                                        <p class=" mt-auto mb-auto">
                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji">IELTS</button>
                                            </a>
                                            <a href="" class="herf me-2 ms-2"><button type="button"
                                                    class="btn btn-secondary btn-ji">PTE</button>
                                            </a>
                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji" id="aqn">DUOLINGO</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-end">
                                    <img src="images/client/slid-banner-second-section-1.png" height="300px" alt="">
                                </div>
                            </div>
                        </div>

                        <hr class="">

                        <div class="col-md-12 " style="padding-left: 50px; padding-right: 50px;">
                            <p class="p-express">It won't be difficult to study with IELTS, DUOLINGO, PTE, and online
                                coaching programs designed by
                                English language professionals to guarantee your success. Students are helped to learn
                                quickly by incorporating advanced
                                learning
                                tactics. Examine the variety of professional courses available and select the one that
                                best suits your demands.</p>

                            <a href="" class="herf"><button type="button" class="btn btn-secondary click-btn  mb-3"
                                    id="aqn">Click
                                    here <span class="arow"></span><i class="bi bi-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="row  visa-row mt-5">
                        <div class="col-md-12" style="padding: 8px 50px 8px 50px;">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-start">
                                    <div class="mt-auto mb-auto">
                                        <h4 class="about-express-heading">TEST PREP practic-packs</h4>

                                        <!-- <p class="fs-3 fw-semibold">Lorem ipsum dolor <br> sit amet.</p> -->
                                        <p class=" mt-auto mb-auto">
                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji">IELTS</button>
                                            </a>
                                            <a href="" class="herf me-2 ms-2"><button type="button"
                                                    class="btn btn-secondary btn-ji">PTE</button>
                                            </a>
                                            <a href="" class="herf"><button type="button"
                                                    class="btn btn-secondary btn-ji" id="aqn">DUOLINGO</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-end">
                                    <img src="images/client/slid-banner-second-section-1.png" height="300px" alt="">
                                </div>
                            </div>
                        </div>
                        <hr class="">
                        <div class="col-md-12 " style="padding-left: 50px; padding-right: 50px;">
                            <p class="p-express">We provided updated content for IELTS, PTE and DUOLINGO through our Test
                                preparation practice
                                pack that helps students do enough practice to ace the exam. Access to live expert
                                classes, mock tests, Videos sessions,
                                and real-
                                time test analysis are a few aspects of our online practice packs. Let's get started to
                                have success.</p>


                            <a href="" class="herf"><button type="button" class="btn btn-secondary click-btn mb-3"
                                    id="aqn">Click
                                    here <span class="arow"></span><i class="bi bi-arrow-right"></i>
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container-fluid mt-5">
                <div class="container">
                    <div class="row">

                        <div class="col  ">

                            <div class="card ram-ji">
                                <img src="images/client/slid-banner-second-section-1.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Card title</h5>
                                    <p class="text-center li-hi">date</p>
                                    <p class="text-center fw-semibold li-hi">information</p>
                                    <p class="card-text text-center">Some quick example text to build on the card title
                                        and make
                                        up the bulk
                                        of the card's content.</p>

                                </div>
                            </div>


                        </div>
                        <div class="col  ">

                            <div class="card ram-ji">
                                <img src="images/client/slid-banner-second-section-1.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Card title</h5>
                                    <p class="text-center li-hi">date</p>
                                    <p class="text-center fw-semibold li-hi">information</p>
                                    <p class="card-text text-center">Some quick example text to build on the card title
                                        and make
                                        up the bulk
                                        of the card's content.</p>

                                </div>
                            </div>


                        </div>
                        <div class="col  ">

                            <div class="card ram-ji">
                                <img src="images/client/slid-banner-second-section-1.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Card title</h5>
                                    <p class="text-center li-hi">date</p>
                                    <p class="text-center fw-semibold li-hi">information</p>
                                    <p class="card-text text-center">Some quick example text to build on the card title
                                        and make
                                        up the bulk
                                        of the card's content.</p>

                                </div>
                            </div>


                        </div>

                        <p class="text-center mt-5">
                            <a href="" class="herf"><button type="button" class="btn fw-bold btn-secondary see-btn mb-3"
                                    id="aqn">VIWE MORE <span class="arow"></span><i class="bi bi-arrow-right"></i>
                                </button></a>
                        </p>





                    </div>
                </div>
            </div> -->
            <div class="container">
                <h2 class="We-are-our-office mt-20">ARTICLES &<span style="color: #d00000;">TUTORIALS</span></h2>

                <div class="nitin-book">
                    <div class="row mt-40 mb-50 justify-content">
                        <div class="col-4">
                            <div class="card" style="width: 370px; height: 100%;">
                                <div class="card-body mt-3">
                                    <img class="events-image-main" src="/images/slides/event-images-1.jpg" alt="">
                                    <h5 style="padding: 15px 0px 20px 0px;" class="card-title text-center">Canada
                                        Express Entry pr process</h5>

                                    <h6 class="card-subtitle mb-2 mt-3  text-center"></h6>
                                    <div class="card-text">
                                        <div class="text1-heading2 d-flex align-items-center ms-1 mt-0"><i
                                                class="bi bi-calendar-check"></i> <span class="branch-any">Date: Jan 31,
                                                2024</span>
                                        </div>
                                    </div>
                                    <p class="p-express">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
                                        magnam doloribus facilis itaque harum sequi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 370px; height: 100%;">
                                <div class="card-body mt-3">
                                    <img class="events-image-main" src="/images/slides/event-images-1.jpg" alt="">
                                    <h5 style="padding: 15px 0px 20px 0px;" class="card-title text-center">Canada
                                        Invites Candidates First Express Entry</h5>

                                    <h6 class="card-subtitle mb-2 mt-3  text-center"></h6>
                                    <div class="card-text">
                                        <div class="text1-heading2 d-flex align-items-center ms-1 mt-0"><i
                                                class="bi bi-calendar-check"></i> <span class="branch-any">Date: Jan 31,
                                                2024</span>
                                        </div>
                                    </div>
                                    <p class="p-express">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
                                        magnam doloribus facilis itaque harum sequi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 370px; height: 100%;">
                                <div class="card-body mt-3">
                                    <img class="events-image-main" src="/images/slides/event-images-1.jpg" alt="">
                                    <h5 style="padding: 15px 0px 20px 0px;" class="card-title text-center">What You Need
                                        To Know Before Moving To Ontario</h5>

                                    <h6 class="card-subtitle mb-2 mt-3  text-center"></h6>
                                    <div class="card-text">
                                        <div class="text1-heading2 d-flex align-items-center ms-1 mt-0"><i
                                                class="bi bi-calendar-check"></i> <span class="branch-any">Date: Jan 31,
                                                2024</span>
                                        </div>
                                    </div>
                                    <p class="p-express">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
                                        magnam doloribus facilis itaque harum sequi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Indo-West-ca-load-more">
                        <div class="header_btn mr-20">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round" id="become-a-member-1"
                                href="">&nbsp;&nbsp;Load More &nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>



            </div>
            <div class="container-fluid clr-bg">
                <h2 class="We-are-our-office mt-0 mb-40">ASSESSMENT &<span style="color: #d00000;"> ELIGIBILITY
                        TOOLS</span>
                </h2>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 top-2 text-center">
                            <div class="card car-ji  d-flex pt-3 pb-3 " style="width: 70%;">
                                <p class="text-center">
                                    <img src="images/client/slid-banner-second-section-1.png"
                                        class="card-img-top img-top-2" alt="...">
                                </p>

                            </div>
                            <h5 class="card-title text-center mt-3"><a href="/CRS-Calculator">CRS Calculator</a>
                            </h5>
                        </div>
                        <div class="col-sm-3 top-2 text-center">
                            <div class="card car-ji  d-flex pt-3 pb-3 " style="width: 70%;">
                                <p class="text-center">
                                    <img src="images/client/slid-banner-second-section-1.png"
                                        class="card-img-top img-top-2" alt="...">
                                </p>

                            </div>
                            <h5 class="card-title text-center mt-3"><a href="/study-visa-eliglibity">Study Visa
                                    Eligibility</a></h5>
                        </div>
                        <div class="col-sm-3 top-2 text-center">
                            <div class="card car-ji  d-flex pt-3 pb-3 " style="width: 70%;">
                                <p class="text-center">
                                    <img src="images/client/slid-banner-second-section-1.png"
                                        class="card-img-top img-top-2" alt="...">
                                </p>

                            </div>
                            <h5 class="card-title text-center mt-3"><a href="/English-Language-Assessment">English
                                    Language Assessment</a></h5>
                        </div>
                        <div class="col-sm-3 top-2 text-center">
                            <div class="card car-ji  d-flex pt-3 pb-3 " style="width: 70%;">
                                <p class="text-center">
                                    <img src="images/client/slid-banner-second-section-1.png"
                                        class="card-img-top img-top-2" alt="...">
                                </p>

                            </div>
                            <h5 class="card-title text-center mt-3"><a href="/Score-Converter">Score Converter</a>
                            </h5>
                        </div>
                    </div>
                </div>
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
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@endsection
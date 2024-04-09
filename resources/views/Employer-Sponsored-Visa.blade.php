@extends("common/head")
@section("content")




<!--site-main start-->
<div class="site-main">
    <section class="cmt-row about_fea-section clearfix express-section-main">

        <div class="cmt sidebar cmt-sidebar-left clearfix">
            <div style=" text-shadow: 4px 3px 5px #ccc;" class="col-md-12 pt-10 pb-20 d-flex justify-content-center">
                <h2 class="We-are-our-office">Our Services</h2>

            </div>

            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 ttm-col-bgcolor-yes cmt-bg cmt-left-span mt_80 pt-80 mb_80 pb-60 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                        <aside class="widget widget-contact express-image">
                            <img class="img-fluid " src="images/mig-canada-ima/EMPLOYER-SPONSORED-VISA.png" alt="single_12">
                            <div class="cmt-col pt-0 pl-0 pr-0 pr-0 pb-0">
                                <div class="layer-content">
                                    <p class="EXPRESS-image-botom-text">Employer Sponsored Visa</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget widget-form with-title">
                            <h3 class="widget-title">QUICK ENQUIRY</h3>
                            <!-- <form id="immigration_form" class="immigration_form wrap-form clearfix"
                                        method="post" novalidate="novalidate" action="#"> -->

                            <div class="card" style="width: 100%;">
                                <div class="card-body">

                                    <div class="row g-3">
                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="formGroupExampleInput" class="form-label">First
                                                Name</label> -->
                                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                                        </div>


                                        <div class="col-md-6 mt-15">

                                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                                        </div>
                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="formGroupExampleInput" class="form-label">Countery
                                                Code</label> -->
                                            <select style="padding: 8px 8px 8px 8px;" class="form-select " aria-label="Default select example" required>
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

                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="formGroupExampleInput" class="form-label">Phone
                                                Number</label> -->
                                            <input type="number" class="form-control" placeholder="Mobile No." aria-label="Phone" required>
                                        </div>

                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                                            <input type="email" class="form-control" id="inputEmail4 " placeholder="Email" aria-label="" required>
                                        </div>

                                        <div class="col-md-6 mt-15">
                                            <!-- <label for="inputdate" class="form-label">DOB</label> -->
                                            <input type="date" class="form-control" id="inputEmail4" placeholder="email" aria-label="" required>
                                        </div>

                                        <div class="col-md-12 mt-15">
                                            <!-- <label>Message</label> -->
                                            <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required"></textarea></span>
                                        </div>
                                        <div class="col-md-12 mt-20">
                                            <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- <label>
                                            <span class="text-input"><input name="name" type="text" value=""
                                                    placeholder="Your" required="required"></span>
                                        </label> -->
                            <!-- <label>
                                            <span class="text-input"><input name="phone" type="text" value=""
                                                    placeholder="Phone" required="required"></span>
                                        </label> -->
                            <!-- <label>
                                            <span class="text-input">
                                                <select id="search_category" name="search_category"
                                                    aria-invalid="false">
                                                    <option value="Select Visa">Select Visa</option>
                                                    <option value="Business Visa">Business Visa</option>
                                                    <option value="Diplomatic &amp; Offical Visa">SDiplomatic &amp;
                                                        Offical
                                                        Visa</option>
                                                    <option value="Family Visa">Family Visa</option>
                                                    <option value="Student Visa">Student Visa</option>
                                                    <option value="Temporary Work Visa">Temporary Work Visa</option>
                                                    <option value="Visitor Visa">Visitor Visa</option>
                                                </select>
                                            </span>
                                        </label> -->
                            <!-- <label>
                                        <span class="text-input"><textarea name="message" rows="4" placeholder="Message"
                                                required="required"></textarea></span>
                                    </label>
                                    <button
                                        class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor"
                                        type="submit">Send</button> -->
                            <!-- </form> -->
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="cmt-service-single-content-area">
                            <!-- <h4> Employer Sponsored Visa</h4> -->
                            <div class="cmt-service-description">

                                <div class="">
                                    <h4 class="about-express-heading">Employer Sponsored Visa</h4>
                                </div>
                                <div class="cmt-bgcolor-white box-shadow pt-20 pl-30 pb-20 pr-30 mb-30 exn">
                                    <div class="row">
                                        <h4 class="">Employer Sponsored Visa</h4>
                                        <p class="p-express">One of the key categories of Australian visas that lets corporate firms sponsor foreign employees to work temporarily in Australia
                                            is the Employer-Sponsored Visa. This usually refers to proficient laborers who hold credentials and have experience in a certain
                                            industry that is in high demand in Australia. The Temporary Skill Shortage Visa, the Employer Nomination Scheme (ENS), and the
                                            Skilled Employer Sponsored Visa are the several forms of Employer-Sponsored Visas that are offered. <br><br>

                                            The most common kind of immigration to Australia these days, both temporarily and permanently, is the employer sponsor visa.
                                            One of the most common methods for sponsoring skilled workers to Australia is through employer-sponsored visas. Employers are able
                                            to sponsor foreign workers using these visas for positions that cannot be filled by permanent residents or Australian citizens. <br><br>
                                            These visas have conditions that must be met by both the employer and the employee in order for the employee to be eligible to apply
                                            for the visa.
                                            Employer-sponsored Visa Categories

                                            The Employer Nomination Scheme (ENS), Temporary Skill Shortage (TSS) visa, and Regional Sponsored Migration Scheme (RSMS) visa are
                                            among the various forms of employer-sponsored visas available for entry into Australia.</p>
                                        <!-- <br> -->
                                        <h4 class="">Australia employer-sponsored visas fall into three primary categories:</h4>

                                        <p class="p-express">
                                            <b> 1. The TSS (Temporary Skill Shortage) visa allows skilled workers to work in Australia for a maximum of four years. There are two
                                                types of temporary skill shortage visas:</b> the Medium-Term stream, which allows for stays of up to four years, and the Short-Term
                                            stream, which allows stays of up to two years. To be qualified, you need to meet the language and skill standards for the
                                            particular occupation and have an employer who is willing to sponsor you.
                                        </p>
                                        <p class="p-express">
                                            <b> 2. ENS (Employer Nomination Scheme visa):</b> This type of visa enables highly skilled foreign workers to reside and work permanently in
                                            Australia. Both applicants who are currently employed and residing in Australia (as temporary residents) and those who are living
                                            abroad are eligible for this visa. The candidate must meet the language and skill standards for the particular occupation in
                                            addition to having an approved Australian employer who is willing to sponsor them in order to be eligible for this scheme. You have
                                            to be under 45 at the time you apply for this visa.
                                        </p>
                                        <p class="p-express">
                                            <b> 3. Regional Sponsored Migration Scheme (RSMS) visa:</b> Except for Sydney, Melbourne, Gold Coast, Wollongong, Newcastle, and Brisbane,
                                            this visa permits skilled people to reside and work in regional Australia permanently. Two more options are available: the Temporary
                                            Residence Transition stream and the Direct Entry stream. When requesting an RSMS visa,
                                        </p>
                                        <ul class="ani-ul">
                                            <li> You need a sponsor who is really eager to support you.</li>
                                            <li> must fulfill the linguistic and skill requirements for the position</li>
                                            <li>At the time of application, you must not be older than 45.
                                            </li>
                                        </ul>
                                        <p class="p-express">
                                            Selecting the appropriate visa category for you requires careful consideration since each has distinct requirements and application
                                            procedures. To help you with the application procedure, it's also advised that you consult a registered migration agent.
                                        </p>


                                        <h4 class="">Qualifications</h4>


                                        <p class="p-express">
                                            <b> The requirements for Australian employer-sponsored visas may change based on the particular category of visa. Nonetheless, the
                                                majority of employer-sponsored visas are subject to the following broad requirements:
                                        </p>
                                        <ul class="ani-ul">
                                            <li> You need to be proficient in the language and have the necessary skills for the particular job. This could entail meeting specific
                                                requirements or having a particular amount of job experience.
                                            </li>
                                            <li>You have to fulfill the standards for character and health. A police clearance certificate and passing a medical exam are two
                                                examples of the necessary conditions</li>
                                            <li>You have to be of legal age. The age restriction for some employer-sponsored visas is typically under 45</li>
                                            <li> You have to comply with Australian immigration laws and policies.</li>
                                        </ul>
                                        <p class="p-express">
                                            It's crucial to remember that each visa subclass's qualifying requirements can be complicated and vary from one another. For
                                            assistance with the application procedure and to find out if you qualify for the particular visa subclass you're interested in, it's
                                            advised that you consult a registered migration agent.
                                        </p>


                                        <h4 class="">How to Sponsor Someone in Australia</h4>


                                        <p class="p-express">
                                            <b> To sponsor someone in Australia under an employer-sponsored program, you must first be an Australian employer who is eligible to <br><br>
                                                sponsor foreign workers.

                                                The process for sponsoring someone under an employer-sponsored program typically involves the following steps:
                                        </p>
                                        <ul class="ani-ul">
                                            <li> Obtain approval as a sponsor: The Department of Home Affairs must grant you approval as a sponsor before you can sponsor someone.
                                                In addition to proving that you actually require competent people, you will need to submit information about your company, including
                                                financial data.</li>
                                            <li>Nominate the post: After receiving approval as a sponsor, you need to specify which position you want to hire a foreign national
                                                for. In addition to proving that no Australian citizen or permanent resident can perform the role, you will need to submit details
                                                about the role, including its tasks and responsibilities.
                                            </li>
                                            <li>Apply for the visa: The foreign worker may do so as soon as the position is nominated. The employee will have to give details
                                                about their training and job history as well as proof that they fulfill the prerequisites for the particular visa subclass.</li>
                                            <li> Offer assistance: In your capacity as the employer, you must assist the foreign employee both before and after they apply for jobs
                                                in Australia. This could entail making sure they are given the necessary salary, giving them information about the neighborhood,
                                                and assisting them in finding lodging.</li>
                                        </ul>
                                        <p class="p-express">
                                            It's crucial to remember that sponsoring someone through an employer-sponsored program can be a difficult and drawn-out procedure.
                                            To help you with the application process, it is advised that you consult a registered migration agent.
                                            Applying for an employer-sponsored visa can be a difficult and drawn-out procedure, so before you apply, be sure you have all the
                                            required paperwork and fulfill all the conditions. To help you with the application process, it is advised that you consult a
                                            registered migration agent. Go to the Department of Home Affairs website for additional details about Australia's employer-sponsored
                                            visas.

                                        </p>
                                        <!-- <br> -->


                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
    </section>



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

@endsection
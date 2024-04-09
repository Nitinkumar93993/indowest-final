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
                            <img class="img-fluid " src="images/mig-canada-ima/PARTNER-VISA.png" alt="single_12">
                            <div class="cmt-col pt-0 pl-0 pr-0 pr-0 pb-0">
                                <div class="layer-content">
                                    <p class="EXPRESS-image-botom-text">Partner VISA</p>
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
                            <!-- <h4> Partner VISA</h4> -->
                            <div class="cmt-service-description">

                                <div class="">
                                    <h4 class="about-express-heading">Partner VISA</h4>
                                </div>
                                <div class="cmt-bgcolor-white box-shadow pt-20 pl-30 pb-20 pr-30 mb-30 exn">
                                    <div class="row">
                                        <h4 class="">Partner VISA</h4>
                                        <p class="p-express">Australia is a thriving nation that provides its residents and visitors for a variety of purposes with a wide range of social and
                                            personal amenities. Its extensive historical culture and modernization in practically every industry make the nation desirable to
                                            visit and want to live there. The Australian government's immigration policy offers foreigners numerous chances to visit the country
                                            and improve their personal and professional lives. One of these is the partner visa. The writing of today clarifies the various
                                            spouse visa types. We'll go over each one individually. Now let's get going.</p>

                                        <h4 class="">A partner visa: what is it?</h4>
                                        <!-- <br> -->
                                        <p class="p-express">
                                            For couples to enjoy a vibrant existence, living together after marriage, engagement, or if they are in a live-in relationship is
                                            the most important factor. The Australian government offers a partner visa program as a way for people to enter the country and live
                                            a good life. They understand this sentiment very well. It is a formal document that the immigration office has issued to enable
                                            couples to live apart. This type of visa offers a simple path for deserving parties to get permanent residence. The procedure
                                            consists of two steps: first, a temporary stay, and then, becoming a permanent resident.
                                        </p>



                                        <h4 class="">Partner visa (309/100 subclasses)</h4>
                                        <!-- <br> -->
                                        <p class="p-express">
                                            Individuals with the better half of an Australian citizen or permanent resident can remain in the nation with the help of temporary
                                            and migrant visas. It is the most important prerequisite that needs to be met.
                                            After two years of entry with a 309 Subclass visa, you can apply for a 100-subclass visa to stay in the nation permanently
                                        </p>




                                        <!-- <br> -->
                                        <h4 class="">Qualifications: Under 309 subclass</h4>

                                        <ul class="ani-ul">

                                            <li> According to the Australian government, neither you nor your spouse may be in debt. Thus, make the payment before organizing your
                                                trip to the nation.
                                                Less than 100 subclass</li>
                                            <li>The applicant must possess a valid subclass 309 visa in order to remain on a temporary partner visa.</li>
                                            <li>You have to be in a similar relationship, such as a long-term marriage or cohabitation</li>
                                            <li>Those applying for a 309 partner visa must have acknowledged and complied with all applicable Australian laws and regulations.
                                            </li>
                                        </ul>


                                        <h4 class="">Need to be aware</h4>

                                        <ul class="ani-ul">

                                            <li> Another name for the partner visa 309 is a provisional visa. Therefore, when you hear the term, don't be puzzled.
                                            </li>
                                            <li>The cost to file for a temporary visa (subclass 309) is AUD 8,085.</li>
                                            <li>The precision of completing several visa processes determines how long the processing takes.
                                            </li>
                                            <li>You are free to live, study, and even work while you have this visa.</li>
                                        </ul>

                                        <h4 class="">Procedure for applications</h4>

                                        <ul class="ani-ul">

                                            <li>Arrange the identity proof, passport, marriage certificate, birth certificate, and any other documents the embassy may require in
                                                accordance with the particulars of the case before submitting the application.</li>
                                            <li>Submit an online visa application. You can only submit an online application under this category. Make sure that at the time of
                                                application submitting, you must be outside of Australia.
                                            </li>
                                            <li>Making travel plans, attending a medical exam, providing biometrics, and other small but crucial tasks come next after applying</li>
                                            <li>Await the verdict after all processes have been completed. Up to four or five months pass.</li>
                                        </ul>
                                        <h4 class="">Partner visa (820/801) subclasses </h4>
                                        <p class="p-express">
                                            Subclasses 820 and 801 are the only ones available to those who are temporarily residing in Australia and wish to apply for a
                                            partner visa in order to remain there permanently. If you want to apply under this category, you have to be in Australia. The 801
                                            subclass is for long-term residence, while the 820 subclass is for a two-year temporary stay.
                                        </p>


                                        <h4 class="">Standards of eligibility </h4>
                                        <p class="p-express">
                                            No record of visa revocation or rejection
                                        </p>
                                        <ul class="ani-ul">

                                            <li> Certain regional visas shouldn't be obtained
                                            </li>
                                            <li> When submitting, you must be in Australia.</li>
                                            <li> You need a sponsor.</li>
                                            <li> Need to be the appropriate age</li>
                                            <li>Fulfill relationship prerequisites</li>
                                            <li> Meet our health-related obligations</li>
                                            <li>Complete our character essentials</li>
                                            <li>No debt to the Australian Governance</li>
                                            <li>The best interests of the partner</li>
                                        </ul>



                                        <h4 class="">How to apply in this particular category: </h4>



                                        <p class="p-express">You must pay more than $7000AUD for these two subclasses at the time of application. In order to validate all facets of the
                                            relationship—financial, social, emotional, long-term plans, etc.—the Partner (Provisional) Visa (Subclass 820) requires considerable
                                            paperwork to back up statements stated in the application. It contains witness testimony, supplementary declarations, photographic
                                            evidence, and more. This can be a long and confusing process. Failure to correctly apply for the Partner (Provisional) Visa
                                            (Subclass 820)
                                            could result in a rejection from the Department of Home Affairs and having to reapply and pay all costs again.
                                        </p>

                                        <h4 class="">The duration of the Partner Visa processing </h4>

                                        <p class="p-express">
                                            The processing of visas does not have a set time. Nevertheless, processing the application takes an average of 16 to 24 months. The
                                            department typically doesn't reply to applications until after the deadlines listed on their websites have passed. However, a number
                                            of variables, such as the following, affect how quickly a companion visa application is processed:
                                        </p>

                                        </p>
                                        <ul class="ani-ul">

                                            <li> Does the application include a comprehensive list of supported documents, or not?
                                            </li>
                                            <li> How quickly does the candidate reply when you ask for more details?</li>
                                            <li>How long will it take to complete the necessary background checks and obtain the information that you have provided?
                                            </li>
                                            <li>The amount of time needed to obtain data from sources other than those covered by the immigration</li>
                                            <li>How many spots are available for the partner migration program with the authorities?</li>
                                            <li>All of the information and documentation that the applicant submitted with their application must be authentic in order for the
                                                decision to be made.</li>
                                        </ul>



                                        <h4 class="">Apply with the assistance of professionals | Indowest is here to assist you </h4>

                                        <p class="p-express">Couples who want help from specialists should come see us. The top visa advisors in the business assist individuals in joining and
                                            relocating with their partners. Our visa services are renowned for meeting the demands of our clients and enabling them to realize
                                            their aspirations of living in the nation permanently with their loved ones. Have faith in us to make your goals a reality.
                                        </p>
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
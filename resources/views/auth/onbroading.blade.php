<x-layouts.auth>

    <main class="">
        <div class="page-header min-vh-100" style="background-image: url('{{asset('assets/images/19333414.webp')}}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="py-4">
                    <div class="w-full">
                        <div class="multisteps-form mb-5">
                            <!--progress bar-->
                            <div class="row">
                                <div class="col-12 col-lg-10 mx-auto my-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="multisteps-form__progress">
                                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                                    <i class="ni ni-single-02 text-xl opacity-10"></i>
                                                </button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Address"><i class="ni ni-square-pin text-xl opacity-10"></i></button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Socials"><i class="ni ni-app text-xl opacity-10"></i></button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Profile"><i class="ni ni-check-bold  text-xl opacity-10"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--form panels-->
                            <div class="row">
                                <div class="col-12 col-lg-10 m-auto">
                                    <form class="multisteps-form__form mb-8" action="{{route('registration.update',auth()->user()->id)}}" method="post">
                                      @method('PUT')
                                        @csrf
                                        <!--single form panel-->
                                        <div class="card multisteps-form__panel border-radius-lg py-3 bg-white js-active" data-animation="FadeIn">
                                            <h4 class="text-3xl text-dark font-medium text-center font-weight-bold my-2">{{ __('Build Your Profile') }}</h4>
                                            <p class="text-center text-lg mb-3 col-lg-9">{{ __('Let us know your name and email address. Use an address you don\'t mind other users contacting you at') }}</p>
                                            <div class="multisteps-form__content px-6 py-3 ">
                                                <div class="row mt-3">
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="name" class="block mt-1 w-full required" type="text" placeholder="Name" name="name" value="{{auth()->user()->name}}"   autofocus autocomplete="name" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="username" class="block mt-1 w-full required" type="text" placeholder="Username" name="username" value="{{auth()->user()->username}}"  autofocus autocomplete="username" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="email" class="block mt-1 w-full required" type="email" placeholder="Email" name="email"  value="{{auth()->user()->email}}"  autofocus autocomplete="email" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="phone" class="block mt-1 w-full required" type="number" placeholder="Phone number" name="phone" value="{{auth()->user()->phone}}"  autofocus autocomplete="phone" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex px-2 mx-5 pb-3 mt-2">
                                                <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" id="first" type="button" title="Next"> {{ __('Next') }}</button>
                                            </div>
                                        </div>
                                        <!--single form panel-->
                                        <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                                            <h4 class="text-3xl text-dark font-medium text-center font-weight-bold my-2">{{ __('Your location and address information') }}</h4>
                                            <p class="text-center text-lg mb-3 col-lg-9">{{ __('One thing I love about the later sunsets is the chance to go for a walk through the neighborhood woods before dinner') }}</p>
                                            <div class="multisteps-form__content px-6 py-3">
                                                <div class="bg-white pb-2">
                                                    <div class="flex flex-wrap">
                                                        <div class="w-full mb-4">
                                                            <x-jet-input id="company" name="company" placeholder="Company" class="form-control" type="text"  onfocus="focused(this)" onfocusout="defocused(this)" />
                                                        </div>
                                                        <div class="w-full mb-4">
                                                            <x-jet-input id="location" name="location" class="form-control" placeholder="Location" type="text" onfocus="focused(this)" onfocusout="defocused(this)"/>
                                                        </div>
                                                        <div class="w-full mb-4">
                                                            <x-jet-input id="street" name="street" class="form-control" placeholder="Street" type="text" onfocus="focused(this)" onfocusout="defocused(this)"/>
                                                        </div>
                                                        <div class="w-full mb-4">
                                                            <x-jet-input id="city" name="city" class="form-control" placeholder="City" type="text" onfocus="focused(this)" onfocusout="defocused(this)"/>
                                                        </div>
                                                        <div class="w-full mb-4">
                                                            <x-jet-input id="state" name="state" class="form-control" placeholder="State" type="text" onfocus="focused(this)" onfocusout="defocused(this)"/>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="input-group">
                                                                <select id="country" name="country" class="form-control">
                                                                    <option value="Afghanistan" >Afghanistan</option>
                                                                    <option value="Albania" >Albania</option>
                                                                    <option value="Algeria" >Algeria</option>
                                                                    <option value="American Samoa" >American Samoa</option>
                                                                    <option value="Andorra" >Andorra</option>
                                                                    <option value="Angola" >Angola</option>
                                                                    <option value="Anguilla" >Anguilla</option>
                                                                    <option value="Antarctica" >Antarctica</option>
                                                                    <option value="Antigua &amp; Barbuda" >Antigua &amp; Barbuda</option>
                                                                    <option value="Argentina" >Argentina</option>
                                                                    <option value="Armenia" >Armenia</option>
                                                                    <option value="Aruba" >Aruba</option>
                                                                    <option value="Australia" >Australia</option>
                                                                    <option value="Austria" >Austria</option>
                                                                    <option value="Azerbaijan" >Azerbaijan</option>
                                                                    <option value="Bahamas" >Bahamas</option>
                                                                    <option value="Bahrain" >Bahrain</option>
                                                                    <option value="Bangladesh" >Bangladesh</option>
                                                                    <option value="Barbados" >Barbados</option>
                                                                    <option value="Belarus" >Belarus</option>
                                                                    <option value="Belgium" >Belgium</option>
                                                                    <option value="Belize" >Belize</option>
                                                                    <option value="Benin" >Benin</option>
                                                                    <option value="Bermuda" >Bermuda</option>
                                                                    <option value="Bhutan" >Bhutan</option>
                                                                    <option value="Bolivia" >Bolivia</option>
                                                                    <option value="Bosnia &amp; Herzegovina" >Bosnia &amp; Herzegovina</option>
                                                                    <option value="Botswana" >Botswana</option>
                                                                    <option value="Bouvet Island" >Bouvet Island</option>
                                                                    <option value="Brazil" >Brazil</option>
                                                                    <option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
                                                                    <option value="British Virgin Islands" >British Virgin Islands</option>
                                                                    <option value="Brunei" >Brunei</option>
                                                                    <option value="Bulgaria" >Bulgaria</option>
                                                                    <option value="Burkina Faso" >Burkina Faso</option>
                                                                    <option value="Burundi" >Burundi</option>
                                                                    <option value="Cambodia" >Cambodia</option>
                                                                    <option value="Cameroon" >Cameroon</option>
                                                                    <option value="Canada" >Canada</option>
                                                                    <option value="Cape Verde" >Cape Verde</option>
                                                                    <option value="Caribbean Netherlands" >Caribbean Netherlands</option>
                                                                    <option value="Cayman Islands" >Cayman Islands</option>
                                                                    <option value="Central African Republic" >Central African Republic</option>
                                                                    <option value="Chad" >Chad</option>
                                                                    <option value="Chile" >Chile</option>
                                                                    <option value="China" >China</option>
                                                                    <option value="Christmas Island" >Christmas Island</option>
                                                                    <option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>
                                                                    <option value="Colombia" >Colombia</option>
                                                                    <option value="Comoros" >Comoros</option>
                                                                    <option value="Congo - Brazzaville" >Congo - Brazzaville</option>
                                                                    <option value="Congo - Kinshasa" >Congo - Kinshasa</option>
                                                                    <option value="Cook Islands" >Cook Islands</option>
                                                                    <option value="Costa Rica" >Costa Rica</option>
                                                                    <option value="Croatia" >Croatia</option>
                                                                    <option value="Cuba" >Cuba</option>
                                                                    <option value="Curaçao" >Curaçao</option>
                                                                    <option value="Cyprus" >Cyprus</option>
                                                                    <option value="Czechia" >Czechia</option>
                                                                    <option value="Côte d’Ivoire" >Côte d’Ivoire</option>
                                                                    <option value="Denmark" >Denmark</option>
                                                                    <option value="Djibouti" >Djibouti</option>
                                                                    <option value="Dominica" >Dominica</option>
                                                                    <option value="Dominican Republic" >Dominican Republic</option>
                                                                    <option value="Ecuador" >Ecuador</option>
                                                                    <option value="Egypt" >Egypt</option>
                                                                    <option value="El Salvador" >El Salvador</option>
                                                                    <option value="Equatorial Guinea" >Equatorial Guinea</option>
                                                                    <option value="Eritrea" >Eritrea</option>
                                                                    <option value="Estonia" >Estonia</option>
                                                                    <option value="Eswatini" >Eswatini</option>
                                                                    <option value="Ethiopia" >Ethiopia</option>
                                                                    <option value="Falkland Islands" >Falkland Islands</option>
                                                                    <option value="Faroe Islands" >Faroe Islands</option>
                                                                    <option value="Fiji" >Fiji</option>
                                                                    <option value="Finland" >Finland</option>
                                                                    <option value="France" >France</option>
                                                                    <option value="French Guiana" >French Guiana</option>
                                                                    <option value="French Polynesia" >French Polynesia</option>
                                                                    <option value="French Southern Territories" >French Southern Territories</option>
                                                                    <option value="Gabon" >Gabon</option>
                                                                    <option value="Gambia" >Gambia</option>
                                                                    <option value="Georgia" >Georgia</option>
                                                                    <option value="Germany" >Germany</option>
                                                                    <option value="Ghana" >Ghana</option>
                                                                    <option value="Gibraltar" >Gibraltar</option>
                                                                    <option value="Greece" >Greece</option>
                                                                    <option value="Greenland" >Greenland</option>
                                                                    <option value="Grenada" >Grenada</option>
                                                                    <option value="Guadeloupe" >Guadeloupe</option>
                                                                    <option value="Guam" >Guam</option>
                                                                    <option value="Guatemala" >Guatemala</option>
                                                                    <option value="Guernsey" >Guernsey</option>
                                                                    <option value="Guinea" >Guinea</option>
                                                                    <option value="Guinea-Bissau" >Guinea-Bissau</option>
                                                                    <option value="Guyana" >Guyana</option>
                                                                    <option value="Haiti" >Haiti</option>
                                                                    <option value="Heard &amp; McDonald Islands" >Heard &amp; McDonald Islands</option>
                                                                    <option value="Honduras" >Honduras</option>
                                                                    <option value="Hong Kong SAR China" >Hong Kong SAR China</option>
                                                                    <option value="Hungary" >Hungary</option>
                                                                    <option value="Iceland" >Iceland</option>
                                                                    <option value="India" >India</option>
                                                                    <option value="Indonesia" >Indonesia</option>
                                                                    <option value="Iran" >Iran</option>
                                                                    <option value="Iraq" >Iraq</option>
                                                                    <option value="Ireland" >Ireland</option>
                                                                    <option value="Isle of Man" >Isle of Man</option>
                                                                    <option value="Israel" >Israel</option>
                                                                    <option value="Italy" >Italy</option>
                                                                    <option value="Jamaica" >Jamaica</option>
                                                                    <option value="Japan" >Japan</option>
                                                                    <option value="Jersey" >Jersey</option>
                                                                    <option value="Jordan" >Jordan</option>
                                                                    <option value="Kazakhstan" >Kazakhstan</option>
                                                                    <option value="Kenya" >Kenya</option>
                                                                    <option value="Kiribati" >Kiribati</option>
                                                                    <option value="Kuwait" >Kuwait</option>
                                                                    <option value="Kyrgyzstan" >Kyrgyzstan</option>
                                                                    <option value="Laos" >Laos</option>
                                                                    <option value="Latvia" >Latvia</option>
                                                                    <option value="Lebanon" >Lebanon</option>
                                                                    <option value="Lesotho" >Lesotho</option>
                                                                    <option value="Liberia" >Liberia</option>
                                                                    <option value="Libya" >Libya</option>
                                                                    <option value="Liechtenstein" >Liechtenstein</option>
                                                                    <option value="Lithuania" >Lithuania</option>
                                                                    <option value="Luxembourg" >Luxembourg</option>
                                                                    <option value="Macao SAR China" >Macao SAR China</option>
                                                                    <option value="Madagascar" >Madagascar</option>
                                                                    <option value="Malawi" >Malawi</option>
                                                                    <option value="Malaysia" >Malaysia</option>
                                                                    <option value="Maldives" >Maldives</option>
                                                                    <option value="Mali" >Mali</option>
                                                                    <option value="Malta" >Malta</option>
                                                                    <option value="Marshall Islands" >Marshall Islands</option>
                                                                    <option value="Martinique" >Martinique</option>
                                                                    <option value="Mauritania" >Mauritania</option>
                                                                    <option value="Mauritius" >Mauritius</option>
                                                                    <option value="Mayotte" >Mayotte</option>
                                                                    <option value="Mexico" >Mexico</option>
                                                                    <option value="Micronesia" >Micronesia</option>
                                                                    <option value="Moldova" >Moldova</option>
                                                                    <option value="Monaco" >Monaco</option>
                                                                    <option value="Mongolia" >Mongolia</option>
                                                                    <option value="Montenegro" >Montenegro</option>
                                                                    <option value="Montserrat" >Montserrat</option>
                                                                    <option value="Morocco" >Morocco</option>
                                                                    <option value="Mozambique" >Mozambique</option>
                                                                    <option value="Myanmar (Burma)" >Myanmar (Burma)</option>
                                                                    <option value="Namibia" >Namibia</option>
                                                                    <option value="Nauru" >Nauru</option>
                                                                    <option value="Nepal" >Nepal</option>
                                                                    <option value="Netherlands" >Netherlands</option>
                                                                    <option value="New Caledonia" >New Caledonia</option>
                                                                    <option value="New Zealand" >New Zealand</option>
                                                                    <option value="Nicaragua" >Nicaragua</option>
                                                                    <option value="Niger" >Niger</option>
                                                                    <option value="Nigeria" >Nigeria</option>
                                                                    <option value="Niue" >Niue</option>
                                                                    <option value="Norfolk Island" >Norfolk Island</option>
                                                                    <option value="North Korea" >North Korea</option>
                                                                    <option value="North Macedonia" >North Macedonia</option>
                                                                    <option value="Northern Mariana Islands" >Northern Mariana Islands</option>
                                                                    <option value="Norway" >Norway</option>
                                                                    <option value="Oman" >Oman</option>
                                                                    <option value="Pakistan" >Pakistan</option>
                                                                    <option value="Palau" >Palau</option>
                                                                    <option value="Palestinian Territories" >Palestinian Territories</option>
                                                                    <option value="Panama" >Panama</option>
                                                                    <option value="Papua New Guinea" >Papua New Guinea</option>
                                                                    <option value="Paraguay" >Paraguay</option>
                                                                    <option value="Peru" >Peru</option>
                                                                    <option value="Philippines" >Philippines</option>
                                                                    <option value="Pitcairn Islands" >Pitcairn Islands</option>
                                                                    <option value="Poland" >Poland</option>
                                                                    <option value="Portugal" >Portugal</option>
                                                                    <option value="Puerto Rico" >Puerto Rico</option>
                                                                    <option value="Qatar" >Qatar</option>
                                                                    <option value="Romania" >Romania</option>
                                                                    <option value="Russia" >Russia</option>
                                                                    <option value="Rwanda" >Rwanda</option>
                                                                    <option value="Réunion" >Réunion</option>
                                                                    <option value="Samoa" >Samoa</option>
                                                                    <option value="San Marino" >San Marino</option>
                                                                    <option value="Saudi Arabia" selected="" >Saudi Arabia</option>
                                                                    <option value="Senegal" >Senegal</option>
                                                                    <option value="Serbia" >Serbia</option>
                                                                    <option value="Seychelles" >Seychelles</option>
                                                                    <option value="Sierra Leone" >Sierra Leone</option>
                                                                    <option value="Singapore" >Singapore</option>
                                                                    <option value="Sint Maarten" >Sint Maarten</option>
                                                                    <option value="Slovakia" >Slovakia</option>
                                                                    <option value="Slovenia" >Slovenia</option>
                                                                    <option value="Solomon Islands" >Solomon Islands</option>
                                                                    <option value="Somalia" >Somalia</option>
                                                                    <option value="South Africa" >South Africa</option>
                                                                    <option value="South Georgia &amp; South Sandwich Islands" >South Georgia &amp; South Sandwich Islands</option>
                                                                    <option value="South Korea" >South Korea</option>
                                                                    <option value="South Sudan" >South Sudan</option>
                                                                    <option value="Spain" >Spain</option>
                                                                    <option value="Sri Lanka" >Sri Lanka</option>
                                                                    <option value="St. Barthélemy" >St. Barthélemy</option>
                                                                    <option value="St. Helena" >St. Helena</option>
                                                                    <option value="St. Kitts &amp; Nevis" >St. Kitts &amp; Nevis</option>
                                                                    <option value="St. Lucia" >St. Lucia</option>
                                                                    <option value="St. Martin" >St. Martin</option>
                                                                    <option value="St. Pierre &amp; Miquelon" >St. Pierre &amp; Miquelon</option>
                                                                    <option value="St. Vincent &amp; Grenadines" >St. Vincent &amp; Grenadines</option>
                                                                    <option value="Sudan" >Sudan</option>
                                                                    <option value="Suriname" >Suriname</option>
                                                                    <option value="Svalbard &amp; Jan Mayen" >Svalbard &amp; Jan Mayen</option>
                                                                    <option value="Sweden" >Sweden</option>
                                                                    <option value="Switzerland" >Switzerland</option>
                                                                    <option value="Syria" >Syria</option>
                                                                    <option value="São Tomé &amp; Príncipe" >São Tomé &amp; Príncipe</option>
                                                                    <option value="Taiwan" >Taiwan</option>
                                                                    <option value="Tajikistan" >Tajikistan</option>
                                                                    <option value="Tanzania" >Tanzania</option>
                                                                    <option value="Thailand" >Thailand</option>
                                                                    <option value="Timor-Leste" >Timor-Leste</option>
                                                                    <option value="Togo" >Togo</option>
                                                                    <option value="Tokelau" >Tokelau</option>
                                                                    <option value="Tonga" >Tonga</option>
                                                                    <option value="Trinidad &amp; Tobago" >Trinidad &amp; Tobago</option>
                                                                    <option value="Tunisia" >Tunisia</option>
                                                                    <option value="Turkey" >Turkey</option>
                                                                    <option value="Turkmenistan" >Turkmenistan</option>
                                                                    <option value="Turks &amp; Caicos Islands" >Turks &amp; Caicos Islands</option>
                                                                    <option value="Tuvalu" >Tuvalu</option>
                                                                    <option value="U.S. Outlying Islands" >U.S. Outlying Islands</option>
                                                                    <option value="U.S. Virgin Islands" >U.S. Virgin Islands</option>
                                                                    <option value="Uganda" >Uganda</option>
                                                                    <option value="Ukraine" >Ukraine</option>
                                                                    <option value="United Arab Emirates" >United Arab Emirates</option>
                                                                    <option value="United Kingdom" >United Kingdom</option>
                                                                    <option value="United States" >United States</option>
                                                                    <option value="Uruguay" >Uruguay</option>
                                                                    <option value="Uzbekistan" >Uzbekistan</option>
                                                                    <option value="Vanuatu" >Vanuatu</option>
                                                                    <option value="Vatican City" >Vatican City</option>
                                                                    <option value="Venezuela" >Venezuela</option>
                                                                    <option value="Vietnam" >Vietnam</option>
                                                                    <option value="Wallis &amp; Futuna" >Wallis &amp; Futuna</option>
                                                                    <option value="Western Sahara" >Western Sahara</option>
                                                                    <option value="Yemen" >Yemen</option>
                                                                    <option value="Zambia" >Zambia</option>
                                                                    <option value="Zimbabwe" >Zimbabwe</option>
                                                                    <option value="Åland Islands" >Åland Islands</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between px-6 pb-3 col-sm-12 mt-2">
                                                <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                                                <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">{{ __('Next')}}</button>
                                            </div>
                                        </div>
                                        <!--single form panel-->
                                        <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                                            <h4 class="text-3xl text-dark font-medium text-center font-weight-bold my-2">{{ __('Social media accounts') }}</h4>
                                            <p class="text-center text-lg mb-3 col-lg-9">{{ __('Give us more details about you. What do you enjoy doing in your spare time?') }}</p>
                                            <div class="multisteps-form__content px-6 py-3">
                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <x-jet-input id="twitter" class="block mt-1 w-full" type="text" placeholder="Twitter Username" name="twitter" autofocus autocomplete="twitter" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="facebook" class="block mt-1 w-full" type="text" placeholder="LinkedIn link" name="linkedIn"  autofocus autocomplete="facebook" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="instagram" class="block mt-1 w-full" type="text" placeholder="Facebook Account" name="facebook"   autofocus autocomplete="instagram" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="instagram" class="block mt-1 w-full" type="text" placeholder="Instagram Account" name="instagram"   autofocus autocomplete="instagram" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="instagram" class="block mt-1 w-full" type="text" placeholder="Telegram Account" name="telegram"   autofocus autocomplete="instagram" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="instagram" class="block mt-1 w-full" type="text" placeholder="Website" name="website"   autofocus autocomplete="instagram" />
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="youtube" class="block mt-1 w-full" type="text" placeholder="Youtube Chanel" name="youtube_chanel"   autofocus autocomplete="instagram" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-jet-input id="youtube" class="block mt-1 w-full" type="text" placeholder="Youtube Username" name="youtube_username"   autofocus autocomplete="instagram" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between px-6 pb-3 col-sm-12 mt-2">
                                                <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                                                <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next">{{ __('Next')}}</button>
                                            </div>
                                        </div>
                                        <!--single form panel-->
                                        <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                                            <h4 class="text-3xl text-dark font-medium text-center font-weight-bold my-2">{{ __('Tell us more about you') }}</h4>
                                            <p class="text-center text-lg mb-3 col-lg-9">{{ __('This information will let us know more about you.') }}</p>
                                            <div class="multisteps-form__content px-6 py-3 h-fit">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <x-jet-input id="trading" class="block mt-1 w-full" type="text" placeholder="Trading ID" name="tradingViewId" :value="old('tradingViewId')"  autofocus autocomplete="" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <textarea class="form-control" rows="12" placeholder="Say a few words about who you are or what you're working on." name="about_me"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between px-6 pb-3 col-sm-12 mt-2">
                                                <button class="btn gradient-btn bg-gradient bg-dark text-white mb-0 js-btn-prev" type="button" title="Prev">{{ __('Prev')}}</button>
                                                <button class="btn gradient-btn main-btn ms-auto mb-0 hover:text-white" type="submit" title="Send">{{ __('Send')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--   Core JS Files   -->
    @push('js')
        <script src="{{asset('dashboards/assets/js/plugins/multistep-form.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-3.5.1-min.js')}}"></script>
        <script>
            $(document).ready(function() {
                let empty = false;
                $('.required').each(function() {
                    empty = $(this).val().length == 0;
                });
                if (empty)
                    $('#first').attr('disabled', 'disabled');
                else
                    $('#first').attr('disabled', false);
                $('.required').on('keyup', function() {
                    $('.required').each(function() {
                        empty = $(this).val().length == 0;
                    });
                    if (empty)
                        $('#first').attr('disabled', 'disabled');
                    else
                        $('#first').attr('disabled', false);


                });
            });
            @if($errors->any())
            var customSweetAlert = {
                showSwal: function (type) {

                    if (type == 'custom-html') {
                        Swal.fire({
                            title: '<strong>Failed</strong>',
                            icon: 'error',
                            html:
                                '@foreach ($errors->all() as $error)'+
                                '<div class="alert alert-danger text-white">{{$error}}</div> ' +
                                '@endforeach',

                            showCloseButton: false,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: ' Close !',
                        })
                    }
                }
            }
            customSweetAlert.showSwal('custom-html')
            @endif

        </script>
    @endpush


</x-layouts.auth>

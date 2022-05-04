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
                                            <p class="text-center text-lg mb-3">{{ __('Let us know your name and email address. Use an address you don\'t mind other users contacting you at') }}</p>
                                            <div class="multisteps-form__content px-6 py-3 ">
                                                <div class="row mt-3">
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="Name" name="name" value="{{auth()->user()->name}}"  required autofocus autocomplete="name" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="username" class="block mt-1 w-full" type="text" placeholder="Username" name="username" value="{{auth()->user()->username}}" required autofocus autocomplete="username" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email"  value="{{auth()->user()->email}}" required autofocus autocomplete="email" />
                                                    </div>
                                                    <div class="col-12 col-sm-12 mt-3">
                                                        <x-jet-input id="phone" class="block mt-1 w-full" type="text" placeholder="Phone number" name="phone" value="{{auth()->user()->phone}}"  autofocus autocomplete="phone" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex px-2 mx-5 pb-3 mt-2">
                                                <button class="btn gradient-btn main-btn ms-auto mb-0 js-btn-next hover:text-white" type="button" title="Next"> {{ __('Next') }}</button>
                                            </div>
                                        </div>
                                        <!--single form panel-->
                                        <div class="card multisteps-form__panel border-radius-lg py-3 bg-white" data-animation="FadeIn">
                                            <h4 class="text-3xl text-dark font-medium text-center font-weight-bold my-2">{{ __('Your location and address information') }}</h4>
                                            <p class="text-center text-lg mb-3">{{ __('One thing I love about the later sunsets is the chance to go for a walk through the neighborhood woods before dinner') }}</p>
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
                                                                    <option value="Afghanistan" selected="">Afghanistan</option>
                                                                    <option value="Albania" selected="">Albania</option>
                                                                    <option value="Algeria" selected="">Algeria</option>
                                                                    <option value="American Samoa" selected="">American Samoa</option>
                                                                    <option value="Andorra" selected="">Andorra</option>
                                                                    <option value="Angola" selected="">Angola</option>
                                                                    <option value="Anguilla" selected="">Anguilla</option>
                                                                    <option value="Antarctica" selected="">Antarctica</option>
                                                                    <option value="Antigua &amp; Barbuda" selected="">Antigua &amp; Barbuda</option>
                                                                    <option value="Argentina" selected="">Argentina</option>
                                                                    <option value="Armenia" selected="">Armenia</option>
                                                                    <option value="Aruba" selected="">Aruba</option>
                                                                    <option value="Australia" selected="">Australia</option>
                                                                    <option value="Austria" selected="">Austria</option>
                                                                    <option value="Azerbaijan" selected="">Azerbaijan</option>
                                                                    <option value="Bahamas" selected="">Bahamas</option>
                                                                    <option value="Bahrain" selected="">Bahrain</option>
                                                                    <option value="Bangladesh" selected="">Bangladesh</option>
                                                                    <option value="Barbados" selected="">Barbados</option>
                                                                    <option value="Belarus" selected="">Belarus</option>
                                                                    <option value="Belgium" selected="">Belgium</option>
                                                                    <option value="Belize" selected="">Belize</option>
                                                                    <option value="Benin" selected="">Benin</option>
                                                                    <option value="Bermuda" selected="">Bermuda</option>
                                                                    <option value="Bhutan" selected="">Bhutan</option>
                                                                    <option value="Bolivia" selected="">Bolivia</option>
                                                                    <option value="Bosnia &amp; Herzegovina" selected="">Bosnia &amp; Herzegovina</option>
                                                                    <option value="Botswana" selected="">Botswana</option>
                                                                    <option value="Bouvet Island" selected="">Bouvet Island</option>
                                                                    <option value="Brazil" selected="">Brazil</option>
                                                                    <option value="British Indian Ocean Territory" selected="">British Indian Ocean Territory</option>
                                                                    <option value="British Virgin Islands" selected="">British Virgin Islands</option>
                                                                    <option value="Brunei" selected="">Brunei</option>
                                                                    <option value="Bulgaria" selected="">Bulgaria</option>
                                                                    <option value="Burkina Faso" selected="">Burkina Faso</option>
                                                                    <option value="Burundi" selected="">Burundi</option>
                                                                    <option value="Cambodia" selected="">Cambodia</option>
                                                                    <option value="Cameroon" selected="">Cameroon</option>
                                                                    <option value="Canada" selected="">Canada</option>
                                                                    <option value="Cape Verde" selected="">Cape Verde</option>
                                                                    <option value="Caribbean Netherlands" selected="">Caribbean Netherlands</option>
                                                                    <option value="Cayman Islands" selected="">Cayman Islands</option>
                                                                    <option value="Central African Republic" selected="">Central African Republic</option>
                                                                    <option value="Chad" selected="">Chad</option>
                                                                    <option value="Chile" selected="">Chile</option>
                                                                    <option value="China" selected="">China</option>
                                                                    <option value="Christmas Island" selected="">Christmas Island</option>
                                                                    <option value="Cocos (Keeling) Islands" selected="">Cocos (Keeling) Islands</option>
                                                                    <option value="Colombia" selected="">Colombia</option>
                                                                    <option value="Comoros" selected="">Comoros</option>
                                                                    <option value="Congo - Brazzaville" selected="">Congo - Brazzaville</option>
                                                                    <option value="Congo - Kinshasa" selected="">Congo - Kinshasa</option>
                                                                    <option value="Cook Islands" selected="">Cook Islands</option>
                                                                    <option value="Costa Rica" selected="">Costa Rica</option>
                                                                    <option value="Croatia" selected="">Croatia</option>
                                                                    <option value="Cuba" selected="">Cuba</option>
                                                                    <option value="Curaçao" selected="">Curaçao</option>
                                                                    <option value="Cyprus" selected="">Cyprus</option>
                                                                    <option value="Czechia" selected="">Czechia</option>
                                                                    <option value="Côte d’Ivoire" selected="">Côte d’Ivoire</option>
                                                                    <option value="Denmark" selected="">Denmark</option>
                                                                    <option value="Djibouti" selected="">Djibouti</option>
                                                                    <option value="Dominica" selected="">Dominica</option>
                                                                    <option value="Dominican Republic" selected="">Dominican Republic</option>
                                                                    <option value="Ecuador" selected="">Ecuador</option>
                                                                    <option value="Egypt" selected="">Egypt</option>
                                                                    <option value="El Salvador" selected="">El Salvador</option>
                                                                    <option value="Equatorial Guinea" selected="">Equatorial Guinea</option>
                                                                    <option value="Eritrea" selected="">Eritrea</option>
                                                                    <option value="Estonia" selected="">Estonia</option>
                                                                    <option value="Eswatini" selected="">Eswatini</option>
                                                                    <option value="Ethiopia" selected="">Ethiopia</option>
                                                                    <option value="Falkland Islands" selected="">Falkland Islands</option>
                                                                    <option value="Faroe Islands" selected="">Faroe Islands</option>
                                                                    <option value="Fiji" selected="">Fiji</option>
                                                                    <option value="Finland" selected="">Finland</option>
                                                                    <option value="France" selected="">France</option>
                                                                    <option value="French Guiana" selected="">French Guiana</option>
                                                                    <option value="French Polynesia" selected="">French Polynesia</option>
                                                                    <option value="French Southern Territories" selected="">French Southern Territories</option>
                                                                    <option value="Gabon" selected="">Gabon</option>
                                                                    <option value="Gambia" selected="">Gambia</option>
                                                                    <option value="Georgia" selected="">Georgia</option>
                                                                    <option value="Germany" selected="">Germany</option>
                                                                    <option value="Ghana" selected="">Ghana</option>
                                                                    <option value="Gibraltar" selected="">Gibraltar</option>
                                                                    <option value="Greece" selected="">Greece</option>
                                                                    <option value="Greenland" selected="">Greenland</option>
                                                                    <option value="Grenada" selected="">Grenada</option>
                                                                    <option value="Guadeloupe" selected="">Guadeloupe</option>
                                                                    <option value="Guam" selected="">Guam</option>
                                                                    <option value="Guatemala" selected="">Guatemala</option>
                                                                    <option value="Guernsey" selected="">Guernsey</option>
                                                                    <option value="Guinea" selected="">Guinea</option>
                                                                    <option value="Guinea-Bissau" selected="">Guinea-Bissau</option>
                                                                    <option value="Guyana" selected="">Guyana</option>
                                                                    <option value="Haiti" selected="">Haiti</option>
                                                                    <option value="Heard &amp; McDonald Islands" selected="">Heard &amp; McDonald Islands</option>
                                                                    <option value="Honduras" selected="">Honduras</option>
                                                                    <option value="Hong Kong SAR China" selected="">Hong Kong SAR China</option>
                                                                    <option value="Hungary" selected="">Hungary</option>
                                                                    <option value="Iceland" selected="">Iceland</option>
                                                                    <option value="India" selected="">India</option>
                                                                    <option value="Indonesia" selected="">Indonesia</option>
                                                                    <option value="Iran" selected="">Iran</option>
                                                                    <option value="Iraq" selected="">Iraq</option>
                                                                    <option value="Ireland" selected="">Ireland</option>
                                                                    <option value="Isle of Man" selected="">Isle of Man</option>
                                                                    <option value="Israel" selected="">Israel</option>
                                                                    <option value="Italy" selected="">Italy</option>
                                                                    <option value="Jamaica" selected="">Jamaica</option>
                                                                    <option value="Japan" selected="">Japan</option>
                                                                    <option value="Jersey" selected="">Jersey</option>
                                                                    <option value="Jordan" selected="">Jordan</option>
                                                                    <option value="Kazakhstan" selected="">Kazakhstan</option>
                                                                    <option value="Kenya" selected="">Kenya</option>
                                                                    <option value="Kiribati" selected="">Kiribati</option>
                                                                    <option value="Kuwait" selected="">Kuwait</option>
                                                                    <option value="Kyrgyzstan" selected="">Kyrgyzstan</option>
                                                                    <option value="Laos" selected="">Laos</option>
                                                                    <option value="Latvia" selected="">Latvia</option>
                                                                    <option value="Lebanon" selected="">Lebanon</option>
                                                                    <option value="Lesotho" selected="">Lesotho</option>
                                                                    <option value="Liberia" selected="">Liberia</option>
                                                                    <option value="Libya" selected="">Libya</option>
                                                                    <option value="Liechtenstein" selected="">Liechtenstein</option>
                                                                    <option value="Lithuania" selected="">Lithuania</option>
                                                                    <option value="Luxembourg" selected="">Luxembourg</option>
                                                                    <option value="Macao SAR China" selected="">Macao SAR China</option>
                                                                    <option value="Madagascar" selected="">Madagascar</option>
                                                                    <option value="Malawi" selected="">Malawi</option>
                                                                    <option value="Malaysia" selected="">Malaysia</option>
                                                                    <option value="Maldives" selected="">Maldives</option>
                                                                    <option value="Mali" selected="">Mali</option>
                                                                    <option value="Malta" selected="">Malta</option>
                                                                    <option value="Marshall Islands" selected="">Marshall Islands</option>
                                                                    <option value="Martinique" selected="">Martinique</option>
                                                                    <option value="Mauritania" selected="">Mauritania</option>
                                                                    <option value="Mauritius" selected="">Mauritius</option>
                                                                    <option value="Mayotte" selected="">Mayotte</option>
                                                                    <option value="Mexico" selected="">Mexico</option>
                                                                    <option value="Micronesia" selected="">Micronesia</option>
                                                                    <option value="Moldova" selected="">Moldova</option>
                                                                    <option value="Monaco" selected="">Monaco</option>
                                                                    <option value="Mongolia" selected="">Mongolia</option>
                                                                    <option value="Montenegro" selected="">Montenegro</option>
                                                                    <option value="Montserrat" selected="">Montserrat</option>
                                                                    <option value="Morocco" selected="">Morocco</option>
                                                                    <option value="Mozambique" selected="">Mozambique</option>
                                                                    <option value="Myanmar (Burma)" selected="">Myanmar (Burma)</option>
                                                                    <option value="Namibia" selected="">Namibia</option>
                                                                    <option value="Nauru" selected="">Nauru</option>
                                                                    <option value="Nepal" selected="">Nepal</option>
                                                                    <option value="Netherlands" selected="">Netherlands</option>
                                                                    <option value="New Caledonia" selected="">New Caledonia</option>
                                                                    <option value="New Zealand" selected="">New Zealand</option>
                                                                    <option value="Nicaragua" selected="">Nicaragua</option>
                                                                    <option value="Niger" selected="">Niger</option>
                                                                    <option value="Nigeria" selected="">Nigeria</option>
                                                                    <option value="Niue" selected="">Niue</option>
                                                                    <option value="Norfolk Island" selected="">Norfolk Island</option>
                                                                    <option value="North Korea" selected="">North Korea</option>
                                                                    <option value="North Macedonia" selected="">North Macedonia</option>
                                                                    <option value="Northern Mariana Islands" selected="">Northern Mariana Islands</option>
                                                                    <option value="Norway" selected="">Norway</option>
                                                                    <option value="Oman" selected="">Oman</option>
                                                                    <option value="Pakistan" selected="">Pakistan</option>
                                                                    <option value="Palau" selected="">Palau</option>
                                                                    <option value="Palestinian Territories" selected="">Palestinian Territories</option>
                                                                    <option value="Panama" selected="">Panama</option>
                                                                    <option value="Papua New Guinea" selected="">Papua New Guinea</option>
                                                                    <option value="Paraguay" selected="">Paraguay</option>
                                                                    <option value="Peru" selected="">Peru</option>
                                                                    <option value="Philippines" selected="">Philippines</option>
                                                                    <option value="Pitcairn Islands" selected="">Pitcairn Islands</option>
                                                                    <option value="Poland" selected="">Poland</option>
                                                                    <option value="Portugal" selected="">Portugal</option>
                                                                    <option value="Puerto Rico" selected="">Puerto Rico</option>
                                                                    <option value="Qatar" selected="">Qatar</option>
                                                                    <option value="Romania" selected="">Romania</option>
                                                                    <option value="Russia" selected="">Russia</option>
                                                                    <option value="Rwanda" selected="">Rwanda</option>
                                                                    <option value="Réunion" selected="">Réunion</option>
                                                                    <option value="Samoa" selected="">Samoa</option>
                                                                    <option value="San Marino" selected="">San Marino</option>
                                                                    <option value="Saudi Arabia" selected="">Saudi Arabia</option>
                                                                    <option value="Senegal" selected="">Senegal</option>
                                                                    <option value="Serbia" selected="">Serbia</option>
                                                                    <option value="Seychelles" selected="">Seychelles</option>
                                                                    <option value="Sierra Leone" selected="">Sierra Leone</option>
                                                                    <option value="Singapore" selected="">Singapore</option>
                                                                    <option value="Sint Maarten" selected="">Sint Maarten</option>
                                                                    <option value="Slovakia" selected="">Slovakia</option>
                                                                    <option value="Slovenia" selected="">Slovenia</option>
                                                                    <option value="Solomon Islands" selected="">Solomon Islands</option>
                                                                    <option value="Somalia" selected="">Somalia</option>
                                                                    <option value="South Africa" selected="">South Africa</option>
                                                                    <option value="South Georgia &amp; South Sandwich Islands" selected="">South Georgia &amp; South Sandwich Islands</option>
                                                                    <option value="South Korea" selected="">South Korea</option>
                                                                    <option value="South Sudan" selected="">South Sudan</option>
                                                                    <option value="Spain" selected="">Spain</option>
                                                                    <option value="Sri Lanka" selected="">Sri Lanka</option>
                                                                    <option value="St. Barthélemy" selected="">St. Barthélemy</option>
                                                                    <option value="St. Helena" selected="">St. Helena</option>
                                                                    <option value="St. Kitts &amp; Nevis" selected="">St. Kitts &amp; Nevis</option>
                                                                    <option value="St. Lucia" selected="">St. Lucia</option>
                                                                    <option value="St. Martin" selected="">St. Martin</option>
                                                                    <option value="St. Pierre &amp; Miquelon" selected="">St. Pierre &amp; Miquelon</option>
                                                                    <option value="St. Vincent &amp; Grenadines" selected="">St. Vincent &amp; Grenadines</option>
                                                                    <option value="Sudan" selected="">Sudan</option>
                                                                    <option value="Suriname" selected="">Suriname</option>
                                                                    <option value="Svalbard &amp; Jan Mayen" selected="">Svalbard &amp; Jan Mayen</option>
                                                                    <option value="Sweden" selected="">Sweden</option>
                                                                    <option value="Switzerland" selected="">Switzerland</option>
                                                                    <option value="Syria" selected="">Syria</option>
                                                                    <option value="São Tomé &amp; Príncipe" selected="">São Tomé &amp; Príncipe</option>
                                                                    <option value="Taiwan" selected="">Taiwan</option>
                                                                    <option value="Tajikistan" selected="">Tajikistan</option>
                                                                    <option value="Tanzania" selected="">Tanzania</option>
                                                                    <option value="Thailand" selected="">Thailand</option>
                                                                    <option value="Timor-Leste" selected="">Timor-Leste</option>
                                                                    <option value="Togo" selected="">Togo</option>
                                                                    <option value="Tokelau" selected="">Tokelau</option>
                                                                    <option value="Tonga" selected="">Tonga</option>
                                                                    <option value="Trinidad &amp; Tobago" selected="">Trinidad &amp; Tobago</option>
                                                                    <option value="Tunisia" selected="">Tunisia</option>
                                                                    <option value="Turkey" selected="">Turkey</option>
                                                                    <option value="Turkmenistan" selected="">Turkmenistan</option>
                                                                    <option value="Turks &amp; Caicos Islands" selected="">Turks &amp; Caicos Islands</option>
                                                                    <option value="Tuvalu" selected="">Tuvalu</option>
                                                                    <option value="U.S. Outlying Islands" selected="">U.S. Outlying Islands</option>
                                                                    <option value="U.S. Virgin Islands" selected="">U.S. Virgin Islands</option>
                                                                    <option value="Uganda" selected="">Uganda</option>
                                                                    <option value="Ukraine" selected="">Ukraine</option>
                                                                    <option value="United Arab Emirates" selected="">United Arab Emirates</option>
                                                                    <option value="United Kingdom" selected="">United Kingdom</option>
                                                                    <option value="United States" selected="">United States</option>
                                                                    <option value="Uruguay" selected="">Uruguay</option>
                                                                    <option value="Uzbekistan" selected="">Uzbekistan</option>
                                                                    <option value="Vanuatu" selected="">Vanuatu</option>
                                                                    <option value="Vatican City" selected="">Vatican City</option>
                                                                    <option value="Venezuela" selected="">Venezuela</option>
                                                                    <option value="Vietnam" selected="">Vietnam</option>
                                                                    <option value="Wallis &amp; Futuna" selected="">Wallis &amp; Futuna</option>
                                                                    <option value="Western Sahara" selected="">Western Sahara</option>
                                                                    <option value="Yemen" selected="">Yemen</option>
                                                                    <option value="Zambia" selected="">Zambia</option>
                                                                    <option value="Zimbabwe" selected="">Zimbabwe</option>
                                                                    <option value="Åland Islands" selected="">Åland Islands</option>
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
                                            <p class="text-center text-lg mb-3">{{ __('Give us more details about you. What do you enjoy doing in your spare time?.') }}</p>
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
                                            <p class="text-center text-lg mb-3">{{ __('This information will let us know more about you.') }}</p>
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
    @endpush


</x-layouts.auth>

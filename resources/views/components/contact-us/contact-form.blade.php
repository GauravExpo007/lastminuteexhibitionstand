<section class="flex flex-col md:flex-row justify-center items-center bg-[#E7E4E4] md:p-5 lg:p-10">

    {{-- Address-Section --}}
    <div class="flex flex-col w-full p-5 gap-5 md:w-1/2">
        <div class="w-full p-5 md:p-10 lg:p-14 flex flex-col gap-5 font-lato">
            <h3
                class="bg-gradient-to-r from-[#0F90A3] to-[#442C5E] bg-clip-text text-transparent text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold">
                For Quick Response, Please Call Us.
            </h3>
            <ul class="py-3 text-sm md:text-base xl:text-lg">
                <li class="mb-2">
                    <a href="tel:+19377838830" class="text-black hover:text-[#0E91A3] flex gap-3 items-center">
                        <span><i class="fas fa-phone-alt"></i></span> +1 9377838830
                    </a>
                </li>
                <li class="mb-2">
                    <a href="mailto:enquiry@planmybooth.in"
                        class="text-black hover:text-[#0E91A3] flex gap-3 items-center">
                        <span><i class="fas fa-envelope"></i></span> enquiry@lmst.com
                    </a>
                </li>
                <li>
                    <a href="https://www.planmybooth.in" target="_blank" rel="noopener noreferrer"
                        class="text-black hover:text-[#0E91A3] flex gap-3 items-center">
                        <span><i class="fas fa-desktop"></i></span> www.lmst.com
                    </a>
                </li>
            </ul>
            <div class="social-menu rounded-2xl w-[90%]">
                <ul class="flex gap-4">
                    <li class="border border-slate-700 rounded-full p-1">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook-f px-1.5 hover:text-blue-500"></i>
                        </a>
                    </li>
                    <li class="border border-slate-700 rounded-full p-1">
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram px-1 hover:text-red-500"></i>
                        </a>
                    </li>
                    <li class="border border-slate-700 rounded-full p-1">
                        <a href="https://in.linkedin.com/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin-in px-1 hover:text-blue-400"></i>
                        </a>
                    </li>
                    <li class="border border-slate-700 rounded-full p-1">
                        <a href="https://twitter.com/?lang=en" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter px-1 hover:text-slate-800"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Form Section -->
    <div class="bg-[#F9F9F9] p-5 rounded-lg shadow-lg w-full md:w-2/3 m-5">
        <h2 class="font-semibold text-xl md:text-2xl lg:text-3xl xl:text-4xl mb-5 text-center">Contact Us
        </h2>

        <form method="POST" enctype="multipart/form-data" action="#" class="px-5 max-w-5xl">
            @csrf
            <!-- Display Success Message -->
            @if (session('success'))
                <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-md">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- First Row (Contact Name & Phone) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-2">
                <div class="hover:scale-105 duration-700">
                    <label for="contactName" class="block text-sm font-medium text-gray-700">Contact Name
                        <span class="text-red-500 text-3xl">*</span></label>
                    <input type="text" id="contactName" name="contact_name"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" required
                        value="{{ old('contact_name') }}">
                    @error('contact_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="companyName" class="block text-sm font-medium text-gray-700">Company Name
                        <span class="text-red-500 text-3xl">*</span>
                    </label>
                    <input type="text" id="companyName" name="company_name"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" required
                        value="{{ old('company_name') }}">
                    @error('company_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Second Row (Email & City) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-2">
                <div class="hover:scale-105 duration-700">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email
                        <span class="text-red-500 text-3xl">*</span>
                    </label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" required value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="phone" class="block text-sm font-medium text-gray-700"
                        onchange="updateCountryCode(this)">Phone
                        <span class="text-red-500 text-3xl">*</span></label>

                    <div class="flex mt-1">
                        <!-- Country Code Dropdown -->
                        <select id="country-code" name="country-code"
                            class="w-[67px] p-1 border border-gray-300 rounded-l-md bg-white text-gray-700">
                            <option value="+971" data-country="United Arab Emirates">+971 (United Arab Emirates)
                            </option>
                            <option value="+1" data-country="United States">+1 (United States)</option>
                            <option value="+44" data-country="United Kingdom">+44 (United Kingdom)</option>
                            <option value="+91" data-country="India">+91 (India)</option>
                            <option value="+61" data-country="Australia">+61 (Australia)</option>
                            <option value="+81" data-country="Japan">+81 (Japan)</option>
                            <option value="+49" data-country="Germany">+49 (Germany)</option>
                            <option value="+33" data-country="France">+33 (France)</option>
                            <option value="+39" data-country="Italy">+39 (Italy)</option>
                            <option value="+86" data-country="China">+86 (China)</option>
                            <option value="+7" data-country="Russia">+7 (Russia)</option>
                            <option value="+55" data-country="Brazil">+55 (Brazil)</option>
                            <option value="+27" data-country="South Africa">+27 (South Africa)</option>
                            <option value="+34" data-country="Spain">+34 (Spain)</option>
                            <option value="+62" data-country="Indonesia">+62 (Indonesia)</option>
                            <option value="+234" data-country="Nigeria">+234 (Nigeria)</option>
                            <option value="+52" data-country="Mexico">+52 (Mexico)</option>
                            <option value="+63" data-country="Philippines">+63 (Philippines)</option>
                            <option value="+64" data-country="New Zealand">+64 (New Zealand)</option>
                            <option value="+82" data-country="South Korea">+82 (South Korea)</option>
                            <option value="+60" data-country="Malaysia">+60 (Malaysia)</option>
                            <option value="+65" data-country="Singapore">+65 (Singapore)</option>
                            <option value="+93" data-country="Afghanistan">+93 (Afghanistan)</option>
                            <option value="+355" data-country="Albania">+355 (Albania)</option>
                            <option value="+213" data-country="Algeria">+213 (Algeria)</option>
                            <option value="+376" data-country="Andorra">+376 (Andorra)</option>
                            <option value="+244" data-country="Angola">+244 (Angola)</option>
                            <option value="+54" data-country="Argentina">+54 (Argentina)</option>
                            <option value="+43" data-country="Austria">+43 (Austria)</option>
                            <option value="+973" data-country="Bahrain">+973 (Bahrain)</option>
                            <option value="+880" data-country="Bangladesh">+880 (Bangladesh)</option>
                            <option value="+32" data-country="Belgium">+32 (Belgium)</option>
                            <option value="+359" data-country="Bulgaria">+359 (Bulgaria)</option>
                            <option value="+1-246" data-country="Barbados">+1-246 (Barbados)</option>
                            <option value="+95" data-country="Myanmar">+95 (Myanmar)</option>
                            <option value="+964" data-country="Iraq">+964 (Iraq)</option>
                            <option value="+98" data-country="Iran">+98 (Iran)</option>
                            <option value="+353" data-country="Ireland">+353 (Ireland)</option>
                            <option value="+972" data-country="Israel">+972 (Israel)</option>
                            <option value="+962" data-country="Jordan">+962 (Jordan)</option>
                            <option value="+254" data-country="Kenya">+254 (Kenya)</option>
                            <option value="+965" data-country="Kuwait">+965 (Kuwait)</option>
                            <option value="+961" data-country="Lebanon">+961 (Lebanon)</option>
                            <option value="+352" data-country="Luxembourg">+352 (Luxembourg)</option>
                            <option value="+960" data-country="Maldives">+960 (Maldives)</option>
                            <option value="+230" data-country="Mauritius">+230 (Mauritius)</option>
                            <option value="+92" data-country="Pakistan">+92 (Pakistan)</option>
                            <option value="+507" data-country="Panama">+507 (Panama)</option>
                            <option value="+351" data-country="Portugal">+351 (Portugal)</option>
                            <option value="+974" data-country="Qatar">+974 (Qatar)</option>
                            <option value="+966" data-country="Saudi Arabia">+966 (Saudi Arabia)</option>
                            <option value="+94" data-country="Sri Lanka">+94 (Sri Lanka)</option>
                            <option value="+46" data-country="Sweden">+46 (Sweden)</option>
                            <option value="+41" data-country="Switzerland">+41 (Switzerland)</option>
                            <option value="+255" data-country="Tanzania">+255 (Tanzania)</option>
                            <option value="+66" data-country="Thailand">+66 (Thailand)</option>
                            <option value="+971" data-country="United Arab Emirates">+971 (United Arab Emirates)
                            </option>
                            <option value="+58" data-country="Venezuela">+58 (Venezuela)</option>
                            <option value="+263" data-country="Zimbabwe">+263 (Zimbabwe)</option>
                        </select>

                        <!-- Phone Number Input -->
                        <input type="tel" id="phone" name="phone"
                            class="p-1 w-full border-t border-r border-b border-gray-300 rounded-r-md" required
                            placeholder="Enter your phone number" value="{{ old('phone') }}">

                        <!-- Error Message (Laravel validation) -->
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Third Row (Company Name & Exhibition Name) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-2">

                <div class="hover:scale-105 duration-700">
                    <label for="exhibitionName" class="block text-sm font-medium text-gray-700">Exhibition
                        Name
                        <span class="text-red-500 text-3xl">*</span></label>
                    <input type="text" id="exhibitionName" name="exhibition_name"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" required
                        value="{{ old('exhibition_name') }}">
                    @error('exhibition_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="city" class="block text-sm font-medium text-gray-700">City
                        <span class="text-red-500 text-3xl">*</span>
                    </label>
                    <input type="text" id="city" name="city"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" required
                        value="{{ old('city') }}">
                    @error('city')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Fourth Row (Stand Size & Budget) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-2">
                <div class="hover:scale-105 duration-700">
                    <label for="standSize" class="block text-sm font-medium text-gray-700">Stand Size</label>
                    <input type="text" id="standSize" name="stand_size"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" value="{{ old('stand_size') }}">
                    @error('stand_size')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="budget" class="block text-sm font-medium text-gray-700">Budget</label>
                    <input type="text" id="budget" name="budget"
                        class="mt-1 p-1 w-full border border-gray-300 rounded-md" value="{{ old('budget') }}">
                    @error('budget')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- File Input -->
            <div class="mb-2">
                <label for="file" class="block text-sm font-medium text-gray-700">Choose File</label>
                <input type="file" id="file" name="attachment"
                    class="mt-1 p-1 w-full border border-gray-300 rounded-md">
                @error('attachment')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message Section -->
            <div class="mb-2 hover:scale-105 duration-700">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" class="mt-1 p-2 w-full border border-gray-300 rounded-md h-fit"
                    placeholder="Enter your message here...">
                </textarea>
                @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <input type="hidden" name="url" value="{{ url()->current() }}">
            <input type="hidden" name="user_ip" id="user_ip" value="">
            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-gradient-to-r from-[#0E91A3] via-[#413266] to-[#0E91A3] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit mx-auto md:mx-0">Submit</button>
            </div>
        </form>
    </div>
</section>

@push('scripts')
    <script>
        function updateCountryCode() {
            var select = document.getElementById('country-code');
            var selectedValue = select.options[select.selectedIndex].value;
            document.getElementById('phone').value = selectedValue; // Set country code as phone number input value
        }

        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                // Set the IP address in the hidden input field
                document.getElementById('user_ip').value = data.ip;
            })
            .catch(error => console.error('Error fetching IP:', error));


        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Select2 for country code dropdown
            $('#country-code')?.select2({
                placeholder: "Search by country or code",
                allowClear: true,
                width: '100%',
                matcher: function(params, data) {
                    // Normalize the search query and option text for matching
                    const searchText = params.term ? params.term.toLowerCase() : '';
                    const countryName = data.element ? $(data.element).data('country').toLowerCase() :
                        '';

                    // Check if the search term matches either the country code or country name
                    if (countryName.includes(searchText) || data.text.toLowerCase().includes(
                            searchText)) {
                        return data;
                    }

                    return null;
                }
            });

            // Set default value to +971 (United Arab Emirates)
            $('#country-code')?.val('+971').trigger('change');
        });
    </script>
@endpush

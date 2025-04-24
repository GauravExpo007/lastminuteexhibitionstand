<!-- Header Section -->
<header class="sticky top-0 z-50 bg-white shadow-md">
    <!-- Navbar -->
    <div class="container mx-auto px-6 pl-3 py-4 flex justify-between items-center h-[100px]">
        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('assets/logo/logo1.png') }}" alt="logo" class="logo_image h-24 md:h-28 p-2">
        </a>

        <!-- Mobile Menu Button -->
        <button id="hamburger" class="md:hidden text-2xl text-[#0F90A3] focus:outline-none">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex md:space-x-3 lg:space-x-6 text-lg text-[#0E91A3] mr-10 md:mr-2">
            <a href="/" class="hover:text-[#3D3B6C]"><span class="text-black animate-pulse">Home</span></a>
            <!-- Services Dropdown -->
            <div class="relative group">

                <button class="flex items-center hover:text-[#3D3B6C]">
                    Services <i class="fa fa-sort-down ml-1 mb-1"></i>
                </button>

                <!-- Main Dropdown Menu -->
                <ul id="mainMenu"
                    class="absolute left-0 w-56 bg-white text-gray-800 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 ease-in-out">

                    <!-- Custom Exhibition Stands-->
                    <li class="relative group">
                        <a href="{{ route('custom-stand') }}"
                            class="flex justify-between items-center px-4 py-2 text-sm md:text-base hover:bg-[#81C5CF]">
                            Custom Exhibition Stands
                        </a>
                    </li>

                    <!-- Country Pavilion Stands -->
                    <li class="relative group">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 text-sm md:text-base hover:bg-[#81C5CF]">
                            Country Pavilion Stands
                        </a>
                    </li>

                    <!--  Modular Stands -->
                    <li class="relative group">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 text-sm md:text-base hover:bg-[#81C5CF]">
                            Modular Stands
                        </a>
                    </li>

                    <!--  Double Decker Stands -->
                    <li class="relative group">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 text-sm md:text-base hover:bg-[#81C5CF]">
                            Double Decker Stands
                        </a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('about') }}" class="hover:text-[#3D3B6C]">About Us</a>
            <a href="{{ route('portfolio') }}" class="hover:text-[#3D3B6C]">Portfolio </a>
            <a href="{{ route('blog') }}" class="hover:text-[#3D3B6C]">Blog</a>
            <a href="{{ route('contact') }}"
                class="bg-gradient-to-r from-[#0E91A3] via-[#413266] to-[#0E91A3] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-4xl px-3 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit border-2 border-white font-semibold">Get
                In Touch
            </a>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black text-white p-6 h-screen overflow-y-auto">
        <ul class="flex flex-col gap-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>

            <!-- Mobile Services Dropdown -->
            <li>
                <button class="w-full flex justify-between items-center hover:underline" id="services-toggle">
                    Services <i class="fa fa-sort-down"></i>
                </button>
                <ul class="hidden mt-2 ml-4" id="services-dropdown">

                    <!--  Custom Exhibition Stands -->
                    <li>
                        <a href="{{ route('custom-stand') }}"
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Custom Exhibition Stands
                        </a>
                    </li>

                    <!-- Country Pavilion Stands -->
                    <li>
                        <a href="#"
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Country Pavilion Stands
                        </a>
                    </li>

                    <!-- Modular Stands -->
                    <li>
                        <a href="#"
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Modular Stands
                        </a>

                    </li>

                    <!-- Double Decker Stands -->
                    <li>
                        <a href="/"
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Double Decker Stands
                        </a>
                    </li>
                </ul>
            </li>

            <li><a href="{{ route('portfolio') }}" class="hover:underline">Portfolio</a></li>
            <li><a href="{{ route('blog') }}" class="hover:underline">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="hover:underline">Get In Touch</a></li>
        </ul>
    </div>

</header>


<!-- Mobile Menu Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Toggle Mobile Menu
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobile-menu");

        if (hamburger && mobileMenu) {
            hamburger.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
            });
        }

        // Toggle Main Services Dropdown in Mobile Menu
        const servicesToggle = document.getElementById("services-toggle");
        const servicesDropdown = document.getElementById("services-dropdown");

        if (servicesToggle && servicesDropdown) {
            servicesToggle.addEventListener("click", function() {
                servicesDropdown.classList.toggle("hidden");
            });
        }
    });
</script>

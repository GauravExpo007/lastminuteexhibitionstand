<footer class="pt-10 bg-black text-white flex flex-col gap-10">

    <!-- Main Grid Section -->
    <div
        class="px-5 md:px-10 lg:px-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 border-t border-zinc-500 pt-6 pb-8">

        <!-- Contact Section -->
        <section class="flex flex-col gap-6 text-center md:text-left">
            <h2 class="font-serif uppercase font-bold text-2xl sm:text-3xl">Contact</h2>

            <ul class="flex flex-col gap-4 text-slate-200 mx-auto md:mx-0">

                <li class="flex items-start sm:items-center gap-3">
                    <i class="fa fa-map-marker text-[#0F90A3]"></i>
                    <span>Poreba 13b poreba 63-233, Poland</span>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fa fa-envelope text-[#0F90A3]"></i>
                    <a href="mailto:enquiry@xprooservice.com" class="hover:text-[#0F90A3]">enquiry@lmst.com</a>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fa fa-phone text-[#0F90A3]"></i>
                    <a href="tel:+971561566260" class="hover:text-[#0F90A3]">+971-561566260</a>
                </li>

                {{-- <li class="flex justify-center sm:justify-start gap-4 pt-6">
                    <a href="#"><i
                            class="fa-brands fa-facebook p-3 border-2 rounded-full border-orange-400 bg-[#0F90A3] hover:bg-white hover:text-orange-400 duration-300"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-twitter p-3 border-2 rounded-full border-orange-400 bg-[#0F90A3] hover:bg-white hover:text-orange-400 duration-300"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-instagram p-3 border-2 rounded-full border-orange-400 bg-[#0F90A3] hover:bg-white hover:text-orange-400 duration-300"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-youtube p-3 border-2 rounded-full border-orange-400 bg-[#0F90A3] hover:bg-white hover:text-orange-400 duration-300"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-linkedin p-3 border-2 rounded-full border-orange-400 bg-[#0F90A3] hover:bg-white hover:text-orange-400 duration-300"></i></a>
                </li> --}}

            </ul>
        </section>

        <!-- Company Section -->
        <section class="flex flex-col gap-6 text-center sm:text-left">
            <h2 class="font-serif uppercase font-bold text-2xl sm:text-3xl">Company</h2>
            <ul class="flex flex-col gap-4 text-slate-200">
                <li><a href="/" class="hover:text-[#0F90A3]">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-[#0F90A3]">About Us</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-[#0F90A3]">Portfolio</a></li>
                <li><a href="{{ route('blog') }}" class="hover:text-[#0F90A3]">Blogs</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#0F90A3]">Contact Us</a></li>
            </ul>
        </section>

        <!-- Services Section -->
        <section class="flex flex-col gap-6 text-center sm:text-left">
            <h2 class="font-serif uppercase font-bold text-2xl sm:text-3xl">Services</h2>
            <ul class="flex flex-col gap-4 text-slate-200">
                <li><a href="#" class="hover:text-[#0F90A3]">Consultation</a></li>
                <li><a href="{{ route('custom-stand') }}" class="hover:text-[#0F90A3]">Custom Exhibition Stand</a></li>
                <li><a href="{{ route('modular-stand') }}" class="hover:text-[#0F90A3]">Modular Exhibition Stand</a>
                </li>
            </ul>
        </section>

        <!-- Disclaimer Section -->
        <section class="flex flex-col gap-6 text-center sm:text-left">
            <h2 class="font-serif uppercase font-bold text-2xl sm:text-3xl">Disclaimer</h2>
            <p class="text-slate-200 text-sm leading-relaxed">
                Last Minute Expo Stand Service is a major exhibition stand builder in Poland, providing high-quality and
                diverse exhibition
                stands, as well as comprehensive showcasing services. We handle everything from concept to construction,
                logistics, and dismantling.
            </p>
        </section>
    </div>

    <!-- Bottom Section -->
    <div class="border-t border-zinc-500 pt-4 pb-6">
        <div class="px-5 text-center text-sm">
            <span>
                &copy; <span id="year"></span> Last Minute Expo Stand Service
                <a href="https://digitalfyx.com/" target="_blank" class="hover:text-[#0F90A3]"></a>. All
                Rights Reserved.
            </span>
        </div>
    </div>

</footer>

<script>
    // Dynamically set the current year
    document.getElementById('year').textContent = new Date().getFullYear();
</script>

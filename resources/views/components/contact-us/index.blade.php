<x-public-layout>
    {{-- meta info start here --}}
    <x-slot name="title">Xprooservice - Contact</x-slot>
    <x-slot name="description">Xprooservice -Contact page</x-slot>

    {{-- actual content start here --}}
    <!-- Banner Section -->
    <section>
        <div class="relative w-full bg-cover bg-center h-[400px] lg:min-h-screen"
            style="background-image: url('assets/contact-section/banner.webp');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Content Container -->
            <div
                class="relative flex flex-col justify-center items-center text-center text-white h-[400px] lg:min-h-screen p-4">
                <h1 class="text-3xl md:text-5xl lg:text-7xl font-extrabold">
                    Contact Us
                </h1>


            </div>
        </div>
    </section>

    {{-- Body-Section --}}
    <x-contact-us.contact-form />

    {{-- Location-Section --}}
    {{-- <section
        class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14 m-5 justify-around items-center md:p-5 lg:p-10 md:mx-10">

        <div
            class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto md:hover:scale-105 duration-700">
            <h4 class="text-lg md:text-xl flex items-center gap-5 font-semibold m-6 mt-0"><i
                    class="fa-solid fa-house"></i>
                UK Office</h4>
            <span class="text-slate-600 text-sm ml-6">
                71-75 Shelton St, London WC2H 9JQ, United Kingdom
            </span>
        </div>

        <div
            class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto md:hover:scale-105 duration-700">
            <h4 class="text-lg md:text-xl flex items-center gap-5 font-semibold m-6 mt-0"><i
                    class="fa-solid fa-house"></i>
                Poland Office</h4>
            <span class="text-slate-600 text-sm ml-6">
                Poreba 13b poreba 63-233, Poland
            </span>
        </div>

        <div
            class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto md:hover:scale-105 duration-700">
            <h4 class="text-lg md:text-xl flex items-center gap-5 font-semibold m-6 mt-0"><i
                    class="fa-solid fa-house"></i>
                USA Office</h4>
            <span class="text-slate-600 text-sm ml-6">
                401, Ryland St. Ste 200-A Reno NV 89502 Nevada, USA
            </span>
        </div>

        <div
            class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto md:hover:scale-105 duration-700">
            <h4 class="text-lg md:text-xl flex items-center gap-5 font-semibold m-6 mt-0"><i
                    class="fa-solid fa-house"></i>
                UAE Office</h4>
            <span class="text-slate-600 text-sm ml-6">
                IFZA Business Park, DDP, Dubai Silicon Oasis, Dubai, UAE
            </span>
        </div>
    </section> --}}


</x-public-layout>

<section class="px-8 py-5 max-w-7xl mx-auto relative bg-center bg-no-repeat bg-fixed"
    style="background-image: url('/assets/bg/home-bg.webp')">
    <!-- Portfolio Section -->
    <div class="my-10 md:my-16 flex flex-col gap-5 md:gap-10 lg:gap-20 justify-center items-center">
        <h2 class="text-3xl md:text-5xl text-center">
            Our <span class="text-[#0E91A3] font-bold">Portfolio</span>
        </h2>
    </div>

    <!-- Card Section -->
    <div class="flex flex-col gap-10 md:gap-20">

        <!-- Button Container -->
        <div class="hidden lg:flex justify-center uppercase text-xl gap-2 space-x-4">
            <div class="flex justify-center">
                <button data-filter="all"
                    class="filter-btn px-4 text-sm border-2 rounded-full bg-white border-[#0E91A3] text-[#0E91A3] font-semibold transition duration-300 ease-in-out animate-pulse cursor-pointer">
                    All
                </button>
            </div>
            <div class="flex justify-center">
                <button data-filter="custom"
                    class="filter-btn px-6 py-3 text-sm border-2 border-[#0E91A3] bg-[#0E91A3] p-2 rounded-full text-white font-semibold transition duration-300 ease-in-out hover:bg-white hover:text-[#0E91A3] hover:border-[#0E91A3] cursor-pointer">
                    Custom stand
                </button>
            </div>
            <div class="flex justify-center">
                <button data-filter="double-decker"
                    class="filter-btn px-6 py-3 text-sm border-2 border-[#0E91A3] bg-[#0E91A3] p-2 rounded-full text-white font-semibold transition duration-300 ease-in-out hover:bg-white hover:text-[#0E91A3] hover:border-[#0E91A3] cursor-pointer">
                    Double Decker Stand
                </button>
            </div>
            <div class="flex justify-center">
                <button data-filter="country-pavilion"
                    class="filter-btn px-6 py-3 text-sm border-2 border-[#0E91A3] bg-[#0E91A3] p-2 rounded-full text-white font-semibold transition duration-300 ease-in-out hover:bg-white hover:text-[#0E91A3] hover:border-[#0E91A3] cursor-pointer">
                    Country Pavilion Design
                </button>
            </div>
            <div class="flex justify-center">
                <button data-filter="modular"
                    class="filter-btn px-6 py-3 text-sm border-2 border-[#0E91A3] bg-[#0E91A3] p-2 rounded-full text-white font-semibold transition duration-300 ease-in-out hover:bg-white hover:text-[#0E91A3] hover:border-[#0E91A3] cursor-pointer">
                    Modular stand
                </button>
            </div>
        </div>

        <!-- Image Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:px-10 pb-5 md:pb-10">
            <a href="{{ asset('assets/banner/stand-0.webp') }}" class="grid-item custom" data-fancybox="portfolio"
                data-caption="Stand 1">
                <img src="{{ asset('assets/banner/stand-0.webp') }}" alt="Portfolio Stand 1"
                    class="image-thumb cursor-pointer">
            </a>
            <a href="{{ asset('assets/banner/stand-1.webp') }}" class="grid-item double-decker"
                data-fancybox="portfolio" data-caption="Stand 2">
                <img src="{{ asset('assets/banner/stand-1.webp') }}" alt="Portfolio Stand 2"
                    class="image-thumb cursor-pointer">
            </a>
            <a href="{{ asset('assets/banner/stand-2.webp') }}" class="grid-item country-pavilion"
                data-fancybox="portfolio" data-caption="Stand 3">
                <img src="{{ asset('assets/banner/stand-2.webp') }}" alt="Portfolio Stand 3"
                    class="image-thumb cursor-pointer">
            </a>
            <a href="{{ asset('assets/banner/stand-3.webp') }}" class="grid-item modular" data-fancybox="portfolio"
                data-caption="Stand 4">
                <img src="{{ asset('assets/banner/stand-3.webp') }}" alt="Portfolio Stand 4"
                    class="image-thumb cursor-pointer">
            </a>
            <a href="{{ asset('assets/banner/stand-4.webp') }}" class="grid-item custom" data-fancybox="portfolio"
                data-caption="Stand 5">
                <img src="{{ asset('assets/banner/stand-4.webp') }}" alt="Portfolio Stand 5"
                    class="image-thumb cursor-pointer">
            </a>
            <a href="{{ asset('assets/banner/stand-5.webp') }}" class="grid-item double-decker"
                data-fancybox="portfolio" data-caption="Stand 6">
                <img src="{{ asset('assets/banner/stand-5.webp') }}" alt="Portfolio Stand 6"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-6.webp') }}" class="grid-item country-pavilion"
                data-fancybox="portfolio" data-caption="Stand 7">
                <img src="{{ asset('assets/banner/stand-6.webp') }}" alt="Portfolio Stand 7"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-7.webp') }}" class="grid-item modular" data-fancybox="portfolio"
                data-caption="Stand 8">
                <img src="{{ asset('assets/banner/stand-7.webp') }}" alt="Portfolio Stand 8"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-8.webp') }}" class="grid-item custom" data-fancybox="portfolio"
                data-caption="Stand 9">
                <img src="{{ asset('assets/banner/stand-8.webp') }}" alt="Portfolio Stand 9"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-9.webp') }}" class="grid-item double-decker"
                data-fancybox="portfolio" data-caption="Stand 10">
                <img src="{{ asset('assets/banner/stand-9.webp') }}" alt="Portfolio Stand 10"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-10.webp') }}" class="grid-item country-pavilion"
                data-fancybox="portfolio" data-caption="Stand 11">
                <img src="{{ asset('assets/banner/stand-10.webp') }}" alt="Portfolio Stand 11"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-11.webp') }}" class="grid-item modular" data-fancybox="portfolio"
                data-caption="Stand 12">
                <img src="{{ asset('assets/banner/stand-11.webp') }}" alt="Portfolio Stand 12"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-12.webp') }}" class="grid-item custom" data-fancybox="portfolio"
                data-caption="Stand 13">
                <img src="{{ asset('assets/banner/stand-12.webp') }}" alt="Portfolio Stand 13"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-14.webp') }}" class="grid-item double-decker"
                data-fancybox="portfolio" data-caption="Stand 14">
                <img src="{{ asset('assets/banner/stand-14.webp') }}" alt="Portfolio Stand 14"
                    class="image-thumb cursor-pointer">
            </a>

            <a href="{{ asset('assets/banner/stand-15.webp') }}" class="grid-item country-pavilion"
                data-fancybox="portfolio" data-caption="Stand 15">
                <img src="{{ asset('assets/banner/stand-15.webp') }}" alt="Portfolio Stand 15"
                    class="image-thumb cursor-pointer">
            </a>
        </div>

        {{-- <div class="flex justify-center pb-5 md:pb-10">
            <a href="{{ route('portfolio') }}" target="_self" rel="noopener noreferrer"
                aria-label="View All Portfolios"
                class="inline-block px-6 py-3 border-2 rounded-xl border-[#0E91A3] bg-white text-[#0E91A3] font-semibold transition duration-300 ease-in-out uppercase hover:bg-[#0E91A3] hover:text-white">
                All Portfolio
            </a>
        </div> --}}
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filter-btn");
        const gridItems = document.querySelectorAll(".grid-item");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const filter = button.dataset.filter;

                gridItems.forEach(item => {
                    if (filter === "all" || item.classList.contains(filter)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>

<section class="testimonial-section bg-gray-100 py-16">
    <div class="container mx-auto px-6 text-center">
        <h3
            class="bg-gradient-to-r from-[#0F90A3] to-[#413565] bg-clip-text text-transparent text-base md:text-lg uppercase text-center tracking-wider font-semibold">
            What Our Clients Say About Us
        </h3>

        <h2 class="font-serif text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 mt-2">Over 1200+
            <span class="text-[#0F90A3] animate-pulse">Satisfied</span> Clients and Growing
        </h2>

        <div class="flex flex-col lg:flex-row items-center justify-center mt-10 gap-8">
            <div class="flex flex-col md:flex-row gap-6 animate-slide-in-left">
                <div class="relative group w-60 h-60 rounded-lg overflow-hidden shadow-lg">
                    <a href="https://www.youtube.com/watch?v=VIDEO_ID_1" target="_blank" class="block w-full h-full">
                        <img src="{{ asset('assets/testimonial/client-a.webp') }}" alt="Testimonial 1"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 opacity-50 hover:opacity-85 bg-black flex items-center justify-center group-hover:bg-opacity-70 transition">
                            <i class="fa fa-play-circle text-4xl text-white bg-red-600 rounded-full"></i>
                        </div>
                        <p
                            class="absolute bottom-2 left-0 right-0 text-white text-center font-semibold bg-opacity-75 py-2">
                            Cina Cleaves
                        </p>
                    </a>
                </div>

                <div class="relative group w-60 h-60 rounded-lg overflow-hidden shadow-lg animate-slide-in-right">
                    <a href="https://www.youtube.com/watch?v=VIDEO_ID_2" target="_blank" class="block w-full h-full">
                        <img src="{{ asset('assets/testimonial/client-b.webp') }}" alt="Testimonial 2"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 opacity-50 hover:opacity-85 bg-black flex items-center justify-center group-hover:bg-opacity-70 transition">

                            <i class="fa fa-play-circle text-4xl text-white bg-red-600 rounded-full"></i>
                        </div>
                        <p
                            class="absolute bottom-2 left-0 right-0 text-white text-center font-semibold bg-opacity-75 py-2">
                            Jokvch Marlin
                        </p>
                    </a>
                </div>
            </div>

            <div class="relative w-full max-w-lg mx-auto overflow-hidden animate-slide-in-right">

                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-full flex-shrink-0">
                        <p class="text-gray-700 italic text-left">
                            "Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s..."
                        </p>
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/testimonial/client-c.webp') }}" alt="Fred Chener"
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <strong class="text-gray-900">Fred Chener</strong>
                                <span class="block text-gray-600 text-sm">CEO of Aramxx, Ohio, US State</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg w-full flex-shrink-0">
                        <p class="text-gray-700 italic text-left">
                            "A great experience! Their service was exceptional."
                        </p>
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/testimonial/client-c.webp') }}" alt="Jane Doe"
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <strong class="text-gray-900">Jane Doe</strong>
                                <span class="block text-gray-600 text-sm">CTO of Innovatech</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg w-full flex-shrink-0">
                        <p class="text-gray-700 italic text-left">
                            "Highly recommended. Their team is outstanding."
                        </p>
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/testimonial/client-c.webp') }}" alt="John Smith"
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <strong class="text-gray-900">John Smith</strong>
                                <span class="block text-gray-600 text-sm">Founder of TechWorld</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg w-full flex-shrink-0">
                        <p class="text-gray-700 italic text-left">"Excellent service with a professional approach."</p>
                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/testimonial/client-c.webp') }}" alt="Emma Brown"
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <strong class="text-gray-900">Emma Brown</strong>
                                <span class="block text-gray-600 text-sm">CMO at MarketPros</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4" id="dots"></div>
            </div>
        </div>
    </div>
</section>

<script>
    const slider = document.getElementById("slider");
    const dotsContainer = document.getElementById("dots");
    const slides = slider.children;
    let index = 0;

    function createDots() {
        for (let i = 0; i < slides.length; i++) {
            let dot = document.createElement("span");
            dot.classList = "w-3 h-3 rounded-full mx-1 cursor-pointer";
            dot.classList.add(i === 0 ? "bg-[#0F90A3]" : "bg-gray-300");
            dot.dataset.index = i;
            dot.addEventListener("click", () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
    }

    function updateDots() {
        Array.from(dotsContainer.children).forEach((dot, i) => {
            dot.classList.toggle("bg-[#0F90A3]", i === index);
            dot.classList.toggle("bg-gray-300", i !== index);
        });
    }

    function goToSlide(i) {
        index = i;
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    }

    createDots();
    setInterval(nextSlide, 5000);
</script>

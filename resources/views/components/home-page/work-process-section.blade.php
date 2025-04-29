<section class="py-16 px-4" style="background-image: url('/assets/bg/home-bg.webp')">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12">

        <!-- Image Section -->
        <div class="flex-shrink-0 m-auto">
            <img src="{{ asset('assets/work-process/work-process.webp') }}" alt="Working"
                class="rounded-2xl w-full max-w-lg" />
        </div>

        <!-- Accordion Section -->
        <div class="flex-1">
            <h2
                class="font-serif pb-5 md:pb-10 font-semibold text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-center md:text-left animate-slide-in-left">
                The Way We Work</h2>

            <div id="accordion" class="space-y-2">
                <!-- Accordion Item 1 (Open by default) -->
                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">01.
                        Ideation</button>
                    <div class="accordion-body px-4 pb-4">
                        We execute unique and creative concepts that match an uncommon thought through the exhibition
                        stand.
                    </div>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">02.
                        Designers</button>
                    <div class="accordion-body px-4 pb-4 hidden">
                        Our team of designers will take your idea from concept to living, breathing designs that are
                        beautiful and functional.
                    </div>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">03.
                        Validation</button>
                    <div class="accordion-body px-4 pb-4 hidden">
                        We validate your designs technically and conceptually before moving forward.
                    </div>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">04.
                        Building</button>
                    <div class="accordion-body px-4 pb-4 hidden">
                        We execute and develop your finished design concepts using only the highest level of skill &
                        technique.
                    </div>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">05.
                        Deployment</button>
                    <div class="accordion-body px-4 pb-4 hidden">
                        Your design is carefully delivered, installed, and prepared for showtime.
                    </div>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">06.
                        Handover</button>
                    <div class="accordion-body px-4 pb-4 hidden">
                        Once everything is good to go, we finalize and hand over the completed stand to you.
                    </div>
                </div>
            </div>
            <!-- Sub Text and Button -->
            <div class="py-5 text-lg md:text-xl lg:text-2xl w-full flex flex-col text-center md:text-left">

                <a href="{{ route('contact') }}"
                    class="bg-gradient-to-r from-[#0E91A3] via-[#413266] to-[#0E91A3] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit mx-auto md:mx-0">
                    Start a Project
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    const headers = document.querySelectorAll('.accordion-header');
    headers.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.nextElementSibling;
            document.querySelectorAll('.accordion-body').forEach(body => {
                if (body !== item) body.classList.add('hidden');
            });
            item.classList.toggle('hidden');
        });
    });
</script>

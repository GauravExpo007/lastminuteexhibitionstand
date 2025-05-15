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
                    <p class="accordion-body px-4 pb-4">
                        We at <b>Last Minute Exhibition Stand</b> think that brilliant concepts lead to better displays.
                        We dig
                        deeply into your brand&#39;s core message. This helps us to swiftly come-up with striking &amp;
                        and effective
                        concepts. Even when time is limited. Our goal with each exhibition stands design concept is to
                        transform urgency into creativity without sacrificing uniqueness or worth.
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">02.
                        Designers</button>
                    <p class="accordion-body px-4 pb-4 hidden">
                        Our skilled exhibition stand designers &amp; builders take your brief. Then we turn it into
                        something
                        beautiful &amp; useful. We combine trendy exhibition stand design with practicality. This makes
                        sure
                        your display stands out. We also make sure that it facilitates smooth navigation for your
                        audience. It
                        must perfectly complement your brand. Plus, tight deadlines never stop us from being creative.
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">03.
                        Validation</button>
                    <p class="accordion-body px-4 pb-4 hidden">
                        Before we start manufacturing, Last Minute Exhibition Stand verifies your exhibition stand
                        design
                        thorough technical and conceptual inspections. We make sure that it is structurally sound and
                        practical for your event area. We make sure that it even complies with local exhibition
                        standards.
                        This guarantees there are no last-minute issue and that everything that looks amazing and
                        functions
                        well on the exhibition floor.
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">04.
                        Building</button>
                    <p class="accordion-body px-4 pb-4 hidden">
                        Once your exhibition stand design has been finalized, we move on to our build phase. Here our
                        talented builders turn your design into a reality. We build sturdy and movable stands. These
                        stands
                        capture your brand image. Using high-quality materials and tried-and-true techniques, Last
                        Minute
                        Exhibition Stand quickly install your stands wherever you need them.
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">05.
                        Deployment</button>
                    <p class="accordion-body px-4 pb-4 hidden">
                        Time is critical; thus, we handle logistics with precise accuracy. Regardless of whether you are
                        exhibiting in the United Arab Emirates, Europe, or the USA, our experts make sure that your
                        exhibition stand is supplied, transported, and even properly installed promptly. There won’t be
                        any
                        worry or delays when your exhibition stand is prepared for the exhibition.
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl overflow-hidden bg-white">
                    <button
                        class="font-serif w-full text-left text-lg md:text-xl p-4 font-semibold accordion-header bg-gradient-to-r from-[#0E91A3] to-[#213607] bg-clip-text text-transparent">06.
                        Handover</button>
                    <p class="accordion-body px-4 pb-4 hidden">
                        We guide you through each stage of the installation procedure to ensure that everything,
                        including
                        the visuals and structural elements, is perfect. As soon as everything meets your needs, we
                        formally
                        hand over your stand, fully branded and ready for the occasion. We&#39;ve taken care of the rest
                        now, so
                        you can focus on engaging your audience.
                    </p>
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

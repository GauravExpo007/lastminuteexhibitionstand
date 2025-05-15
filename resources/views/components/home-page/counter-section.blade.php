<section id="counter-section" style="background-image: url('/assets/bg/counter-bg.webp')"
    class="flex flex-col md:flex-row justify-center items-center min-h-[25rem] text-start md:text-center relative bg-opacity-5 transition-all py-5 md:py-10 lg:py-16 animate-slide-in-left bg-no-repeat bg-cover bg-center">

    <!-- Left Section -->
    <section class="px-4 sm:px-6 lg:px-8 flex flex-col gap-5 w-full py-10 md:py-20 lg:w-3/5 animate-slide-in-left">

        <h2
            class="font-serif font-semibold text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-[5%] text-center md:text-left">
            Check Recent Achievements
        </h2>

        <!-- Sub Text and Button -->
        <div class="py-5 text-lg md:text-xl lg:text-2xl w-full flex flex-col text-center md:text-left">
            <p>We provide the effective and best exhibition stall designs to our clients.</p><br />
            <a href="{{ route('contact') }}"
                class="bg-gradient-to-r from-[#0E91A3] via-[#413266] to-[#0E91A3] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit mx-auto md:mx-0">
                Request Service
            </a>
        </div>
    </section>

    <!-- Right Section -->
    <section
        class="grid grid-cols-2 justify-center items-center p-5 md:p-10 pt-0 w-full lg:w-3/5 animate-slide-in-right">
        {{-- 1rd-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group m-auto">

            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter xl:text-6xl lg:text-5xl md:text-4xl text-3xl font-bold font-sans"
                        data-target="3">
                    </div>
                    <span class=" lg:text-5xl md:text-4xl text-3xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Years of Experience</span>
            </div>
        </div>

        {{-- 2th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group m-auto">

            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter xl:text-6xl lg:text-5xl md:text-4xl text-3xl font-bold font-sans"
                        data-target="250">
                    </div>
                    <span class="lg:text-5xl md:text-4xl text-3xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Project Completed</span>
            </div>
        </div>

        {{-- 3th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group m-auto">

            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter xl:text-6xl lg:text-5xl md:text-4xl text-3xl font-bold font-sans"
                        data-target="30">
                    </div>
                    <span class="lg:text-5xl md:text-4xl text-3xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Country Presence</span>
            </div>
        </div>

        {{-- 4th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group m-auto">

            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter xl:text-6xl lg:text-5xl md:text-4xl text-3xl font-bold font-sans"
                        data-target="150">
                    </div>
                    <span class="lg:text-5xl md:text-4xl text-3xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Exhibition Attended</span>
            </div>
        </div>

    </section>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const animateCounters = () => {
            document.querySelectorAll('.counter').forEach(counter => {
                let targetText = counter.getAttribute('data-target');

                // Handle "K" values and convert them to numbers
                let target;
                if (targetText.includes("K")) {
                    target = parseFloat(targetText.replace("K", "")) * 1000;
                } else if (targetText.includes("/")) {
                    // If the value is "24/7", display it directly without animation
                    counter.textContent = targetText;
                    return;
                } else {
                    target = parseInt(targetText);
                }

                if (isNaN(target)) return; // Skip if not a valid number

                let current = 0;
                const increment = target / 100;

                const update = () => {
                    if (current < target) {
                        current += increment;
                        if (current >= 1000) {
                            counter.textContent = (current / 1000).toFixed(1).replace(".0",
                                "") + "K";
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        setTimeout(update, 20);
                    } else {
                        counter.textContent = target >= 1000 ? (target / 1000).toFixed(1)
                            .replace(".0", "") + "K" : target;
                    }
                };
                update();
            });
        };

        const isVisible = () => {
            const section = document.getElementById('counter-section');
            const rect = section.getBoundingClientRect();
            return rect.top < window.innerHeight && rect.bottom >= 0;
        };

        if (isVisible()) animateCounters();

        window.addEventListener('scroll', function onScroll() {
            if (isVisible()) {
                animateCounters();
                window.removeEventListener('scroll', onScroll);
            }
        });
    });
</script>

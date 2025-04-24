<section id="vanta-bg" class="py-16 bg-black/80 text-white font-sans">
    <div class=" container mx-auto px-6 flex flex-col lg:flex-row items-start gap-10">
        <!-- Left: Text & Tabs -->
        <div class="lg:w-1/2 flex flex-col justify-center items-start gap-5">
            <h3
                class="bg-gradient-to-r from-[#0F90A3] to-white bg-clip-text text-transparent text-base md:text-lg uppercase text-center md:text-start tracking-wider font-semibold">
                Our Services
            </h3>
            <h2 class="font-semibold text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-5 text-center md:text-left">
                We provide the best design solutions.
            </h2>
            <p class="text-gray-400 mb-8 max-w-md">
                We are Crafting excellence through precision fabrication solutions tailored to your needs.
            </p>

            <!-- Tabs -->
            <ul id="serviceTabs" class="space-y-4 font-semibold">
                <li class="cursor-pointer tab-item active hover:underline underline-offset-8 duration-500"
                    data-index="0">
                    <i class="fa fa-arrow-right text-[#0F90A3] animate-pulse text-xl mr-2" aria-hidden="true"></i>
                    Custom
                    Build
                    Stand
                </li>
                <li class="cursor-pointer tab-item active hover:underline underline-offset-8 duration-500"
                    data-index="1"><i class="fa fa-arrow-right text-[#0F90A3] animate-pulse text-xl mr-2"
                        aria-hidden="true"></i>
                    Country Pavilion Stand</li>
                <li class="cursor-pointer tab-item active hover:underline underline-offset-8 duration-500"
                    data-index="2"><i class="fa fa-arrow-right text-[#0F90A3] animate-pulse text-xl mr-2"
                        aria-hidden="true"></i>
                    Double Decker Exhibits</li>
                <li class="cursor-pointer tab-item active hover:underline underline-offset-8 duration-500"
                    data-index="3"><i class="fa fa-arrow-right text-[#0F90A3] animate-pulse text-xl mr-2"
                        aria-hidden="true"></i>
                    Modular Stand</li>
            </ul>
        </div>

        <!-- Right: Image & Description -->
        <div class="w-full lg:w-1/2 flex justify-center">
            <div class="relative w-full max-w-lg">
                <img id="serviceImage" src="{{ asset('assets/service-section/custom.webp') }}" alt="Service"
                    class="rounded-xl shadow-lg w-full h-52 sm:h-80 md:h-96 object-cover border-2 border-slate-300">

                <div id="serviceDescription"
                    class="absolute bottom-0 left-0 right-0  md:w-[80%] bg-black/70 p-4 md:p-6 border border-[#0F90A3] rounded-bl-xl text-left">
                    <h3
                        class="bg-gradient-to-r from-[#0F90A3] to-white bg-clip-text text-transparent text-base md:text-lg uppercase tracking-wider font-semibold mb-2">
                        Custom Build Stand
                    </h3>
                    <p class="text-gray-300 text-sm">Personalized exhibition booth designs that blend brand stories with
                        customer conversations.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    const tabs = document.querySelectorAll('.tab-item');
    const image = document.getElementById('serviceImage');
    const descriptionBox = document.getElementById('serviceDescription');

    const services = [{
            title: "Custom Build Stand",
            description: "Personalized exhibition booth designs that blend brand stories with customer conversations.",
            image: "./assets/service-section/custom.webp"
        },
        {
            title: "Country Pavilion Stand",
            description: "Last Minute Exhibition Stands has significant experience producing engaging country pavilions and visually striking technological advancements and designs.",
            image: "./assets/service-section/country.webp"
        },
        {
            title: "Double Decker Exhibits",
            description: "Double decker stands that elevate your presence and provide additional space with an impressive visual impact.",
            image: "./assets/service-section/double decker.webp"
        },
        {
            title: "Modular Stand",
            description: "Flexible, reusable and sustainable exhibition stands that adapt to your needs and budget.",
            image: "./assets/service-section/modular.webp"
        }
    ];

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('text-white', 'border-l-4', 'pl-4',
                'border-cyan-400'));
            tab.classList.add('text-white', 'border-l-4', 'pl-4', 'border-cyan-400');

            const index = parseInt(tab.dataset.index);
            image.src = services[index].image;
            descriptionBox.innerHTML = `
          <h3 class="text-lg md:text-xl font-bold mb-2 bg-gradient-to-r from-[#0F90A3] to-white bg-clip-text text-transparent uppercase text-center md:text-start tracking-wider font-semibold">${services[index].title}</h3>
          <p class="text-gray-300 text-sm">${services[index].description}</p>
        `;
        });
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    {{-- <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- Load Three.js and Vanta.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.birds.min.js"></script>

    {{-- Portfolio-gallery --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>



</head>

<style>
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in-left,
    .animate-slide-in-right {
        opacity: 0;
    }

    .animate-left {
        animation: slideInLeft 1s ease-out forwards;
    }

    .animate-right {
        animation: slideInRight 1s ease-out forwards;
    }
</style>

<body>
    <header>
        <x-home-page.header-section />
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <x-footer.index />
    </footer>


    <script>
        function handleScrollAnimation() {
            document.querySelectorAll(".animate-slide-in-left").forEach(section => {
                if (section.getBoundingClientRect().top < window.innerHeight * 0.75 && !section.classList.contains(
                        "animate-left")) {
                    section.classList.add("animate-left");
                }
            });

            document.querySelectorAll(".animate-slide-in-right").forEach(section => {
                if (section.getBoundingClientRect().top < window.innerHeight * 0.75 && !section.classList.contains(
                        "animate-right")) {
                    section.classList.add("animate-right");
                }
            });
        }

        document.addEventListener("scroll", handleScrollAnimation);
        document.addEventListener("DOMContentLoaded", handleScrollAnimation);
    </script>

    {{-- Bird-Animation --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const vantaBg = document.getElementById("vanta-bg");

            let vantaEffect = VANTA.BIRDS({
                el: vantaBg,
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                scale: 1.00,
                scaleMobile: 1.00,
                backgroundColor: 0x000000,
                color1: 0xff0000,
                color2: 0x00ffff,
                wingSpan: 20.00,
                separation: 40.00,
                alignment: 50.00,
                cohesion: 30.00,
                quantity: 3.00
            });

            function resizeVanta() {
                vantaBg.style.width = "100%";
                vantaBg.style.height = "100vh";
                if (vantaEffect) {
                    vantaEffect.resize();
                }
            }

            resizeVanta(); // Set initial size
            window.addEventListener("resize", resizeVanta);
        });
    </script>


    <!-- Typed.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Typed('#typed-text', {
                strings: [
                    'Designers',
                    'Builders',
                    'Planners'
                ],
                typeSpeed: 100,
                backSpeed: 40,
                startDelay: 300,
                backDelay: 2000,
                loop: true,
                smartBackspace: true,
                showCursor: true,
                cursorChar: '|'
            });
        });
    </script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Om</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Brand Font -->
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Bricolage Grotesque', sans-serif;
        }

        /* Grain Texture (halus) */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background: url('https://grainy-gradients.vercel.app/noise.svg');
            opacity: 0.08;
            mix-blend-mode: overlay;
            z-index: 1;
        }

        /* Smooth Lift Hover */
        .smooth-lift {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .smooth-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.25);
        }

        .hero-parallax {
            background-attachment: fixed;
        }
    </style>
</head>

<body class="bg-[#111] text-[#F4EBDD]">

    <!-- NAVBAR -->
    <header class="fixed top-0 w-full z-50 bg-[#111] border-b border-[#222]">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-5">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <img src="/images/logo.png" alt="Kopi Om" class="h-10">
            </a>

            <!-- Tombol Menu (Muncul di HP) -->
            <button id="menu-toggle" class="md:hidden text-amber-400 text-3xl focus:outline-none">
                ☰
            </button>

            <!-- Menu Navigasi -->
            <nav id="nav-menu" class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="hover:text-amber-500">Home</a>
                <a href="/menu" class="hover:text-amber-500">Menu</a>
                <a href="/tentang" class="hover:text-amber-500">Tentang</a>
                <a href="/kontak" class="hover:text-amber-500">Kontak</a>
            </nav>
        </div>

        <!-- Menu Mobile (Dropdown) -->
        <div id="mobile-menu"
            class="hidden bg-[#111] border-t border-[#222] flex-col space-y-3 py-4 px-5 text-center md:hidden">
            <a href="/" class="block hover:text-amber-400">Home</a>
            <a href="/menu" class="block hover:text-amber-400">Menu</a>
            <a href="/tentang" class="block hover:text-amber-400">Tentang</a>
            <a href="/kontak" class="block hover:text-amber-400">Kontak</a>
        </div>
    </header>

    <!-- Script -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <main class="pt-24">
    @yield('content')
</main>

    <!-- FOOTER -->
    <footer class="bg-stone-900 text-stone-200 py-6 mt-20 border-t border-stone-800">
        <div
            class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center px-6 text-center md:text-left">
            <!-- Kiri -->
            <p class="text-base md:text-lg font-medium">
                © 2021<span class="text-amber-400">Kopi Om</span>
            </p>

            <!-- Kanan -->
            <p class="text-sm text-[#F4EBDD]/60 mt-3 md:mt-0">
                Designed and developed by
                <a href="https://www.instagram.com/yanssetiawan._" target="_blank" rel="noopener noreferrer"
                    class="font-medium text-amber-400 hover:text-amber-300 transition">
                    Yanssetiawan._
                </a>
            </p>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            easing: 'ease-out',
            once: false
        });
    </script>

    <!-- Hero Parallax JS -->
    <script>
        document.addEventListener("scroll", () => {
            const hero = document.querySelector(".hero-parallax");
            if (hero) {
                const offset = window.pageYOffset;
                hero.style.backgroundPositionY = offset * 0.3 + "px";
            }
        });
    </script>

</body>

</html>

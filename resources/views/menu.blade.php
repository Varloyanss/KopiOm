@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <div class="relative h-[45vh] bg-[url('/images/menu-bg.jpg')] bg-cover bg-center flex items-center justify-center">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Konten -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-5xl font-bold mb-3">
                Menu <span class="text-amber-400">Kopi Om</span>
            </h1>
            <p class="text-[#F4EBDD]/80 max-w-xl mx-auto text-lg">
                Setiap cangkir kami seduh dengan hati. Sekarang giliran kamu memilih
                rasa yang cocok buat seleramu.
            </p>
        </div>
    </div>


    <!-- SIGNATURE MENU (SLIDER STYLE / CATEGORIES SHOWCASE) -->
    <section data-aos="fade-up" class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold mb-10 text-amber-400 text-center">Signature Menu</h2>

        @php
            $signatures = [
                ['img' => '/images/moctail.jpg', 'name' => 'Coffee Mocktails'],
                ['img' => '/images/nonmoctail.jpg', 'name' => 'Non Coffee Mocktails'],
                ['img' => '/images/coldbrew.jpg', 'name' => 'Cold Brew'],
                ['img' => '/images/milk.jpg', 'name' => 'Milk Base'],
                ['img' => '/images/mc.jpg', 'name' => 'Main Course'],
                ['img' => '/images/toast.jpg', 'name' => 'Toast & Bread'],
                ['img' => '/images/pao.jpg', 'name' => 'Pao & Onde-Onde'],
            ];
        @endphp

        <div id="signatureGallery" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4">
            @foreach ($signatures as $index => $item)
                <div
                    class="smooth-lift snap-center min-w-[260px] bg-[#1a1a1a] p-6 rounded-2xl border border-[#333] hover:border-amber-400 transition">
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}"
                        class="rounded-xl mb-4 h-44 w-full object-cover brightness-90 hover:brightness-110 transition cursor-pointer"
                        onclick="openImage({{ $index }})">
                    <h3 class="text-2xl font-bold text-center text-amber-300 mt-2">{{ $item['name'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    <!-- MODAL IMAGE VIEWER -->
    <div id="imageModal"
        class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div id="modalContainer"
            class="relative max-w-3xl w-[90%] transform scale-95 opacity-0 transition-all duration-300">
            <img id="modalImage" src="" class="rounded-2xl w-full h-auto shadow-[0_0_50px_rgba(255,191,0,0.2)]">

            <!-- Tombol Navigasi -->
            <button id="prevBtn"
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white text-3xl px-4 py-2 rounded-r-lg transition">
                &#10094;
            </button>
            <button id="nextBtn"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white text-3xl px-4 py-2 rounded-l-lg transition">
                &#10095;
            </button>
        </div>
    </div>

    <!-- SCRIPT -->
    <script>
        const images = @json(array_column($signatures, 'img'));
        let currentIndex = 0;

        const modal = document.getElementById('imageModal');
        const modalContainer = document.getElementById('modalContainer');
        const modalImage = document.getElementById('modalImage');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function showImage(index) {
            currentIndex = (index + images.length) % images.length;
            modalImage.src = images[currentIndex];
        }

        function openImage(index) {
            showImage(index);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modalContainer.classList.remove('scale-95', 'opacity-0');
                modalContainer.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            modalContainer.classList.add('scale-95', 'opacity-0');
            modalContainer.classList.remove('scale-100', 'opacity-100');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 250);
        }

        // Klik luar gambar = tutup
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        // Tombol next & prev
        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex + 1);
        });
        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex - 1);
        });

        // Navigasi keyboard
        document.addEventListener('keydown', (e) => {
            if (modal.classList.contains('hidden')) return;
            if (e.key === 'ArrowRight') showImage(currentIndex + 1);
            else if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
            else if (e.key === 'Escape') closeModal();
        });
    </script>



    <!-- MENU LIST -->
    <div class="max-w-7xl mx-auto px-6 pb-32 space-y-16">

        <!-- CLASSIC COFFEE BASED -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Classic Coffee Based</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Espresso</span><span>17K</span></div>
                <div class="flex justify-between"><span>Americano</span><span>20K</span></div>
                <div class="flex justify-between"><span>Cafe Latte</span><span>26K</span></div>
                <div class="flex justify-between"><span>Cappuccino</span><span>27K</span></div>
                <div class="flex justify-between"><span>Magic</span><span>27K</span></div>
                <div class="flex justify-between"><span>Piccolo</span><span>26K</span></div>
                <div class="flex justify-between"><span>Affogato</span><span>30K</span></div>
                <div class="flex justify-between"><span>Barista Breakfast</span><span>32K</span></div>
                <div class="flex justify-between"><span>Manual Brew</span><span>35K</span></div>
                <div class="flex justify-between"><span>Add On Espresso</span><span>+5K</span></div>
                <div class="flex justify-between"><span>Add On Premium Beans</span><span>+5K</span></div>
                <div class="flex justify-between"><span>Add On Ice Cream</span><span>+5K</span></div>
                <div class="flex justify-between"><span>Caramel / Vanilla / Butterscotch / Hazelnut</span></div>
            </div>
        </section>

        <!-- KOPI SUSU -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Kopi Susu</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Kopi Susu Gula Aren</span><span>22K</span></div>
                <div class="flex justify-between"><span>Kopi Susu Buncit</span><span>26K</span></div>
                <div class="flex justify-between"><span>Kopi Susu Pandan</span><span>24K</span></div>
                <div class="flex justify-between"><span>Rum Latte</span><span>26K</span></div>
            </div>
        </section>

        <!-- COLD BREW SERIES -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Cold Brew Series</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Moon Berry Cold Brew</span><span>25K</span></div>
                <div class="flex justify-between"><span>Apple Moonlight</span><span>25K</span></div>
                <div class="flex justify-between"><span>Om Black Cold Brew</span><span>22K</span></div>
            </div>
        </section>

        <!-- COFFEE MOCKTAILS -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Coffee Mocktails</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Cinnabrew Sweet and Sour</span><span>28K</span></div>
                <div class="flex justify-between"><span>Picopresso</span><span>28K</span></div>
                <div class="flex justify-between"><span>Ko-Peach</span><span>28K</span></div>
                <div class="flex justify-between"><span>Om Banoffee</span><span>28K</span></div>
                <div class="flex justify-between"><span>Passion Coco</span><span>28K</span></div>
            </div>
        </section>

        <!-- NON COFFEE MOCKTAILS -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Non Coffee Mocktails</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Mango Passion</span><span>25K</span></div>
                <div class="flex justify-between"><span>Apple Paradise</span><span>28K</span></div>
                <div class="flex justify-between"><span>Maberry</span><span>28K</span></div>
                <div class="flex justify-between"><span>Ma-Grey</span><span>28K</span></div>
                <div class="flex justify-between"><span>Choco Berry</span><span>30K</span></div>
            </div>
        </section>

        <!-- MILK BASE -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Milk Base</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Red Velvet</span><span>25K</span></div>
                <div class="flex justify-between"><span>Chocolatte</span><span>25K</span></div>
                <div class="flex justify-between"><span>Matcha Latte</span><span>25K</span></div>
            </div>
        </section>

        <!-- TEA BASED -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Tea Based</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Earl Grey (Only Hot)</span><span>18K</span></div>
                <div class="flex justify-between"><span>Chamomile (Only Hot)</span><span>18K</span></div>
                <div class="flex justify-between"><span>Tea</span><span>10K</span></div>
                <div class="flex justify-between"><span>Lychee Tea</span><span>20K</span></div>
                <div class="flex justify-between"><span>Ice Peach Tea</span><span>20K</span></div>
                <div class="flex justify-between"><span>Ice Passion Fruit Tea</span><span>20K</span></div>
                <div class="flex justify-between"><span>Lemon Tea</span><span>20K</span></div>
                <div class="flex justify-between"><span>Ice Strawberry Tea</span><span>20K</span></div>
            </div>
        </section>

        <!-- SNACK & BITES -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Snack & Bites</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Risol Combo</span><span>25K</span></div>
                <div class="flex justify-between"><span>French Fries</span><span>22K</span></div>
                <div class="flex justify-between"><span>Bitterballen</span><span>30K</span></div>
                <div class="flex justify-between"><span>Duck Skin</span><span>25K</span></div>
                <div class="flex justify-between"><span>Chicken Skin</span><span>25K</span></div>
                <div class="flex justify-between"><span>Platter</span><span>35K</span></div>
                <div class="flex justify-between"><span>Banana Wrap</span><span>25K</span></div>
                <div class="flex justify-between"><span>Banana Grill with Palm Sugar</span><span>25K</span></div>
                <div class="flex justify-between"><span>Cheesy Cassava</span><span>25K</span></div>
                <div class="flex justify-between"><span>Crispy Cassava</span><span>15K</span></div>
            </div>
        </section>

        <!-- TOAST & BREAD -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Toast & Bread</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Kaya Bread</span><span>15K</span></div>
                <div class="flex justify-between"><span>Nutella Bread</span><span>18K</span></div>
                <div class="flex justify-between"><span>Crispy Duck Long Bun</span><span>35K</span></div>
                <div class="flex justify-between"><span>Crispy Duck Slider</span><span>35K</span></div>
                <div class="flex justify-between"><span>Om Sandwich</span><span>35K</span></div>
            </div>
        </section>

        <!-- PAO & ONDE ONDE -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Pao & Onde-Onde</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Pao Ayam Charsiu</span><span>25K</span></div>
                <div class="flex justify-between"><span>Pao Telur Asin</span><span>27K</span></div>
                <div class="flex justify-between"><span>Onde-Onde Tausa</span><span>25K</span></div>
                <div class="flex justify-between"><span>Onde-Onde Telur Asin</span><span>30K</span></div>
            </div>
        </section>

        <!-- RICE BOWL -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Rice Bowl</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Fried Duck with Rice</span><span>30K</span></div>
                <div class="flex justify-between"><span>Fried Duck with Spiced Rice</span><span>30K</span></div>
                <div class="flex justify-between"><span>Ricebowl Chicken Teriyaki / Blackpapper</span><span>28K</span>
                </div>
                <div class="flex justify-between"><span>Ricebowl Chicken Skin Blackpapper / Teriyaki</span><span>25K</span>
                </div>
                <div class="flex justify-between"><span>Ricebowl Chicken Sambal Matah</span><span>25K</span></div>
                <div class="flex justify-between"><span>Ricebowl Chicken Salted Egg</span><span>28K</span></div>
                <div class="flex justify-between"><span>Ricebowl Chicken Skin Sambal Matah</span><span>22K</span></div>
                <div class="flex justify-between"><span>Ricebowl Chicken Skin Salted Egg</span><span>26K</span></div>
                <div class="flex justify-between"><span>Fried Duck Butter Rice</span><span>30K</span></div>
                <div class="flex justify-between"><span>Add On Spiced Rice</span><span>8K</span></div>
                <div class="flex justify-between"><span>Butter Rice</span><span>10K</span></div>
                <div class="flex justify-between"><span>White Rice</span><span>5K</span></div>
                <div class="flex justify-between"><span>Sambal Matah</span><span>5K</span></div>
                <div class="flex justify-between"><span>Salted Egg Sauce</span><span>5K</span></div>
            </div>
        </section>

        <!-- MAIN COURSE -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-amber-300">Main Course</h2>
            <div class="space-y-3">
                <div class="flex justify-between"><span>Crispy Duck with Rice (Breast)</span><span>45K</span></div>
                <div class="flex justify-between"><span>Crispy Duck with Rice (Thigh)</span><span>45K</span></div>
                <div class="flex justify-between"><span>Shredded Duck</span><span>35K</span></div>
                <div class="flex justify-between"><span>Buncit Fried Chicken (Thigh)</span><span>40K</span></div>
                <div class="flex justify-between"><span>Buncit Fried Chicken (Breast)</span><span>40K</span></div>
                <div class="flex justify-between"><span>Add On Spiced Rice</span><span>8K</span></div>
                <div class="flex justify-between"><span>Butter Rice</span><span>10K</span></div>
                <div class="flex justify-between"><span>White Rice</span><span>5K</span></div>
                <div class="flex justify-between"><span>Ala Carte (Thigh / Breast)</span><span>40K</span></div>
            </div>
        </section>
    </div>

    <!-- CTA GOFOOD -->
    <div data-aos="fade-up" class="text-center mt-20">
        <a href="https://gofood.link/a/NnJ5nLC" target="_blank"
            class="inline-block px-10 py-4 bg-amber-600 hover:bg-amber-700 text-lg font-semibold rounded-full transition smooth-lift">
            Pesan Lewat GoFood 🚀
        </a>

        <p class="text-sm text-[#F4EBDD]/60 mt-3">
            Langsung pesan & kami siapkan dengan penuh rasa ☕
        </p>
    </div>
@endsection

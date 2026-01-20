@extends('layouts.app')

@section('content')
    <!-- HERO KONTAK (DENGAN BACKGROUND FOTO) -->
    <section
        class="relative h-[45vh] bg-[url('/images/kontak-bg2.jpg')] bg-cover bg-center flex items-center justify-center">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Konten -->
        <div class="relative z-10 text-center text-white max-w-3xl px-6">
            <h1 class="text-5xl font-bold mb-3">
                Temui <span class="text-amber-400">Kopi Om</span>
            </h1>
            <p class="text-[#F4EBDD]/80 max-w-xl mx-auto">
                Om Punya Rasa, Kamu Punya Selera — dan kita ketemu di tengah cerita.
                Yuk, mampir dan ngobrol langsung bareng kami!
            </p>
        </div>
    </section>


    <!-- INFORMASI KONTAK -->
    <section data-aos="fade-up" class="max-w-4xl mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold mb-8 text-amber-400 text-center">Informasi Kontak</h2>

        <div class="bg-[#1a1a1a] border border-[#333] rounded-2xl p-10 shadow-md shadow-black/20">
            <ul class="space-y-6 text-[#F4EBDD]/80 text-lg">
                <li>
                    <span class="font-semibold text-white">📍 Alamat:</span><br>
                    Jl. Teuku Umar No.43, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131
                </li>
                <li>
                    <span class="font-semibold text-white">🕓 Jam Buka:</span><br>
                    Senin – Sabtu: 08.30 – 01.00 WIB<br>
                    Minggu: 06.30 - 01.00 WIB

                </li>
                <li>
                    <span class="font-semibold text-white">📞 Telepon:</span><br>
                    <a href="https://wa.me/628156583139" target="_blank" class="text-amber-400 hover:underline">
                        +62 815-6583-139
                    </a>

                </li>
                <li>
                    <span class="font-semibold text-white">📸 Instagram:</span><br>
                    <a href="https://www.instagram.com/kopiom_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank" class="text-amber-400 hover:underline">@kopi.om</a>
                </li>
            </ul>
        </div>
    </section>
        <!-- CTA GOFOOD -->
    <div data-aos="fade-up" class="text-center mt-10 mb-24">
        <a href="https://gofood.link/a/NnJ5nLC"
           target="_blank"
           class="inline-block px-10 py-4 bg-amber-600 hover:bg-amber-700 text-lg font-semibold rounded-full transition smooth-lift">
            Pesan Lewat GoFood 🚀
        </a>

        <p class="text-sm text-[#F4EBDD]/60 mt-3">
            Klik untuk pesan langsung lewat GoFood.
        </p>
    </div>
@endsection

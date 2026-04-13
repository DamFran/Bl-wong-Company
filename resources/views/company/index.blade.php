<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Bl@wong</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
</head>
<body
    class="bg-stone-100 text-zinc-900 antialiased"
    @if ($heroBackground)
        style="background-image: linear-gradient(rgba(24, 24, 27, 0.76), rgba(24, 24, 27, 0.82)), url('{{ asset('images/' . $heroBackground) }}'); background-attachment: fixed; background-size: cover; background-position: center;"
    @endif
>
    <header class="sticky top-0 z-50 border-b border-stone-300 bg-white/90 backdrop-blur">
        <nav class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="#" class="flex items-center gap-2 text-xl font-bold tracking-tight text-zinc-900">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Bl@wong" class="h-10 w-10 rounded-full object-cover ring-1 ring-stone-300">
                <span>Bl@wong</span>
            </a>
            <button
                type="button"
                data-nav-toggle
                class="inline-flex items-center rounded-md border border-stone-300 px-3 py-2 text-sm font-medium text-zinc-700 transition hover:bg-amber-100/70 md:hidden"
                aria-label="Buka menu navigasi"
                aria-expanded="false"
                aria-controls="mobile-nav"
            >
                Menu
            </button>
            <div class="hidden items-center gap-6 text-sm font-medium text-zinc-700 md:flex">
                <a href="#services" data-nav-link class="rounded-md px-2 py-1 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Layanan</a>
                <a href="#showcase" data-nav-link class="rounded-md px-2 py-1 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Showcase</a>
                <a href="#about" data-nav-link class="rounded-md px-2 py-1 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Tentang</a>
                <a href="#contact" data-nav-link class="rounded-md px-2 py-1 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Kontak</a>
            </div>
        </nav>
        <div id="mobile-nav" class="hidden border-t border-stone-300 bg-white px-4 py-3 md:hidden">
            <div class="flex flex-col gap-2 text-sm font-medium text-zinc-700">
                <a href="#services" data-nav-link class="rounded-md px-3 py-2 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Layanan</a>
                <a href="#showcase" data-nav-link class="rounded-md px-3 py-2 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Showcase</a>
                <a href="#about" data-nav-link class="rounded-md px-3 py-2 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Tentang</a>
                <a href="#contact" data-nav-link class="rounded-md px-3 py-2 transition-all duration-300 hover:bg-amber-100/70 hover:text-amber-800">Kontak</a>
            </div>
        </div>
    </header>

    <main>
        <section class="px-4 py-16 sm:px-6 sm:py-20">
            <div class="mx-auto w-full max-w-6xl text-center">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo Bl@wong"
                    class="mx-auto mb-6 h-28 w-28 rounded-full object-cover ring-2 ring-amber-200/70"
                >
                <h1 class="mx-auto max-w-4xl text-3xl font-extrabold leading-tight text-white sm:text-5xl">
                    Bl@wong, Mitra Industri Kulit Berkualitas dari Kalimantan Utara
                </h1>
                <p class="mx-auto mt-5 max-w-3xl text-lg text-stone-100">
                    Bl@wong adalah perusahaan yang bergerak di bidang kulit di Indonesia, berlokasi di Kalimantan Utara.
                    Kami menghadirkan produk kulit pilihan dengan standar mutu tinggi untuk kebutuhan industri dan komersial.
                </p>
                <a
                    href="#contact"
                    class="mt-8 inline-flex rounded-lg bg-amber-200 px-6 py-3 text-sm font-semibold text-zinc-900 shadow-sm transition hover:bg-amber-300"
                >
                    Hubungi Kami
                </a>
            </div>
        </section>

        <section id="services" class="px-4 py-16 sm:px-6">
            <div class="mx-auto w-full max-w-6xl rounded-2xl border border-stone-300 bg-white/92 p-6 shadow-lg sm:p-10">
                <h2 class="text-center text-3xl font-bold text-zinc-900">Layanan Kami</h2>
                <p class="mt-3 text-center text-zinc-600">Solusi terbaik untuk kebutuhan produk dan pengolahan kulit Anda.</p>

                <div class="mt-10 grid gap-6 md:grid-cols-3">
                    <article class="rounded-xl border border-stone-300 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-zinc-900">Pengolahan Kulit</h3>
                        <p class="mt-3 text-sm text-zinc-600">
                            Proses pengolahan kulit dengan metode terstandar untuk menghasilkan material yang kuat dan tahan lama.
                        </p>
                    </article>

                    <article class="rounded-xl border border-stone-300 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-zinc-900">Produksi Produk Kulit</h3>
                        <p class="mt-3 text-sm text-zinc-600">
                            Menyediakan berbagai produk kulit berkualitas untuk kebutuhan fashion, furnitur, dan industri.
                        </p>
                    </article>

                    <article class="rounded-xl border border-stone-300 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-zinc-900">Distribusi dan Kemitraan</h3>
                        <p class="mt-3 text-sm text-zinc-600">
                            Melayani distribusi nasional serta membuka kemitraan jangka panjang dengan berbagai pelaku usaha.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="showcase" class="px-4 py-16 sm:px-6">
            <div class="mx-auto w-full max-w-6xl rounded-2xl border border-stone-300 bg-white/92 p-6 shadow-lg sm:p-10">
                <h2 class="text-center text-3xl font-bold text-zinc-900">Showcase Produk</h2>
                <p class="mt-3 text-center text-zinc-600">Dokumentasi visual produk dan proses kerja Bl@wong.</p>

                @if (count($showcaseFiles) > 0)
                    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($showcaseFiles as $file)
                            <article class="overflow-hidden rounded-xl border border-stone-300 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                <img
                                    src="{{ asset('images/' . $file) }}"
                                    alt="{{ pathinfo($file, PATHINFO_FILENAME) }}"
                                    class="h-56 w-full object-cover"
                                    loading="lazy"
                                >
                                <div class="p-4">
                                    <h3 class="truncate text-sm font-semibold text-zinc-900">{{ pathinfo($file, PATHINFO_FILENAME) }}</h3>
                                    <p class="mt-1 text-xs text-zinc-600">Dokumentasi produk kulit Bl@wong</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="mt-8 rounded-xl border border-dashed border-stone-400 bg-stone-50 p-8 text-center">
                        <p class="font-medium text-zinc-700">Belum ada gambar showcase di folder `public/images`.</p>
                        <p class="mt-2 text-sm text-zinc-600">Tambahkan gambar produk, lalu refresh halaman.</p>
                    </div>
                @endif
            </div>
        </section>

        <section id="about" class="px-4 py-16 sm:px-6">
            <div class="mx-auto grid w-full max-w-6xl gap-6 rounded-2xl border border-stone-300 bg-white/92 p-6 shadow-lg md:grid-cols-5 sm:p-10">
                <div class="md:col-span-3">
                    <h2 class="text-3xl font-bold text-zinc-900">Tentang Kami</h2>
                    <p class="mt-4 text-zinc-600">
                        Berbasis di Kalimantan Utara, Bl@wong berkomitmen menjadi perusahaan kulit terpercaya di Indonesia.
                        Kami mengutamakan kualitas bahan baku, ketelitian proses, dan kepuasan pelanggan.
                    </p>
                    <p class="mt-4 text-zinc-600">
                        Dengan pengalaman dan jaringan yang terus berkembang, kami siap mendukung kebutuhan kulit untuk
                        berbagai sektor usaha, dari skala lokal hingga nasional.
                    </p>
                </div>

                <aside class="rounded-xl border border-stone-300 bg-white p-6 shadow-sm md:col-span-2">
                    <h3 class="text-lg font-semibold text-zinc-900">Keunggulan Bl@wong</h3>
                    <ul class="mt-4 list-disc space-y-2 pl-5 text-sm text-zinc-600">
                        <li>Standar kualitas kulit yang konsisten</li>
                        <li>Pelayanan profesional dan tepat waktu</li>
                        <li>Komitmen kemitraan jangka panjang</li>
                    </ul>
                </aside>
            </div>
        </section>

        <section id="contact" class="px-4 py-16 sm:px-6">
            <div class="mx-auto w-full max-w-6xl rounded-2xl border border-stone-300 bg-white/92 p-6 shadow-lg sm:p-10">
                <h2 class="text-center text-3xl font-bold text-zinc-900">Kontak Kami</h2>
                <p class="mt-3 text-center text-zinc-600">
                    Sampaikan kebutuhan Anda, tim kami siap membantu.
                </p>

                <div class="mx-auto mt-8 max-w-2xl rounded-xl border border-stone-300 bg-white p-6 shadow-sm">
                    <p class="text-zinc-700"><span class="font-semibold text-zinc-900">Email:</span> hello@blawong.com</p>
                    <p class="mt-2 text-zinc-700"><span class="font-semibold text-zinc-900">Telepon:</span> +62 813 5045 5212</p>
                    <p class="mt-2 text-zinc-700"><span class="font-semibold text-zinc-900">Lokasi:</span> Kalimantan Utara, Indonesia</p>
                    <a
                        href="https://wa.me/6281350455212?text=Saya%20tertarik%20dengan%20produk%20Bl%40wong."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 inline-flex rounded-lg bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-700"
                    >
                        Kontak via WhatsApp
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-stone-300 bg-white px-4 py-6 sm:px-6">
        <div class="mx-auto w-full max-w-6xl text-center text-sm text-zinc-500">
            &copy; {{ date('Y') }} Bl@wong. Seluruh hak cipta dilindungi.
        </div>
    </footer>

    @if (! (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))))
        <script>
            const navLinks = document.querySelectorAll('[data-nav-link]');
            const mobileNav = document.querySelector('#mobile-nav');
            const navToggle = document.querySelector('[data-nav-toggle]');

            if (navLinks.length > 0) {
                const activeClasses = ['bg-amber-200/70', 'text-amber-900'];

                const setActiveLink = (targetId) => {
                    navLinks.forEach((link) => {
                        const isActive = link.getAttribute('href') === `#${targetId}`;
                        link.classList.toggle(activeClasses[0], isActive);
                        link.classList.toggle(activeClasses[1], isActive);
                    });
                };

                navLinks.forEach((link) => {
                    link.addEventListener('click', (event) => {
                        event.preventDefault();
                        const target = document.querySelector(link.getAttribute('href'));

                        if (!target) return;

                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        setActiveLink(target.id);

                        if (mobileNav && navToggle) {
                            mobileNav.classList.add('hidden');
                            navToggle.setAttribute('aria-expanded', 'false');
                        }
                    });
                });
            }

            if (mobileNav && navToggle) {
                navToggle.addEventListener('click', () => {
                    mobileNav.classList.toggle('hidden');
                    const isOpen = !mobileNav.classList.contains('hidden');
                    navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                });
            }
        </script>
    @endif
</body>
</html>

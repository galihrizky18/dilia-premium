<x-header>
    @slot('title')
        Dashboard
    @endslot
</x-header>

<div class="body h-screen font-karma scroll-smooth">

    <div class="navbar mb-8">
        <x-user.side-bar-user />
    </div>

    {{-- hero --}}
    <div id="home" class=" hero w-full">
        <div class="hero min-h-screen" style="background-image: url({{ asset('asset/hero-image.svg') }});">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">LAYANAN PREMIUM</h1>
                    <p class="mb-5">DILIA UTAMA GROUP MELAYANI KEBUTUHAN PEMAKAI DENGAN MENGUBAH KE PENGGUNA PREMIUM
                    </p>
                    <div class="flex flex-row justify-center items-center gap-5">
                        <form action="{{ route('user.bePremium', ['id' => $currentUser->id_user]) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="btn btn-primary hover:bg-transparent hover:border-2 hover:border-white"
                                onclick="return confirm('Yakin Menjadi Pelanggan Premium??')">DAFTAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- benefits --}}
    <div id="benefits" class="benefits w-full mt-10 ">
        <div class="title px-20">
            <span class="border-b border-gray-500 w-full flex justify-center text-2xl font-bold mb-3">DILIA PREMIUM
                BENEFIT
            </span>
        </div>
        <div
            class="card-benefits sm:flex sm:flex-row grid grid-cols-2 justify-center gap-3 sm:gap-4 px-5 sm:px-10 h-[20rem]">

            <div
                class="cards flex flex-col w-full sm:w-[20%] h-full gap-3 p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-listrik.svg') }}" alt="" class="w-[50%]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    Premium Pelanggan Account
                </div>
                <div class="description  text-center sm:text-sm text-xs">
                    Premium pelanggan juga akan mendapatkan Account Executive khusus yang akan memberikan layanan setiap
                    saat
                </div>
            </div>
            <div
                class="cards flex flex-col w-full sm:w-[20%] h-full gap-3 p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-suplai.svg') }}" alt="" class="w-[50%]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    Suplai Listrik Terkemuka
                </div>
                <div class="description  text-center sm:text-sm text-xs">
                    Suplai listrik yang akan didapatkan pelanggan premium berasal lebih dari satu sumber
                </div>
            </div>
            <div
                class="cards flex flex-col w-full sm:w-[20%] h-full gap-3 p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-listrik.svg') }}" alt="" class="w-[50%]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    Berlaku Untuk Semua Pelanggan Potensial PLN
                </div>
                <div class="description  text-center sm:text-sm text-xs">
                    Selain itu, Pelanggan kecil seperti rumah tangga atau usaha kecil dapat diberikan jika ada suatu
                    kawasan atau klaster yang menginginkan layanan premium
                </div>
            </div>

        </div>
    </div>

    {{-- instansi Bergabung --}}
    <div id="benefits" class="benefits w-full mt-20 ">
        <div class="title px-20">
            <span class="border-b border-gray-500 w-full flex justify-center text-2xl font-bold mb-3">INSTANSI YANG
                TELAH MELAKUKAN PEMASANGAN PREMIUM PELANGGAN
            </span>
        </div>
        <div
            class="card-benefits sm:flex sm:flex-row grid grid-cols-2 justify-center gap-3 sm:gap-4 px-5 sm:px-10 h-[15rem]">
            <div
                class="cards flex flex-col py-5 w-full sm:w-[20%] h-full gap-3 p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-bandara.svg') }}" alt="" class="w-[50%] h-[8.5rem]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    BANDARA SULTAN MAHMUD BADARUDIN 2
                </div>
            </div>
            <div
                class="cards flex flex-col py-5 w-full sm:w-[20%] h-full gap-3 p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-rumahSakit.svg') }}" alt="" class="w-[50%] h-[8.5rem]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm ">
                    RUMAH SAKIT KHUSUS MATA PALEMBANG
                </div>

            </div>
            <div
                class="cards flex flex-col py-5 w-full sm:w-[20%] h-full p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-hotel.svg') }}" alt="" class="w-[50%] h-[9rem]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    BATIQA HOTEL PALEMBANG
                </div>
            </div>
            <div
                class="cards flex flex-col py-5 w-full sm:w-[20%] h-full p-3 bg-white shadow-xl rounded-xl border border-gray-500">
                <div class="gambar flex justify-center">
                    <img src="{{ asset('asset/icon-pdam.svg') }}" alt="" class="w-[50%] h-[9rem]">
                </div>
                <div class="title text-center font-bold sm:text-base text-sm">
                    PDAM TIRTA MUSI
                </div>
            </div>
        </div>
    </div>

    {{-- testimoni --}}
    <div id="testi" class="testi mt-20">
        <div class="title px-20">
            <span class="border-b border-gray-500 w-full flex justify-center text-2xl font-bold">TESTIMONIAL </span>
        </div>
        <div class="testi-section">
            <!-- Slider main container -->
            <div class="swiper p-10">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper px-20">
                    <!-- Slides -->

                    @foreach ($dataTesti as $testi)
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="card bg-base-100 shadow-xl">
                                    <div class="card-body flex flex-col gap-5">
                                        <h2 class="card-title flex justify-center ">
                                            <img src="{{ asset('asset/logo.png') }}" alt=""
                                                class="w-[100%] sm:w-[30%] rounded-full border border-black">
                                        </h2>
                                        <div class="name text-center font-bold text-base sm:text-lg ">
                                            <span>{{ $testi->first_name }} {{ $testi->last_name }}</span>
                                        </div>
                                        <div class="description text-center text-xs sm:text-sm line-clamp-2">
                                            {{ $testi->komentar }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div>
        <footer id="aboutUs" class="footer p-10 mt-10 bg-[#04091E] text-white">
            <nav>
                <header class="footer-title">Services</header>
                <a class="link link-hover">Branding</a>
                <a class="link link-hover">Design</a>
                <a class="link link-hover">Marketing</a>
                <a class="link link-hover">Advertisement</a>
            </nav>
            <nav>
                <header class="footer-title">Company</header>
                <a class="link link-hover">About us</a>
                <a class="link link-hover">Contact</a>
                <a class="link link-hover">Jobs</a>
                <a class="link link-hover">Press kit</a>
            </nav>
            <nav class=" w-full flex flex-col justify-center">
                <header class="footer-title ">Feedback Us</header>
                <form action="/testi" class="w-full flex flex-col gap-5" method="POST">
                    @csrf
                    <input type="text" id="komen" name="komen" placeholder="Comment"
                        class="input input-bordered w-full text-black rounded-xl p-3" />
                    <div class="tombol flex justify-center">
                        <button type="submit" class="bg-sky-600 hover:bg-sky-400 p-3 rounded-xl">Submit</button>
                    </div>
                </form>
            </nav>
            <nav>
                <header class="footer-title">Social</header>
                <div class="grid grid-flow-col gap-4">
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg></a>
                </div>
            </nav>
        </footer>
        <div class="footer footer-center p-4 bg-[#04091E] text-white border-t border-white">
            <aside>
                <p>Copyright © 2023 - 5 Code Development</p>
            </aside>
        </div>
    </div>

</div>

<x-footer>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // responjsive
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
            },

        });
    </script>
</x-footer>

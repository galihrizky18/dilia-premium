<div
    class="w-full fixed top-0 left-0 z-50 h-24 bg-white flex flex-row items-center px-10 justify-between font-playfair shadow-lg">
    <div class="logo">
        <img src="{{ asset('asset/logo.png') }}" alt="" class="w-[30%]">
    </div>
    <div class="menu">
        <ul class="flex flex-row items-center gap-5 text-lg">
            <a href="#home">
                <li class="">
                    HOME
                </li>
            </a>
            <a href="#benefits">
                <li class="">
                    BENEFITS
                </li>
            </a>
            <a href="#testi">
                <li class="">
                    TESTIMONI
                </li>
            </a>
            <a href="#aboutUs">
                <li class="">
                    ABOUT US
                </li>
            </a>
            <a href="/logout">
                <li class=" bg-gray-600 text-white p-2 rounded-xl hover:bg-gray-800"
                    onclick="return confirm('Apakah Anda yakin ingin logout?')">
                    LOG OUT
                </li>
            </a>

        </ul>
    </div>
</div>

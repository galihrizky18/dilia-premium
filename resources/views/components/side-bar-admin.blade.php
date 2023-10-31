<style>
    /* menghapus tanda scroll */
    .body-sideBar::-webkit-scrollbar {
        width: 0;
    }

    .body-sideBar {
        scrollbar-width: none;
    }
</style>

<div class="sidebar-admin hidden sm:flex flex-row">
    <div class="flex flex-col fixed h-full border-black w-[20%] p-3 bg-[#343A40] text-white font-Playfair shadow-xl">
        <div class="logo flex flex-row border-b-[1px] border-gray-400 pb-3">
            <div class="gambar w-[20%] h-[110%] bg-white rounded-full">
                <img src="{{ asset('asset/logo.png') }}" alt="">
            </div>
            <div class="perusahan flex items-center ml-3 ">
                <span class="text-base font-bold font-playfair">Dilia Premium</span>
            </div>
        </div>
        <div class="body-sideBar h-full overflow-y-auto ">
            <div class="user-login  h-10 flex items-center justify-center border-b-[1px] border-gray-400">
                <span class="text-base font-playfair ">{{ $userCurrent->first_name }}</span>
            </div>
            <div class="menu flex flex-col font-della mt-2 text-sm">
                <a href="/admin">
                    <div
                        class="menu2 p-2 grid grid-cols-8 items-center rounded-xl hover:bg-blue-600 hover:font-bold transition duration-200">
                        <img src="{{ asset('asset/icon-dashboard.svg') }}" alt="" class="w-7">
                        <div class="ml-3 col-span-7">Dashboard</div>
                    </div>
                </a>
                <a href="/admin/users">
                    <div
                        class="menu1 p-2 grid grid-cols-8 items-center rounded-xl hover:bg-blue-600 hover:font-bold active:bg-blue-600 transition duration-200">
                        <i class="fa-sharp fa-solid fa-users fa-lg "></i>
                        <div class="ml-3 col-span-7">Kelola User</div>
                    </div>
                </a>
                <a href="">
                    <div
                        class="menu2 p-2 grid grid-cols-8 items-center rounded-xl hover:bg-blue-600 hover:font-bold transition duration-200">
                        <img src="{{ asset('asset/icon-ulasan.svg') }}" alt="" class="w-7 ">
                        <div class="ml-3 col-span-7">Ulasan</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="logout">
            <div
                class="user-login py-2 h-8 flex items-center justify-center border-b-[1px] border-t-[1px] border-gray-400 hover:bg-gray-500 transition duration-200">
                <a href="/logout" class="w-full flex justify-center text-base">
                    Logout
                </a>
            </div>
        </div>

    </div>

    <div class="burger-button fixed text-red-500 ml-[20%]">
        asdas
    </div>
</div>

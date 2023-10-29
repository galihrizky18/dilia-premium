<style>
    /* menghapus tanda scroll */
    .body-sideBar::-webkit-scrollbar {
        width: 0;
    }

    .body-sideBar {
        scrollbar-width: none;
    }
</style>

<div class="border flex flex-col fixed h-full border-black w-[20%] p-3 bg-[#343A40] text-white font-Playfair shadow-xl">
    <div class="logo flex flex-row border-b-[1px] border-gray-400 pb-3">
        <div class="gambar w-[20%] bg-white rounded-full">
            <img src="{{ asset('asset/logo.png') }}" alt="">
        </div>
        <div class="perusahan flex items-center ml-3 ">
            <span class="text-base font-bold ">Dilia Premium</span>
        </div>
    </div>
    <div class="body-sideBar h-full overflow-y-auto ">
        <div class="user-login py-2 h-14 flex items-center justify-center border-b-[1px] border-gray-400">
            <span class="text-lg font-Playfair">{{ $userCurrent->nama }}</span>
        </div>
        <div class="menu flex flex-col font-della mt-2">
            <a href="">
                <div class="menu1 flex p-2 flex-row items-center rounded-xl hover:bg-blue-600 hover:font-bold">
                    <i class="fa-sharp fa-solid fa-users fa-lg"></i>
                    <div class="ml-3 ">Kelola User</div>
                </div>
            </a>
            <a href="">
                <div class="menu2 flex p-2 flex-row items-center rounded-xl hover:bg-blue-600 hover:font-bold">
                    <i class="fa-sharp fa-solid fa-users fa-lg"></i>
                    <div class="ml-3 ">Menu 2</div>
                </div>
            </a>
        </div>
    </div>
    <div class="logout">
        <div class="user-login py-2 h-8 flex items-center justify-center border-b-[1px] border-t-[1px] border-gray-400">
            <a href="/logout" class="w-full flex justify-center">
                Logout
            </a>
        </div>
    </div>

</div>

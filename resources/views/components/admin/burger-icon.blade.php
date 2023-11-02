<div class="burger-icon mr-3 cursor-pointer" onclick="toggleSidebar()">
    <img src="{{ asset('asset/icon-burger.svg') }}" alt="" class="w-8">
</div>

<script>
    function toggleSidebar() {
        const sideBarAdmin = document.getElementById('sideBarAdmin');
        const bodyContent = document.getElementById('bodyContent');
        const burgerAndroid = document.getElementById('burger-android');

        // sidebar hilang
        if (sideBarAdmin.classList.contains('hidden')) {
            sideBarAdmin.classList.remove('hidden');
            sideBarAdmin.classList.add('sm:flex');
            bodyContent.classList.add('sm:ml-[20%]');
            burgerAndroid.classList.remove('hidden');


        } else if (!sideBarAdmin.classList.contains('hidden')) { //sidebar muncul
            sideBarAdmin.classList.remove('sm:flex');
            sideBarAdmin.classList.add('hidden');
            bodyContent.classList.remove('sm:ml-[20%]');
            burgerAndroid.classList.remove('hidden');
        }

    }

    function toggleSidebarAndro() {
        const burgerAndroid = document.getElementById('burger-android');
        const sideBarAdmin = document.getElementById('sideBarAdmin');

        burgerAndroid.classList.add('hidden');
        sideBarAdmin.classList.add('hidden');



    }
</script>

<x-header></x-header>


<div class="body flex flex-row w-screen">
    {{-- <x-side-bar-admin :userCurrent="$userCurrent" /> --}}
    <x-side-bar-admin :userCurrent="$dataAdmin" />


    <div class="content ml-[20%] h-[1000px] w-full ">
        <div class="title w-full p-5 border border-black"> Ini Dashboard</div>


    </div>
</div>

<x-footer></x-footer>

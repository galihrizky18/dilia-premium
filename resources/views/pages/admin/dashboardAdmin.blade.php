<x-header></x-header>


<div class="body flex flex-row w-screen">
    {{-- <x-side-bar-admin :userCurrent="$userCurrent" /> --}}
    <x-side-bar-admin :userCurrent="$dataAdmin" />


    <div id="bodyContent" class="content sm:ml-[20%] p-3 font-della w-full h-screen">
        <x-title-page title="Dashboard"></x-title-page>

        <div class="roud-map mt-3 px-7 bg-white p-2 text-sm text-gray-400 rounded-lg">
            <div class="text-sm breadcrumbs">
                <ul>
                    <li class="text-black">Admin</li>
                </ul>
            </div>
        </div>

        {{-- Sser Count --}}
        <div class="user-count mt-5 grid sm:grid-cols-3 grid-cols-2 sm:gap-10 gap-3 sm:px-5">
            <div
                class="card-premium h-[70px] sm:h-[100px] bg-white rounded-xl py-3 px-5 flex flex-row items-center shadow-lg">
                <div class="count flex justify-center items-center w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-[#c3daff] ">
                    <span class="text-blue-600 font-bold text-sm sm:text-base">{{ $countPremiumUser }}</span>
                </div>
                <div class="title ml-[7%]">
                    <span class="text-gray-500 font-bold text-sm sm:text-base">User Premium</span>
                </div>
            </div>
            <div
                class="card-premium h-[70px] sm:h-[100px] bg-white rounded-xl py-3  px-5 flex flex-row items-center shadow-lg">
                <div
                    class="count flex justify-center items-center w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-[#ffeeb5] ">
                    <span class="text-blue-600 font-bold text-sm sm:text-base">{{ $countNonPremiumUser }}</span>
                </div>
                <div class="title ml-[7%]">
                    <span class="text-gray-500 font-bold text-sm sm:text-base">User Premium</span>
                </div>
            </div>
            <div
                class="card-premium h-[70px] sm:h-[100px] bg-white rounded-xl py-3  px-5 flex flex-row items-center shadow-lg">
                <div
                    class="count flex justify-center items-center w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-[#9eff9e] ">
                    <span class="text-blue-600 font-bold text-sm sm:text-base">{{ $countAllUser }}</span>
                </div>
                <div class="title ml-[7%]">
                    <span class="text-gray-500 font-bold text-sm sm:text-base">User Premium</span>
                </div>
            </div>

        </div>

        {{-- Users Chart --}}
        <div class=" mt-5 grid sm:grid-cols-2 px-3 gap-3">
            <div class="chart bg-white rounded-lg shadow-lg p-2 sm:p-5">
                {!! $userChart->container() !!}
            </div>
        </div>



    </div>
</div>

<x-footer>
    <script src="{{ $userChart->cdn() }}"></script>
    {{ $userChart->script() }}
</x-footer>

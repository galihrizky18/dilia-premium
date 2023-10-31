<x-header></x-header>


<div class="body flex flex-row">
    {{-- <x-side-bar-admin :userCurrent="$userCurrent" /> --}}
    <x-side-bar-admin :userCurrent="$dataAdmin" />


    <div class="content sm:ml-[20%] h-[1000px] p-3 font-della w-full">
        <div class="title w-full p-3 bg-white font-bold rounded-lg"> Users</div>
        <div class="roud-map mt-3 bg-white p-3 text-sm text-gray-400 rounded-lg">admin / <span
                class="text-black">user</span></div>

        <div class="body bg-white mt-5 rounded-lg p-3 w-full">
            <div class="filter border-t border-b p-2 border-gray-300">
                <form action="">
                    <div class="title font-bold">Filter</div>
                    <div class="menu-filter mt-2 px-4 grid grid-cols-2 gap-5 w-[50%] py-3">
                        <div class="filter1 flex flex-col ">
                            <label for="" class="flex justify-center">Status</label>
                            <select name="" id="" class="mt-2 border border-gray-400 px-2">
                                <option value="">--- Status ---</option>
                                <option value="" class="">Premium</option>
                                <option value="" class="">Non Premium</option>
                            </select>
                        </div>
                        <div class="tombol flex flex-col justify-end items-center">
                            <button type="submit"
                                class="bg-gray-400 w-[90%] text-white font-bold p-[0.3rem] rounded-xl hover:bg-gray-500">Filter</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" data-pelanggans mt-8 w-full ">

                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th class="w-[5%]">No</th>
                            <th class="w-[10%]">Id User</th>
                            <th class="">Username</th>
                            <th class="">Name</th>
                            <th class="w-[15%]">Status</th>
                            <th class="w-[15%]">No Hp</th>
                            <th class="w-[15%]"></th>
                        </tr>
                    </thead>
                    <tbody>

                        {{ $no = 1 }}
                        @foreach ($dataUser as $user)
                            <tr>
                                <td class="flex justify-center">{{ $no++ }}</td>
                                <td>{{ $user->user->id_user }}</td>
                                <td>{{ $user->user->username }}</td>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td class="flex justify-center">
                                    <button disabled
                                        class="{{ $user->user->status == 'premium' ? 'bg-success-600' : 'bg-red-500' }} rounded-xl py-1 px-2 text-white">
                                        {{ $user->user->status }}
                                    </button>
                                </td>
                                <td>{{ $user->noHp }}</td>
                                <td class="flex flex-wrap gap-[0.3rem] items-center justify-start">
                                    <a href="">
                                        <button
                                            class="bg-sky-500 hover:bg-sky-600 text-white w-14 rounded-xl p-[0.2rem]">Edit</button>
                                    </a>
                                    <a href="">
                                        <button
                                            class="bg-red-500 hover:bg-red-600 text-white w-14 rounded-xl  p-[0.3rem]">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>


    </div>
</div>


<x-footer>
    <script>
        new DataTable('#example', {
            responsive: true,
            paging: false,
            scrollCollapse: true,
            scrollY: '300px',
            autoWidth: true,
        });
    </script>
</x-footer>

<x-header></x-header>

<div class="body flex flex-row h-screen">
    {{-- <x-side-bar-admin :userCurrent="$userCurrent" /> --}}
    <x-side-bar-admin :userCurrent="$dataAdmin" />

    <div id="bodyContent" class="content sm:ml-[20%] p-3 font-della w-full">
        {{-- component TItle Page --}}
        <x-title-page title="Users"></x-title-page>

        <div>
            <div class="roud-map mt-3 px-7 bg-white p-2 text-sm text-gray-400 rounded-lg">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li class="hover:text-black transition"><a href="/admin">Admin</a></li>
                        <li class="text-black">Kelola User</li>
                    </ul>
                </div>
            </div>

            <div class="body bg-white mt-5 rounded-lg p-3 w-full ">
                <div class="filter border-t border-b p-2 border-gray-300">
                    <form action="/admin/filter/status" method="POST">
                        @csrf
                        <div class="title font-bold text-black">Filter</div>
                        <div class="menu-filter mt-2 px-4 grid grid-cols-2 gap-3 sm:w-[50%] py-3">
                            <div class="filter1 flex flex-col ">
                                <label for="" class="flex justify-center text-black">Status</label>
                                <select name="status" id="status" class="mt-2 border border-gray-400 px-2 bg-white">
                                    <option value="" class="text-xs sm:text-base text-black">--- Status ---
                                    </option>
                                    <option value="all" class="text-xs sm:text-base">All</option>
                                    <option value="premium" class="text-xs sm:text-base">Premium</option>
                                    <option value="non-premium" class="text-xs sm:text-base">Non Premium</option>
                                </select>
                            </div>
                            <div class="tombol flex flex-col justify-end items-center">
                                <button type="submit"
                                    class="bg-gray-400 w-[90%] text-white font-bold p-[0.3rem] rounded-xl hover:bg-gray-500 transition">
                                    Filter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" data-pelanggans mt-8 w-full ">
                    @if (session()->has('successUpdate'))
                        <div class="alert alert-success p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('successUpdate') }}</span>
                        </div>
                    @endif
                    @if (session()->has('successDelete'))
                        <div class="alert alert-error p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('successDelete') }}</span>
                        </div>
                    @endif
                    <table id="example" class="display text-black">
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
                                    <td class="flex items-center justify-center">{{ $no++ }}</td>
                                    <td>{{ $user->user->id_user }}</td>
                                    <td>{{ $user->user->username }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td class="flex justify-center">
                                        <button disabled
                                            class="{{ $user->user->status == 'premium' ? 'bg-success-600' : 'bg-red-500' }} rounded-xl py-1 px-2 text-white">
                                            {{ ucwords($user->user->status) }}
                                        </button>
                                    </td>
                                    <td>{{ $user->noHp }}</td>
                                    <td class="flex flex-wrap gap-[0.3rem] items-center justify-start">
                                        <a href="#my_modal_{{ $user->user->id_user }}"
                                            class="btn btn-sm bg-sky-500 text-white hover:bg-sky-600">Edit</a>
                                        <div>
                                            <form action="/admin/user/{{ $user->user->id_user }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class=" bg-red-500 hover:bg-red-600 text-white w-14 rounded-xl p-[0.3rem]"
                                                    onclick="return confirm('Yakin Hapus??')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($dataUser as $user)
    <div class="modal" id="my_modal_{{ $user->user->id_user }}">
        <form action="/admin/user/{{ $user->user->id_user }}" method="POST">
            @csrf
            <div class="modal-box ">
                <h3 class="font-bold text-lg">Edit User</h3>
                <div class="body text-black">
                    <div class="detail grid grid-cols-3 gap-x-10 gap-y-5 mt-5">
                        <div class="username flex flex-col">
                            <label for="">Username</label>
                            <input name="username" id="username" type="text" value="{{ $user->user->username }}"
                                placeholder="{{ $user->user->username }}"
                                class="bg-white border border-gray-400 px-2 text-black">
                        </div>
                        <div class="firstName flex flex-col">
                            <label for="">First Name</label>
                            <input name="firstName" id="firstName" type="text" placeholder="{{ $user->first_name }}"
                                value="{{ $user->first_name }}"
                                class="bg-white border border-gray-400 px-2 text-black">
                        </div>
                        <div class="lastName flex flex-col">
                            <label for="">Last Name</label>
                            <input name="lastName" id="lastName" type="text" placeholder="{{ $user->last_name }}"
                                value="{{ $user->last_name }}"
                                class="bg-white border border-gray-400 px-2 text-black">
                        </div>
                        <div class="status flex flex-col">
                            <label for="">Status</label>
                            <select name="status" id="status" class="border border-gray-400">
                                <option value="">--- Status ---</option>
                                <option value="premium" {{ $user->user->status === 'premium' ? 'selected' : '' }}>
                                    Premium
                                </option>
                                <option value="non-premium"
                                    {{ $user->user->status === 'non-premium' ? 'selected' : '' }}>Non-Premium</option>
                            </select>
                        </div>
                        <div class="no-hp flex flex-col">
                            <label for="">No Hp</label>
                            <input name="noHp" id="noHp" type="number" placeholder="{{ $user->noHp }}"
                                value="{{ $user->noHp }}" class="bg-white border border-gray-400 px-2 text-black">
                        </div>
                    </div>
                </div>
                <div class="modal-action">
                    <button type="submit" class="btn bg-green-500 hover:bg-green-600 text-white">Save</button>
                    <a href="#" class="btn bg-red-500 hover:bg-red-600 text-white">Close</a>
                </div>
            </div>
        </form>
    </div>
@endforeach

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

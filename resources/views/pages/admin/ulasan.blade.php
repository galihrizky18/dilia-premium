<x-header>
    @slot('title')
        Ulasan
    @endslot
</x-header>

<div class="body flex flex-row h-screen">
    {{-- <x-side-bar-admin :userCurrent="$userCurrent" /> --}}
    <x-admin.side-bar-admin :userCurrent="$dataAdmin" />

    <div id="bodyContent" class="content sm:ml-[20%] p-3 font-della w-full">
        {{-- component TItle Page --}}
        <x-admin.title-page title="Users"></x-admin.title-page>

        <div>
            <div class="roud-map mt-3 px-7 bg-white p-2 text-sm text-gray-400 rounded-lg">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li class="hover:text-black transition"><a href="/admin">Admin</a></li>
                        <li class="text-black">Ulasan</li>
                    </ul>
                </div>
            </div>

            <div class="body bg-white mt-5 rounded-lg p-3 w-full ">

                <div class=" data-pelanggans w-full ">
                    @if (session()->has('successUpdate'))
                        <div class="alert alert-success p-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-white">{{ session('successUpdate') }}</span>
                        </div>
                    @endif
                    @if (session()->has('successDelete'))
                        <div class="alert alert-error p-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-white">{{ session('successDelete') }}</span>
                        </div>
                    @endif

                    <table id="example" class="display text-black">
                        <thead>
                            <tr class="text-center">
                                <th class="w-[5%] text-center">No</th>
                                <th class="w-[10%] text-center">Id User</th>
                                <th class="w-[20%] text-center">Nama</th>
                                <th class="w-[15%] text-center">No HP</th>
                                <th class=" text-center">Komentar</th>
                                <th class="w-[15%] text-center"></th>
                            </tr>
                        </thead>

                        <tbody c>
                            {{ $no = 1 }}
                            @foreach ($dataTesti as $testi)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $testi->id_user }}</td>
                                    <td>{{ $testi->first_name }} {{ $testi->last_name }}</td>
                                    <td>{{ $testi->noHp }}</td>
                                    <td>{{ $testi->komentar }}</td>
                                    <td class="flex flex-wrap gap-[0.3rem] items-center justify-start">
                                        <a href="#my_modal_{{ $testi->id_user }}_{{ $testi->komentar }}"
                                            class="btn btn-sm bg-sky-500 text-white hover:bg-sky-600">
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                                        </a>
                                        <div>
                                            <form action="/admin/testi/{{ $testi->id_user }}" method="POST">
                                                @csrf
                                                <input type="text" name="id_user" id="id_user"
                                                    value="{{ $testi->id_user }}" hidden>
                                                <input type="text" name="komentar" id="komentar"
                                                    value="{{ $testi->komentar }}" hidden>
                                                <button type="submit"
                                                    class=" bg-red-500 hover:bg-red-600 text-white w-10 rounded-xl p-[0.3rem]"
                                                    onclick="return confirm('Yakin Hapus??')">
                                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
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

@foreach ($dataTesti as $testi)
    <div class="modal" id="my_modal_{{ $testi->id_user }}_{{ $testi->komentar }}">
        <div class="modal-box ">
            <h3 class="font-bold text-lg">View Testi</h3>
            <div class="body text-black">
                <div class="detail grid grid-cols-2 gap-x-5 gap-y-3 mt-5">
                    <div class="username flex flex-col">
                        <label for="">Id User</label>
                        <input type="text" value="{{ $testi->id_user }}"
                            class="bg-white border border-gray-400 px-2 text-black" readonly>
                    </div>
                    <div class="firstName flex flex-col">
                        <label for="">First Name</label>
                        <input name="firstName" id="firstName" type="text" value="{{ $testi->first_name }}"
                            class="bg-white border border-gray-400 px-2 text-black" readonly>
                    </div>
                    <div class="lastName flex flex-col">
                        <label for="">Last Name</label>
                        <input name="lastName" id="lastName" type="text" value="{{ $testi->last_name }}"
                            class="bg-white border border-gray-400 px-2 text-black" readonly>
                    </div>
                    <div class="noHp flex flex-col">
                        <label for="">No Hp</label>
                        <input name="noHp" id="noHp" type="text" value="{{ $testi->noHp }}"
                            class="bg-white border border-gray-400 px-2 text-black" readonly>
                    </div>
                </div>
                <div class="komentar flex mt-5 h-52">
                    <textarea class="textarea textarea-bordered w-full h-full border-black" placeholder="{{ $testi->komentar }}" readonly></textarea>
                </div>
            </div>
            <div class="modal-action">
                <a href="#" class="btn bg-red-500 hover:bg-red-600 text-white">Close</a>
            </div>
        </div>
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

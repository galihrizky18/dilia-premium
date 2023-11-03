<x-header>
    @slot('title')
        Register
    @endslot
</x-header>


<div class="login flex flex-col w-screen bg-[#e7e5e5] ">
    <div class="flex justify-center sm:justify-start">
        <img src="{{ asset('asset/logo.png') }}" alt="" class="w-28 sm:ml-10 sm:mt-5 mt-3 ">
    </div>
    <div class="h-screen flex justify-center mt-3">
        <div class="card-login h-[85%] w-[90%] sm:w-[50%] p-2 sm:p-5 flex flex-col items-center bg-[#f3f2f2] shadow-xl">
            <div class="title text-3xl font-bold font-Playfair p-5 sm:p-0 mb-3">
                User Registerasi
            </div>
            @if (session()->has('akunAda'))
                <div class="mb-2 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-2 text-base text-danger-700"
                    role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('akunAda') }}
                </div>
            @endif
            <div class="form w-full  ">
                <form action="/register" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">

                        <div class=" flex justify-center">
                            <input type="text" name="username" id="username"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('username')
                            border-red-500
                            @enderror"
                                placeholder="Username">

                        </div>
                        <div class="flex justify-center">
                            <input type="password" name="password" id="password"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('password')
                            border-red-500
                            @enderror"
                                placeholder="Password">

                        </div>
                        <div class="flex justify-center">
                            <input type="text" name="first_name" id="first_name"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('first_name')
                            border-red-500
                            @enderror"
                                placeholder="Frist Name">
                        </div>
                        <div class="flex justify-center">
                            <input type="text" name="last_name" id="last_name"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('last_name')
                            border-red-500
                            @enderror"
                                placeholder="Last Name">
                        </div>
                        <div class="flex justify-center">
                            <input type="text" name="provinsi" id="provinsi"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('provinsi')
                            border-red-500
                            @enderror"
                                placeholder="Provinsi">
                        </div>
                        <div class="flex justify-center">
                            <input type="text" name="kota" id="kota"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('kota')
                            border-red-500
                            @enderror"
                                placeholder="Kota">
                        </div>
                        <div class="flex justify-center">
                            <input type="number" name="noHp" id="noHp"
                                class="border border-gray-300 w-full h-12 px-5 mt-3 @error('noHp')
                            border-red-500
                            @enderror"
                                placeholder="No Hp">
                        </div>

                    </div>
                    <div class="submit w-full flex justify-center mt-8">
                        <button type="submit"
                            class="w-[80%] h-10 bg-yellow-300 hover:bg-yellow-400 font-bold text-xl border border-yellow-400">Register</button>
                    </div>
                </form>
            </div>

            <div class="forgot mt-5 flex justify-end w-[80%]">

                <a href="/" class="text-gray-500 hover:text-gray-700">
                    Back Login
                </a>
            </div>

        </div>
    </div>
</div>



<x-footer></x-footer>

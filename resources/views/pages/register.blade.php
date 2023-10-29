<x-header>
    @slot('title')
        Register
    @endslot
</x-header>


<div class="login flex flex-col h-screen w-screen bg-[#e7e5e5] ">
    <div class="flex justify-center sm:justify-start">
        <img src="{{ asset('asset/logo.png') }}" alt="" class="w-28 sm:ml-10 sm:mt-5 mt-3 ">
    </div>
    <div class="h-screen flex justify-center mt-3">
        <div class="card-login h-[90%] w-[90%] sm:w-[50%]  p-2 sm:p-5 flex flex-col items-center bg-[#f3f2f2] shadow-xl">
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
                <form action="/register" class="flex flex-col" method="POST">
                    @csrf
                    <div class=" flex justify-center">
                        <input type="text" name="nama" id="nama"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-12 px-5 @error('nama')
                            border-red-500
                            @enderror"
                            placeholder="nama">
                        <div class="icon absolute  sm:right-[33%] right-[70px] mt-3">
                            <i id="iconNama"
                                class="fa-solid fa-address-card fa-lg text-gray-400 @error('nama')
                            text-red-500
                            @enderror"></i>
                        </div>
                    </div>
                    <div class=" flex justify-center">
                        <input type="text" name="username" id="username"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-12 px-5 mt-3 @error('username')
                            border-red-500
                            @enderror"
                            placeholder="Username">
                        <div class="icon absolute  sm:right-[33%] right-[70px] mt-6">
                            <i id="iconUsername"
                                class="fa-solid text-gray-400 fa-user fa-lg @error('username')
                            text-red-500
                            @enderror"></i>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <input type="password" name="password" id="password"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-12 px-5 mt-3 @error('password')
                            border-red-500
                            @enderror"
                            placeholder="Password">
                        <div class="icon absolute sm:right-[33%] right-[70px] mt-6">
                            <i id="iconPassword"
                                class="fa-solid fa-lock fa-lg text-gray-400 @error('password')
                            text-red-500
                            @enderror"></i>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <input type="password" name="rePassword" id="rePassword"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-12 px-5 mt-3 @error('rePassword')
                            border-red-500
                            @enderror"
                            placeholder="Re-Password">
                        <div class="icon absolute sm:right-[33%] right-[70px] mt-6">
                            <i id="iconRePassword"
                                class="fa-solid fa-lock fa-lg text-gray-400 @error('rePassword')
                            text-red-500
                            @enderror"></i>
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

<script>
    const namaField = document.getElementById('nama');
    const iconNama = document.getElementById('iconNama');
    const usernameField = document.getElementById('username');
    const iconUsername = document.getElementById('iconUsername');
    const passwordField = document.getElementById('password');
    const iconPassword = document.getElementById('iconPassword');
    const rePasswordField = document.getElementById('rePassword');
    const iconRePassword = document.getElementById('iconRePassword');

    namaField.addEventListener('focus', () => {
        iconNama.classList.remove('text-gray-400');
        iconNama.classList.add('text-gray-600');
    });
    namaField.addEventListener('blur', () => {
        iconNama.classList.remove('text-gray-600');
        iconNama.classList.add('text-gray-400');
    });
    usernameField.addEventListener('focus', () => {
        iconUsername.classList.remove('text-gray-400');
        iconUsername.classList.add('text-gray-600');
    });
    usernameField.addEventListener('blur', () => {
        iconUsername.classList.remove('text-gray-600');
        iconUsername.classList.add('text-gray-400');
    });
    passwordField.addEventListener('focus', () => {
        iconPassword.classList.add('hidden');
    });
    passwordField.addEventListener('blur', () => {
        iconPassword.classList.remove('hidden');
    });
    rePasswordField.addEventListener('focus', () => {
        iconRePassword.classList.add('hidden');
    });
    rePasswordField.addEventListener('blur', () => {
        iconRePassword.classList.remove('hidden');
    });
</script>


<x-footer></x-footer>

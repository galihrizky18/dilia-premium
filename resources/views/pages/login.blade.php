<x-header>
    @slot('title')
        Login
    @endslot
</x-header>


<div class="login flex flex-col h-screen w-screen bg-[#e7e5e5] ">
    <div class="flex justify-center sm:justify-start">
        <img src="{{ asset('asset/logo.png') }}" alt="" class="w-28 sm:ml-10 sm:mt-5 mt-3 ">
    </div>
    <div class="h-screen flex justify-center mt-3">
        <div
            class="card-login sm:h-[55%] h-[50%] w-[90%] sm:w-[40%] p-2 sm:p-5 mt-14 sm:mt-0 flex flex-col items-center bg-[#f3f2f2] shadow-xl">
            <div class="title text-xl font-bold font-Playfair mb-3">
                User Login
            </div>

            {{-- Alert Fail --}}
            @if (session()->has('failLogin'))
                <div class="mb-2 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-2 text-base text-danger-700"
                    role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('failLogin') }}
                </div>
            @endif
            {{-- username Passowrd salah --}}
            @if (session()->has('failData'))
                <div class="mb-2 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-2 text-base text-danger-700"
                    role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('failData') }}
                </div>
            @endif
            {{-- Alert Success --}}
            @if (session()->has('successCreateData'))
                <div class="mb-2 inline-flex w-full items-center rounded-lg bg-success-100 px-6 py-2 text-base text-success-700"
                    role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('successCreateData') }}
                </div>
            @endif

            <div class="form w-full ">
                <form action="/login" class="flex flex-col" method="POST">
                    @csrf
                    <div class=" flex justify-center">
                        <input type="text" name="username" id="username"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-10 px-5 placeholder:text-base @error('username')
                                border-red-500
                            @enderror"
                            placeholder="Username">
                        <div class="icon absolute  sm:right-[37%] right-[70px] mt-3">
                            <i id="iconUsername" class="fa-solid text-gray-400 fa-user fa-md"></i>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <input type="password" name="password" id="password"
                            class="border border-gray-300 w-[90%] sm:w-[80%] h-10 px-5 mt-3 placeholder:text-base @error('password')
                            border-red-500
                        @enderror"
                            placeholder="Password">
                        <div class="icon absolute sm:right-[37%] right-[70px] mt-6">
                            <i id="iconPassword" class="fa-solid fa-lock fa-md text-gray-400"></i>
                        </div>
                    </div>

                    <div class="submit w-full flex justify-center mt-5">
                        <button type="submit"
                            class="w-[80%] h-10 bg-yellow-300 hover:bg-yellow-400 font-bold text-lg border border-yellow-400">Login</button>
                    </div>
                </form>
            </div>

            <div class="forgot mt-5 flex justify-between w-[80%]">
                <a href="/register" class="text-gray-500 hover:text-gray-700 text-sm">
                    Register
                </a>
                <a href="" class="text-gray-500 hover:text-gray-700 text-sm">
                    Forgot Password?
                </a>
            </div>

        </div>
    </div>
</div>



<script>
    const usernameField = document.getElementById('username');
    const iconUsername = document.getElementById('iconUsername');
    const passwordField = document.getElementById('password');
    const iconPassword = document.getElementById('iconPassword');
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

    if ({{ session()->has('failLogin') }}) {
        usernameField.classList.remove('border-gray-300');
        usernameField.classList.add('border-red-500');
        passwordField.classList.remove('border-gray-300');
        passwordField.classList.add('border-red-500');

        iconUsername.classList.remove('text-gray-400');
        iconUsername.classList.add('text-red-500');
        iconPassword.classList.remove('text-gray-400');
        iconPassword.classList.add('text-red-500');
    }
</script>

<x-footer></x-footer>

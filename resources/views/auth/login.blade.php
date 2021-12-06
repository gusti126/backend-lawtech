<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login LawTalk</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased container px-6 md:px-20 pt-6 md:pt-16">
        <div class="grid grid-flow-row grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-4">
                <div>
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-24">
                </div>
                <div>
                    <div class="font-bold mt-6 text-2xl">Sign In</div>
                    <div class="text-lg">Masuk untuk melakukan proses</div>
                </div>
                <form method="POST" action="{{ route('login') }}" class="mt-4">
                    @csrf
                    {{-- email --}}
                    <x-auth-validation-errors class="mb-4 font-semibold" :errors="$errors" />
                    <div>
                        <div>
                            <div class="mb-2">
                                <label for="email" class="text-lg font-semibold">Email</label>
                            </div>
                            <div>
                                <input type="text" name="email" id="email" autocomplete="off" autofocus
                                    value="{{ old('email') }}"
                                    class="border-gray-300 rounded-lg px-2 py-2 bg-green-50 w-full">
                            </div>
                        </div>
                    </div>
                    {{-- password --}}
                    <div class="mt-4">
                        <div>
                            <div class="mb-2">
                                <label for="password" class="text-lg font-semibold">Password</label>
                            </div>
                            <div>
                                <input type="password" name="password" id="password"
                                    class="border-gray-300 rounded-lg px-2 py-2 bg-green-50 w-full">
                            </div>
                        </div>
                    </div>

                    <div class="text-right mt-2">
                        <a href="" class="text-sm font-semibold hover:text-hijau-custom">Lupa Password ?</a>
                    </div>

                    <div>
                        <button type="submit"
                            class="block py-1 rounded-lg
                         bg-hijau-custom text-white w-full mt-4 border-2 border-hijau-custom hover:bg-green-400 hover:border-green-400">Login</button>
                    </div>
                    <div>
                        <a href="{{ route('register') }}"
                            class="block py-1 rounded-lg
                         border-2 border-hijau-custom text-hijau-custom w-full mt-4 text-center hover:bg-hijau-custom hover:text-white">Register</a>
                    </div>
                </form>
            </div>
            <div class="hidden md:block md:col-span-8">
                <div>
                    <img src="{{ asset('image/connect.png') }}" alt="" class="mx-auto w-96">
                </div>
            </div>
        </div>
    </div>
</body>

</html>

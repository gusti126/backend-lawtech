<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased container px-6 md:px-20 pt-6 md:pt-8">
        <div class="text-center">
            <div class="text-2xl font-bold">Register</div>
            <div>Kenali masalah hukum anda mudah, <br> terkendali dan aman</div>
        </div>
        <div class="mx-auto md:w-80">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 " :errors="$errors" />
        </div>
        <div class="md:w-72 mx-auto mt-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" class="font-semibold" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label class="font-semibold" for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label class="font-semibold" for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label class="font-semibold" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div>
                    <button type="submit"
                        class="block py-1 rounded-lg
                         bg-hijau-custom text-white w-full mt-4 border-2 border-hijau-custom hover:bg-green-400 hover:border-green-400">Register</button>
                </div>
                <div>
                    <a href="{{ route('login') }}"
                        class="block py-1 rounded-lg
                         border-2 border-hijau-custom text-hijau-custom w-full mt-4 text-center hover:bg-hijau-custom hover:text-white">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

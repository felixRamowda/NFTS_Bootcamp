<x-guest-layout>
    <x-slot name='subheader'>

        <x-subheader>
            <x-slot name="subtitle">
                SignUp
            </x-slot>
            <x-slot name="liText">
                Pages
            </x-slot>
        </x-subheader>    
    </x-slot>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1 class="mb-[64px] mt-[80px] text-white text-[36px] text-center">SigUp to NFTs</h1>

        <div class="h-[14px] flex flex-row mb-[40px]">
            <div class="h-[14px] w-[258px] border-b-gray-600 border-t-0 border-e-0 border-s-0 border  me-2.5"></div>
            <h2 class="text-gray-300 font-normal text-lg">Or login with email</h2>
            <div class="h-[14px] w-[258px] border-b-gray-600 border-t-0 border-e-0 border-s-0 border flex ms-2.5"></div>
        </div>
        <div class="h-[500px] w-[691px]">
            <!-- Name -->
            <div>

                <x-text-input placeholder="Your Full Name" id="name" class="block mt-[30px] w-full" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input placeholder="Your Email Address" id="email" class="block mt-[20px] w-full" type="email"
                    name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-text-input id="password" class="block mt-[20px] w-full" placeholder="Set Your Password" type="password"
                    name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-text-input id="password_confirmation" class="block mt-[20px] w-full" placeholder="Set Your Password Again"
                    type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>

            <x-primary-button class="w-[690px] h-[54px] mt-[34px]">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

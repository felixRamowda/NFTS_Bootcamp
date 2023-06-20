<x-guest-layout>
    <x-slot name='subheader'>

        <x-subheader>
            <x-slot name="subtitle">
                Login
            </x-slot>
            <x-slot name="liText">
                Pages
            </x-slot>
        </x-subheader>    
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form class="flex flex-col items-center mt-[80px] w-[691px] h-[427px] text-black" method="POST"
        action="{{ route('login') }}">
        @csrf
        
        {{-- Comence a editar --}}
        <h1 class="mb-[64px] text-white text-[36px]">Login to NFTs</h1>

        <div class="h-[14px] flex flex-row mb-[40px]">
            <div class="h-[14px] w-[258px] border-b-gray-600 border-t-0 border-e-0 border-s-0 border  me-2.5"></div>
            <h2 class="text-gray-300 font-normal text-lg">Or login with email</h2>
            <div class="h-[14px] w-[258px] border-b-gray-600 border-t-0 border-e-0 border-s-0 border flex ms-2.5"></div>
        </div>

        <div class="h-[427px] w-[691px]">
            <!-- Email Address -->
            <div class="mb-[24px] mt-[30px]">
                <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Enter your Email"
                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-[33px]">

                <x-text-input id="password" class="block mt-1 w-full" placeholder="Enter your password" type="password"
                    name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex justify-between">
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>
                
            </div>
            
        <x-primary-button class=" w-[690px] h-[54px] mt-[34px]">
            {{ __('Log in') }}
        </x-primary-button>
        </div>
       

    </form>
</x-guest-layout>

<header class="flex w-full h-[80px] z-[1] flex-col  bg-gray-900 bg-opacity-87 backdrop-filter backdrop-blur-md  text-white items-center border-b border-[#8A8AA0]">
    <div class="flex h-[80px] items-center justify-center">
        <a class="flex items-center justify-center gap-[10px] 
        mr-[239px] cursor-pointer hover:scale-125 ease-out duration-500
        " href="{{ route('home')}}">
            
            <img src="{{asset('images/logo.svg')}}" alt="">
           
            <h1 class="text-[36px] font-bold ">Axies</h1>
        </a>

        <nav>

        <ul class="flex text-lg  list-none gap-x-10 ">
            <li><a class="no-underline" href="">Home</a></li>
            <li><a class="flex items-center no-underline" href="">Explore <svg xmlns="http://www.w3.org/2000/svg"
                        width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path
                            d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
                            fill="white" />
                    </svg></a></li>
            <li><a class="flex items-center no-underline" href="">Activity <svg
                        xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6"
                        fill="none">
                        <path
                            d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
                            fill="white" />
                    </svg></a></li>
            <li><a class="flex items-center no-underline" href="">Community <svg
                        xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6"
                        fill="none">
                        <path
                            d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
                            fill="white" />
                    </svg></a></li>
            <li><a class="flex items-center no-underline" href="">Pages <svg xmlns="http://www.w3.org/2000/svg"
                        width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path
                            d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
                            fill="white" />
                    </svg></a></li>
            <li><a class="no-underline" href="">Contact</a></li>
        </ul>
        </nav>

        <div class="w-[16px] h-[15px] flex items-center justify-center ml-[106px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <mask id="mask0_504_1425" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1"
                    y="1" width="18" height="17">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66699 1.6665H17.6862V17.332H1.66699V1.6665Z"
                        fill="white" stroke="white" />
                </mask>
                <g mask="url(#mask0_504_1425)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.67711 2.87297C5.9406 2.87297 2.90072 5.84489 2.90072 9.49887C2.90072 13.1529 5.9406 16.1256 9.67711 16.1256C13.4128 16.1256 16.4527 13.1529 16.4527 9.49887C16.4527 5.84489 13.4128 2.87297 9.67711 2.87297ZM9.67709 17.332C5.26039 17.332 1.66699 13.818 1.66699 9.49887C1.66699 5.17973 5.26039 1.6665 9.67709 1.6665C14.0938 1.6665 17.6864 5.17973 17.6864 9.49887C17.6864 13.818 14.0938 17.332 9.67709 17.332Z"
                        fill="white" />
                    <path
                        d="M9.67711 2.37297C5.67512 2.37297 2.40072 5.5582 2.40072 9.49887H3.40072C3.40072 6.13158 6.20607 3.37297 9.67711 3.37297V2.37297ZM2.40072 9.49887C2.40072 13.4395 5.67504 16.6256 9.67711 16.6256V15.6256C6.20615 15.6256 3.40072 12.8662 3.40072 9.49887H2.40072ZM9.67711 16.6256C13.6784 16.6256 16.9527 13.4394 16.9527 9.49887H15.9527C15.9527 12.8663 13.1472 15.6256 9.67711 15.6256V16.6256ZM16.9527 9.49887C16.9527 5.55824 13.6783 2.37297 9.67711 2.37297V3.37297C13.1473 3.37297 15.9527 6.13155 15.9527 9.49887H16.9527ZM9.67709 16.832C5.52595 16.832 2.16699 13.5314 2.16699 9.49887H1.16699C1.16699 14.1046 4.99484 17.832 9.67709 17.832V16.832ZM2.16699 9.49887C2.16699 5.46641 5.52588 2.1665 9.67709 2.1665V1.1665C4.9949 1.1665 1.16699 4.89305 1.16699 9.49887H2.16699ZM9.67709 2.1665C13.8282 2.1665 17.1864 5.46634 17.1864 9.49887H18.1864C18.1864 4.89312 14.3593 1.1665 9.67709 1.1665V2.1665ZM17.1864 9.49887C17.1864 13.5315 13.8282 16.832 9.67709 16.832V17.832C14.3594 17.832 18.1864 14.1046 18.1864 9.49887H17.1864Z"
                        fill="white" />
                </g>
                <mask id="mask1_504_1425" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13"
                    y="13" width="6" height="6">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2012 14.2998H18.3333V18.3332H14.2012V14.2998Z"
                        fill="white" stroke="white" />
                </mask>
                <g mask="url(#mask1_504_1425)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.7166 18.3332C17.5596 18.3332 17.4016 18.2745 17.2807 18.1571L14.3823 15.3307C14.1413 15.0951 14.1405 14.713 14.3815 14.4774C14.6217 14.2401 15.0123 14.2417 15.2541 14.4757L18.1526 17.3029C18.3935 17.5386 18.3944 17.9198 18.1534 18.1555C18.0333 18.2745 17.8746 18.3332 17.7166 18.3332Z"
                        fill="white" />
                    <path
                        d="M17.7166 18.3332C17.5595 18.3332 17.4016 18.2745 17.2807 18.1571L14.3823 15.3307C14.1413 15.0951 14.1405 14.713 14.3815 14.4774C14.6217 14.2401 15.0123 14.2417 15.2541 14.4757L18.1526 17.3029C18.3935 17.5386 18.3944 17.9198 18.1534 18.1555C18.0333 18.2745 17.8746 18.3332 17.7166 18.3332"
                        stroke="white" />
                </g>
            </svg>
        </div>

        <button class="w-[198px] h-[48px] border flex items-center justify-center rounded-[24px] ml-[38px] gap-[9px] border-[#5142FC]">
            <img src="{{asset('images/wallet.svg')}}" alt="">
            wallet connect
        </button>

        {{-- Boton del header que redirige a la viste de crear un usuario --}}
        @if (Route::has('login'))

    @guest
   <a class="text-[18px] text-white ml-[50px] font-extrabold hover:scale-125 ease-out duration-500" href="{{ route('register') }}">Sing up</a>
   <a class="text-[18px] text-white ml-[50px] font-extrabold hover:scale-125 ease-out duration-500" href="{{ route('login') }}">Sign in</a>
   @endguest
@endif
      @if (Auth::check())
          
     
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        @if (Auth::user())
                        <div>{{ Auth::user()->name }}</div>
                        @endif
                      

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>


    </div>


    @endif 
</header>

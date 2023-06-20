<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Axies</title>
    @vite(['resources/css/app.css','resources/js/images.js',"resources/js/app"])
</head>
<body class="relative">
    @include('partials.header')

    <main class="w-full h-[753px] bg-[#14141F] relative ">
        <div class="w-full h-full relative flex">
            <img class="h-full w-full relative" src="{{ asset('images/Graphicbackground.svg')}}" alt="background">
            <div class="h[355px] text-white start-[255px] w-[633px] bottom-[201px] absolute ">
                <div class="w-full h-[263px] flex flex-col ">
                    <div class="h-[204px] w-full flex flex-col">
                        <span class="text-[56px] font-[700] leading-[68px]">Discover, and collect </span>
                        <span class="text-[56px] font-[700] leading-[68px]">extraordinary</span>
                        <span class="text-[56px] font-[700] leading-[68px]">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-600">Monster</span>
                            NFT</span>
                    </div>
                    <p class="text-[20px] mt-[29px] text-[#EBEBEB] leading-[30px]">Marketplace for monster character cllections non fungible token NFTs</p>
                </div>
            <div class="flex gap-[16px] w-[310px] h-[56px] mt-[36px]">
                        <button class="flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">
                            <img src="{{asset('images/airnave.svg')}}" alt="">
                            <span>Explore</span>
                        </button>

                     <a href="{{ route('create.index') }}" class=" cursor-pointer flex items-center gap-[6px] justify-center w-[154px] h-[56px] rounded-[30px] border border-[#5142FC]">

                     <img src="{{asset('images/note.svg')}}" alt="">

                         <samp class="cursor-pointer">Create</samp>
                    </a>
            </div>
                </div>

        <div>
            <img src="{{ asset('images/Graphicbackground.svg')}}" alt="">
        </div>

        </div>

    </main>
    <section class="h-[294px] w-full bg-[#14141F] flex justify-center pt-[28px]">
        <div class="w-[1400px] h-[186px] flex gap-[39px] ">
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#5142FC] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/walletbt.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Set up your wallet</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#47A432] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/category.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Create your collection</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#9835FB] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/nft.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">Add your NFTs</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>
            <div class="h-[186px] w-[321px] flex items-center flex-col gap-[24px]">
                <button class="flex items-center justify-center bg-[#DF4949] h-[56px] w-[56px] rounded-[16px]">
                    <img src="{{asset('images/bookmark.svg')}}" alt="">
                </button>
                <div class="h-[106px] w-full flex flex-col items-center gap-[10] text-white">
                    <h2 class="text-[24px] font-[700] leading-[30px]">List them for sale</h2>
                    <p class="text-[14px] leading-[22px] text-center">Once you’ve set up your wallet of choice, connect it
                        to OpenSeaby clicking the NFT Marketplacein the
                        top right corner.
                    </p>
                </div>

            </div>

        </div>

    </section>
    <section class="flex flex-col items-center w-full h-[771px] bg-[#0D0D11] text-white">
        <div class="flex items-center w-[1410px] mt-[60px] h-[44px]">
            <h2 class="text-[36px] font-[700] leading-[44px]">Live Auction</h2>
            <div class="w-[118px] h-[25px] border-b border-[#9F50E5] flex justify-center ml-[1070px]">
                <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
            </div>
        </div>
        <div class="w-full h-[519px] flex gap-[30px] mt-[40px] overflow-hidden">
        
    @foreach ($users->take(5) as $item)
        
        <x-card-view>
            <x-slot name='media'>
              
                <img class="w-full h-full" src="{{ $item->getFirstMediaUrl() }}">
                  
            </x-slot>

            <x-slot name='title'>
                {{ $item->title}}
            </x-slot>

            <x-slot name='user'>
                {{ $item->user->name}}
            </x-slot>
            <x-slot name='price'>
                {{ $item->price}}
            </x-slot>

        </x-card-view>

@endforeach
 
        </div>

        <div class="h-[16px] w-[148px] flex items-center justify-center gap-[16px] mt-[32px]">

            <img src="{{ asset('images/arrow-left.svg') }}" alt="left" data-name="arrowleft">

            <button class="w-4 h-4 rounded-full border bg-white border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>
            <button class="w-2 h-2 rounded-full border border-[#ffff]" data-name="dot"></button>

            <img src="{{ asset('images/arrow-right.svg') }}" alt="right" data-name="arrowright">
        </div>

    </section>
    <section class="bg-[#14141F] text-white flex flex-col items-center py-[80px] gap-[80px]  h-[2345px] w-full relative">
        <div class="flex flex-col gap-[38px] w-[1410px] h-[476px]">
            <div class="flex items-center  w-[1410px]  h-[44px]">
                <div>
                    <h2 class="text-[36px] font-[700] leading-[44px]">Popular Collection</h2>
                </div>
                <div class="w-[118px] h-[25px] border-b border-[#9F50E5] ml-[981px] flex justify-center">
                    <a class="text-[14px] leading-[20px] font-[700] tracking-[1px]" href="#">EXPLORE MORE</a>
                </div>
            </div>
            <div class="flex  flex-wrap gap-[30px] h-[394px] w-full ">
               
                @foreach ($art as $value)
                <x-collection-popular>
                
                    <x-slot name='media'>
                    @foreach ($value->items->take(5) as $item)
                       <img data-id="{{ $loop->iteration }}" class="w-full h-full  rounded-xl " src="{{ $item->getFirstMediaUrl() }}"> 
                    @endforeach
                    
                 </x-slot>
                <x-slot name='name'>
                    {{ $item->user->name ?? '' }} 
                </x-slot>
                    <x-slot name='collection'>
                      {{ $value->name }}
                    </x-slot>
<x-slot name='like'>
       @unless (request()->is('create'))
       <form id="like-form" method="POST" action="{{ route('collection.like', $value) }}" >
                @csrf
              <div class=" btn flex items-center justify-center gap-[5px] w-[64px] h-[28px] bg-[#14141F] rounded-[10px] hover:scale-125 ease-out duration-500">
                <button class=" hover:scale-125 ease-out duration-500 ">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7145 1.64623C12.9744 -0.0934292 10.1436 -0.0934292 8.40393 1.64623L7.99986 2.05006L7.59603 1.64623C5.85637 -0.0936647 3.02531 -0.0936647 1.28565 1.64623C-0.418689 3.35057 -0.429756 6.05212 1.25998 7.93047C2.80114 9.64305 7.34643 13.343 7.53928 13.4996C7.6702 13.606 7.82773 13.6578 7.98432 13.6578C7.9895 13.6578 7.99468 13.6578 7.99963 13.6576C8.16163 13.6651 8.32481 13.6096 8.45997 13.4996C8.65282 13.343 13.1986 9.64305 14.7402 7.93024C16.4297 6.05212 16.4186 3.35057 14.7145 1.64623ZM13.69 6.98529C12.4884 8.32017 9.18546 11.0733 7.99963 12.0503C6.8138 11.0735 3.51155 8.32065 2.31018 6.98553C1.13142 5.67537 1.12035 3.8095 2.28452 2.64533C2.87908 2.051 3.6599 1.7536 4.44072 1.7536C5.22154 1.7536 6.00236 2.05077 6.59693 2.64533L7.48512 3.53353C7.59085 3.63925 7.72412 3.70236 7.86399 3.72449C8.09099 3.77324 8.33729 3.70989 8.51389 3.53376L9.40256 2.64533C10.5919 1.45644 12.5266 1.45667 13.7152 2.64533C14.8794 3.8095 14.8683 5.67537 13.69 6.98529Z" fill="white"/>
                        </svg>
         </button>
             <span class="likes-count"> {{ $value->likes()->count() }}</span>
             </div>
            </form>
    @endunless
</x-slot>

                </x-colletion-popular> 
                @endforeach
               </div>
          </div>
        </section>


    
       
    @include('partials.footer')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   </body>
</html>

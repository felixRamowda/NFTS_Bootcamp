@extends('layouts.main')

@section('content')
<x-subheader>
    <x-slot name="subtitle">
        Author
    </x-slot>
    <x-slot name="liText">
        Pages
    </x-slot>
</x-subheader>
<div class="w-full h-[1730px]  gap-[12px] flex flex-col items-center py-[80px] relative">
    <div class="w-[1410px] h-[354px]">
        <div class="h-[280px] w-full bg-[#313037] relative">
            <div class="w-[780px] h-[274px] absolute mt-[40px] ml-[40px] flex gap-[40px] ">
                <div class="h-[274px] w-[274px] relative isolate">
                    <div class="h-[274px] w-[274px] bg-[#7A798A]  border-[2px] relative border-[#5142FC] rounded-[20px]">

                    </div>
                    <div class="bg-[#14141F] rounded-[8px] z-[1] absolute h-[28px] w-[64px]">


                </div>


                </div>
                <div class="w-[466px] h-[186] text-white mt-[20px]">
                    <h2 class="text-[18px] leading-[28px]">Author Profile</h2>
                    <h2 class="text-[36px] font-[700] leading-[44px] mt-[2px]">{{auth()->user()->name}}</h2>
            </div>
            </div>

        </div>

        <div class=" collection py-[24px] h-[74px] w-full bg-[#343444] relative text-white ">
            <ul class="flex items-center  justify-around ml-[414px] text-[20px] font-[700] ">
                <li ><a href="" class=" a-color">All</a></li>
                @foreach ($collectionUser as $value)
                <li><a href="">{{ $value->name }}</a></li>
                @endforeach

            </ul>

        </div>

    </div>
    <div class="w-[1410px] h-[1140
    px] mt-[60px] flex flex-wrap gap-x-[20px]">

        {{-- fragmento de codigo donde se creara la card en base al componente --}}
        {{-- Antes de manipular consultar(Bondi) --}}


      @foreach ($items as $item)

        <x-card-view>
            <x-slot name='media'>
                <img class="w-full h-full object-cover" src="{{ $item->getFirstMediaUrl() }}">
            </x-slot>
             {{-- @endforeach --}}

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

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
@endsection

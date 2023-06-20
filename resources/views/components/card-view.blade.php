
@vite('resources/js/images.js')

<div class="bg-[#30303E] text-white rounded-[20px] px-[20px] pt-[20px] h-[511px] w-[330px]">
    <div class="relative w-[290px] h-[290px] ">
        <div class="flex items-center justify-center gap-[5px] bg-[#14141F] w-[64px] h-[28px] rounded-[8px] absolute z-[1] start-[214px] top-[14px]">
            <img src="{{asset('images/heart.svg')}}" alt="" class="cursor-pointer hover:scale-100 ">
            <span class="text-[14px] font-[700] leading-[24px]">100</span>

        </div>
        <div class="  bg-[rgb(122,121,138)] w-[290px] relative h-[290px] rounded-[20px] overflow-hidden">
            {{ $media ?? '' }}
        </div>

    </div>

    <div class="w-[290px] h-[169px] mt-[21px]">
        <h3 class="text-[18px] font-[700] leading-[26px]">{{$title ?? 'Nothing of all'}}</h3>
        <div class="flex items-center mt-[17px]  w-[290px] h-[44px]">
            <div class="flex gap-[12px] w-[146px] h-[44px]">
                <div class="bg-[#7A798A] rounded-[15px] h-[44px] w-[44px]">

                </div>
                <div class="flex flex-col gap-[2px] h-[44px] w-[90px]">
                    <span class="text-[#8A8AA0] text-[13px] leading-[20px]">Creator</span>
                    <span class="text-[#EBEBEB] text-[15px] leading-[22px]">{{$user ?? 'Salvador Dhali'}}</span>

                </div>

            </div>
            <button class="bg-[#5142FC] text-white ml-[95px] text-[12px] font-[700] tracking-[2px] h-[24px] rounded-[8px] w-[49px]">
                BSC
            </button>

        </div>

        <hr class="w-[290px] border border-[#14141F] mt-[19px]">

        <div class="h-[48px] w-[290px] flex items-center mt-[15px]">
            <div>
                <span class="text-[13px] leading-[20px] text-[#8A8AA0]">Current Bid</span>
            <div class="w-[131px] h-[26px] flex items-center gap-[7px]">
                <span class=" text-[16px] font-[700] leading-[26px]">{{$price ?? '149'}}</span>
                <span class="text-[13px] leading-[20px] text-[#8A8AA0]">=$12.246</span>
            </div>

            </div>

            <div class="flex items-center gap-[8px] ml-[38px]">
                <img src="{{asset('images/reload.svg')}}" alt="">
                <a class="text-[16px] text-[#8A8AA0] leading-[26px]" href="#">View History</a>
            </div>

        </div>


    </div>
</div>

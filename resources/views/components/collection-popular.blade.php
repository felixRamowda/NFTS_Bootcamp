@vite('resources/js/images.js')

<div class="flex flex-col gap-9 bg-[#343444] h-auto w-[450px] rounded-[10px] p-[20px]">
        <div class=" img  h-[400px] rounded-[10px]  grid grid-cols-6 gap-x-4   w-full p-2 ">
                {{ $media }}
            
           
    </div>
   
    <div class="h-[64px] w-[410px] flex gap-[63px]">
        <div class="flex gap-[10px]">
            <div class="h-[64px] w-[64px] bg-[#7A798A] rounded-[21px]">
            </div>
            <div class="h-[50px] w-[209px]">
                <h2 class="text-[19px] font-[700] leading-[26px]">{{$collection ?? 'Nothing of all'}}</h2>
                <div class="flex items-center gap-[6px] w-[185px] h-[22px]" >
                    <span class="text-[13px] leading-[20px] text-[#8A8AA0]">create by</span>
                    <a class="text-[15px] font-[700] leading-[22px]" href="#">{{ $name ?? 'user' }}</a>
                </div>
            </div>

        </div>


        {{ $like ?? '' }}
       
      
      
    </div>
</div>

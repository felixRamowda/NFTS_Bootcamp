@extends('layouts.main')




@section('content')


<div class="flex justify-center  w-full h-[788px]">
    <form class="flex flex-col justify-center mt-[80px] items-center w-[690px] h-[498px] text-white">
        <h1 class="mb-[64px] text-[36px] font-[700]">Signup To NTFs</h1>
        <div class="flex items-center justify-center gap-[16px] h-[28px] w-full">
            <hr class="w-[250px] border border-[#343444]">
            <div class="flex w-[149px] h-[28px]">
                <p class="">Our login with email</p>
            </div>
            <hr class="w-[250px] border border-[#343444]">

        </div>
        <div class="flex flex-col gap-[24px] mt-[30px] w-full">
            <input class="h-[48px] bg-transparent rounded-[8px] border border-[#343444]" type="text" placeholder="Your Full Name">
            <input class="h-[48px] bg-transparent rounded-[8px] border border-[#343444]" type="text" placeholder="Your Email Address">
            <input class="h-[48px] bg-transparent rounded-[8px] border border-[#343444]" type="text" placeholder="Your Password ">

        </div>
        <div class="flex items-center justify-around w-full mt-[32px]">
            <div class="flex items-center gap-2 h-[22px] w-[120px]">
                <input class="bg-[#343444] border rounded h-[20px] w-[20px]" type="checkbox">
                <label class=" text-[14px]" for="">Remember me</label>
            </div>

            <div class="w-[124px] h-[22px]">
                <a class="text-[14px] font-[700]" href="#">Forgot Password?</a>
            </div>
        </div>

        <button class="flex justify-center h-[54px] mt-[33px] items-center text-[15px] rounded-[56px] border border-[#ffff] w-full">Singup</button>



    </form>
</div>

@endsection

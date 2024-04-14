@extends('layouts.main')

<div class="form-container flex justify-center items-center h-full bg-[#F2F6FF]">
    <form action="/signup" method="POST" class="bg-white flex flex-col p-[25px] w-[400px] rounded-md shadow-md">
        @csrf
        <div class="title text-center">
            <p class="text-[14px]">ShopCart</p>
            <h2 class="text-[18px]">Nice To Meet You</h2>
        </div>
        <div class="field flex flex-col gap-4 my-[20px]">
            <div class="field flex flex-col">
                <label for="name" class="text-[12px] mb-[5px]">Username</label>
                <input type="text" name="name" id="name" placeholder="Enter username"
                    class="text-[13px] p-[8px] bg-white">
            </div>
            <div class="field flex flex-col">
                <label for="email" class="text-[12px] mb-[5px]">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter valid email"
                    class="text-[13px] p-[8px] bg-white">
            </div>
            <div class="field flex flex-col">
                <label for="password" class="text-[12px] mb-[5px]">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter valid password"
                    class="text-[13px] p-[8px]">
            </div>
        </div>
        <button type="submit" class="text-[12px] bg-[#5456ff] text-white p-[10px] rounded-sm">Continue</button>
        <div class="text-center text-[11px] mt-[20px]">
            <a href="/login">Have an account ?</a>
        </div>
    </form>
</div>

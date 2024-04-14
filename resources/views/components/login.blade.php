@extends('layouts.main')

<div class="form-container flex justify-center items-center h-full bg-[#F2F6FF]">
    <form action="/login" method="post" class="bg-white flex flex-col p-[25px] w-[400px] rounded-md shadow-md">
        @csrf
        <div class="title text-center">
            <p class="text-[14px]">ShopCart</p>
            <h2 class="text-[18px]">Welcome Back</h2>
        </div>
        <div class="field flex flex-col gap-4 mt-[30px]">
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
        <div class="util flex justify-between items-center text-[11px] my-[20px]">
            <div class="remember">
                <input type="checkbox" name="remember" id="">
                <label for="">Remember Me</label>
            </div>
            <a href="#">Forgot your password ?</a>
        </div>
        <button type="submit" class="text-[12px] bg-[#5456ff] text-white p-[10px] rounded-sm">Continue</button>
        <div class="text-center text-[11px] mt-[20px]">
            <a href="/signup">Dont have an account ?</a>
        </div>
    </form>
</div>

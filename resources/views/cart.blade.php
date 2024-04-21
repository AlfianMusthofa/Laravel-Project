@extends('layouts.main')

<div class="container mx-auto">
    <header class="cartHeader text-[13px] flex justify-between items-center py-5">
        <div class="flex items-center">
            <p class="text-[16px] font-medium">Your Cart</p>
            <p class="ml-[30px] text-[12px]">3 Items</p>
        </div>
        <div class="flex items-center">
            <p class="mr-[30px] text-[12px]">Total</p>
            <p class="text-[11px]">Rp <span class="text-[16px] font-medium">20000</span></p>
        </div>
    </header>
    {{-- Product --}}
    <div class="cartProduct flex gap-6 py-6 text-[13px] items-center">
        <img src="assets/products/p (2).jpeg" alt="" class="border-2 w-[180px]">
        <div class="w-full">
            <div class="flex justify-between items-center">
                <p class="font-medium text-[16px]">Produk</p>
                <p class="text-[11px]">Rp <span class="text-[16px] font-medium">20000</span></p>
            </div>
            <div class="mt-[15px] w-[350px]">
                <p class="text-[11px] line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est
                    ipsa
                    enim, doloremque a iusto distinctio quod sequi unde fuga! Ullam.</p>
            </div>
            <div class="flex justify-between items-center mt-[15px]">
                <div class="flex gap-[10px] items-center">
                    <p class="text-[12px]">Quantity</p>
                    <input type="number" name="" id="" class="qty w-[40px] p-[3px] text-center"
                        value="1" min="1" max="99">
                </div>
                <button><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    </div>


    <div class="text-[12px] mt-[30px] flex justify-between items-center">
        <a href="/" class="continueShopping">Continue shopping</a>
        <a href="#" class="p-2 bg-black text-white font-medium">Proceed to chekcout</a>
    </div>
</div>

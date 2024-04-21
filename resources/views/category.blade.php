@extends('layouts.main')

@include('components.navbar')

<div class="container mx-auto">

    {{-- Left --}}
    <div>
        <ul>
            <li class="text-[14px] font-medium flex gap-2 items-center pb-[10px] border-b border-[#d6d6d6]">
                <i class="fa-solid fa-bars"></i>
                <p>Semua Kategori</p>
            </li>
            <li class="flex flex-col gap-2 text-[13px] font-normal py-[10px] border-b border-[#d6d6d6]">
                {{ $category }}
                <a href="#">Denim</a>
                <a href="#">Hoddie & Sweetshirt</a>
                <a href="#">Sweater</a>
                <a href="#">Jaket & Mantel</a>
                <a href="#">Jas Formal</a>
            </li>
            <li class="py-[10px] border-b border-[#d6d6d6]">
                <p class="text-[14px] mb-[10px] font-medium">Metode Pembayaran</p>
                <div class="flex gap-2 text-[12px]">
                    <input type="checkbox" name="" id="">
                    <p>COD (Bayar di Tempat)</p>
                </div>
            </li>
            <li class="py-[10px] border-b border-[#d6d6d6]">
                <p class="text-[14px] mb-[10px] font-medium">Opsi Pengiriman</p>
                <div class="flex flex-col gap-2">
                    <div class="flex gap-2 text-[13px]">
                        <input type="checkbox" name="" id="">
                        <p>Instan 2 Jam</p>
                    </div>
                    <div class="flex gap-2 text-[13px]">
                        <input type="checkbox" name="" id="">
                        <p>Reguler</p>
                    </div>
                    <div class="flex gap-2 text-[13px]">
                        <input type="checkbox" name="" id="">
                        <p>Hemat</p>
                    </div>
                    <div class="flex gap-2 text-[13px]">
                        <input type="checkbox" name="" id="">
                        <p>Same Day</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    {{-- Right --}}
    <div>

    </div>
</div>

@extends('layouts.main')

@section('container')
    <div class="div bg-white">
        @include('components.navbar')
    </div>
    {{-- Iklan --}}
    <div class="container mx-auto slideshow-container relative">
        <div class="mySlides fade">
            <img src="assets/ads.webp" class="w-full">
        </div>
        <div class="mySlides fade">
            <img src="assets/ads1.webp" class="w-full">
        </div>
    </div>

    {{-- Category --}}
    <div class="container mx-auto my-5">
        <div class="catRow bg-white">
            <p>KATEGORI</p>
        </div>
        <div class="grid grid-cols-10 gap-1">
            @foreach ($categories as $data)
                <a href="#" class="hover:shadow-md">
                    <div class="catBox">
                        <img src="{{ asset('assets/cat/' . $data['image']) }}" alt="" class="catImage">
                        <p class="catLable">{{ $data['label'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Rekomendasi --}}
    <div class="container mx-auto my-5">
        <div class="divrec bg-white p-[10px] text-center mb-[5px]">
            <p>REKOMENDASI</p>
        </div>
        <div class="grid grid-cols-5 gap-1" id="rekomendasi">
            @foreach ($datas as $data)
                <a href="/productpage/{{ $data['id'] }}" class="cart bg-white hover:shadow-md">
                    <img src="{{ asset('assets/products/' . $data['image']) }}" alt="">
                    <div class="caption p-[8px]">
                        <p class="text-[12px] line-clamp-2">{{ $data['name'] }}</p>
                        <div class="div flex justify-between items-center mt-2">
                            <p class="text-[15px] text-blue-600 font-medium"><span
                                    class="text-[13px]">Rp</span>{{ $data['price'] }}</p>
                            <div class="div flex items-center text-[11px] gap-[3px]">
                                <i class="fa-solid fa-star text-[10px]" style="color: #FFD43B;"> 4.9</i>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('components.footer')
@endsection

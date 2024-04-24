@extends('layouts.main')

@include('components.navbar')
<div class="container mx-auto my-4">
    <div class="grid grid-cols-2">
        {{-- Gambar Product --}}
        <img src="{{ asset('storage/' . $data['image']) }}" alt="" class="w-[490px]">
        <div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[15px] font-semibold line-clamp-2">{{ $data['name'] }}</h2>
                <p class="text-[11px]">Category <a href="/categories/{{ $data->category->id }}"
                        class="underline">{{ $data->category->name }}</a></p>
                <div class="rate flex gap-3 items-center">
                    <div class="star">
                        <i class="fa-regular fa-star text-[13px]" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star text-[13px]" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star text-[13px]" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star text-[13px]" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star text-[13px]" style="color: #FFD43B;"></i>
                    </div>
                </div>
                <p class="text-[15px] font-medium text-red-500">Rp{{ $data['price'] }}</p>
            </div>
            <p class="text-[13px] mt-[20px] text-justify leading-5">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Hic
                quis expedita
                quas
                minima amet recusandae
                assumenda animi, quae magni, dolore quasi porro dolor labore voluptate! Sit veritatis accusamus eos
                totam et sed, nesciunt suscipit quas?</p>

            {{-- CTA --}}
            @auth
                <form action="/addcart/{{ $data['id'] }}" method="post">
                    @csrf
                    <div class="ctaProduct text-[11px] my-[30px] flex gap-2 font-medium items-center">
                        <button>BUY NOW</button>
                        <button type="submit">ADD TO CART</button>
                    </div>
                </form>
            @else
                <div class="ctaProduct text-[11px] my-[30px] flex gap-2 font-medium items-center">
                    <button>BUY NOW</button>
                    <a href="/login" class="border py-[9px] px-[20px] border-[#10172e]">ADD TO
                        CART</a>
                </div>
            @endauth

            {{-- CTA Favourite --}}
            <div>
                <div class="flex gap-5 text-[12px] items-center">
                    <button>
                        <i class="fa-solid fa-heart"></i>
                        <span>Add to wishlist</span>
                    </button>
                    <button>
                        <i class="fa-solid fa-code-compare"></i>
                        <span>Add to compare</span>
                    </button>
                </div>
            </div>

            {{-- Share product --}}
            <div class="text-[12px] flex gap-4 items-center mt-5">
                <p>Share this product:</p>
                <div class="flex gap-4">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>

            {{-- Delivery --}}
            <div class="mt-5 flex flex-col gap-3">
                <div class="text-[12px] flex items-center gap-3">
                    <i class="fa-solid fa-truck-fast" style="color: #FFD43B;"></i>
                    <div>
                        <p>Free Delivery</p>
                        <span class="text-[10px] underline">Enter your postal code for Delivery Availability</span>
                    </div>
                </div>
                <div class="text-[12px] flex items-center gap-3">
                    <i class="fa-solid fa-box" style="color: #FFD43B;"></i>
                    <div>
                        <p>Return Delivery</p>
                        <span class="text-[10px]">Free 30 days Delivery Returns. <span
                                class="underline">Detail</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="devider mt-[25px]"></div>

    {{-- Description --}}
    <div class="container mx-auto my-[30px]">
        <p class="text-center font-medium">Description</p>
        <div class="text-[12px] text-justify mt-[25px]">
            <p class="mb-3 leading-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum explicabo hic aut
                voluptate
                exercitationem
                qui eum nemo magni corrupti nobis, amet enim vitae sequi officia. Est aspernatur sequi veritatis quis.
            </p>
            <p class="mb-3 leading-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate porro alias
                fugit
                veritatis aperiam
                consequatur dolorem odit a nesciunt, iste optio ratione nulla, officiis harum saepe eius quisquam aut
                minus molestiae voluptate distinctio deleniti nihil doloremque at? Corporis ea vel laborum voluptate,
                quis aperiam dignissimos quas quaerat laboriosam dolorum consectetur.</p>
            <p class="leading-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem quisquam harum
                vero cupiditate
                velit accusamus officiis corrupti autem optio? Rerum, ratione est deserunt modi quos odio aliquam.
                Voluptas pariatur non cupiditate deleniti magni obcaecati, minima fuga voluptate, id, voluptatem
                suscipit!</p>
        </div>
    </div>

    <div class="devider mt-[25px]"></div>

    {{-- Reviews --}}
    <div class="container mx-auto mt-[25px]">
        <p class="text-center font-medium mb-[20px]">Reviews</p>
        <div class="grid grid-cols-3 gap-[3px]">
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Jeanne D'arch</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Asep Nurburgring</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Yanti Nurhalizza</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Randy Septia</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Ujang Renda</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
            <div class="boxReviews flex flex-col gap-3">
                <div>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star text-[13px]" style="color: #FFD43B;"></i>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="assets/avatar.jpg" alt="" class="w-[43px]">
                    <p class="text-[14px]">Agus Septian</p>
                </div>
                <p class="text-[13px] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                    facere
                    debitis tenetur quo esse
                    accusantium ab expedita recusandae quasi rerum. Good Job</p>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<div class="topnavbar text-[11px] flex justify-between items-center bg-[#333333] px-[44px] py-[6px] text-white">
    <div class="right flex items-center gap-2 ">
        <i class="fa-solid fa-phone"></i>
        <p>+62 888 443 788</p>
    </div>
    <div class="center">
        <p>Get 50% Off on Selected Items | Shop Now</p>
    </div>
    <div class="right flex gap-3">
        <button>Eng <i class="fa fa-caret-down"></i></button>
        <button id="dropdown">Location <i class="fa fa-caret-down" onclick="myFunction()"></i></button>
    </div>
</div>


<div class="container mx-auto flex justify-between items-center py-3">
    <div class="logo">
        <a href="/" class="text-[17px]">NamaToko</a>
    </div>
    <div class="center flex gap-7 text-[13px]">
        <button>Category <i class="fa fa-caret-down"></i></button>
        <a href="#">Deals</a>
        <a href="#">What's New</a>
        <a href="#">Deliveries</a>
    </div>
    <div class="right flex gap-4 text-[13px]">
        <a href="#">Cart</a>
        @auth
            <a href="#">{{ auth()->user()->name }}</a>
        @else
            <a href="/login">Login</a>
        @endauth
    </div>
</div>

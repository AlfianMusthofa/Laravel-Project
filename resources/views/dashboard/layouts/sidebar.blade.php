<div class="sidebar">
    <ul class="flex flex-col gap-[5px] text-[14px]">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">
                <i class="fa-solid fa-home"></i>
                Dashboard
            </a>
        </li>
        <li class="{{ Request::is('dashboard/upload') ? 'active' : '' }}">
            <a href="/dashboard/upload">
                <i class="fa-solid fa-plus"></i>
                Add
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                Settings
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </li>
    </ul>
</div>

<div class="navbar bg-neutral dark:bg-gray-800 top-0 z-50">
    <div class="navbar-start xs:justify-between xs:flex">

        <a href="/" id="logo"
            class="btn sunset:text-hijau bg-transparent border-transparent hover:bg-transparent hover:border-transparent text-3xl font-righteous text-white">
            <img src="{{ asset('logo.png') }}" class="w-12 h-12" alt="Panda">Panda
            Koding</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        @livewire('menu')
    </div>
    <div class="navbar-end xl:inline-flex mr-3 gap-x-2 hidden">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-theme btn-sm btn-secondary rounded-btn">Theme <i
                    class="fa-solid fa-palette"></i></label>
            <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                <li><a onclick="selectTheme('light')">Light</a></li>
                <li><a onclick="selectTheme('dark')">Dark</a></li>
                <li><a onclick="selectTheme('cyberpunk')">Cyberpunk</a></li>
                <li><a onclick="selectTheme('sunset')">Sunset</a></li>
            </ul>
        </div>
        @if (Auth::check())
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component" src="{{ Storage::url(Auth::user()->avatar) }}" />
                </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <a class="flex items-center gap-x-2">
                        <i class="fa-regular fa-user"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/articles') }}" class="flex items-center gap-x-2">
                        <i class="fa-regular fa-newspaper"></i> MyArticle
                    </a>
                </li>
                <li><a class="flex items-center gap-x-2"> <i class="fa-solid fa-sliders"></i>Settings</a></li>
                @livewire('theme')
                <li><a href="{{ route('logout') }}" class="flex items-center gap-x-2"> <i
                            class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
            </ul>
        </div>
        @else
        <a href="{{ route('login') }}" class="btn btn-login btn-sm">Login</a>
        @endif

    </div>
</div>

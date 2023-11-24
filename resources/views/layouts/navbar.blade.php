<div class="navbar bg-neutral dark:bg-gray-800 top-0 z-50">
    <div class="navbar-start xs:justify-between xs:flex">
        <div class="dropdown ">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 p-.5 rounded-md bg-white" fill="bg-white"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Topics</a></li>
                <li><a>Item 3</a></li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a href="/" class="btn btn-ghost text-3xl font-righteous text-white">
            <img src="{{ asset('logo.png') }}" class="w-12 h-12" alt="Panda">Panda
            Koding</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu text-white menu-horizontal px-1">
            <li><a class="hover:text-pink" href="{{ route('article') }}"><i class="fa-regular fa-newspaper"></i>
                    Article</a></li>
            <li><a class="hover:text-pink" href="{{ route('topic') }}"><i class="fa-solid fa-tags"></i> Topics</a>
            </li>
            <li>
                <a class="hover:text-pink" href="{{ route('topic') }}"><i class="fa-solid fa-bookmark"></i> Bookmark</a>
            </li>
        </ul>
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
                    <a class="justify-between">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('myarticle.index') }}" class="justify-between">
                        MyArticle
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
        @else
        <a href="{{ route('login') }}" class="btn btn-sm">Login</a>
        @endif

    </div>
</div>
@push('scripts')
<script>
    const theme = document.querySelector('html')
    const themeName = localStorage.getItem('theme')
    theme.setAttribute('data-theme', themeName)

    function selectTheme(themeName) {
        localStorage.setItem('theme', themeName)
        theme.setAttribute('data-theme', themeName)
    }

</script>
@endpush

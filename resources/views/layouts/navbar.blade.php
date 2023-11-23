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
        <label class="swap swap-rotate">
            <input type="checkbox" class="theme-controller hidden" value="synthwave" />
            <svg class="swap-off text-yellow-200 fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
            </svg>
            <svg class="swap-on text-slate-300 fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
            </svg>
        </label>
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
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
        @else
        <a href="{{ route('login') }}" class="btn">Login</a>
        @endif

    </div>
</div>
@push('scripts')
<script>
    const theme = document.querySelector('html')
    const toggle = document.querySelector('input[type="checkbox"]')

    if (localStorage.getItem('theme') === 'dark') {
        theme.setAttribute('data-theme', 'dark')
        toggle.checked = true
    } else {
        theme.setAttribute('data-theme', 'light')
        toggle.checked = false
    }

    toggle.addEventListener('change', () => {
        if (toggle.checked) {
            localStorage.setItem('theme', 'dark');
            theme.setAttribute('data-theme', 'dark')
        } else {
            localStorage.setItem('theme', 'light');
            theme.setAttribute('data-theme', 'light')
        }
    })

</script>
@endpush

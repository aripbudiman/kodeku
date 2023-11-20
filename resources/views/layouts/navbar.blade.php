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
            <li><a class="hover:text-pink"><i class="fa-regular fa-newspaper"></i> Article</a></li>
            <li><a class="hover:text-pink" href="{{ route('topic') }}"><i class="fa-solid fa-tags"></i> Topics</a>
            </li>
        </ul>
    </div>
    <div class="navbar-end xl:inline-flex hidden">
        <a class="btn">Login</a>
    </div>
</div>

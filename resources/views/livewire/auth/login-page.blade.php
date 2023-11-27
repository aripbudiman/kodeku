<div class="h-screen w-full grid grid-cols-1 lg:grid-cols-2">
    <div class="flex justify-between items-center flex-col">
        <div class="p-10 flex flex-col items-center">
            <img src="{{ asset('logo.png') }}" class="w-6 h-6 xl:w-10 xl:h-10" alt="logo.png" />
            <h1 class="text-sm xl:text-lg font-bold font-righteous">Panda Koding</h1>
        </div>
        <div class="bg-white w-full px-10 xl:px-0 xl:w-1/2 justify-center items-center">
            <h1 class="text-4xl xl:text-3xl font-bold text-center font-righteous">Welcome Back</h1>
            <form wire:submit.prevent="login" class="card-login">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="text" wire:model="email" placeholder="Email" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" wire:model="password" placeholder="Password"
                        class="input input-bordered w-full" />
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text">Remember me</span>
                        <input type="checkbox" wire:model.live="rememberme" value="true" class="checkbox" />
                    </label>
                </div>
                <div class="form-control w-full my-1">
                    <button type="submit" class="btn btn-neutral w-full">Login</button>
                </div>
            </form>
            @if (session()->has('error'))
            <div>{{ session('error') }}</div>
            @endif
            <div class="divider font-medium">Login Or Register With</div>
            <div class="flex justify-center items-center gap-x-5">
                <a href="{{ url('auth/google') }}" class="btn btn-base-500 btn-circle">
                    <iconify-icon class="text-3xl" icon="logos:google-icon"></iconify-icon>
                </a>
                <a href="{{ url('auth/facebook') }}" class="btn btn-base-500 btn-circle">
                    <iconify-icon class="text-3xl" icon="logos:facebook"></iconify-icon>
                </a>
                <a href="" class="btn btn-base-500 btn-circle">
                    <iconify-icon class="text-3xl" icon="icon-park:github"></iconify-icon>
                </a>
            </div>
        </div>
        <div class="flex justify-center items-center gap-x-3">
            <p class="dark:text-gray-100/60 text-gray-500/50 text-sm"> Copyright © 2023 - {{ date('Y') }}</p>
        </div>
    </div>
    <div class="bg-neutral-content xl:flex justify-center gap-y-5 flex-col items-center hidden">
        <img src="{{ asset('logo.png') }}" class="w-1/2" alt="login.png" />
        <h1 class="text-4xl xl:text-6xl font-bold text-center font-righteous">Panda Koding</h1>
        <h2 class="text-base-500 opacity-80">Created with ❤ by Arip Budiman</h2>
    </div>
</div>
@push('scripts')
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endpush

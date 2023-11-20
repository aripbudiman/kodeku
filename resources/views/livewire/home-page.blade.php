@extends('layouts.app')
@push('style')
@livewireStyles
@endpush
@push('scripts')
@livewireScripts
@endpush
@section('content')
<div class="w-full flex flex-col justify-center gap-y-2 items-center my-14">
    <div class="flex justify-center items-center gap-x-5 xl:flex-row flex-col px-3">
        <img src="{{ asset('logo.png') }}" class="w-20 h-20 xl:w-28 xl:h-28" alt="logo.png">
        <h1 class="text-4xl xl:text-6xl font-bold font-righteous text-center">Panda Koding</h1>
    </div>
    <p class="text-center text-xl xl:text-2xl">Simpan semua dokumentasi kodemu di panda koding.com</p>
</div>
<div class="w-full flex justify-center items-center my-10 lg:my-14 px-5">
    <input type="text" placeholder="Cari apa saja di panda  koding" class="input input-bordered w-full max-w-xl" />
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-5 m-5">
    @foreach ($articles as $item)
    <div class="card card-compact w-full bg-base-100 shadow-xl">
        <figure><img src="{{ Storage::url($item->thumbnail) }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">{{ $item->title }}</h2>
            <p>{{ $item->content }}</p>
            <div class="card-actions justify-between">
                <div class="flex items-center gap-x-1">
                    <img src="{{ Storage::url($item->user->avatar)  }}" alt="profile" class="w-8 h-8 rounded-full">
                    <a class="text-lg first-letter:uppercase font-medium" href="">{{ $item->user->name }}</a>
                </div>
                <button class="btn btn-sm btn-primary">Read More</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="flex flex-col w-full">
    <div class="divider"><button class="btn btn-sm btn-neutral text-white">Load More</button></div>
</div>
@endsection

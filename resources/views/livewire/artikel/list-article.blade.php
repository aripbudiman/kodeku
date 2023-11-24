<div class="w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
    <div class="w-full mx-auto flex relative justify-center items-center my-8 max-w-xs md:max-w-xl lg:my-14">
        <i class="fa-solid fa-magnifying-glass absolute left-3 text-gray-700"></i>
        <button class="btn btn-cari btn-sm btn-secondary absolute right-2">Cari</button>
        <input type="text" wire:model.live="keyword" placeholder="Cari apa saja di panda  koding"
            class="input input-bordered pl-9 w-full max-w-xl" />
    </div>
    <div class="grid gap-y-5">
        @foreach ($articles as $item)
        <a class="card list-card sm:card-side dark:bg-base-300 hover:bg-slate-200 transition-colors sm:max-w-none"
            href="">
            <figure class="mx-auto w-full object-cover p-6 max-sm:pb-0 sm:max-w-[12rem] sm:pe-0">
                <img loading="lazy" src="{{ Storage::url($item->thumbnail) }}"
                    class="border-base-content bg-base-300 rounded-btn border border-opacity-5" alt="{{ $item->title }}"
                    style="view-transition-name: besttailwindcsspluginsfordevelopers-img">
            </figure>
            <div class="card-body" style="view-transition-name: besttailwindcsspluginsfordevelopers-text">
                <h2 class="card-title dark:text-white">{{ $item->title }}</h2>
                <p class="text-sm opacity-60">{!! \Illuminate\Support\Str::limit($item->content, 160) !!}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>

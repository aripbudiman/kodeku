<div>
    <div class="w-full flex flex-col justify-center gap-y-2 items-center my-14">
        <div class="flex justify-center items-center gap-x-5 xl:flex-row flex-col px-3">
            <img src="{{ asset('logo.png') }}" class="w-20 h-20 xl:w-28 xl:h-28" alt="logo.png">
            <h1 class="text-4xl xl:text-6xl font-bold font-righteous text-center">Panda Koding</h1>
        </div>
        <p class="text-center text-xl xl:text-2xl">Simpan semua dokumentasi kodemu di panda koding.com</p>
    </div>
    <div class="w-full mx-auto flex relative justify-center items-center my-8 max-w-xs md:max-w-lg lg:my-14">
        <i class="fa-solid fa-magnifying-glass absolute left-3 text-gray-700"></i>
        <button class="btn btn-cari btn-sm btn-secondary absolute right-2">Cari</button>
        <input type="text" wire:model.live.debounce.1000="keyword" placeholder="Search..."
            class="input input-bordered pl-9 w-full max-w-xl" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 m-5">
        @foreach ($articles as $item)
        <div class="card card-compact w-full bg-base-100 shadow-xl">
            @forelse ($item->bookmark as $book)
            @if ($book->user_id == auth()->user()->id)
            <livewire:components.button-delete-bookmark :item="$item" :key="$book->id" />
            @else
            <livewire:components.button-bookmark :item="$item" :key="$book->id" />
            @endif
            @empty
            <livewire:components.button-bookmark :item="$item" />
            @endforelse
            <figure><img class="h-56 object-cover" src="{{ Storage::url($item->thumbnail) }}" alt="Shoes" />
            </figure>
            <div class="card-body">
                <a href="{{ route('single-article', $item->slug) }}"
                    class="card-title text-neutral hover:text-secondary hover:scale-105 hover:duration-300">{{ \Illuminate\Support\Str::limit($item->title,25) }}</a>
                <p>{{ \Illuminate\Support\Str::limit($item->content,75) }}</p>
                <div class="card-actions justify-between items-center">
                    <div class="flex items-center gap-x-1">
                        <img src="{{ Storage::url($item->user->avatar)  }}" alt="profile" class="w-5 h-5 rounded-full">
                        <a class="text-md first-letter:uppercase font-medium" href="">{{ $item->user->name }}</a>
                    </div>
                    <a href="{{ route('single-article', $item->slug) }}" class="btn btn-xs btn-primary">Read
                        More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex flex-col w-full">
        <div class="divider"><button class="btn btn-sm btn-neutral text-white">Load More</button></div>
    </div>
    <div>
        <h1 class="text-4xl xl:text-4xl font-bold font-righteous my-5 text-center"><i class="fa-solid fa-bookmark"></i>
            My Bookmark</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 m-5">
            @forelse ($bookmarks as $item)
            <div class="card card-compact w-full bg-base-100 shadow-xl">
                <figure><img class="h-56 object-cover" src="{{ Storage::url($item->article->thumbnail) }}"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <a href="{{ route('single-article', $item->article->slug) }}"
                        class="card-title text-neutral hover:text-secondary hover:scale-105 hover:duration-300">{{ \Illuminate\Support\Str::limit($item->article->title,25) }}</a>
                    <p>{{ \Illuminate\Support\Str::limit($item->article->content,75) }}</p>
                    <div class="card-actions justify-between items-center">
                        <div class="flex items-center gap-x-1">
                            <img src="{{ Storage::url($item->article->user->avatar)  }}" alt="profile"
                                class="w-5 h-5 rounded-full">
                            <a class="text-md first-letter:uppercase font-medium"
                                href="">{{ $item->article->user->name }}</a>
                        </div>
                        <a href="{{ route('single-article', $item->article->slug) }}"
                            class="btn btn-xs btn-primary">Read
                            More</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-4 h-40 items-center justify-center flex">
                <h1 class="text-center text-2xl"> <i class="fa-regular fa-circle-xmark"></i> No Bookmark</h1>
            </div>
            @endforelse
        </div>
    </div>
</div>

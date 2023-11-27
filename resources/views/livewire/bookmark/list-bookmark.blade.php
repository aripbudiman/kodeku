<div class="w-full mx-auto max-w-5xl bg-slate-100">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 m-5">
        @foreach ($articles as $item)
        <div class="card card-compact w-full bg-base-100 shadow-xl">
            <figure><img class="h-52" src="{{ Storage::url($item->article->thumbnail) }}" alt="Shoes" />
            </figure>
            <div class="card-body">
                <a href="{{ route('single-article', $item->article->slug) }}"
                    class="card-title text-neutral hover:text-secondary hover:scale-105 hover:duration-300">{{ \Illuminate\Support\Str::limit($item->article->title,25) }}</a>
                <p>{{ \Illuminate\Support\Str::limit($item->article->content,50) }}</p>
                <div class="card-actions justify-between items-center">
                    <div class="flex items-center gap-x-1">
                        <img src="{{ Storage::url($item->article->user->avatar)  }}" alt="profile"
                            class="w-5 h-5 rounded-full">
                        <a class="text-md first-letter:uppercase font-medium"
                            href="">{{ $item->article->user->name }}</a>
                    </div>
                    <a href="{{ route('single-article', $item->article->slug) }}" class="btn btn-xs btn-primary">Read
                        More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

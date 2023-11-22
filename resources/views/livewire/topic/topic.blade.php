@push('style')
@livewireStyles
@endpush
@push('scripts')
@livewireScripts
@endpush
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10 m-5">
    @foreach ($topics as $item)
    <div class="card text-center gap-y-3">
        <img src="{{ Storage::url($item->icon)}}" alt="{{$item->name}}">
        <h2 class="text-2xl font-semibold text-secondary">{{ $item->name }}</h2>
        <p class="text-lg font-medium">({{ $item->articles_count}} Artikel)</p>
        <p>{{ \Illuminate\Support\Str::limit($item->description, 78) }}</p>
    </div>
    @endforeach
</div>

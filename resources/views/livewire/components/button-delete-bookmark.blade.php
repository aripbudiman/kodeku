<button wire:click.prevent="deleteBookmark({{ $item->id }})"
    class="btn btn-xs btn-bookmark absolute top-2 right-2 tooltip tooltip-close" data-tip="{{$tooltip}}">
    <i class=" fa-solid fa-bookmark"></i>
</button>

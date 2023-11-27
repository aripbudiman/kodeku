<button onclick="changeIconClass(this)" wire:click.live="addBookmark({{ $item->id }})"
    class="btn btn-xs btn-bookmark add absolute top-2 right-2 tooltip tooltip-close" data-tip="{{$tooltip}}">
    <i class="fa-regular icon fa-bookmark"></i>
</button>

@push('scripts')
<script>
    // const btnBook = document.querySelectorAll('.btn-bookmark.add')
    // var icon = document.querySelector('.icon')
    // console.log(btnBook)
    // btnBook.forEach(el => {
    //     el.addEventListener('click', function () {
    //         // alert('berhasil')
    //         console.log(el.nextSibling)
    //         el.nextSibling.classList.remove('fa-regular')
    //         el.nextSibling.classList.add('fa-solid')
    //     })
    // });

    // btn.addEventListener('click', function () {
    //     // icon.classList.remove('fa-regular')
    //     // icon.classList.add('fa-solid')
    // })
    function changeIconClass(button) {
        var icon = button.querySelector('.icon');
        if (icon.classList.contains('fa-regular')) {
            icon.classList.remove('fa-regular');
            icon.classList.add('fa-solid');
        } else {
            icon.classList.remove('fa-solid');
            icon.classList.add('fa-regular');
        }
    }

</script>
@endpush

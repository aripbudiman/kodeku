<details>
    <summary class="cursor-pointer ml-5">Theme</summary>
    <ul tabindex="0" class="ml-5">
        <li><a onclick="selectTheme('light')"><i class="fa-solid fa-caret-right"></i>Light</a></li>
        <li><a onclick="selectTheme('dark')"><i class="fa-solid fa-caret-right"></i>Dark</a></li>
        <li><a onclick="selectTheme('cyberpunk')"><i class="fa-solid fa-caret-right"></i>Cyberpunk</a></li>
        <li><a onclick="selectTheme('sunset')"><i class="fa-solid fa-caret-right"></i>Sunset</a></li>
        <li><a onclick="selectTheme('night')"><i class="fa-solid fa-caret-right"></i>Night</a></li>
    </ul>
</details>
@push('scripts')
<script>
    const theme = document.querySelector('html')
    const themeName = localStorage.getItem('theme')
    theme.setAttribute('data-theme', themeName)

    function selectTheme(themeName) {
        localStorage.setItem('theme', themeName)
        theme.setAttribute('data-theme', themeName)
    }

</script>
@endpush

@push('scripts')
<script id="dsq-count-scr" src="//pandakoding-com.disqus.com/count.js" async></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var preElements = document.querySelectorAll('pre');
        preElements.forEach(function (preElement) {
            var codeBlockWrapper = document.createElement('div');
            codeBlockWrapper.className = 'code-block-wrapper';
            var copyButton = document.createElement('button');
            copyButton.className = 'copy-button';
            copyButton.innerHTML = '<i class="fa-solid fa-clipboard"></i>';
            var titleCode = document.createElement('p');
            titleCode.innerHTML = "Source Code";
            var headerCode = document.createElement('div');
            headerCode.className = 'code-header';
            headerCode.appendChild(titleCode);
            headerCode.appendChild(copyButton);
            codeBlockWrapper.appendChild(headerCode);
            codeBlockWrapper.appendChild(preElement.cloneNode(true));
            preElement.parentNode.replaceChild(codeBlockWrapper, preElement);
            copyButton.addEventListener('click', function () {
                copyButton.textContent = '';
                titleCode.innerHTML = "";
                var range = document.createRange();
                range.selectNode(codeBlockWrapper);
                window.getSelection().addRange(range);
                try {
                    document.execCommand('copy');
                    copyButton.textContent = 'Copy';
                    titleCode.innerHTML = "Source Code";
                } catch (err) {
                    console.error('Tidak dapat menyalin teks ke clipboard', err);
                }
                window.getSelection().removeAllRanges();
            });
            copyButton.addEventListener('click', function (event) {
                copyButton.textContent = 'Copy';
                copyButton.innerHTML =
                    '<span class="text-[12px]">Copied!</span> <i class="fa-solid fa-clipboard-check"></i> ';
                setTimeout(function () {
                    copyButton.innerHTML = '<i class="fa-solid fa-clipboard"></i>';
                }, 1500);
                event.preventDefault();
            });
        });
    });
    const hidden = document.querySelector('article div p:last-child')
    hidden.textContent = ''

</script>
@endpush
<div class="pt-16 ">
    <div></div>
    <article class="w-full xl:max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold font-righteous mb-7">Daftar Isi:</h1>
        <x-markdown>
            {!! $article->content !!}</>
        </x-markdown>
    </article>
    <div></div>
</div>

@extends('layouts.app')
@push('style')
@livewireStyles
<style>
    pre {
        padding: 1em;
        margin: 1em 0;
        background-color: #f4f4f4;
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: auto;
        font-size: 0.8em;
        line-height: 1.5;
        position: relative;
    }

    article {
        font-size: 18px;
        @apply font-sans;
    }

    ul.table-of-contents {
        list-style-type: disc;
        margin-left: 20px;
        margin-top: 5px;
        margin-bottom: 28px;
    }

    ul.table-of-contents li {
        display: list-item;
    }

    ul li {
        padding: 0px 10px;
    }

    ul li::marker {
        color: #ff7ac6;
        content: "#";
        font-size: 20px;
    }

    ul.table-of-contents li a {
        padding-left: 8px;
        color: #ff7ac6;
    }

    ul.table-of-contents li a:hover {
        padding-left: 12px;
        color: #4a494a;
        text-decoration-line: underline
    }

    article h2 .space-x-2 {
        color: #ff7ac6;
        font-size: 30px;
    }

    article h2 {
        font-size: 30px;
        font-weight: 500;
    }

    .copy-container {
        background-color: aliceblue;
        width: 50px;
        position: absolute;
        right: 0px;
        top: 5px;
    }

    .copy-button {
        /* background-color: #ff7ac6; */
        padding: 4px 7px;
        border-radius: 20px;
        font-size: 10px;
        position: absolute;
        right: 2px;
        color: #ff7ac6;
        opacity: 70%;
    }

    .copy-button:hover {
        opacity: 100%;
    }

    .fa-clipboard {
        font-size: 15px;
    }

    article p code {
        color: #111827;
        background-color: #d1d5db;
        border-radius: 3px;
        padding: 1.5px;
    }

</style>
@endpush
@push('scripts')
@livewireScripts
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var preElements = document.querySelectorAll('pre');
        preElements.forEach(function (preElement) {
            var copyButton = document.createElement('button');
            copyButton.className = 'copy-button';
            copyButton.innerHTML = '<i class="fa-regular fa-clipboard"></i>';

            // Buat container div untuk menempatkan tombol Copy di dalam pre
            var containerDiv = document.createElement('div');
            containerDiv.className = 'copy-container';

            // Tambahkan tombol Copy ke dalam container
            containerDiv.appendChild(copyButton);

            // Tambahkan container di dalam pre
            preElement.appendChild(containerDiv);

            copyButton.addEventListener('click', function () {
                copyButton.textContent = '';
                var range = document.createRange();
                range.selectNode(preElement);
                window.getSelection().addRange(range);

                try {
                    // Salin teks ke clipboard menggunakan Clipboard API
                    document.execCommand('copy');
                    copyButton.textContent = 'Copy';
                } catch (err) {
                    console.error('Tidak dapat menyalin teks ke clipboard', err);
                }

                // Hilangkan area pemilihan
                window.getSelection().removeAllRanges();
            });

            // Mengatasi masalah teks "Copy" ikut ter-copy
            copyButton.addEventListener('click', function (event) {
                copyButton.textContent = 'Copy'
                if (copyButton.textContent === 'Copy') {
                    copyButton.innerHTML = 'Copied';
                } else {
                    copyButton.textContent = 'Copy';
                }
                event.preventDefault();
            });
        });
    });
    const hidden = document.querySelector('article div p:last-child')
    hidden.textContent = ''

</script>
@endpush
@section('content')
<div class="pt-16 ">
    <div></div>
    <article class="w-full xl:max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold">Daftar Isi:</h1>
        <x-markdown>
            {!! $article->content !!}</>
        </x-markdown>
    </article>
    <div></div>
</div>
@endsection

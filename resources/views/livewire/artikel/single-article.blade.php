@extends('layouts.app')
@push('style')
@livewireStyles
@endpush
@push('scripts')
@livewireScripts
@endpush
@section('content')
<div>
    <div></div>
    <div>
        <p>{{ $article->content }}</p>
    </div>
    <div></div>
</div>
@endsection

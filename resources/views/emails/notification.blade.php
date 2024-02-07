@extends('layouts.main')
@section('content')
<div>
    <p class="title font-bold mb-4">{{ $title ?? 'Default image'}}</p>
    <div class=" mb-4">
        <img class="image-container" src="{{ $url ?? 'https://images.pexels.com/photos/20023569/pexels-photo-20023569.jpeg' }}" alt="{{ $title ?? 'default image' }}">
    </div>
</div>
@endsection

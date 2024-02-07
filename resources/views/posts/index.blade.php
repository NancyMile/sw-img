@extends('layouts.main')
@section('content')
    @if (session()->has('success'))
        <div class="frame text-green-500">
            {{ session('success') }}
            <a class="btn" href="{{ route('home') }}">Choose more images</a>
        </div>
    @else
        @livewire('send-email',['images' => $images])
    @endif
@endsection

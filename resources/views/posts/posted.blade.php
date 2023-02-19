<!-- @extends('layouts.app')

@foreach ($posts as $post)
    <div>
        <img src="{{ asset('storage/images/' . $post->featured_image) }}" alt="{{ $post->title }}">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
@endforeach -->
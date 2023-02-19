@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Images</h1>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('storage/images/' . $image->featured_image) }}" alt="{{ $image->title }}">
                        <div class="card-body">
                            <p class="card-text">{{ $image->content }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ $image->title }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

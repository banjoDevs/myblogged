<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
                    <h1>All Posts</h1>
                <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4">
                    <h3>{{$post['title']}}</h3>
                    <img src="{{$post['featured_image']}}" alt="{{$post['title']}}">
                    {{$post['content']}}
                </div>
                @endforeach
</x-app-layout>

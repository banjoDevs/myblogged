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

    <div class="bg-gradient-to-b from-blue-200 to-gray-300">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-center text-3xl font-bold my-4">All Posts</h1>
    <div class="flex flex-wrap justify-center -mx-4">
      @foreach ($posts as $post)
        <div class="w-full sm:w-1/2 md:w-1/3 p-4">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $post['featured_image'] }}')"></div>
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">{{ $post['title'] }}</div>
              <p class="text-gray-700 text-base">{{ $post['content'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>




</x-app-layout>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-gray-300">
            <a href="/post/{{ $post->slug }}" class="hover:underline">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h2>
            </a>
            <div>By <a href="/author/{{ $post->author->username }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post->body, 120) }}</p>
            <a href="/post/{{ $post->slug }}" class="font-medium text-blue-600 hover:underline">Read more &raquo;</a>
        </article>
        @endforeach

</x-layout>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        <article class="max-w-screen-md py-8">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
           
            <div class="text-base text-gray-500"><a href="#">{{ $post['author'] }}</a> | 1 Agustus 2024</div>
            <p class="my-4 font-light">{{$post['body']}}</p>
            <a href="/post" class="font-medium text-blue-600 hover:underline">&laquo; Back to posts</a>
        </article>

</x-layout>

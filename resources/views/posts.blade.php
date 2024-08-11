<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <x-search-form></x-search-form>

    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:py-8 lg:px-0">
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">

            @foreach ($posts as $post)
                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <a href='/category/{{ $post->category->slug }}'>{{ $post->category->name }}</a>
                        </span>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 120) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="{{ $post->author->name }}" />
                            <span class="font-medium text-gray-500 dark:text-white hover:underline">
                                <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
                            </span>
                        </div>
                        <a href="/post/{{ $post->slug }}"
                            class="inline-flex items-center font-medium text-blue-600 text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
    </div>

</x-layout>

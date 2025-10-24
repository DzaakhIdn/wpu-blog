@props([
    'slug' => '',
    'blog_title' => '',
    'body' => '',
    'author' => 'Anonim',
    'created_at' => '',
    'category' => '',
    'single' => '',
    'author_link' => '',
])

<article
    class="group relative p-6 bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-out overflow-hidden">

    <!-- Efek gradien halus saat hover -->
    <div
        class="absolute inset-0 bg-gradient-to-r from-violet-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
    </div>

    <div class="flex justify-between items-center mb-4 text-gray-500 relative z-10">
        <a href="/single-category/{{ $single }}"
            class="text-violet-600 text-xs font-semibold tracking-wide hover:underline hover:text-violet-700">
            {{ $category }}
        </a>
        <span class="text-sm">{{ $created_at }}</span>
    </div>

    <h2
        class="mb-2 text-xl font-bold text-gray-900 relative z-10 group-hover:text-violet-700 transition-colors duration-300">
        <a href="/post/{{ $slug }}" class="line-clamp-1">{{ $blog_title }}</a>
    </h2>

    <p class="mb-5 text-gray-600 text-sm leading-relaxed line-clamp-2 relative z-10">
        {{ $body }}
    </p>

    <div class="flex justify-between items-center relative z-10">
        <a href="/author/{{ $author_link }}"
            class="text-gray-500 text-sm font-medium hover:text-violet-700 hover:underline transition-colors duration-300">
            {{ $author }}
        </a>

        <a href="/post/{{ $slug }}"
            class="inline-flex items-center text-violet-600 font-medium hover:text-violet-700 transition-colors duration-300">
            Read more
            <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>

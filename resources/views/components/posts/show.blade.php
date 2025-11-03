<article
    class=" mx-auto bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">

    <!-- Header -->
    <header class="px-8 py-10 border-b border-gray-100">
        <!-- Author Info -->
        <div class="flex items-center gap-4 mb-6">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=ddd&color=444"
                alt="{{ $post->author->name }}" class="w-12 h-12 rounded-full shadow-sm ring-1 ring-gray-200" />
            <div>
                <h3 class="font-semibold text-gray-900">{{ $post->author->name }}</h3>
                <p class="text-sm text-gray-500">
                    {{ $post['created_at']->format('M d, Y') }} •
                    <a href="/single-category/{{ $post->category->slug }}"
                        class="text-indigo-600 hover:underline">{{ $post->category->name_category }}</a>
                </p>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight text-gray-900">
            {{ $post['blog_title'] }}
        </h1>
    </header>

    <!-- Content -->
    <div class="px-8 py-10 content text-gray-700 leading-relaxed prose prose-indigo max-w-none">
        {!! nl2br(e($post['body'])) !!}
    </div>

    <!-- Footer -->
    <footer class="px-8 py-6 border-t border-gray-100 text-sm text-gray-600 bg-gray-50">
        <div class="flex items-center space-x-4">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update
                product</button>
            <button type="button"
                class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
                Delete
            </button>
        </div>
    </footer>
</article>

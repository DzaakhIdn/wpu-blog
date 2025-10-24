<x-layout :title="$title">
    <main class="min-h-screen py-14 px-4">
        <article
            class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">

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
                <p>
                    Ditulis oleh
                    <a href="/author/{{ $post->author->username }}"
                        class="font-semibold text-gray-800 hover:text-indigo-600 hover:underline">
                        {{ $post->author->name }}
                    </a>.
                    Terima kasih sudah membaca 💫
                </p>
            </footer>
        </article>
    </main>

    <style>
        /* Kecilkan font di layar kecil */
        @media (max-width: 420px) {
            .content {
                font-size: 0.95rem;
            }
        }

        /* Haluskan transisi dan buat tampilan teks lebih readable */
        .prose p {
            margin-bottom: 1.25em;
        }

        .prose a {
            color: #4f46e5;
            text-decoration: underline;
        }

        .prose a:hover {
            color: #3730a3;
        }
    </style>
</x-layout>

<x-layout :title="$title">
    <main class="min-h-screen flex flex-col items-center py-16 px-4">

        <!-- Header Kategori -->
        <section class="w-full max-w-3xl text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900">Kategori: <span
                    class="text-gray-700">{{ $category['name_category'] }}</span></h1>
            <p class="mt-3 text-gray-600 text-sm max-w-lg mx-auto">
                {{ $category['description'] }}
            </p>
        </section>

        <form class="w-4xl mx-auto mb-8">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Search ..." name="keyword" />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>

        <!-- Daftar Postingan -->
        <section class="w-full max-w-6xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
                @foreach ($posts as $blog)
                    <x-card-blog :slug="$blog['slug']" :blog_title="$blog['blog_title']" :body="$blog['body']" :author="$blog->author->name"
                        :created_at="$blog['created_at']->format('d M Y')" :category="$blog->category->name_category" :single="$blog->category->slug" :author_link="$blog->author->username" />
                @endforeach
            </div>

            <!-- Tombol Lihat Semua -->
            <div class="mt-12 flex justify-center">
                <a href="javascript:;"
                    class="border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-gray-900 font-semibold transition-all duration-300 hover:bg-gray-100">
                    Lihat Semua
                </a>
            </div>
        </section>
    </main>
</x-layout>

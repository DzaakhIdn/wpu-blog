<x-layout :title="'All Categories'">
    <section class="mx-auto py-16">
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-14 font-manrope">
            Explore All Categories
        </h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($categories as $category)
                <a href="/single-category/{{ $category->slug }}"
                    class="group border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:border-gray-300 bg-white">
                    <div class="flex flex-col h-full justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-900 mb-2">
                                {{ $category->name_category }}
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2">
                                {{ Str::limit($category->description ?? 'No description available', 80) }}
                            </p>
                        </div>
                        <span
                            class="mt-4 text-gray-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                            View Posts
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center">
            <a href="#"
                class="border border-gray-300 text-gray-700 font-semibold px-6 py-3 rounded-full shadow-sm hover:bg-gray-100 transition-all duration-300">
                Load More
            </a>
        </div>
    </section>
</x-layout>

<section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new post</h2>
        <form action="#">
            <div class="grid gap-4 mb-4">
                <div class="col-span-2">
                    <label for="blog_title" class="block mb-2 text-sm font-medium text-gray-900 ">Post Name</label>
                    <input type="text" name="blog_title" id="blog_title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                        placeholder="Type post title" required>
                </div>
                <div class="col-span-2">
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                    <select id="category" name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected="">Select category</option>
                        @foreach (App\Models\Category::get() as $category)
                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Body</label>
                    <textarea id="body" rows="8" name="body"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Your description here"></textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                    Post</button>
                <a href="{{ route('dashboard') }}"
                    class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</section>

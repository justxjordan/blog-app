<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-xl font-semibold mb-4">{{ __('Edit Blog') }}</h1>
        <form method="POST" action="{{ route('blogs.update', $blog) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">{{ __('Title') }}</label>
                <input id="title" name="title" type="text" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $blog->title }}" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">{{ __('Content') }}</label>
                <textarea id="content" name="content" class="w-full border-gray-300 rounded-md shadow-sm" required>{{ $blog->content }}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>

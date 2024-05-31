<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-xl font-semibold mb-4">{{ __('Create Blog') }}</h1>
        <form method="POST" action="{{ route('blogs.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">{{ __('Title') }}</label>
                <input id="title" name="title" type="text" class="w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">{{ __('Content') }}</label>
                <textarea id="content" name="content" class="w-full border-gray-300 rounded-md shadow-sm" required></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>

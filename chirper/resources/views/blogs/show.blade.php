<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-xl font-semibold mb-4">{{ $blog->title }}</h1>
        <p class="text-gray-600">{{ $blog->content }}</p>
        <div class="mt-4 flex space-x-4">
            <a href="{{ route('blogs.edit', $blog) }}" class="text-indigo-500 hover:text-indigo-700">{{ __('Edit') }}</a>
            <form method="POST" action="{{ route('blogs.destroy', $blog) }}" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">{{ __('Delete') }}</button>
            </form>
            <a href="{{ route('blogs.index') }}" class="text-gray-500 hover:text-gray-700">{{ __('Close') }}</a>
        </div>
    </div>
</x-app-layout>

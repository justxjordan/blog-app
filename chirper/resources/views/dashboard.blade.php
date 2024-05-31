<x-app-layout>
<div class="bg-cover bg-center h-screen" style="background-image: url('5517137.jpg');">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-2xl font-bold mb-4">Welcome to TideTales Dashboard!</h3>
                        <p class="mb-4">Manage your blog posts, view analytics, and customize your blog settings here.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-blue-100 p-4 rounded-lg">
                                <h4 class="text-xl font-semibold mb-2">Discover the Latest Stories on TideTales</h4>
                                <p>Explore the latest blogs from TideTales and stay up-to-date with the most recent content.</p>
                                <a href="{{ route('blogs.index') }}" class="mt-2 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Explore Blogs</a>
                            </div>
                            <div class="bg-purple-100 p-4 rounded-lg">
                                <h4 class="text-xl font-semibold mb-2">Engage with the TideTales Community</h4>
                                <p>Connect with other bloggers, share insights, and collaborate on new ideas. Click the button below to get started.</p>
                                <a href="{{ route('chirps.index') }}" class="mt-2 inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">View Comments</a>
                            </div>
                            <!-- Add more sections for other features as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


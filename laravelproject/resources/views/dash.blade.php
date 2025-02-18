<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @if (auth()->check())
        <div class="container mx-auto p-4">
            <!-- Welcome Message and Logout Button -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">
                    Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}! You are logged in successfully.
                </h1>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Add Book Form -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-semibold mb-4">Add a New Book</h2>
                <form id="addBookForm" class="space-y-4" method="POST" action="/addbook">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="3" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    </div>
                    <div>
                        <label for="image_link" class="block text-sm font-medium text-gray-700">Image Link</label>
                        <input type="url" id="image_link" name="image_link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Book
                    </button>
                    @if (session('success'))
                        <p class="mt-4 text-green-600">{{ session('success') }}</p>
                    @endif
                    @if (session('error'))
                        <p class="mt-4 text-red-600">{{ session('error') }}</p>
                    @endif
                </form>
            </div>

            <!-- Display Added Books -->
            <div id="bookList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach (\App\Models\Book::all() as $book)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">{{ $book->title }}</h3>
                        <p class="text-gray-600">{{ $book->description }}</p>
                        <img src="{{ $book->image_link }}" alt="{{ $book->title }}" class="w-full h-48 object-cover mt-2 rounded">
                        <div class="mt-4 flex items-center justify-between">
                            <a href="{{ route('books.edit', $book) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>
                            <form action="{{ route('destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <script>window.location.href = "{{ route('login') }}";</script>
    @endif
</body>
</html>
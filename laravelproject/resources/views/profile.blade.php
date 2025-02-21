<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Profile Card</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 dark:bg-gray-900 min-h-screen p-4 transition-colors duration-200">
    @if (auth()->check())
        <div class="max-w-2xl mx-auto">
            <a href="/dash"
                class="fixed top-4 right-4 p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-200">
                <svg class="w-6 h-6 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59   c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815   C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029   c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562   C26.18,21.891,26.141,21.891,26.105,21.891z">
                    </path>
                </svg>
                <svg class="w-8 h-8 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59   c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815   C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029   c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562   C26.18,21.891,26.141,21.891,26.105,21.891z">
                    </path>
                </svg>
            </a>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-colors duration-200">
                <div class="relative h-48">
                    <img src="https://cdn.wallpaperhub.app/cloudcache/c/1/4/5/2/7/c1452724f0c3bb5a9a9a9898b4c0a0cfac091f70.jpg"
                        alt="Cover" class="w-full h-full object-cover">
                    <div class="absolute -bottom-12 left-6">
                        <img src="https://i.pinimg.com/736x/2a/a6/d3/2aa6d378ab7d59b41d8fa617a2657837.jpg" alt="Profile"
                            class="w-24 h-24 rounded-xl object-cover border-4 border-white dark:border-gray-800 shadow-lg">
                    </div>
                </div>

                <div class="pt-16 px-6 pb-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ auth()->user()->first_name }}
                                {{ auth()->user()->last_name }}</h1>
                            <p class="text-purple-600 dark:text-purple-400">Books Lover</p>
                        </div>
                    </div>

                    <p class="mt-6 text-gray-600 dark:text-gray-300">
                        Lost in pages, found in stories. 📚✨ A bookworm on a journey through words, adventures, and endless
                        imagination. Always searching for my next literary escape. Let's talk books!
                    </p>

                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">published books</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach (\App\Models\Book::where('user_id', auth()->id())->get() as $book)
                                <span
                                    class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-lg text-sm font-medium">{{ $book->title }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Contact</h2>
                        <a href="mailto:abhirajk@example.com"
                            class="inline-flex items-center text-purple-600 dark:text-purple-400 hover:underline">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            {{ auth()->user()->email }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <script>window.location.href = "{{ route('login') }}";</script>
    @endif
</body>

</html>
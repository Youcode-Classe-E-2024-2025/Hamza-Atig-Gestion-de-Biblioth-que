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
        <section>
            <div class="relative mx-10">
                <div class="container mx-auto">
                    <nav
                        class="block w-full max-w-screen-2xl rounded-xl py-4 px-8 shadow-md backdrop-saturate-200 backdrop-blur-2xl bg-opacity-80 border-white/80 bg-white text-white relative z-50 mt-6 border-0">
                        <div class="container flex items-center justify-between mx-auto">
                            <p class="block antialiased text-black font-offside text-blue-gray-900 text-lg font-bold"
                                style="font-family: 'Offside">Readify
                            </p>
                            <ul class="items-center hidden gap-8 ml-10 lg:flex">
                                <li><a href="#"
                                        class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                            <path
                                                d="M5.566 4.657A4.505 4.505 0 0 1 6.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0 0 15.75 3h-7.5a3 3 0 0 0-2.684 1.657ZM2.25 12a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3v-6ZM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 0 1 6.75 6h10.5a3 3 0 0 1 2.683 1.657A4.505 4.505 0 0 0 18.75 7.5H5.25Z">
                                            </path>
                                        </svg>Pages</a></li>
                                <li><a href="#"
                                        class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                                clip-rule="evenodd"></path>
                                        </svg>Account</a></li>
                                <li><a href="#"
                                        class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                clip-rule="evenodd"></path>
                                        </svg>Blocks</a></li>
                                <li><a href="#"
                                        class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M2.25 6a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V6Zm3.97.97a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Zm4.28 4.28a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                                clip-rule="evenodd"></path>
                                        </svg>Docs</a></li>
                            </ul>
                            <div class="items-center hidden gap-4 lg:flex">
                                <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                    href="/profile">profile</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                                        Logout
                                    </button>
                                </form>
                            </div><button
                                class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20 inline-block ml-auto lg:hidden"
                                type="button"><span
                                    class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                    </svg></span></button>
                        </div>
                        <div class="block w-full basis-full overflow-hidden" style="height:0px" data-projection-id="3">
                            <div class="container px-2 pt-4 mx-auto mt-3 border-t border-gray-200">
                                <ul class="flex flex-col gap-4">
                                    <li><a href="#"
                                            class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                                <path
                                                    d="M5.566 4.657A4.505 4.505 0 0 1 6.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0 0 15.75 3h-7.5a3 3 0 0 0-2.684 1.657ZM2.25 12a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3v-6ZM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 0 1 6.75 6h10.5a3 3 0 0 1 2.683 1.657A4.505 4.505 0 0 0 18.75 7.5H5.25Z">
                                                </path>
                                            </svg>Pages</a></li>
                                    <li><a href="#"
                                            class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>Account</a></li>
                                    <li><a href="#"
                                            class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>Blocks</a></li>
                                    <li><a href="#"
                                            class="antialiased font-sans text-base leading-relaxed flex items-center gap-2 font-medium text-gray-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 6a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V6Zm3.97.97a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Zm4.28 4.28a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>Docs</a></li>
                                </ul>
                                <div class="flex items-center gap-4 mt-6 mb-4"><a
                                        href="/profile" class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20">
                                        profile</a>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <div class="container mx-auto p-4">
            <!-- Welcome Message and Logout Button -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">
                    Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}! You are logged in
                    successfully.
                </h1>
            </div>

            <!-- Add Book Form -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-semibold mb-4">Add a New Book</h2>
                <form id="addBookForm" class="space-y-4" method="POST" action="/addbook">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="3"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            required></textarea>
                    </div>
                    <div>
                        <label for="image_link" class="block text-sm font-medium text-gray-700">Image Link</label>
                        <input type="url" id="image_link" name="image_link"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            required>
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
                <h1 class="text-3xl font-bold">Your Books</h1>
                @foreach (\App\Models\Book::where('user_id', auth()->id())->get() as $book)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">{{ $book->title }}</h3>
                        <p class="text-gray-600">{{ $book->description }}</p>
                        <img src="{{ $book->image_link }}" alt="{{ $book->title }}"
                            class="w-full h-48 object-cover mt-2 rounded">
                        <div class="mt-4 flex items-center justify-between">
                            <a href="{{ route('books.edit', $book) }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>
                            <form action="{{ route('destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <h1 class="text-3xl font-bold">Other Books</h1>
                @foreach (\App\Models\Book::all() as $book)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">{{ $book->title }}</h3>
                        <p class="text-gray-600">{{ $book->description }}</p>
                        <img src="{{ $book->image_link }}" alt="{{ $book->title }}"
                            class="w-full h-48 object-cover mt-2 rounded">
                        <div class="mt-4 flex items-center justify-end">
                            <a href="/enroll"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enroll</a>
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
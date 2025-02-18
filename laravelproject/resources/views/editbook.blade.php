<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Book</title>
</head>

<body>
    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ old('title', $book->title) }}">
        <textarea name="description">{{ old('description', $book->description) }}</textarea>
        <input type="url" name="image_link" value="{{ old('image_link', $book->image_link) }}">

        <button type="submit">Update</button>
    </form>
</body>

</html>
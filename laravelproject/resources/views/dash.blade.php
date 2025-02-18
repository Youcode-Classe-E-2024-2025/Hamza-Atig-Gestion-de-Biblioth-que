<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome user</title>
</head>
<body>
    @if (auth()->check())
        <h1>
            Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} you are logged in with success !!
        </h1>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <script>window.location.href = "{{ route('login') }}";</script>
    @endif
</body>
</html>

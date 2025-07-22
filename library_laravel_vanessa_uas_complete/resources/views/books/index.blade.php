<!DOCTYPE html>
<html>
<head>
    <title>Library Books</title>
</head>
<body>
    <h1>Book List</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} by {{ $book->author }} ({{ $book->year }})</li>
        @endforeach
    </ul>
</body>
</html>

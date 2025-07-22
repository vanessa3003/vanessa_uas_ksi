<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <label>Title: <input type="text" name="title" value="{{ $book->title }}"></label><br>
        <label>Author: <input type="text" name="author" value="{{ $book->author }}"></label><br>
        <label>Year: <input type="number" name="year" value="{{ $book->year }}"></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add a New Book</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <label>Title: <input type="text" name="title"></label><br>
        <label>Author: <input type="text" name="author"></label><br>
        <label>Year: <input type="number" name="year"></label><br>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>

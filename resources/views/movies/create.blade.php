<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
</head>
<body>
    <h1>Add New Movie</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <label for="movie_name">Name:</label>
        <input type="text" id="movie_name" name="movie_name" required>
        <br>
        <label for="movie_description">Description:</label>
        <textarea id="movie_description" name="movie_description" required></textarea>
        <br>
        <label for="movie_gener">Genre:</label>
        <input type="text" id="movie_gener" name="movie_gener" required>
        <br>
        <button type="submit">Add Movie</button>
    </form>
    <a href="{{ route('movies.index') }}">Back to Movies List</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="movie_name">Name:</label>
        <input type="text" id="movie_name" name="movie_name" value="{{ $movie->movie_name }}" required>
        <br>
        <label for="movie_description">Description:</label>
        <textarea id="movie_description" name="movie_description" required>{{ $movie->movie_description }}</textarea>
        <br>
        <label for="movie_gener">Genre:</label>
        <input type="text" id="movie_gener" name="movie_gener" value="{{ $movie->movie_gener }}" required>
        <br>
        <button type="submit">Update Movie</button>
    </form>
    <a href="{{ route('movies.index') }}">Back to Movies List</a>
</body>
</html>

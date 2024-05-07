<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
</head>
<body>
    <h1>Add New Movie</h1>
    <form action="submit-movie.php" method="post">
        <div>
            <label for="movie">Movie Title:</label>
            <input type="text" name="movie" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" ></textarea>
        </div>
        <div>
        <label for="is_available">Is Available:</label>
            <select name="is_available">
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select>
        </div>
        <button type="submit">Add Movie</button>
    </form>
</body>
</html>

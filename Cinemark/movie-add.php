<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Logos/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="movie-change-styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemark</title>
</head>
<body>
    <div class="navbar">
        <img id="logo" src="Logos/logo-alt.png" alt="Cinemark Logo">
        <div class="link-container">
            <a href="movie-list.php">Movies</a>
            <a href="movie-login.php">Logout</a>
        </div>
    </div>

    <div class="login-container">
        <h1 id="login-title">Add Movie</h1>
        <form action="movie-add.php" method="post">
            <input required name="title" type="text" placeholder="Title" id="title">
            <input required name="description" type="text" placeholder="Description" id="description">
            <input required name="director" type="text" placeholder="Director" id="director">
            <input required name="release_year" type="text" placeholder="Release Year" id="release-Year">
            <input required name="budget" type="text" placeholder="Budget" id="budget">
            <input required name="runtime" type="text" placeholder="Runtime" id="runtime">
            <input required name="rating" type="text" placeholder="Rating" id="rating">
            <input required name="genre" type="text" placeholder="Genre" id="genre">
            <button type="submit">Add Movie</button>
        </form>
    </div>
</body>
</html>


<?php
    require_once 'login.php';

    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);

    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $director = $_POST['director'];
        $release_year = $_POST['release_year'];
        $budget = $_POST['budget'];
        $runtime = $_POST['runtime'];
        $rating = $_POST['rating'];
        $genre = $_POST['genre'];

        $query = "INSERT INTO movie(title, description, director, release_year, budget, runtime, rating, genre)
        VALUES('$title','$description','$director','$release_year','$budget','$runtime','$rating','$genre')";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: movie-list.php");
    }
    $conn->close();
?>
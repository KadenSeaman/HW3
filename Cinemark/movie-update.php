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
        <h1 id="login-title">Update Movie</h1>
        <?php
            require_once 'login.php';

            $conn = new mysqli($hn,$un,$pw,$db);
            if($conn->connect_error) die($conn->connect_error);
    
            if(isset($_GET['movie_id'])){
                $movie_id = $_GET['movie_id'];
    
                $query = "SELECT * FROM movie WHERE movie_id=$movie_id";
    
                $result = $conn->query($query);
                if(!$result) die($conn->error);
    
                if($result->num_rows > 0){
                    while($row = $result->fetch_array(MYSQLI_ASSOC)){
                        echo <<< _END
                                <form action="movie-update.php" method="POST">
                                    <input required placeholder='Title' name='title' type="text" value="$row[title]" id="title">
                                    <input required placeholder='Description' name='description' type="text" value="$row[description]" id="description">
                                    <input required placeholder='Director' name='director' type="text" value="$row[director]" id="director">
                                    <input required placeholder='Release Year' name='release_year' type="text" value="$row[release_year]" id="release-Year">
                                    <input required placeholder='Budget' name='budget' type="text" value="$row[budget]" id="budget">
                                    <input required placeholder='Runtime' name='runtime' type="text" value="$row[runtime]" id="runtime">
                                    <input required placeholder='Rating' name='rating' type="text" value="$row[rating]" id="rating">
                                    <input required placeholder='Genre' name='genre' type="text" value="$row[genre]" id="genre">
                                    <input type='hidden' name='update' value='yes'>
                                    <input type='hidden' name='movie_id' value='$row[movie_id]'>
                                    <button type="submit">Update Movie</button>
                                </form>
                        _END;
                    }   
                }
            }
        ?>


    </div>
</body>
</html>



<?php
    require_once 'login.php';

    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);

    if(isset($_POST['movie_id'])){
        $movie_id = $_POST['movie_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $director = $_POST['director'];
        $release_year = $_POST['release_year'];
        $budget = $_POST['budget'];
        $runtime = $_POST['runtime'];
        $rating = $_POST['rating'];
        $genre = $_POST['genre'];

        $query = "UPDATE movie SET movie_id='$movie_id', title='$title', description='$description', director='$director', release_year='$release_year', budget='$budget', runtime='$runtime', rating='$rating', genre='$genre' WHERE movie_id=$movie_id";
        
        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: movie-list.php");
    }

    $conn->close();
?>
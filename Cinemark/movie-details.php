<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Logos/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="movie-list-styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemark</title>
</head>

<body>
    <div class="bg"></div>
    <div class="navbar">
        <img id="logo" src="Logos/logo-alt.png" alt="Cinemark Logo">
        <div class="link-container">
            <a href="movie-list.php">Movies</a>
            <a href="movie-login.php">Logout</a>
        </div>
    </div>
    <div class="actionbar">

    <?php
        echo "<a id='delete-movie-button' href='movie-delete.php?movie_id=$_GET[movie_id]'>- Delete Movie</a>";
        echo "<a id='update-movie-button' href='movie-update.php?movie_id=$_GET[movie_id]'>+ Update Movie</a>";
    ?>
    </div>
    <h1 id="title">Movie Details</h1>
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
                            <div class='main-details'>
                                <div class='details-container'>
                                    <img src='Movie Pictures/deadpool.webp' alt=''>
                                    <h2>Title: $row[title]</h2>
                                    <h6>Description: <span class='weak'>$row[description]</span></h6>
                                </div>
                                <div class='video-container'>
                                    <iframe width='480' height='270' src='https://www.youtube.com/embed/73_1biulkYk' title='$row[title]' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
                                    <div class='info-container'>
                                        <h4>Director: $row[director]</h4>
                                        <h4>Release Year: $row[release_year]</h4>
                                    </div>
                                    <div class='info-container'>
                                        <h2>Budget: <span class='weak'>$row[budget]</span></h2>
                                        <h2>Runtime: <span class='weak'>$row[runtime]</span></h2>
                                    </div>
                                    <div class='info-container'>
                                        <h2>Rating: <span class='weak'>$row[rating]/10</span></h2>
                                        <h2>Genre: <span class='weak'>$row[genre]</span></h2>
                                    </div>
                                </div>
                            </div>
                    _END;
                }

            }
            else{
                echo "No data found";
            }
        }


    ?>



</body>
</html>
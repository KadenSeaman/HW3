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
        <a id="add-movie-button" href="movie-add.php">+ Add Movie</a>
    </div>
    <h1 id="title">Browse Movies</h1>
    <div class="movie-card-container">
        <?php
            require_once 'login.php';
            
            $conn = new mysqli($hn,$un,$pw,$db);
            if($conn->connect_error) die($conn->connect_error);

            $query = "SELECT * FROM movie ORDER BY title";

            $result = $conn->query($query);
            if(!$result) die($conn->error);

            if($result->num_rows > 0){
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo <<< _END
                            <div class='movie-card'>
                                <a href="movie-details.php?movie_id=$row[movie_id]"><img src="" alt="picture of $row[title]"></a>
                                <a href="movie-details.php?movie_id=$row[movie_id]"><h1>$row[title]</h1></a>
                            </div>
                    _END;
                }
            }
            else{
                echo "No Data Found Error";
            }
        ?>
    </div>
</body>
</html>
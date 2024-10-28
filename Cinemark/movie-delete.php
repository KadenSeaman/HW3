<?php
    require_once 'login.php';

    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);

    if(isset($_GET['movie_id'])){
        $movie_id = $_GET['movie_id'];

        $query = "DELETE FROM movie WHERE movie_id='$movie_id'";

        $result = $conn->query($query);
        if(!$result) die($conn->error);
        
        header("Location: movie-list.php");
    }
    else{
        echo "ERROR";
    }
?>
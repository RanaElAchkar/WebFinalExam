<?php
function AddMovie($id, $movie, $description){
    $db= dbconnect();
    global $db;
    $stmt = $db->query("SELECT ID FROM table_movies WHERE MOVIE = '$movie'");
    $record = $stmt->fetch();
     if ($record) {
         echo "Movie already exists";
         header("Location: ../../CMS/CMSpages/AddItem.php");
         exit();
       }
     else {
         $stamt= $db->query("INSERT INTO table_movies (ID, MOVIE, DESCRIPTION) VALUES ('$id', $movie', '$description')");
         header("Location: ../../CMS/CMSpages/AddItem.php");
     }
 }

function ToggleAvailability($movie_id, $new_status) {
    $db = dbconnect();
    global $db;
    $update_query = "UPDATE movies SET `is_available` = $new_status WHERE id = $movie_id";
    $stmt->query($update_query);
    if($stmt->rowCount()>0){
        header("location:../../CMS/CMSpages/itemslist.php");
    }else{
        echo "Error";
    }

}
function listMovies(){
    $movies=array();
    global $db;
    $db= dbconnect();
    $query="SELECT * FROM table_movies";
    $stmt=$db->query($query);
    if($stmt->rowCount()>0){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $movie=new Movie();
            $movie->id= $row['id'];
            $movie->movie= $row['movie'];
            $movie->description= $row['description'];
            $movie->is_avaliable= $row['is_avaliable'];
            $movies[]=$movie;
        }
        return $movies;
    }else{
        return 0;
    }
}



?>

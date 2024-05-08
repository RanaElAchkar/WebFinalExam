<?php
$movies = array(
    array('id' => 1, 'title' => 'Movie 1', 'image_url' => 'movie1.jpg'),
    array('id' => 2, 'title' => 'Movie 2', 'image_url' => 'movie2.jpg'),
);

foreach ($movies as $movie) {
    $movie_id = $movie['id'];
    $movie_title = $movie['title'];
    $image_url = $movie['image_url'];
    ?>
    <a href="listMovies.php?id=<?php echo $movie_id; ?>"> 
        <img src="<?php echo $image_url; ?>" alt="<?php echo $movie_title; ?>" width="200" height="300"> 
        <h3><?php echo $movie_title; ?></h3>
    </a>
    <?php
}
?>

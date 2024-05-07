<?php
class Post{
    public $movie;
    public $description;
    public $is_available;   

public function __construct( $movie, $description, $is_available) {
    $this->movie = $movie;
    $this->description= $description;
    $this->is_available = $is_available;
}
}
?>
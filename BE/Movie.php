<?php
class Movie {
    public $id;
    public $movie;
    public $description;
    public $is_available;   

public function __construct($id, $movie, $description, $is_available) {
    $this->id = $id;
    $this->movie = $movie;
    $this->description= $description;
    $this->is_available = $is_available;
}
}
?>
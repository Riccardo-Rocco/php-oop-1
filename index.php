<?php

require_once 'dati.php'; 

require_once 'Movie.php';


$moviesArray = [];


$movie1 = new Movie('Il Signore degli Anelli', 'Peter Jackson', ['Fantasy', 'Adventure']);
$movie2 = new Movie('Inception', 'Christopher Nolan', ['Sci-Fi', 'Action']);
$movie3 = new Movie('The Dark Knight', 'Christopher Nolan', 'Action');
$movie3->setGenres(['Action', 'Crime']);
$moviesArray[] = $movie1;
$moviesArray[] = $movie2;
$moviesArray[] = $movie3;

echo "<h2>Lista di Film</h2>";
foreach ($moviesArray as $movie) {
    echo "<h3>{$movie->title}</h3>";
    echo "<p><strong>Regista:</strong> {$movie->director}</p>";
    echo "<p><strong>Generi:</strong> {$movie->getGenresAsString()}</p>";
    echo "<hr>";
}
?>

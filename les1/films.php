<?php


$films = [
    "Film1" => [
            'titel' => "Fight Club",
            'releaseYear' => "1999",
            'genre' => "Drama",
            'cast' => "Edward Norton, Brad Pitt",
    ],

    "Film2" => [
            'titel' => "Boondock Saints",
            'releaseYear' => "1989",
            'genre' => "Actie",
            'cast' => "Norman Reedus, Willem Dafoe",
    ],
];
//OUTPUT
//Voor de titel een H1 en de andere informatie telkens een paragraaf
foreach ($films as $film) {
    echo "<h1>Titel: {$film['titel']}</h1>";
    echo "<p>Release Year: {$film['releaseYear']}</p>";
    echo "<p>Genre: {$film['genre']}</p>";
    echo "<p>Cast: {$film['cast']}</p>";
};



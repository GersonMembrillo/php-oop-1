<?php

include __DIR__ . '/Genre.php';

class Movie
{
  public
    $title, $poster, $duration, $language, $genre;

  public function __construct(string $title = '', string $poster = '', int $duration = 90, string $language = 'en', Genre $genre)
  {
    $this->title = $title;
    $this->poster = $poster;
    $this->duration = $duration;
    $this->language = $language;
    $this->genre = $genre;
  }

  public function getDetails()
  {
    return "Duration: $this->duration Language: $this->language";
  }

  public function get_genres_as_string()
  {
    $genres = [];
    foreach ($this->$genres as $genre) {
      array_push($genres, $genre->name);
    }
    $genres_string = implode(',', $genres);
    return $genres_string;
  }
}

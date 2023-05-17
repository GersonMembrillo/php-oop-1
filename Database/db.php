<?php
include __DIR__ . '../Models/Movie.php';

$genres = [
  new Genre('Drammatico'),
  new Genre('Animazione')
];
$movie = [
  new Movie('Il Padrino', 'https://www.themoviedb.org/t/p/w1280/r4gnMXoY1efvaolNDjn3nj4046S.jpg', 120, 'en', $genres),
  new Movie('Encanto', 'https://www.themoviedb.org/t/p/w1280/ciWeu1wG0QxE1LV7boUmCgQvqmD.jpg', 120, 'en', $genres)
];

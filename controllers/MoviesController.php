<?php

class MoviesController extends BaseController {

    public function index() {
        parent::view(array(
            'movies' => (new MovieRepository())->getAll(),
            'genres' => (new GenreRepository())->getAll(),
        ));
    }

    public function show($movieId) {
        parent::view(array(
            'movie' => (new MovieRepository())->get($movieId),
        ), 'show');
    }

    public function search($movieName) {
        parent::view(array(
            'movies' => (new MovieRepository())->search($movieName),
            'genres' => (new GenreRepository())->getAll(),
        ), 'index');
    }

} 
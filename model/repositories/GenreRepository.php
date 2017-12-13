<?php

class GenreRepository {

    public function getAll() {
        $data = json_decode(file_get_contents('https://api.themoviedb.org/3/genre/movie/list?api_key=1f54bd990f1cdfb230adb312546d765d'));
        $genres = array();
        foreach ($data->genres as $genre) {
            $genres[$genre->id] = $genre;
        }
        return $genres;
    }

} 
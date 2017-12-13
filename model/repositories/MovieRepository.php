<?php

class MovieRepository {

    public function getAll() {
        $data = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=1f54bd990f1cdfb230adb312546d765d'));
        return $data;
    }

    public function get($movieId) {
        $data = json_decode(file_get_contents("https://api.themoviedb.org/3/movie/{$movieId}?api_key=1f54bd990f1cdfb230adb312546d765d"));
        return $data;
    }

    public function search($movieName) {
        $encodedMovieName = urlencode($movieName);
        $data = json_decode(file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=1f54bd990f1cdfb230adb312546d765d&query={$encodedMovieName}"));
        return $data;
    }

} 
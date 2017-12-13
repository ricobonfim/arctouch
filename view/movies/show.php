<link rel="stylesheet" type="text/css" href="../../content/css/movies.css">

<div class="row">
    <div class="col-md-12">
        <div class="col-md-4 float-md-left">
            <img src="https://image.tmdb.org/t/p/w500/<?php echo $movie->poster_path; ?>" alt="Poster not found" class="poster">
        </div>
        <div class="col-md-8 float-md-right">
          <h2><?php echo $movie->title; ?></h2>
          <p><?php echo $movie->overview; ?></p>
          <span>Genres:</span>
          <?php foreach ($movie->genres as $genre) : ?>
            <span class="label genre"><?php echo $genre->name; ?></span>
          <?php endforeach; ?>
          <p class="releaseDate">Release Date: <?php echo $movie->release_date; ?></p>
          <p><a class="btn btn-secondary" href="/arctouch/movies/index" role="button">Back to full list &raquo;</a></p>
        </div>
    </div>
</div>
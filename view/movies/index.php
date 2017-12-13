<link rel="stylesheet" type="text/css" href="/arctouch/content/css/movies.css">

<div class="row">
  <?php foreach ($movies->results as $movie) : ?>
    <div class="col-md-4">
      <img src="https://image.tmdb.org/t/p/w500/<?php echo $movie->poster_path; ?>" alt="Poster not found" class="poster">
      <h2><?php echo $movie->title; ?></h2>
      <div class="col-md-12">
        <div class="row">
          <span>Genres:</span>
          <?php foreach ($movie->genre_ids as $genreId) : ?>
            <span class="label genre"><?php echo $genres[$genreId]->name; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <p class="releaseDate">Release Date: <?php echo $movie->release_date; ?></p>
      <p><a class="btn btn-secondary" href="/arctouch/movies/show/<?php echo $movie->id; ?>" role="button">View details &raquo;</a></p>
    </div>
  <?php endforeach; ?>
</div>
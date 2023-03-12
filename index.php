<?php 
  require_once('database/database.php');
  $query = 'SELECT * FROM songs';
  $statement = $db->prepare($query);
  $statement->execute();
  $songs = $statement->fetchAll();
  $statement->closeCursor();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <?php include_once('components/navbar.php'); ?>

    <div>
        <?php include_once('components/banner.php'); ?>
    </div>

    <main class="container mt-5">

        <div class="row">
        <h2>All Songs</h2>
            <?php foreach ($songs as $song) : ?>
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <img src="images/music.png" class="album-images" alt="Song Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $song['Title']; ?></h5>
                        <p class="card-text">Genre: <?php echo $song['Genre']; ?></p>
                        <p class="card-text">Release Year: <?php echo $song['ReleaseYear']; ?></p>
                        <a href="song.php?id=<?php echo $song['SongID']; ?>" class="btn btn-primary">Listen Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


    </main><!-- /.container -->

    <?php include_once('components/footer.php'); ?>


    <script src="js/bootstrap.bundle.min.js"></script>

</html>
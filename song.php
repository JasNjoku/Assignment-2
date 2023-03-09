<?php
  $songID = $_GET['id'];
  require_once('database/database.php');
  $query = "SELECT Songs.Title, Songs.Genre, Songs.ReleaseYear, Artists.Name, Artists.Country 
            FROM Songs 
            INNER JOIN Artists ON Songs.ArtistID = Artists.ArtistID 
            WHERE Songs.SongID = :songID";
  $stmt = $db->prepare($query);
  $stmt->bindValue(':songID', $songID);
  $stmt->execute();
  $song = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="mystyle.css" rel="stylesheet">
</head>
<body>

<?php include_once('components/navbar.php'); ?>
   
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <img src="images/music.png" class="card-img-top" alt="Song Image">
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php echo $song['Title']; ?></h4>
          <h4 class="card-title"><?php echo $song['Name']; ?></h4>
          <p class="card-text"><?php echo $song['Country']; ?></p>
          <p class="card-text">Genre: <?php echo $song['Genre']; ?></p>
          <p class="card-text">Release Year: <?php echo $song['ReleaseYear']; ?></p>
          <a href="#" class="btn btn-primary">Listen Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
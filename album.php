<?php
require_once('database/database.php');

// Retrieve all albums and their corresponding artists from the database
$query = "SELECT Albums.AlbumID, Albums.Title AS AlbumTitle, Artists.Name AS ArtistName
          FROM Albums
          INNER JOIN Artists ON Albums.ArtistID = Artists.ArtistID";
$stmt = $db->query($query);
$albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Albums · My Music Library</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
</head>

<body>

    <?php include 'components/navbar.php'; ?>

    <main class="container">
        <h1>Albums</h1>
        <form>
            <div class="mb-3">
                <label for="albumSelect" class="form-label">Select an album:</label>
                <select class="form-select" id="albumSelect" name="albumID">
                    <?php foreach ($albums as $album): ?>
                    <option value="<?php echo $album['AlbumID']; ?>">
                        <?php echo $album['AlbumTitle'] . ' - ' . $album['ArtistName']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Show songs</button>
        </form>

        <?php
        // Check if an album has been selected
        if (isset($_GET['albumID'])) {
            $albumID = $_GET['albumID'];
            
            $query = "SELECT Albums.Title AS AlbumTitle, Artists.Name AS ArtistName
                      FROM Albums
                      INNER JOIN Artists ON Albums.ArtistID = Artists.ArtistID
                      WHERE Albums.AlbumID = :albumID";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':albumID', $albumID);
            $stmt->execute();
            $album = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $query = "SELECT Songs.Title
                      FROM Songs
                      INNER JOIN Albums ON Songs.ArtistID = Albums.ArtistID
                      WHERE Songs.ArtistID = :albumID";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':albumID', $albumID);
            $stmt->execute();
            $songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            

            ?>
        <hr>
        <h2><?php echo $album['AlbumTitle'] . ' - ' . $album['ArtistName']; ?></h2>
        <ul>
            <?php foreach ($songs as $song): ?>
            <li><?php echo $song['Title']; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php
        }
        ?>

    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
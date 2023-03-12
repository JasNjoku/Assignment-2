<?php
require_once('database/database.php');
  $query = 'SELECT * FROM artists';
  $statement = $db->prepare($query);
  $statement->execute();
  $artists = $statement->fetchAll();
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
</head>

<body>

    <?php include 'components/navbar.php'; ?>

    <main class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>Artist Name</th>
                    <th>Artist Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artists as $artist) : ?>
                <tr>
                    <td><?php echo $artist['Name']; ?></td>
                    <td><?php echo $artist['Country']; ?></td>
                    <td>
                        <a href="edit_artist.php?artist_id=<?php echo $artist['ArtistID']; ?>"
                            class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#delete-modal-<?php echo $artist['ArtistID']; ?>">Delete</button>
                        <!-- Delete confirmation modal -->
                        <div class="modal fade" id="delete-modal-<?php echo $artist['ArtistID']; ?>" tabindex="-1"
                            aria-labelledby="delete-modal-<?php echo $artist['ArtistID']; ?>-label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            id="delete-modal-<?php echo $artist['ArtistID']; ?>-label">Confirm Delete
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this artist?
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST">
                                            <input type="hidden" name="artist_id"
                                                value="<?php echo $artist['ArtistID']; ?>">
                                            <button type="submit" class="btn btn-danger" name="delete_artist"
                                                value="delete_artist">Yes</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">No</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
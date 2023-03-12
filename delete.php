<?php
  require_once('database/database.php');
  $artist_id = filter_input(INPUT_POST, 'artist_id', FILTER_VALIDATE_INT);
    if ($artist_id) {
        $query = 'DELETE FROM Artists WHERE ArtistID = :artist_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':artist_id', $artist_id);
        $success = $statement->execute();
        $statement->closeCursor();
    }

    include('artists.php');

?>
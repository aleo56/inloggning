<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "Välkommen tillbaks, " . $_SESSION['username'];
} else {
  echo "Logga in för att se den här sidan";
  die();
}
?>

<!DOCTYPE html>
<html>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" />
    <button type="submit" name="submit">Upload</button>
  </form>
  <a href="logout.php">LogOut</a>
</body>

</html>
<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $desc = $_POST['description'];

  $sql = "INSERT INTO issues (title, description) VALUES ('$title', '$desc')";
  mysqli_query($conn, $sql);
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Issue</title>
</head>
<body>
  <h2>Add New Issue</h2>
  <form method="POST">
    Title: <input type="text" name="title" required><br><br>
    Description:<br>
    <textarea name="description" rows="4" cols="40"></textarea><br><br>
    <input type="submit" value="Add Issue">
  </form>
  <br>
  <a href="index.php">🔙 Back to Tracker</a>
</body>
</html>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Smart Issue Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Smart Issue Tracker</h1>
  <a href="add.php">➕ Add New Issue</a>
  <table>
    <tr>
      <th>ID</th><th>Title</th><th>Status</th><th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM issues ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['title']}</td>
              <td>{$row['status']}</td>
              <td>
                <a href='update.php?id={$row['id']}&status=In Progress'>Start</a> |
                <a href='update.php?id={$row['id']}&status=Done'>Done</a>
              </td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>

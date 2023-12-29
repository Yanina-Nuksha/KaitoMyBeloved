<?php
$servername = "localhost";
$username = "root";
$password = "5F108q~12";
$dbname = "kaito";

try {

  $conn = new mysqli($servername, $username, $password, $dbname);
  $id = $conn->real_escape_string($_GET['id']);
  $sql = "DELETE FROM feedback WHERE id=$id";
  $result = $conn->query($sql);
  $sql = "SELECT * FROM feedback";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      echo "<tr>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["review"] . "</td>";
      echo "<td>" . $row["rating"] . "</td>";
      echo "<td><button class=\" footer-button medium-blue\" onclick='deleteFeedback(" . $row["id"] . ")'>Delete</button></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

} catch (PDOException $e) {
}
$conn->close();
?>
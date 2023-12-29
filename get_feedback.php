<?php

$servername = "localhost";
$username = "root";
$password = "5F108q~12";
$dbname = "kaito";

try {
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM feedback";
  $result = $conn->query($sql);
  if ($result = $conn->query($sql)) {
    foreach ($result as $row) {
      echo "<tr>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["review"] . "</td>";
      echo "<td>" . $row["rating"] . "</td>";
      echo "<td><button class=\"footer-button medium-blue\" onclick='deleteFeedback(" . $row["id"] . ")'>Delete</button></td>";
      echo "</tr>";
    }
    $result->free();
  } else {
    echo "Error: " . $conn->error;
  }

} catch (PDOException $e) {
}
$conn->close();
?>
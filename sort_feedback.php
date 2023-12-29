<?php
$servername = "localhost";
$username = "root";
$password = "5F108q~12";
$dbname = "kaito";

if (isset($_GET['sort'])) {
  $sort = $_GET['sort'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM feedback ORDER BY rating $sort";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      echo "<tr>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["review"] . "</td>";
      echo "<td>" . $row["rating"] . "</td>";
      echo "<td><button class=\"footer-button medium-blue\" onclick='deleteFeedback(" . $row["id"] . ")'>Delete</button></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
}
?>

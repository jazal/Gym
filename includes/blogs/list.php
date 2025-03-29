<?php
include_once __DIR__ . '/../db_connect.php';

$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

echo '<div class="container">';
echo '<h2>Packages</h2>';
echo '<div class="packages-grid">';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="package">';
        echo '  <div class="package-content">';
        echo '    <div class="package-title">' . htmlspecialchars($row['title']) . '</div>';
        echo '    <div class="package-description">' . htmlspecialchars($row['description']) . '</div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo '<p>No packages available.</p>';
}

echo '</div></div>';
$conn->close();
?>

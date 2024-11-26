<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'comment_system');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data komentar dari database
$result = $conn->query("SELECT username, comment, create_at FROM comments ORDER BY create_at DESC");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<h3>" . htmlspecialchars($row['username']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<small>" . $row['create_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "<p>No comments yet.</p>";
}

$conn->close();
?>
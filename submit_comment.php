<?php

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'comment_system');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari form
$username = $_POST['username'];
$comment = $_POST['comment'];

// Masukkan data ke database
$stmt = $conn->prepare("INSERT INTO comments (username, comment) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $comment);

if ($stmt->execute()) {
    // Redirect kembali ke halaman utama
    header("Location: index.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
<?php  
include 'connection.php';
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit();
}

$id_user = $_SESSION['id_user'];
$id_post = intval($_GET['id']);

// Periksa apakah postingan tersebut dimiliki oleh user yang sedang login
$sql = "SELECT id_user FROM posts WHERE id_post = $id_post";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row && $row['id_user'] == $id_user) {
    $sql = "DELETE FROM posts WHERE id_post = $id_post";
    mysqli_query($conn, $sql);
} else {
    echo "Error: You are not authorized to delete this post.";
}
?>

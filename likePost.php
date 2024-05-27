<?php  
include 'connection.php';
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit();
}

$id_user = $_SESSION['id_user'];
$id_post = intval($_GET['id']);

if ($id_post > 0) {
    $sql = "INSERT INTO likes (id_user, id_post) VALUES ($id_user, $id_post)";
    mysqli_query($conn, $sql);
}
?>

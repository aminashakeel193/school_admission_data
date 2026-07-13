<?php
include('config.php');
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['id'], $_POST['verified'])) {
    $id = (int)$_POST['id'];
    $verified = (int)$_POST['verified'];

    $stmt = $conn->prepare("UPDATE admission SET verified = ? WHERE id = ?");
    $stmt->bind_param("ii", $verified, $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: dashboard.php");
exit();
?>

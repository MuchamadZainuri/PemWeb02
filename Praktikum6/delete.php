<?php
require_once 'dbkoneksi.php';

$_ide = $_GET['id'];
$sql = "DELETE FROM pelanggan WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_ide]);
// redirect page
header('location: index.php');

<?php
include 'config.php';
$titulo = 'Prode mundial '. SEDE . ' ' . ANO; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1 class="d-flex justify-content-center"><?= $titulo ?></h1>
<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errores = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'login-validar.php';
    include 'login-derivar-DB.php';
}
include 'login-form.php';
?>

 
<?php 
$titulo = 'Registro';
include 'header.php'; 
?>
<h1 class="d-flex justify-content-center">Registro</h1>
<?php
$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? ''; 
$password2 = $_POST['password2'] ?? '';
$email = $_POST['email'] ?? '';
$email2 = $_POST['email2'] ?? '';
$errores = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'registro-validar.php';
    include 'registro-alta-DB.php';
}
include 'registro-alta-form.php';

?>
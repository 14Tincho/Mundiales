<?php
include 'user-inicio-sesion.php';
include 'config.php';
$titulo = 'Mundial ' . SEDE . ' ' . ANO;
include 'user-header.php';
?>
    <h1 class="text-center mt3r"><?=$titulo?></h1>
    <div class="container text-center">            
        <img src="imagenes/copa.png" class="img-fluid index-copa" alt="Responsive image" max-heigth="auto">
    </div>
<?php
include 'footer.php';


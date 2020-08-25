<?php
$titulo = 'Mundial Rusia 2018';
include 'header.php';
?>
    <h1 class="text-center mt3r"><?=$titulo?></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="imagenes/copa.png" class="img-fluid index-copa" alt="Responsive image" max-heigth="auto">
            </div>
            <div class="col-sm-6 text-center">
                <form class="form-signin">
                    <h1 class="h1-sesion mt3r"><b>Iniciar sesion</b></h1>
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-alta btn-block" type="submit">Iniciar sesion</button>
                        <br>
                        <a class="registro" href="registro-alta.php">Registrarse</a>
                </form>
            </div>
        </div>
    </div>
<?php
include 'footer.php';

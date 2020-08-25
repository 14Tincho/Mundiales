<?php 
    $titulo = 'Registro';
    include "header.php";
?>

<div class="container text-white">
    <form action="" method="post">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="<?= $usuario ?>" autofocus required>
                                <br>

                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required>
                <br>

                <label for="password2">Repetir password</label>
                <input type="password" class="form-control" id="password2" name="password2"  placeholder="" value="" required>
                <br>

                <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?= $email ?>" required>
                </div>
                <br>

                <br>
                <br>
            <button type="submit" class="btn btn-fixture btn-lg btn-block">Registrarse</button>
    </form>
</div>
<?php
     include 'footer.php';
?>
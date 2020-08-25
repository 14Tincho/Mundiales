    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="imagenes/copa.png" class="img-fluid index-copa" alt="Responsive image" max-heigth="auto">
            </div>
            <div class="col-sm-6 text-center">
                <form class="form-signin" method="post">
                    <h1 class="h1-sesion mt3r"><b>Iniciar sesion</b></h1>
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="<?=$email?>" required autofocus><br>
                        
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" class="form-control"  name="password" placeholder="Password" required>
                        
                        <button class="btn btn-lg btn-alta btn-block" type="submit">Iniciar sesion</button>
                        <a class="olvide" href="#">Olvidé mi contraseña</a>
                        <br>
                        <a class="registro" href="registro-alta.php">Registrarse</a>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
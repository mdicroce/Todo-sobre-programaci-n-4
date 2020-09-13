<?php require 'header.php';  // así tenemos acceso a los links del header.php y por ende al style?>

<main class="d-flex align-items-center justify-content-center height-100">
     
     <div class="content">
     
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <form action="loginController.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
          <?php if(isset($error)){?> <p> <?= $error ?></p> <?php } ?>
               <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="text" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>

<?php require 'footer.php'; ?>
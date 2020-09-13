
<?php 
     include_once("header.php");
     include_once("nav.php");
     include_once("footer.php");
?>
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <form action="action.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <?php 
                    if (isset($error))
                    {
                         echo "<p>";
                         echo $error;
                         echo "</p>";
                    }
               ?>
               <div class="form-group">
                    <label for="userName">Usuario</label>
                    <input type="text" name="userName" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="passWord">Contraseña</label>
                    <input type="password" name="passWord" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>


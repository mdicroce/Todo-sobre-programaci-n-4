<?php 
     include_once("header.php");
     include_once("nav.php");
     include_once("footer.php");
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form class="bg-light-alpha p-5" method="get" action="billController.php">
                    <?php
                         if(isset($error))
                         {
                              echo "<p>";
                              echo $error;
                              echo "</p>";
                         }
                    ?>
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="billDate">Fecha</label>
                                   <input type="date" name="billDate" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" value="A" name="billType" class="radioSize" required>Factura A
                                   <input type="radio" value="B" name="billType" class="radioSize" required>Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="billNumber">Numero</label>
                                   <input type="number" name="billNumber" class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

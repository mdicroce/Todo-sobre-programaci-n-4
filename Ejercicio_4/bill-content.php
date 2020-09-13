<?php 
     include_once("header.php");
     include_once("nav.php");
     include_once("footer.php");
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                    <?php 
                         $subTotal = 0;
                         foreach ($arrayItems as $key => $value) {
                              echo "<tr>";
                                   echo ("<td>" . $value->getName()  . "</td>");
                                   echo ("<td>" . $value->getDescription()  . "</td>");
                                   echo ("<td>" . $value->getPrice()  . "</td>");
                                   echo ("<td>" . $value->getQuantity()  . "</td>");
                                   $subTotal = $value->getPrice() * $value->getQuantity();
                                   echo ("<td> $subTotal </td>");
                                   $total += $subTotal;
                         }
                         
                    ?>
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="" class="form-control ml-3" >
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>


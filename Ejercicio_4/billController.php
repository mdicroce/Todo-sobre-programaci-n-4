<?php 
    require_once "models/Item.php";

    use models\Item as Item;

    $arrayItems = array();
    $items = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6, pintura fluor 1L, pintura warner fluo, 400.00, 3, plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1, pincel común 1.2, pincel fabber cerda común para tempera, 120.00, 5, rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2, kit de acuarelas, combo de acuarelas color pastel, 770.00, 2";
    $newArray = explode(",", $items);

    while (!empty($newArray))
    {
        $item = new Item();
        $item ->setName(array_shift($newArray));
        $item->setDescription(array_shift($newArray));
        $item->setPrice(array_shift($newArray));
        $item->setQuantity(array_shift($newArray));
        array_push($arrayItems,$item);
    }


    if (isset($_GET))
    {
        $time = time();
        $date = date("Y-m-d", $time);
        $dateIncome = $_GET["billDate"];
        $error = "";
        if ($dateIncome = "")
        {
            $dateIncome = $date;
        }
        else if($dateIncome < $date)
        {
            include("./bill-content.php");
        }
        else{
            $error = "La fecha ingresada no puede ser mayor a la fecha actual";
            include("./add-bill.php");
        }
    }
    else{
        $error = "Error al ingresar datos";
        include("add-bill.php");
    }
?>
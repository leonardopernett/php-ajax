<?php



if(isset($_POST)){

  $producto = $_POST['product'];
  $price = $_POST['price'];
  $cantidad = $_POST['cantidad'];

  echo $producto. " " . $price . " ,". $cantidad;

}else {

  echo "error";
}





?>
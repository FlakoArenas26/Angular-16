<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","bd1");
//   $con=pg_connect("localhost","root","","bd1"); //Conexión para postgress
  return $con;
}
?>
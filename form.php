<?php 
$nom = $_GET['nombre'];
$ap = $_GET ['apellidos'];
$edad = $_GET['edad'];
$mail = $_GET['correo'];
$tel = $_GET['numero'];
$dc = $_GET['direccion'];
$cp = $_GET['CP'];
$calle = $_GET['calles'];
$compra= $_GET['compra'];
$msj = $_GET['mensaje'];

echo "Tus datos ingresados:", "<br>";
echo " Tu nombre: ",$nom,$ap."<br>";
echo "Edad: ", $edad."<br>";
echo " Correo electronico: ", $mail."<br>";
echo " Numero de tel/cel: ", $tel."<br>";
echo " Direccion de domicilio o trabajo:", $dc."<br>";
echo " Codigo Postal: ", $cp."<br>";
echo " Calles guia: ", $calle."<br>";
echo "Has comprado productos Vans: ", $compra."<br>";
echo " Mensaje: ", $msj."<br>";


?>
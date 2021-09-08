<?php
$con=mysqli_connect('localhost','root','','sistema');
if($con==true){
    echo "Conectado";
    }else{
  echo "No conectado";      
}
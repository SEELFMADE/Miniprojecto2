<?php
$localhost="localhost";
$user="root";
$senha="";
$nomebd="dbProjecto";

$conn=mysqli_connect($localhost,$user,$senha,$nomebd);
if(mysqli_connect_error()):
echo"Falha na conexao!";
endif;
?>
<?php

        session_start();    
        include "conexao.php";

$aluno  = $_POST ['aluno'];
$mat    = $_POST ['mat'];
$mensa  = $_POST ['mensa']; 

echo "Nome do aluno {$aluno}<br>";
echo "Matrícula: {$mat}<br>";
echo "Mensalidade {$mensa}<br>";

$sql = "insert into tbaluno(aluno,mat,mensa)
values ('$aluno','$mat','$mensa')";

$qry = mysqli_query($con,$sql);

?>
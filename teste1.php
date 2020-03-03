<?php

$aluno = array(
"nome" => "Boniecky",
"idade" => 90,
"estado" => "PB",
"pais" => "Brasil"
);

foreach($aluno as $chave => $dado){
echo $chave." = ".$dado. "<br/>";
}

?>
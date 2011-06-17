<?php

include_once 'vo/alunoVO.php';
include_once 'dao/alunoDAO.php';


//$aluno = new alunoVO();
//$aluno->setNome("Savio");
//$aluno->setEmail("savioccs@gmail.com");



$alunoDAO = new alunoDAO();

$alunos = $alunoDAO->getAll();

while ($array = mysql_fetch_array($alunos)) {
    echo $array['descricao_conta'], "<br>";
}


?>

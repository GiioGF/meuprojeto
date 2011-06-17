<?php

include_once("genericoDAO.php");
include_once 'conexao/conexaoSingleton.php';

/**
 * @author Savio
 */
class alunoDAO {

    public function save(alunoVO $aluno) {
        
    }

    public function getAll() {
        $con = ConexaoSingleton::getInstance();
        $sql = 'select * from contas';
        $result = mysql_query($sql);

        return $result;
    }

    public function getById($id) {
        return null;
    }

    public function delete() {
        
    }

    public function update() {
        
    }

}

?>

<?php

/**
 * Description of conexaoSingleton
 *
 * @author Savio
 */
class ConexaoSingleton {

    //Propriedade Estática referenciando um tipo da mesma Classe
    public static $instancia = null;

    //Construtor Private - Não é possível utilizar new em outras classes
    private function __construct() {

        // criar a conexao com o banco de dados aqui!
        //echo "teste de conexao";
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Não foi possível conectar: ' . mysql_error() . "<br><br>");
        }
        
        $db_selected = mysql_select_db('smartsystem', $link);
        if (!$db_selected) {
            die('Não foi possível selecionar : ' . mysql_error());
        }
    }

    //Metodo para recuperar instancia
    public static function getInstance() {

        if (self::$instancia == NULL) {

            self::$instancia = new ConexaoSingleton(); //chamando construtor
        }

        return self::$instancia;
    }

}

?>

<?php
/**
 * Description of conexaoSingleton
 *
 * @author Savio
 */
class conexaoSingleton {

// Guarda uma instância da classe
    static private $instance;

    // Um construtor privado
    private function __construct() {
        $link = mysql_connect('localhost', 'root', '');
        
        if (!$link) {
            die('Não foi possível conectar: ' . mysql_error() . "<br><br>");
        }
        echo '<br><br>Conexão bem sucedida.<br><br>';

        $db_selected = mysql_select_db('teste', $link);
        if (!$db_selected) {
            die('Não foi possível selecionar : ' . mysql_error());
        }
    }

    // O método singleton 
    static public function singleton() {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
}

?>

<?php

/**
 * Description of conexaoSingleton
 *
 * @author Savio
 */
class ConexaoSingleton {

 private static $intance;
 
    //Declaramos o construtor privado,
    //para impedir que seja instanciado
    //diretamente (new Singleton())
    private function Singleton() {
    }
    public static function getInstance() {
 
        if(self::$intance == null)
            self::$intance = new Singleton();
 
        return self::$intance;
 
    }
}


?>

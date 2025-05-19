<?php 

class DBGestionlibreria{

    private $servidor = 'localhost';
    private $dataBase = 'db-libreria';
    private $user = 'root';
    private $passw = 'root';

    private function getconexion(){
        $dns = "mysql:host=$this->$servidor;dbname = $this->$dataBase";
        $obPDO = new PDO ($dns, $this -> $user, $this -> $passw);

        return $obPDO;
    }

    public getAutores(){
        $PDOconex = $this->getconexion();
        $resultado = ['Vacio'];
        if(is_object($PDOconex)){
            $sql = "SELECT * FROM titulo_autor";
            $resultado = $PDOconex->query($sql);
        }
        return  $resultado;
    }

}
?>
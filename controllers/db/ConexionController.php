<?php
class ConexionController {
    const DB_NAME = 'estudiantes_db';
    const DB_HOST = 'localhost:3306';
    const DB_USER = 'root';
    const DB_PWD = '';

    private $conx;

    function __construct(){
        $this->conx = new mysqli($this::DB_HOST, $this::DB_USER, $this::DB_PWD, $this::DB_NAME);
        $this->conx->set_charset('utf8');
    }

    public function query($sql)
    {
        return $this->conx->query($sql);

    }
    public function close(){
        $this->conx->close();
    }
}
?>
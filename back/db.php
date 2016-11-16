<?php

//Connection à la BDD
class sql
{
    static protected $instance;

    /**
     * @return PDO
     */
    static public function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new sql();
        }
        return self::$instance->bdd;

    }

    private function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=egreen;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
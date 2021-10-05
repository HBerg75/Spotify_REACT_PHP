<?php
class Database {
    protected $database = null;
    private function __construct() {}
    protected function connectDatabase() {
        if(is_null($this->database)) {
            try {
                $this->database = new PDO('mysql:host=localhost;dbname=database_musics', 'mariam', 'jjaf2010ap');
                return $this->database;
            } catch (PDOException $e) {
                die("Erreur : " . $e->getMessage());
            };
        };
    }
} 
<?php
namespace advanced\database\connexion\pdo;
class Connexion {
    private $username;
    private $password;
    private $server;
    private $database;

    public function __construct($nom_serveur,$base_de_donnee,$nom_utilisateur,$mot_de_passe){
        $this->server   = $nom_serveur;
        $this->database = $base_de_donnee;
        $this->username = $nom_utilisateur;
        $this->password = $mot_de_passe;
    }

    public function connexion_start():PDO{
        try {
            $pdo = new PDO($this->server,$this->database,$this->username,$this->password);
            return $pdo ;
        } 
        catch (Throwable $e) {
            echo $e;
        }
    }
}




?>
<?php

require_once ("../config/config.php");

class Model {
    private $db;

    public function __construct() {
        $this->db = new Connexion();
    }

    public function getLesEntreprisesManager() {
        $conn = $this->db->connect();
        $req = "SELECT * FROM entreprise";
        $stmnt = $conn->prepare($req);
        $stmnt->execute();
        $resultat = $stmnt->fetchAll();
        return $resultat;
    }
}
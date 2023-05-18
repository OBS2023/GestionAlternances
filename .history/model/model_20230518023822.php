<?php

require_once ("../config/config.php");
/*
$bdd->connect();*/
 class Model 
 {
    private $db;

    public function __construct()
    {
        $this->db = new Connexion();
    }

    public function GetLesEntreprises(){
        
        $req = "select * from entreprise";
        $stmnt = $this->conn->prepare($req);

    }
 }
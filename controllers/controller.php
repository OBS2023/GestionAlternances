<?php
require_once('../model/model.php');

class Controller
{
    public function __construct()
    {

    }

    public function getLesEntreprisesController(){
        $lesEntreprises = new Model();
        $lesEntreprises = $lesEntreprises->getLesEntreprisesManager();

        return $lesEntreprises;
    }
}

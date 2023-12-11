<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $donnees['titre'] = 'Accueil';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Home");
        echo view("commun/Footer");
    }
}
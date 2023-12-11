<?php

namespace App\Controllers;

class Moi extends BaseController
{
    public function index()
    {

        $donnees['titre'] = 'Moi';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Moi");
        echo view("commun/Footer");
    }
}
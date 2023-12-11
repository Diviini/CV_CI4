<?php

namespace App\Controllers;

class Experience extends BaseController
{
    public function index()
    {

        $donnees['titre'] = 'Expérience Pro';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Experience");
        echo view("commun/Footer");
    }
}
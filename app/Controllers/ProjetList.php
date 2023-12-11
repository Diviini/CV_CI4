<?php

namespace App\Controllers;

class ProjetList extends BaseController
{
    public function index()
    {

        $data['projets'] = array(
            array('titre' => 'SnapFace'         , 'lien' => '/projets/1', 'img' => 'assets/img/snapface-accueil.png'),
            array('titre' => 'Awesom Component' , 'lien' => '/projets/2', 'img' => 'assets/img/awesom-accueil.png'  ),
            array('titre' => 'CMS Portfolio'    , 'lien' => '/projets/3', 'img' => 'assets/img/cms-portfolio.png'   ),
            array('titre' => 'Dessin Partagé'   , 'lien' => '/projets/4', 'img' => 'assets/img/shared-paint.png'    ),
        );
        
        $donnees['titre'] = 'Projets';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Projet-List", $data);
        echo view("commun/Footer");
    }
}
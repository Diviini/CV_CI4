<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {

        $donnees['titre'] = 'Contact';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Contact");
        echo view("commun/Footer");
    }

    public function __construct()
    {
        helper(['form']);
    }

    private function redirect() {
        $donnees['titre'] = 'Contact';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Contact");
        echo view("commun/Footer");
        echo "<script>var inputs = document.querySelectorAll('input[type=\"text\"], input[type=\"email\"], textarea');
        inputs.forEach(function (input) {
            input.value = '';
        });</script>";
    }

    public function contactMail()
    {
        $email = \Config\Services::email();
        $validation = \Config\Services::validation();

        $donnees = [
            'email'     => 'required|valid_email',
            'contenu'   => 'required|min_length[3]|max_length[2000]',
            'objet'     => 'required|min_length[3]|max_length[144]'
        ];

        if ($this->validate($donnees)) {
            $email->setTo('robin.le-brozec@etu.univ-lehavre.fr');
            $email->setFrom('robin.lebrozec@gmail.com');
            $email->setSubject("".$_POST['objet']);
            $email->setMessage("Message de : " . $_POST['email'] . " \n ". $_POST['contenu']);

            // Envoyer l'e-mail
            if ($email->send()) {
                $this->redirect();
                echo '<div class="notif-vert">Envoyé avec succès 🦅 !</div>';
            } else {
                echo '<div class="notif-rouge">Échec de l\'envoi de l\'e-mail. Erreur : ' . $email->printDebugger(['headers'])."</div>";
            }
        } else {
            //echo '<script type ="text/JavaScript">alert("Format de l\'email incorrect !")</script>';
            //echo '<script>window.location.href = "/contact";</script>';

            $this->redirect();
        }
    }
}

<?php

namespace App\Controllers;

class Projet extends BaseController
{
    public function index($id)
    {
        switch ($id) {
            case 1:
                $data['projet'] = array(
                    'titre' => 'SnapFace',
                    'img' => 'assets/img/snapface-accueil.png',
                    'texte' => 'Imaginez une plateforme interactive où les utilisateurs peuvent partager des photos et échanger des commentaires. Pour développer cette application, 
                    j\'ai suivi un cours approfondi sur OpenClassroom qui m\'a permis de maîtriser les bases d\'Angular et d\'explorer des concepts avancés.<br><br>
                    Au cœur de cette réalisation, j\'ai découvert l\'importance des services Angular, des modules et du routing avec le lazy loading. Les services sont
                     comme des ouvriers dédiés, facilitant la communication et le partage de données entre différentes parties de l\'application. Les modules, quant à
                      eux, sont comme des chapitres dans un livre, organisant le code de manière à le rendre compréhensible et maintenable. J\'ai également utilisé le
                       routing avec le lazy loading pour optimiser les performances, en chargeant les fonctionnalités de manière asynchrone uniquement lorsque nécessaire.<br><br>
                    Une des étapes cruciales de ce projet a été la création d\'une structure professionnelle en suivant les meilleures pratiques d\'Angular. J\'ai organisé 
                    le code dans des dossiers tels que "core" pour regrouper les éléments fondamentaux de l\'application, et "share" pour contenir des composants 
                    réutilisables. Ces choix structuraux ne seulement rendent le code plus clair, mais ils facilitent également la maintenance à mesure que le projet
                     évolue.<br><br>
                    En résumé, cette expérience m\'a permis de construire une application robuste en utilisant Angular, en appliquant des concepts avancés et en 
                    suivant les meilleures pratiques de développement. Ce projet représente une plongée passionnante dans le monde du développement web moderne,
                     où la maîtrise d\'Angular ouvre la porte à la création d\'applications interactives et performantes. Si vous avez des questions spécifiques 
                     sur des aspects du projet, n\'hésitez pas à regarder ma page GitHub sur laquel se trouve mon projet ! '
                );
                break;
            case 2:
                $data['projet'] = array(
                    'titre' => 'Awesom Component',
                    'img' => 'assets/img/awesom-accueil.png',
                    'texte' => 'Au cours de mon parcours d\'expertise en Angular, j\'ai développé une application regroupant trois composants principaux, chacun 
                    illustrant des aspects spécifiques de la puissance et de la flexibilité d\'Angular.<br><br>

                    Le premier composant, le "Réseau social", constitue le cœur de l\'application. Il permet aux utilisateurs de créer des publications, d\'ajouter 
                    des commentaires et d\'interagir de manière sociale. La mise en œuvre de fonctionnalités telles que les posts et les commentaires a nécessité une
                     manipulation habile des services Angular pour gérer les données dynamiques et assurer une expérience utilisateur fluide.<br><br>
                    
                    Le deuxième composant, un "Formulaire complexe et réactif", met en avant l\'utilisation des formulaires dynamiques et réactifs en Angular. 
                    Ce formulaire, conçu pour être intuitif et réactif, illustre l\'importance de la gestion des états et des validations en temps réel. L\'intégration
                     de ce composant a été une opportunité d\'approfondir mes connaissances sur les fonctionnalités avancées des formulaires Angular.<br><br>
                    
                    Enfin, le troisième composant est une "Liste de candidats avec barre de recherche", mettant en avant la gestion des listes et la fonction de
                     recherche dans une application Angular. La création d\'une barre de recherche efficace, couplée à la visualisation dynamique des candidats, a
                      exigé l\'utilisation judicieuse des directives et des services Angular, démontrant ainsi ma compréhension approfondie des concepts enseignés
                       dans le cadre du cours.<br><br>
                    
                    Ce projet a été une opportunité enrichissante d\'appliquer mes connaissances nouvellement acquises en Angular. Il m\'a permis de consolider ma
                     compréhension des services, des formulaires réactifs et de la gestion des listes, tout en répondant aux exigences d\'une application moderne.
                      Ce parcours d\'expertise m\'a doté des compétences nécessaires pour aborder des projets Angular plus complexes dans le futur. Si vous avez des
                       questions spécifiques sur des aspects du projet, n\'hésitez pas à regarder ma page GitHub sur laquel se trouve mon projet ! ',
                );
                break;
            case 3:
                $data['projet'] = array(
                    'titre' => 'CMS Portfolio',
                    'img' => 'assets/img/cms-portfolio.png',
                    'texte' => 'Au cours d\'une Situation d\'Apprentissage et d\'évaluation (SAé) du BUT Informatique, nous avons entrepris la formation d\'une équipe composée 
                    de cinq personnes. Notre objectif était de créer un Content Management System (CMS) exclusivement en utilisant PHP et JavaScript, et destiné à la 
                    conception de portfolios. Au sein de cette équipe, ma responsabilité était de prendre en charge l\'esthétique générale du système et de développer 
                    diverses fonctionnalités en JavaScript, avec une attention particulière portée à la création d\'une barre de recherche intuitive et efficace.<br><br>

                    Le CMS que nous avons élaboré permettait aux utilisateurs de construire et de personnaliser leurs portfolios de manière simple et fonctionnelle.
                     Mon rôle spécifique dans le projet était de travailler sur l\'aspect visuel global, en veillant à ce que l\'interface utilisateur soit aussi 
                     esthétiquement plaisante que fonctionnelle. J\'ai également contribué au développement des fonctionnalités interactives en JavaScript, avec un 
                     accent particulier sur la mise en œuvre d\'une barre de recherche performante.<br><br>
                    
                    L\'utilisation exclusive de PHP et JavaScript a constitué un défi stimulant, nous obligeant à exploiter pleinement les fonctionnalités de ces 
                    langages pour garantir la robustesse et la polyvalence du CMS. Le projet a été une occasion exceptionnelle d\'appliquer les connaissances acquises
                     au cours de notre formation, en mettant en œuvre des compétences pratiques en programmation web.<br><br>
                    
                    Dans l\'ensemble, notre CMS pour la création de portfolios a été un projet collaboratif réussi, démontrant notre capacité à travailler en équipe,
                     à relever des défis techniques et à produire une solution concrète répondant aux besoins spécifiques de notre projet de SAé.',
                );
                break;
            case 4:
                $data['projet'] = array(
                    'titre' => 'Dessin Partagé',
                    'img' => 'assets/img/shared-paint.png',
                    'texte' => 'Au cours d\'un projet lors de la deuxième année du BUT Informatique, notre équipe avait pour mission de concevoir un logiciel 
                    de dessin partagé en ligne en utilisant Java. Dans ce contexte, la connexion au système se faisait en utilisant des adresses IP.<br><br>

                    L\'objectif principal du projet était de permettre à plusieurs utilisateurs de collaborer en temps réel sur une toile de dessin commune. 
                    Chaque utilisateur se connectait en utilisant une adresse IP spécifique, facilitant ainsi la communication et le partage d\'informations 
                    entre les participants. Cette approche basée sur l\'adresse IP offrait une solution efficace pour établir des connexions entre les différentes
                     instances du logiciel de dessin partagé.<br><br>
                    
                    Le développement du logiciel impliquait la mise en œuvre de fonctionnalités de dessin en temps réel, de gestion des utilisateurs connectés 
                    et de synchronisation des actions de chacun. Le choix de Java comme langage de programmation a permis une portabilité élevée et une facilité 
                    d\'utilisation, étant donné que Java peut être exécuté sur différentes plates-formes sans nécessiter de modifications majeures du code source.<br><br>
                    
                    La gestion des connexions par adresse IP a ajouté une dimension pratique au projet, permettant aux utilisateurs de se connecter de manière
                     directe et spécifique. Ce projet a non seulement permis d\'explorer les aspects techniques du développement en Java, mais il a également mis
                      en avant les défis liés à la synchronisation en temps réel et à la gestion des connexions distribuées.<br><br>
                    
                    En conclusion, le projet de création d\'un logiciel de dessin partagé en ligne en Java a été une expérience enrichissante, combinant des 
                    aspects de programmation réseau, de synchronisation en temps réel et de développement d\'interfaces utilisateur interactives.',
                );
                break;
        }

        // Accès direct aux données du tableau
        $donnees['titre'] = 'Moi';

        echo view("commun/Head", $donnees);
        echo view("commun/Header");
        echo view("Projet", $data);
        echo view("commun/Footer");
    }
}

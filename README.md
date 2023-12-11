# Mon CV en CodeIgniter 4

  

Bienvenue sur le dépôt de mon CV, développé en utilisant le framework PHP CodeIgniter 4.

  

## Prérequis

  

Assurez-vous d'avoir les éléments suivants installés sur votre système avant de commencer :

  

- PHP (version 8.3 recommandée)
- Composer
- Les extensions PHP activées dans votre fichier `php.ini` :
	-  `extension=curl`
	-  `extension=php_intl.dll`

  

## Installation

  

1. Clonez ce dépôt sur votre machine locale :

  

```bash
git clone https://github.com/Diviini/CV_CI4.git
```

  

2. Naviguez vers le répertoire du projet :

  
```bash
cd mon-cv-codeigniter4
```

3. Mettez à jour les dépendances avec Composer :
```bash
composer update
```
## Lancement du projet

Utilisez la commande suivante pour lancer le projet en mode développement :
```bash
php spark serve
```
Cela démarrera un serveur de développement accessible à l'adresse http://localhost:8080. Vous pouvez personnaliser le port en utilisant l'option `--port`.

## Structure du projet

- Contrôleurs : `app/Controllers`
- Vues : `app/Views`
- Configuration des routes : `app/Config/Route.php`
- Feuilles de style CSS : `public/assets/css`
- Images : `public/assets/img`

N'hésitez pas à explorer ces répertoires pour personnaliser et ajouter du contenu à votre CV.
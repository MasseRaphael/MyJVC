# Le Projet

## Description

Projet d'école de reproduction partiel du site jeuxvideo.com avec gestion/création/consultation d'articles de news jeux vidéos en symfony.
La création de compte ne sera pas implémentée, mais seront ajouter manuellement en base de donnée afin qu'il n'y ait que des administrateurs.
La Base de donnée est créer sous Doctrine et contient les tables des comptes utilisateurs et articles.
Les pages consultables seront pour les utilisateurs lambda la page d'accueil, la page de listing des articles via le lien du header "Actu", la page de profile de l'auteur accessible via un lien sur son nom et pour les administrateurs la page accessible en plus est la pages de Création/Modification/Suppression d'article et listing.

En raison d'incompatibilité avec la version de php des bundles comme ckeditor ne sont pas installer mais pourant l'être dans le futur afin d'améliorer la gestion de création et modifications des articles.

## Les Technologies utilisées

Les technologies utilisées sont :

* PHP 7.4.9
* Symfony 5.1
* Doctrine

# L'installation

Tout d'abord installer symfony 5.1 si ce n'est pas déjà fait et assurer vous d'être en version de php 7.4.9

Après avoir cloner le git ouvrez un terminal et assurez vous d'être dans le dossier du projet.
dans le terminal tapez :
```
composer istall
```
puis pour être sur d'avoir tout les bundle :

```
composer require logger
```

puis importer la base de données qui se trouve dans le dossier BDD dans phpmyadmin.
Une fois l'importation effectuer nous allons connecter cette base de données pour ce faire dans le fichier .env ligne 32
La ligne indiquée par *<===* si dessous :

```
###> doctrine/doctrine-bundle ###
# Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# For an SQLite database, use: "sqlite:///%kernel.project_dir%/var/data.db"
# For a PostgreSQL database, use: "postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=11&charset=utf8"
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
DATABASE_URL=mysql://root@127.0.0.1:3306/myjvc?serverVersion=5.7 <===
###< doctrine/doctrine-bundle ###
```
A la place de root indiquez le nom d'utilisateur de la base de données suivi par *:* et du mot de passe de la base suivi de *@* l'adresse ip de la base(si c'est un serveur local elle reste *127.0.0.1*) suivi par *:* le port du serveur mysql(généralement *3306* pour les serveurs locale) trouvable sur phpmyadmin dans la ligne en haut à gauche suivi d'un */* et du nom de la base de données.

ex:
```
DATABASE_URL=mysql://nomdutilisateur:motdepasse@127.0.0.1:3306/myjvc?serverVersion=5.7
```

# Utilisation

Pour lancer le serveur local symfony utilisez un terminal et taper la commande :

```
symfony server:start

ou

php bin/console server:start
```
puis entrez l'adresse *127.0.0.1:8000* vous arriverez sur la page d'accueil.
Si vous avez besoin de vous connecter vous trouverai des les log utilisateurs dans le dossier BDD.
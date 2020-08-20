# Le Projet

## Description

Projet d'école de reproduction partiel du site jeuxvideo.com avec gestion/création/consultation d'articles de news jeux vidéos en symfony.
La création de compte ne sera pas implémentée, mais seront ajouter manuellement en base de donnée afin qu'il n'y ait que des administrateurs.
La Base de donnée est créer sous Doctrine et contient les tables des comptes utilisateurs et articles.
Les pages consultables seront pour les utilisateurs lambda la page d'accueil, la page de listing des articles via le lien du header "Actu", la page de profile de l'auteur accessible via un lien sur son nom et pour les administrateurs la page accessible en plus est la pages de Création/Modification/Suppression d'article.

## Les Technologies utilisées

Les technologies utilisées sont :

* PHP 7.4.9
* Symfony 5.1
* Doctrine

# L'installation



# Utilisation

Pour lancer le serveur local symfony utilisez un terminal et taper la commande :

```
symfony server:start

ou

php bin/console server:start
```
puis entrez l'adresse 127.0.0.1:8000 vous arriverez sur la page d'accueil

<h1 align="center">PharmaGDD Recruitment</h1>

A propos
-----

Ce projet a pour but de tester les compétences du candidat. Ce repository contient un projet Sylius fraichement installé.
La difficulté des exercices proposés s'intensifie au fur et à mesure.

Il n'est pas nécessaire de finir tous les exercices demandés, le candidat sera jugé sur la qualité de code et les choix architecturaux utilisés.

Installation
----

Il est demandé au candidat de "forker" le projet sur GitHub avant de cloner.

```shell
$ git clone https://github.com/<GithubUsername>/PharmaGDDRecruitment.git
$ cd PharmaGDDRecruitment
$ composer install
$ yarn install
$ yarn build
$ php bin/console sylius:install
$ php bin/console server:start
$ open http://localhost:8000/
```

Exercices
---- 

### 1. Gestion des ressources et des grilles

#### 1. Surcharger la grille des clients dans l'espace d'administration. (https://127.0.0.1:8000/admin/customers/)
    
- Ajouter une colonne indiquant si le client est abonné à la newsletter de la même manière que la colonne "vérifié"
- Ajouter un filtre qui permet d'afficher seulement les clients abonnés à la newsletter.


#### 2. Création d'une nouvelle ressource

- Créer une ressource "Marque" avec un nom, une description et date de création / modification.
- Créer une grille permettant d'afficher toutes les marques.
- Gérer l'ajout, la modification et la suppression (CRUD)
- Lier cette ressource aux produits, un produit peut être lié à une marque.
- Ajouter une action sur la grille permettant de voir tous les produits d'une marque.

### 2. Gestion des states machine (workflow) 

#### 1. Modification de la ressource "Marque"

La marque sera maintenant considérée comme une ressource à état. Sa création ou sa modification entrainera un changement 
d'état vers le statut brouillon. Une demande de modification peut être faite avant la publication.  

- Ajouter un attribut "state" sur la marque.
- Configurer une nouvelle state machine avec les états "draft", "published", "changes_required".
- Les transitions sont :
  - "draft -> published"
  - "draft -> changes_required"
  - "changes_required -> draft"
  - "published -> draft"
- Ajouter les actions nécessaires pour demander un changement (transition vers "changes_required") et pour valider ("published")
- Ajouter un évènement sur l'ajout et la modification pour passer le statut en "draft".

---

Sylius is the first decoupled eCommerce platform based on [**Symfony**](http://symfony.com) and [**Doctrine**](http://doctrine-project.org). 
The highest quality of code, strong testing culture, built-in Agile (BDD) workflow and exceptional flexibility make it the best solution for application tailored to your business requirements. 
Enjoy being an eCommerce Developer again!

Powerful REST API allows for easy integrations and creating unique customer experience on any device.

We're using full-stack Behavior-Driven-Development, with [phpspec](http://phpspec.net) and [Behat](http://behat.org)

Documentation
-------------

Documentation is available at [docs.sylius.com](http://docs.sylius.com).


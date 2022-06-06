# Test Technique IUT de Troyes

Dans le cadre de ma recherche d'alternance pour ma poursuite d'étude, l'IUT de Troyes nous a demandé de réalisé un test technique. L'objectif est de réaliser deux pages web (proposition de refonte du site de l'IUT) à l'aide du framework Symfony.

Ce projet peut-être réalisé entre le 3 juin 2022 et le 10 juin 2022. 

## Découverte de Symfony

Le projet doit nous amener à utiliser Symfony. Ce fichier sera complété au fur et à mesure du projet pour pouvoir me servir de documentation personnelle sur mes prochains projets Symfony.

### Installation

```
    # Choix d'utiliser Composer
    composer create-project symfony/skeleton TestTechIUT
```

### Environnement de développement

```
    # Ajout de profiler en dev pour faciliter le debuggage
    composer require profiler --dev

    composer require annotations
    composer require twig
    composer require symfony/asset

```
Il faudra penser à passer le .env en prod sur le VPS pour que profiler n'apparaisse pas sur le site en ligne.

### Mise en ligne

Pour mettre à jour les "dépendances" s'il y en a des nouvelles.
```
    composer install --no-dev --optimize-autoloader
```
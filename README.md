# Docker PHP APACHE MYSQL & SYMFONY

API de musique réalisé avec API PLATFORM, regroupants des noms d'artistes fictifs, albums et pistes musicales (titres).

## Introduction

API contenue dans un conteneur Docker avec Apache, MySQL, PHP 8.1 et inclut phpMyAdmin pour la gestion de base de données.

## Pré-requis :white_check_mark:

- Docker
- Docker Compose

## Installation

1. Cloner le dépot Github :

```sh
git clone git@github.com:BenjaminP17/ApiPlatform-Project.git
```

2. Construire et démarrer les conteneurs :

```sh
docker-compose up -d
```

## Utilisation

- Accéder à API Platform :

Ouvrez votre navigateur et accédez à http://localhost:8741/api.

- Générer les fixtures : 

```sh
php bin/console doctrine:fixtures:load
```

- Accéder à phpMyAdmin :

Ouvrez votre navigateur et accédez à http://localhost:8081.





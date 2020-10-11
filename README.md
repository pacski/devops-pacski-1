Pacski project


url prod: http://pacski-project.herokuapp.com/
url staging: http://pacski-project-staging.herokuapp.com/


2 workflows fonctionne pratiquement a l'identique : 

production.yml

-> est appelé lors d'un push sur la branche master ainsi qu'une pull request

staging.yml

-> est appelé lors d'un push sur la branche staging


workflow : 

- Copy .env : 
-> création du .env de l'application

- PHP Linter :
-> vérification du code php sur la présence d'erreur

- Install Dependencies
-> installation des dépendance via composer

- Security checker :
-> vérification des vulnérabilités de package de dépendances dans le composer.lock

- Generate key :
-> generation de la clé de l'application

- Execute tests (Unit and Feature tests): 
-> execution des tests mise en place dans l'application via phpunit, ici j'ai tester le bon fonctionnement des pages :
get('/product')
get('/fabric')
get('/command')
get('/stock')

- Deploy to Heroku
-> deploiement de l'application sur heroku
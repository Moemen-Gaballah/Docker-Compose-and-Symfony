# How to Get Started with Docker Compose and Symfony

## Introduction

> Get Started with Docker Compose and Symfony:6 && PHP:8.2 MySql:8
> Simple view data from the Database


## Prerequisites
* docker 

## Installation

Clone the repo `git clone git@github.com:Moemen-Gaballah/Docker-Compose-and-Symfony.git` and 
`cd Docker-Compose-and-Symfony` into repo

create a .env.local file from the existing .env `cp app\.env app\.env.local`

run command `docker-compose up -d` to composer pull, build and run

install dependency `docker-compose exec php composer install`

migrations `docker-compose exec php bin/console make:migration`

migrations `docker-compose exec php bin/console doctrine:migrations:migrate`

run seeder `docker-compose exec php bin/console doctrine:fixtures:load`

url: `http://127.0.0.1:8000/`



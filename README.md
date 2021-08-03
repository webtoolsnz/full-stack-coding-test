# Webtools Full Stack Coding Test

- We'd expect candidates to complete this coding test within 2-4 hours.
- Please duplicate the project to a private GitHub repository, and invite the reviewer to the repository when you've completed the assessment. We want to see good commit hygiene.
- Feel free to show some flair if you feel like and have the time to do so.

## Overview

Build a small laravel application to manage organisation's users:

1. Extending `users` table to have both `ADMIN` and `EMPLOYEE` users.
1. `ADMIN` users can register a new account and create a new `Organisation`.
1. `ADMIN` users should see a `EMPLOYEE` users data grid after logging in, including `ADMIN` users.
1. `ADMIN` users can create, edit, and delete users.
1. Create seeders to create organisations and users, including admin users.
1. An Organisation CRUD for `ADMIN` users. (Search is optional)
1. Write tests for the users CRUD.

## Bonus Points

- Allow `ADMIN` users to search `EMPLOYEE` users.
- Add a policy to prevent `ADMIN` users from updating and deleting other `ADMIN` users.
- Add a policy to prevent `ADMIN` users from deleting themselves.
- Clean and quality code
- Good code structure.
- We love comments and documentation.  

## Stack

1. Database: MySQL
2. Backend Framework: Laravel
3. Frontend: **React (preferred)** / Vue / JQuery
4. Docker

## Other Requirements:

1. Please do not use CRUD generators and admin packages.
2. No hosting needed.

## Setup the project

This project has a `docker-compose.yml` contains the basic stack setup to quickly spin up the local development environment.

To set up the project please follow the steps below:
 
1. Set up the `.env` file:

```bash
cp .env.example .env
``` 

2. Start up the services

```bash
docker-compose up -d
``` 

3. Install the dependencies

```bash
docker-compose exec php composer install

npm install
``` 

4. Build the frontend

```bash
npm run dev
```

5. Create a key

```bash
docker-compose exec php php artisan key:generate
```

6. Run migrations

```bash
docker-compose exec php php artisan migrate --seed
```

# Rest
# Technical Test Omar Hussein


Tasks.

- Create HTML page with simple nav and footer
- See index.php for Task 1
- See pigDiceGame.php for task 2

## Features

- Registration form - jQuery and PHP validation
- send email on sumbmission - need to be on live host
- Carousel for 7 locations, carousel images fetched using ajax, see src/js/home/index.js
- Task 2 consists of custom Pig Dice Game, see rules here https://en.wikipedia.org/wiki/Pig_(dice_game)


## Tech

Techstack used:

- [Jquery] - for frontend
- [PHP] - for backend
- [Bootstrap] 
- [MYSQL] - database storage
- [Webpack] - JS and CSS bundles
- [XAMMP] - localhost server


## Installation

This project requires to be run on a server, I've used XAMMP but you can use any.

Install the dependencies and devDependencies.

```sh
cd Rest
npm insall
```

To compile Javascript & CSS files 
```sh
npm run build
```

## SQL script

Create Database

```sh
CREATE DATABASE websitedb;
```

Create table 

```sh
CREATE TABLE users (
user_id int(11) AUTO_INCREMENT,
name varchar(255) NOT NULL,
password varchar(255) NOT NULL,
email varchar(255) NOT NULL,
PRIMARY KEY  (user_id)
)
```

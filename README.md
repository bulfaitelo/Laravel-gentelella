# Laravel 5.6 + Gentelella 1.4.0 
Integration made to facilitate the creation of new projects with the Gentelella interface, if it was simpes and scalable, making use of the npm for such function.	

## Requeriments

 - Composer
 - Node.js

## Installation

Pliz folow this steps: 

Clone repo:

    git clone https://github.com/bulfaitelo/Laravel-gentelella.git
Copy .env.example to .env:

    cp .env.example .env
Install composer 

    composer install

Generate new key

    php artisan key:generate

Install npm

    npm install

Run the command if you want to regenerate the app.css, and app.js.

    npm run dev
	

## Blades:

All Gentelella blades are within **"resources>views>gentelella"**, and divided into parts inside **"partiails"**.

![Imgur](https://i.imgur.com/Rlj4kvr.png)

## Configurations:

Within "node_modules / gentelella / vendors" are all the native Gentelella components.

### CSS:

You can import into **`"resources/assets/sass/app.scss"`** your custom CSS, or to enable a Gentelella component,

### js
You can require into `**"resources/assets/js/app.js"**` your custom js, or to enable a Gentelella component,

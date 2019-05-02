# Movieye app


### Architecture
The App was built using server/client architecture, the Front-end(the client application) and the Back-end(the server application) where built in two separated projects, they comunicate via API so its easy to change the client part of the app for example, and this repository contains the Back-end of the app. The Back-end was designed to responde through API, so any Front-end able to consume resources via HTTP protocol should be able to contact the API.

### Build and Start
You will need composer to install the dependencies, and PHP to run the project, here https://getcomposer.org/download/, you can get composer. Here https://www.php.net/downloads.php, you find PHP. So, in the folder of the project run the following commands:

```sh
$ composer install
$ php artisan key:generate
# php -S localhost:80 public/index.php
```
  
This will run the app Back-end in your local machine, if you have troubles, you may need to  
```sh
# chmod 775 -R storage/ bootstrap/
```

### Third-party libraries

Where use following libraries:

* [Laravel] - For build the app itself
* [barryvdh/laravel-cors] - Handle Cross-domain requests

   [Laravel]: <https://laravel.com/>
   [barryvdh/laravel-cors]: <https://material-ui.com/>

# php-rest-api-doctrine-composer
A PHP REST-API demo from Doctrine starter theme and Composer

This repository is licensed under the GNU GENERAL PUBLIC LICENSE.

Starter structure comes straight from the [Doctrine](https://doctrine-orm.readthedocs.io/en/latest/tutorials/getting-started.html), as well as [Composer](https://getcomposer.org/doc/00-intro.md).

***

## Instructions:
Explode this repo in a 'composer-project' folder in your webserver;
Create a Mysql db, by default in bootstrap.php is defined like this:
```
'user'     => 'admin',
'password' => 'admin',
'dbname'   => 'doctrineseed'
```
From shell cmd in the bootstrap.php location:
```
vendor\bin\doctrine orm:schema-tool:create
```
##### Credits:
[Aleee](https://github.com/afranceschetti/)

[Stackoverflow](http://stackoverflow.com/questions/4578335/creating-php-class-instance-with-a-string)
```
$entityManagerClass = ucfirst($table) . "Manager";
$EntityManager = new $entityManagerClass();
```
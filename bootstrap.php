<?php
use Doctrine\ORM\Tools\Setup;
<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\ORM\EntityManager;
=======
>>>>>>> 9cea30491948f0620e95dfb8aaff7acb3ad12ac6
=======
use Doctrine\ORM\EntityManager;
>>>>>>> develop

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> develop
$dbParams = array(
    'driver'   => 'pdo_mysql',
    // 'user'     => 'demo',
    // 'password' => 'mypass',
    'user'     => 'admin',
    'password' => 'admin',
    'dbname'   => 'doctrineseed',
);


$config = Setup::createAnnotationMetadataConfiguration(array( __DIR__."/src" ), $isDevMode);

$entityManager = EntityManager::create($dbParams, $config);

<<<<<<< HEAD
=======
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
>>>>>>> 9cea30491948f0620e95dfb8aaff7acb3ad12ac6
=======
>>>>>>> develop
// or if you prefer yaml or annotations
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> develop
//$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
//);
<<<<<<< HEAD

// obtaining the entity manager
//$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
=======
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
>>>>>>> 9cea30491948f0620e95dfb8aaff7acb3ad12ac6
=======

// obtaining the entity manager
//$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
>>>>>>> develop

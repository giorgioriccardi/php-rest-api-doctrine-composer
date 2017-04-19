<?php
use Doctrine\ORM\Tools\Setup;
<<<<<<< HEAD
use Doctrine\ORM\EntityManager;
=======
>>>>>>> 9cea30491948f0620e95dfb8aaff7acb3ad12ac6

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
<<<<<<< HEAD
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

=======
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
>>>>>>> 9cea30491948f0620e95dfb8aaff7acb3ad12ac6
// or if you prefer yaml or annotations
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
<<<<<<< HEAD
//$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
//);

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

<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
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

// or if you prefer yaml or annotations
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
//$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
//);

// obtaining the entity manager
//$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

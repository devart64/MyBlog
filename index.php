<?php
/**
 * Created by PhpStorm.
 * User: monark
 * Date: 17/03/2017
 * Time: 10:02
 */
namespace Blog;
// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = ["/path/to/entity-files"];
$isDevMode = false;

// the connection configuration
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'monty',
    'password' => 'valerie',
    'dbname'   => 'myblog',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

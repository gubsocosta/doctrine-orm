<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Gubsocosta\Orm\Helpers\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);

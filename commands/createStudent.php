<?php

use Gubsocosta\Orm\Entity\Student;
use Gubsocosta\Orm\Helpers\EntityManagerFactory;

require_once __DIR__ . '../../vendor/autoload.php';

$student = new Student();
$student->setName($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($student);
$entityManager->flush();

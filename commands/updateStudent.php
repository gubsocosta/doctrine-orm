<?php

use Gubsocosta\Orm\Entity\Student;
use Gubsocosta\Orm\Helpers\EntityManagerFactory;

require_once __DIR__ . '../../vendor/autoload.php';

$id = $argv[1];
$newName = $argv[2];

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// $studentRepository = $entityManager->getRepository(Student::class);
// $student = $studentRepository->findOneBy(['id' => $id]);

$student = $entityManager->find(Student::class, $id);

$student->setName($newName);

$entityManager->flush();

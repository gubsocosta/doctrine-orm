<?php

use Gubsocosta\Orm\Entity\Student;
use Gubsocosta\Orm\Helpers\EntityManagerFactory;

require_once __DIR__ . '../../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList  */
$studentList = $studentRepository->findAll();

foreach($studentList as $student) {
    echo "ID: {$student->getId()}\nName: {$student->getName()} \n\n";
}

$gabriel = $studentRepository->findOneBy([
    'name' => 'Gabriel Costa'
]);

var_dump($gabriel);

<?php

namespace Gubsocosta\Orm\Helpers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;


/**
 * Class EntityManagerFactory
 * 
 * @package Gubsocosta\Orm\Helpers
 */
class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';

        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            true
        );

        $connection = [
            'driver'    => 'pdo_sqlite',
            'path'      => $rootDir .  '/var/data/db.sqlite' 
        ];

        return EntityManager::create($connection, $config);
    }
}

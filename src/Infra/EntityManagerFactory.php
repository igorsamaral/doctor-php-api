<?php

namespace App\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    private const DEVELOPMENT_MODE = true;

    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $config = Setup::createAnnotationMetadataConfiguration([
            __DIR__ . '/../Domain/Entities'],
            self::DEVELOPMENT_MODE
        );

        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../Data/Database/database.sqlite'
        ];

        return EntityManager::create($connection, $config);
    }

}
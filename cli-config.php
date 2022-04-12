<?php

use App\Infra\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require __DIR__ . "/vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);

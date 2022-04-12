<?php

namespace App\Data\Repositories;

use App\Domain\Entities\Doctor;
use App\Infra\EntityManagerFactory;
use Doctrine\ORM\EntityRepository;

class DoctorRepository extends EntityRepository
{
    private $ormInstance;

    public function __construct()
    {
        $this->ormInstance = (new EntityManagerFactory())->getEntityManager();

        parent::__construct(
            $this->ormInstance,
            $this->ormInstance->getClassMetadata(Doctor::class)
        );
    }
    
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        return parent::findBy($criteria);
    }

    public function create(array $input)
    {
        $doctor = new Doctor();

        $doctor->setId($input["id"]);
        $doctor->setName($input["name"]);

        $this->ormInstance->persist($doctor);
        $this->ormInstance->flush();

        return [];
    }
}
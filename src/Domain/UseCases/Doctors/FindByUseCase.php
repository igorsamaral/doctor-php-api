<?php

namespace App\Domain\UseCases\Doctors;

use App\Data\Repositories\DoctorRepository;

class FindByUseCase
{
    private DoctorRepository $doctorRepository;

    public function __construct()
    {
        $this->doctorRepository = new DoctorRepository();
    }

    public function handle(array $filters = [])
    {
        return $this->doctorRepository->findBy($filters);
    }
}
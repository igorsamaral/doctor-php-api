<?php

namespace App\Domain\UseCases\Doctors;

use App\Data\Repositories\DoctorRepository;

class GetDoctorsUseCase
{
    private DoctorRepository $doctorRepository;

    public function __construct()
    {
        $this->doctorRepository = new DoctorRepository();
    }

    public function handle(array $filters = []): array
    {
        return $this->doctorRepository->get($filters);
    }
}
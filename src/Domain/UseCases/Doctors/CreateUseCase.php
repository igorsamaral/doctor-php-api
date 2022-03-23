<?php

namespace App\Domain\UseCases\Doctors;

use App\Data\Repositories\DoctorRepository;

class CreateUseCase
{
    private DoctorRepository $doctorRepository;

    public function __construct()
    {
        $this->doctorRepository = new DoctorRepository();
    }

    public function handle(array $input)
    {
        return $this->doctorRepository->create($input);
    }
}
<?php

namespace App\Data\Repositories;

class DoctorRepository
{
    public function get(array $filters): array
    {
        return [
            "id"    => 1,
            "name"  => "Dr. João",
            "specialties" => [
                "Cardiologista",
                "Cirurgia geral",
            ]
        ];
    }
}
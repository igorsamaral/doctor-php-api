<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            "id"    => 1,
            "name"  => "Dr. João",
            "specialties" => [
                "Cardiologista",
                "Cirurgia geral",
            ]
        ];

        return response()->json(compact("doctors"));
    }
}
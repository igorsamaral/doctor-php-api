<?php

namespace App\Http\Controllers\Api;

use App\Domain\UseCases\Doctors\GetDoctorsUseCase;
use App\Http\Controllers\BaseController;

class DoctorController extends BaseController
{
    private GetDoctorsUseCase $getDoctorsUseCase;

    public function __construct()
    {
        $this->getDoctorsUseCase = new GetDoctorsUseCase();
    }

    public function index()
    {
        try {
            $doctors = $this->getDoctorsUseCase->handle([]);
            return response()->json($doctors);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

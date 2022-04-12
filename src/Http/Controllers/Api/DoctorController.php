<?php

namespace App\Http\Controllers\Api;

use App\Domain\UseCases\Doctors\CreateUseCase;
use App\Domain\UseCases\Doctors\FindByUseCase;
use App\Http\Controllers\BaseController;
use Pecee\Http\Request;

class DoctorController extends BaseController
{
    private FindByUseCase $findByUseCase;
    private CreateUseCase $createUseCase;

    public function __construct()
    {
        $this->findByUseCase = new FindByUseCase();
        $this->createUseCase = new CreateUseCase();
    }

    public function index()
    {
        try {
            $doctors = $this->findByUseCase->handle();
            return response()->json($doctors);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function store()
    {
        $input = ["id" => 1, "name" => "Dr. Matheus"];

        try {
            $doctorCreated = $this->createUseCase->handle($input);
            return response()->json($doctorCreated);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

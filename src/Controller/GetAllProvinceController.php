<?php

namespace App\Controller;

use App\Repository\ProvinceRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetAllProvinceController
{
    private ProvinceRepository $provinceRepository;

    public function __construct(ProvinceRepository $provinceRepository)
    {
        $this->provinceRepository = $provinceRepository;
    }

    public function index() : Response
    {
        return new JsonResponse($this->provinceRepository->findAll());
    }
}
<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/')]
    public function index()
    {
        return new JsonResponse([
            'version' => '1.0.0',
        ]);
    }

    #[Route('/health')]
    public function health()
    {
        return new JsonResponse([
            'status' => 'OK',
        ]);
    }
}

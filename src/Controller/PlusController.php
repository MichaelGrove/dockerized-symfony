<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PlusController extends AbstractController
{
    #[Route(
        path: '/plus/{a}/{b}',
        name: 'plus',
        methods:['GET', 'HEAD'],
    )]
    public function plus(int $a, int $b): JsonResponse
    {
        return $this->json(['value' => $a + $b]);
    }
}

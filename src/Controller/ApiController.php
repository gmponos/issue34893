<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api", methods={"GET"}, defaults={"_format"="json"})
 */
class ApiController extends AbstractController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse();
    }
}

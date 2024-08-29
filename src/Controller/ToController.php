<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Attribute\Route;

class ToController extends AbstractController
{
  //#[Route('/', name: 'app_to')]
  public function index(): Response
  {
    return new Response(content: "<h1>May you be touched by His Noodely Appendage</h1> <p><a href='./'>home</a> | <a href='./json'>pomme</a></p>");
  }

  public function pommeJson(): JsonResponse
  {
    return $this->json([
      "message" => "pomme"
    ]);
  }
}

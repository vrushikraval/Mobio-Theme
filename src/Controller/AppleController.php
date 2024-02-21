<?php 

// src/Controller/AppleController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AppleController extends AbstractController
{
    public function showPage(): Response
    {
        // Your logic to render the page content
        return $this->render('@SyliusShop/Categories/_apple.html.twig', [
            // You can pass any necessary variables here
        ]);
    }
}

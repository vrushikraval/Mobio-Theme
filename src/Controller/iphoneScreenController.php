<?php 

// src/Controller/iphoneScreenController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class iphoneScreenController extends AbstractController
{
    public function showIphoneScreen(): Response
    {
        // Your logic to render the page content
        return $this->render('@SyliusShop/Categories/_iphone_screen.html.twig', [
            // You can pass any necessary variables here
        ]);
    }
}
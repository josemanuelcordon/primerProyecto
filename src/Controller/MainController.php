<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OrderRepository;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(OrderRepository $orderRepository): Response
    {
        $orders = $orderRepository->findAll();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'orders' => $orders
        ]);
    }
}

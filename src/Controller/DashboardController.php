<?php

namespace App\Controller;

use App\Entity\DashboardEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Route("/dashboard/{id}")
     * @param int $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(int $id): Response
    {
        return $this->render('dashboard/show.html.twig', [
            'dashboard' => new DashboardEntity($id)
        ]);
    }
}

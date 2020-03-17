<?php

namespace App\Controller;

use App\Entity\DashboardEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="app_root")
     * @Route("/dashboard", name="app_dashboard")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Route("/dashboard/{id}", name="app_dashboard_show")
     * @param string $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(string $id): Response
    {
        return $this->render('dashboard/show.html.twig', [
            'dashboard' => new DashboardEntity((int)$id)
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        return new Response('test');
    }

    /**
     * @Route("/dashboard/{id}")
     * @param int $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(int $id): Response
    {
        return new Response('aaaa: '.$id);
    }
}

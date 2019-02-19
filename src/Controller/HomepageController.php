<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="app.homepage")
     * @param Request $request
     * @return Response
     */
    public function homepage(Request $request): Response
    {
        return $this->render('homepage/homepage.html.twig');
    }

    /**
     * @Route("/portfolio", name="app.portfolio")
     * @param Request $request
     * @return Response
     */
    public function portfolio(Request $request): Response
    {
        return $this->render('portfolio/portfolio.html.twig');
    }
}
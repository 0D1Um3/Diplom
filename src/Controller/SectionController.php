<?php

namespace App\Controller;

use App\Repository\SectionsRepository;
use App\Entity\TypeSport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;


class SectionController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Environment $twig, SectionsRepository $sectionsRepository): Response
    {
        return new Response($twig->render('MainPage/index.html.twig', [
            'sections'=>$sectionsRepository->findAll(),
        ]));
    }
}

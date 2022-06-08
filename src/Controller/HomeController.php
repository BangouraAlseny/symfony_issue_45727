<?php

namespace App\Controller;

use App\Form\ExampleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        $form = $this->createForm(ExampleType::class);

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

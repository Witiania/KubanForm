<?php

namespace App\Controller;

use App\Form\CommentForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class FormController extends AbstractController
{

    #[Route("/form")]
    public function index()
    {
        $form = $this->createForm(CommentForm::class);

        return $this->render('form.html.twig',[
            'form' => $form->createView()
        ]);
    }

}
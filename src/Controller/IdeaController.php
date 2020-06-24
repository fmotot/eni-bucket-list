<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends Controller
{
    /**
     * @Route("/ideas", name="list")
     */
    public function list()
    {
        return $this->render('default/list.html.twig', []);
    }

    /**
     * @Route("/ideas/detail", name="detail")
     */
    public function detail()
    {
        return $this->render('default/detail.html.twig', []);
    }
}

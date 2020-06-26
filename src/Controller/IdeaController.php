<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends Controller
{
    /**
     * @Route("/ideas", name="idea_list")
     */
    public function list()
    {
        return $this->render('idea/list.html.twig', []);
    }

    /**
     * @Route("/ideas/detail", name="idea_detail")
     */
    public function detail()
    {
        return $this->render('idea/detail.html.twig', []);
    }
}

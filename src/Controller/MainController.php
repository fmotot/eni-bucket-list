<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
    * @Route("/", name="home")
    */
    public function home()
    {
        return $this->render('default/home.html.twig', []);
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function aboutUs()
    {
        return $this->render('default/about_us.html.twig');
    }
}

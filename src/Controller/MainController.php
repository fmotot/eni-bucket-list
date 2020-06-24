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
        //tp surprise
        //le chemin est relatif au contrôleur front (public/index.php)
        $rawData = file_get_contents("../src/data/team.json");
        //convertie la chaîne en tableau !
        $teamMembers = json_decode($rawData);

        return $this->render('default/about_us.html.twig', [
            //crée une variable teamMembers dans mon fichier twig !
            "teamMembers" => $teamMembers
        ]);
    }
}

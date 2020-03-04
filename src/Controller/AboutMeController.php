<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class AboutMeController extends AbstractController
{
    /**
     * @Route("/aboutme", name="about_me")
     */
    public function index()
    {

        //start session
        $session = new Session();

        //on button submit, set session name and redirect to homepage
        if(isset($_POST['submitName'])) {

            $session->set('username', $_POST['name']);

            return $this->redirectToRoute('AboutMeController');
        }

        //otherwise, go to controller
        return $this->render('about_me/index.html.twig', [
            ['userName'=> $userName]
        ]);
    }
}

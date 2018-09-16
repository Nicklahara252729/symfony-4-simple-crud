<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */
    public function index()
    {
        return $this->render('lucky/home.html.twig', [
            'controller_name' => 'Symfony 4 basic',
        ]);
    }
    
    public function number(){
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
    /**
     * @Route("lucky/tes")
     */
    public function tes(){
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}

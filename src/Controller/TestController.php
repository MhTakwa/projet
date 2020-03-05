<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index()
    {

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/shop", name="shop")
     */
    public function shop()
    {
        
       return $this->render('test/shop.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

        /**
     * @Route("/somme/{n1}/{n2}", name="somme")
     */
    public function somme($n1,$n2)
    {
        $somme=$n1+$n2;
       
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'n1'=>$n1,
            'n2'=>$n2,
            'somme'=>$somme
        ]);
    }
}

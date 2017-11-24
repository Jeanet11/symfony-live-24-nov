<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DemoBundle\Entity\Produit;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DemoBundle:Default:index.html.twig');
    }
    public function salutAction()
    {
        return $this->render('DemoBundle:Default:salut.html.twig');
    }
    public function afficheProduitAction()
    {
        $produit = new Produit("Clavier",20,"description");

        return $this->render('DemoBundle:Default:afficheProduit.html.twig', Array("produit" => $produit));
    }
}

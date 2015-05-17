<?php

namespace Binss\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BinssVitrineBundle:Default:index.html.twig', array('name' => $name));
    }
}

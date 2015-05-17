<?php
namespace Binss\VitrineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class VitrineController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * @Template
     */
   public function accueilAction()
    {
        return array();
    }
}

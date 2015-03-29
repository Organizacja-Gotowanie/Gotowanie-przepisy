<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
     /*
     * A
     */
    /**
     * @Route("zurek.html", name="zurek")
     */
    public function  zurekAction()
    {
        return $this->render('/default/zurek.html.twig');
    }

     /*
     * B
     */
    /**
     * @Route("aleklops.html", name="aleklops")
     */
    public function  aleklopsAction()
    {
        return $this->render('/default/aleklops.html.twig');
    }

     /*
     * C
     */
    /**
     * @Route("kaskizpiersi.html", name="kaskizpiersi")
     */
    public function  kaskizpiersiAction()
    {
        return $this->render('/default/kaskizpiersi.html.twig');
    }

     /*
     * D
     */    
    /**
     * @Route("/bigos.html", name="bigos")
     */
    public function  BigosAction()
    {
        return $this->render('/default/bigos.html.twig');
    }    
     /*
     * E
     */
    /**
     * @Route("/salatka.html", name="salatkajarzy")
     */
    public function  salatkaAction()
    {
        return $this->render('/default/salatka.html.twig');
    } 
     /*
     * F
     */

    /**
     * @Route("/jajecznica.html", name="jajecznicazboczkiem")
     */
    public function  jajecznicaAction()
    {
        return $this->render('/default/jajecznica.html.twig');
    }     
     /*
     * G
     */

     /*
     * H
     */
    
     /*
     * I
     */

     /*
     * J
     */

     /*
     * K
     */
    
     /*
     * L
     */
    
     /*
     * M
     */
    
     /*
     * O
     */


}

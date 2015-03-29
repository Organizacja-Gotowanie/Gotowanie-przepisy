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

     /*
     * C
     */

     /*
     * D
     */    
    
     /*
     * E
     */

     /*
     * F
     */

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

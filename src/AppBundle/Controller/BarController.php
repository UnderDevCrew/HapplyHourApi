<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bar;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Nekland\PlacesApi\Places;

class BarController extends FOSRestController implements ClassResourceInterface
{
    public function cgetAction()
    {
        $bars = $this->getDoctrine()->getRepository('AppBundle:Bar')->findAll();
        $view = $this->view($bars, 200);

        return $this->handleView($view);
    }
}
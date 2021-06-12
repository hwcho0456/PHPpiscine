<?php

namespace D07Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Ex01Controller extends Controller
{
    /**
     * @Route("/ex01", name="ex01")
     */
    public function ex01Action()
    {
        return new Response($this->container->getParameter('d07.number'));
    }
}

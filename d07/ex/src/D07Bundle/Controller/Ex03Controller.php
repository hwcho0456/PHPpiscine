<?php

namespace D07Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Ex03Controller extends Controller
{
    /**
     * @Route("/ex03")
     */
    public function extensionAction()
    {
        return $this->render('ex03.html.twig');
    }
}

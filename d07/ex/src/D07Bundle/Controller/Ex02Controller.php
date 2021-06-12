<?php

namespace D07Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Ex02Controller extends Controller
{
    /**
     * @Route("/{_locale}/ex02/{count}", defaults={"_locale"="en"}, 
     *      requirements={
     *      "_locale"="en|fr",
     *      "count"="\d"})
     */
    public function translationsAction (Request $request, $count)
    {
        return $this->render('ex02.html.twig', ['number' => $this->container->getParameter('d07.number')]);
    }
}

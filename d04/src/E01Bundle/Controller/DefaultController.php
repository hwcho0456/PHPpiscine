<?php

namespace E01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    private $allowed = array(
        "controller", "routing", "templating", 
        "doctrine", "testing", "validation", "forms", 
        "security", "cache", "translations", "services"
    );
    public function baseAction()
    {
        $url = $_SERVER["REQUEST_URI"];
        if ($url[strlen($url)-1] != '/')
            $url = $url."/";           
        return $this->render('E01Bundle:Default:base.html.twig', ['allowed' => $this->allowed, 'mainpage' => $url, 'name' => ucfirst("home")]);
    }
    public function pageAction($page)
    {
        if (in_array($page, $this->allowed))
            return $this->render('E01Bundle:symfony2cheatsheet:'.$page.'.html.twig', ['allowed' => "", 'name' => ucfirst($page)]);
        else
            return $this->redirectToRoute('e01_homepage');
    }
}

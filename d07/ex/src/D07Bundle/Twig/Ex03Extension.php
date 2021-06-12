<?php
namespace D07Bundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use D07Bundle\Service\Ex03Service;


class Ex03Extension extends AbstractExtension
{
    private $service;

    public function __construct() {
        $this->service = new Ex03Service();
    }

    public function getFilters()
    {
        return array(
            new TwigFilter('uppercaseWords', array($this, 'up')),
        );
    }

     public function getFunctions()
     {
         return array(
             new TwigFunction('countNumbers', array($this, 'cn')),
         );
     }

     public function up($str) {
        return $this->service->uppercaseWords($str);
     }
    
    public function cn($str) {
        return $this->service->countNumbers($str);
    }
}
<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use AppBundle\Entity\Player;

class AppBundle extends Bundle
{
    private $user;
    public function __construct() {
        // print_r($this->getUser());
    }
    public function getUser() {
        return $this->user;
    }
    public function setUser() {
        $player = new Player();
        $player->setPlayerHP(100);
        $player->setPlayerAtt(20);
        $player->setLocation(['x'=> 2, 'y' => 2]);
        $this->user = $player;
    }
}

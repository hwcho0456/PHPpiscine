<?php

namespace AppBundle\Entity;

class Player
{
    private $PlayerName;
    private $PlayerHP;
    private $PlayerAtt;
    private $CapturedList = array();
    private $Location;

    public function __construct() {
    }
    // PlayerName
    public function getPlayerName() {
        return $this->PlayerName;
    }
    public function setPlayerName($name) {
        $this->PlayerName = $name;
    }
    // PlayerHP
    public function getPlayerHP() {
        return $this->PlayerHP;
    }
    public function setPlayerHP($hp) {
        $this->PlayerHP = $hp;
    }
    // PlayerAtt
    public function getPlayerAtt() {
        return $this->PlayerAtt;
    }
    public function setPlayerAtt($Att) {
        $this->PlayerAtt = $Att;
    }
    // CapturedList
    public function getCapturedList() {
        return $this->CapturedList;
    }
    public function setCapturedList($moviemon) {
        array_push($this->CapturedList, (array)$moviemon);
    }
    public function initCap() {
        $this->CapturedList = array();
    }
    // Location
    public function getLocation() {
        return $this->Location;
    }
    public function setLocation($Location) {
        $this->Location["x"] = $Location["x"];
        $this->Location["y"] = $Location["y"];
    }
    public function setXLocation($x) {
        $this->Location["x"] = $x;
    }
    public function setYLocation($y) {
        $this->Location["y"] = $y;
    }
    ///////////////////////////
    public function printPlayer() {
        print_r($this->getPlayerName());
        print_r($this->getPlayerHP());
        print_r($this->getCapturedList());
        print_r($this->getLocation());
    }
}

<?php

class Production {
    public $title;
    public $language;
    public $rate;

    public function __construct($_title, $_language, $_rate) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rate = $_rate;
    }
}

$lotr = new Production("Lord of the Rings", "English", 10);

$castAwayMoon = new Production("Cast Away on the Moon", "Korean", 7);

var_dump($lotr);
var_dump($castAwayMoon);
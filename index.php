<?php

class Production {
    public $title;
    public $language;
    public $rate;
}

$lotr = new Production();
$lotr->title = "Lord of the Rings";
$lotr->language = "English";
$lotr->rate = 10;

$castAwayMoon = new Production();
$castAwayMoon->title = "Cast Away on the Moon";
$castAwayMoon->language = "Korean";
$castAwayMoon->rate = 7;

var_dump($lotr);
var_dump($castAwayMoon);
<?php

class Production {
    public $title;
    public $language;
    public $rate;

    public static $allProduction = array();

    public function __construct($_title, $_language, $_rate) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rate = $_rate;
        self::$allProduction[] = $this;
    }

    public function __toString(){
        return $this->title;
        return $this->language;
        return $this->rate;
        return $this->profits;
        return $this->length;
        return $this->seasons;
        return $this->totalEpisodes;
    }
}

class Movie extends Production {
    public $profits;
    public $length;

    public function __construct($_title, $_language, $_rate, $_profits, $_length) {
        parent::__construct($_title, $_language, $_rate);
        $this->profits = $_profits;
        $this->length = $_length;
    }
}

class TVSerie extends Production {
    public $seasons;
    public $totalEpisodes;

    public function __construct($_title, $_language, $_rate, $_seasons, $_totalEpisodes) {
        parent::__construct($_title, $_language, $_rate);
        $this->seasons = $_seasons;
        $this->totalEpisodes = $_totalEpisodes;
    }
}

$lotr = new Movie("Lord of the Rings", "english", 10, '180m', 160);

$castAwayMoon = new Movie("Cast Away on the Moon", "korean", 7, '68m', 110);

$ladriBiciclette = new Movie("Ladri di biciclette", "italian", 8, '20m', 90);

$theRoom = new Movie("The Room", "english", 2, '30k', 100);

$druk = new Movie("Druk", "danish", 9, '80m', 120);

$fastAndFuriousTD = new Movie("Fast & Furious: Tokyo Drift", "english", 6, '240m', 140);

$strangerThings = new TVSerie("Stranger Things", "english", 8, 5, 46);

$misfits = new TVSerie("Misfits", "english", 7, 3, 30);

$theExpanse = new TVSerie("The Expanse", "english", 8, 6, 48);

$loki = new TVSerie("Loki", "english", 7, 2, 16);

$cesaroni = new TVSerie("I Cesaroni", "italian", 5, 13, 248);

$tedLasso = new TVSerie("Ted Lasso", "english", 8, 3, 36);

var_dump(Production::$allProduction);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="bg-info mb-4">
            <div class="container p-3 text-light">
                <h1>Production list</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row gx-3">
                <?php
                foreach(Production::$allProduction as $prod){
                    ?>
                    <div class="col-3 pb-4">
                        <div class="card text-center">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo $prod->title; ?></h3>
                            </div>
                            <div class="card-body">
                                <p class="card-subtitle mb-2 text-muted"><?php echo $prod->language; ?></p>
                                <p class="card-text">Rate: <?php echo $prod->rate; ?></p>    
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
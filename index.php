<?php

class Production {
    public $title;
    public $language;
    public $rate;

    public static $allProduction = array();

    public function __construct(string $_title,string $_language,int $_rate,string $_profits,int $_length) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rate = $_rate;
        $this->profits = $_profits;
        $this->length = $_length;
        self::$allProduction[] = $this;
    }

    public function __toString(){
        return $this->title;
        return $this->language;
        return $this->rate;
        return $this->profits;
        return $this->length;
    }
}

class Movie extends Production {
    public $profits;
    public $length;
}

class TVSerie extends Production {
    public $seasons;
    public $totalEpisodes;
}

$lotr = new Movie("Lord of the Rings", "english", 10, '180m', 160);

$castAwayMoon = new Movie("Cast Away on the Moon", "korean", 7, '68m', 110);

$ladriBiciclette = new Movie("Ladri di biciclette", "italian", 8, '20m', 90);

$theRoom = new Movie("The Room", "english", 2, '30k', 100);

$druk = new Movie("Druk", "danish", 9, '80m', 120);

$fastAndFuriousTD = new Movie("Fast & Furious: Tokyo Drift", "english", 6, '240m', 140);

// var_dump(Production::$allProduction);


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
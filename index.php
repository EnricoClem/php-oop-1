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
    }

}

$lotr = new Production("Lord of the Rings", "english", 10);

$castAwayMoon = new Production("Cast Away on the Moon", "korean", 7);

$ladriBiciclette = new Production("Ladri di biciclette", "italian", 8);

$theRoom = new Production("The Room", "english", 2);

$druk = new Production("Druk", "danish", 9);

$fastAndFuriousTD = new Production("Fast & Furious: Tokyo Drift", "english", 6);

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
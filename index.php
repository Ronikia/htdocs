<?php 
    class Hero{
        public $class;
        public $hp; 

        public function StartOneToTen($a){
            for ($i=0; $i < $a; $i++) { 
                echo $i;
            }
        }

    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>
<?php
    $myHero = new Hero;

    $myHero->class = 'archer';

    $myHero->hp = 20;

    $myHero->StartOneToTen(11);
?>

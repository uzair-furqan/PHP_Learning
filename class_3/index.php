<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "HOME" ;?>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo "MULTI-DIMENSIONAL ARRAY"; ?></h1>

    <?php
    
    $cars1 = ["bmw" , "M8" , "red"];
    // print_r($cars);
    // echo $cars[1][1];

    $cars = [
        ['name' => "bmw" , 'color' => "red" , 'engine' => 2000],
        ['name' => "mercedez" , 'color' => "black" , 'engine' => 1500]
    ];

    print_r($cars);
    echo $cars[1]["color"];

    foreach($cars1 as $car)
        {
            echo $car . "<br>";
        }
    ?>
</body>
</html>
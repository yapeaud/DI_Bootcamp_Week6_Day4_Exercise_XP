<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day4_Exercise_XP</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        $car = array('Dastun', 'Honda', 'BMW');
        foreach ($car as $cars)
        {
        echo "$cars, ";
        }
        sort($car);
        echo "<ul>";
        foreach ($car as $auto)
        {
        echo "<li>$auto</li>";
        }
        echo "</ul>";
    ?>
        <hr>
        <h1>Exercise 2</h1>
        <?php
            $delete_item = 'May';
            // take a list of months in an array
            $months = array(' Jan', 'Feb', 'Mar', 'Apr', 'May','jun','Jul','Aug','Sep','Oct','Nov','Dec');
            if (($key = array_search($delete_item, $months)) !== false) {
                unset($months[$key]);
            }

            // print array to see latest values
            print_r($months);
        ?>
        <hr>
        <h1>Exercise 3</h1>
        <?php
            function Reverse($str){
                return strrev($str);
            }
              
            $str = "Create";
            echo $str; echo"<br>";
            echo Reverse($str)
        ?>
        <hr>
        <h1>Exercise 4</h1>
        <?php
            // Define two array
            $array1 = array('a','1','2','3','4');
            $array2 = array('a','3');

            // intersect/matched values should be equal to first array
            if (array_intersect($array2, $array1) === $array2) {
            echo "It is a subset";
            } else {
            echo "Not a subset";
            }
        ?>
        <hr>
</body>
</html>
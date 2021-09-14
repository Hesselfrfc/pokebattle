<? 

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});
?>

<!DOCTYPE html>

<html lang="en">
<head>
</head>
<body>

    <?

    $pikachu = new pikachu('Pikachu');
    print_r('<pre>' . $pikachu . '</pre>');

    $charmeleon = new charmeleon('Charmeleon');
    print_r('<pre>' . $charmeleon . '</pre>');

    $charmeleon->test($pikachu, $charmeleon->attack["Flare"]);
    echo "<br/>";
    $pikachu->test($charmeleon, $pikachu->attack["Electric Ring"]);
    echo "<br/>" . "<br/>";
    $charmeleon->test($pikachu, $charmeleon->attack["Head Butt"]);
    echo "<br/>";
    $pikachu->test($charmeleon, $pikachu->attack["Pika Punch"]);

    echo "<br/>" . "<br/>" . pokemon::getPopulation();

    ?>

</body>
</html>
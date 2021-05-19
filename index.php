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

    $charmeleon->test($pikachu);

    ?>

</body>
</html>
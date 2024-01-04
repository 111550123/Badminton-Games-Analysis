<?php
    if(empty($_GET['name']) || empty($_GET['age'])){
        echo '有誤<br>';
        exit();
    };
    echo "Hello!" . $_GET['name'] . " <br>";
    echo "Your age is" . $_GET['age'] . " <br>";
    print_r($_GET);
?>

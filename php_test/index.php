<?php 
    // connect to database
    $conn = mysqli_connect('localhost', 'dbms', 'dbms', 'badminton');

    // check connection
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

    // write query
    $sql = 'select city, country from md limit 5';

    // make query & get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    echo $matchs[0]['city'];

    // print_r($matchs);
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>test page</title>
</head>
<body>
    <h4 class="center grey-text">datas! </h4>
    <div class="container">
        <div class="row">

            <?php foreach($matchs as $match){ ?>
                <div class="col s6 md3">
                    <div class="card">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($match['city']); ?></h6>
                            <div><?php echo htmlspecialchars($match['country']); ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>
</html>



<?php
    $name = "BSIS";
    $campus = "2024";
    $college = "COLLEGE OF INFORMATION AND COMPUTING SCIENCES";

    $fullname = (isset($_POST['fullname'])) ? $_POST['fullname'] : "";
    $age = (isset($_POST['age'])) ? $_POST['age'] : 0;

    $x = 1234;
    $profile = "BSIS";

    $collectionOfNames = array("A", "B", "C", "D", "E");
    var_dump($x);
    var_dump($profile);
    
    var_dump($collectionOfNames);

    foreach($collectionOfNames as $name => $val){
        echo "<br>".$val."=>".$name . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE</title>
</head>
<body>
    <h1>PHP SAMPLE</h1>
    
    <h2><?php echo $name;?></h2>
    <h3><?php echo $campus;?></h3>
    <h4><?php echo $college;?></h4>

    <!--
        $GET METHOD - sends data by URL
        * data is visible everyone in the URL
        $POST METHOD - sends data by HTTP POST
        * data is not shown in the URL
    -->
        
    <form action="" method="post">
        <label for="">Name:</label>
        <input type="text" name="fullname">
        <label for="">Age:</label>
        <input type="number" name="age">
        <button type="submit">Submit</button>
    </form>

    <?php
         echo "Fullname: " . $fullname . "<br>";
         echo "Age: " . $age . "<br>";
    ?>

</body>
</html>
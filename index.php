<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" placeholder="Search product here..">
    <button>SEARCH</button>
    <hr>

        <?php
    include('./config/database.php');
    echo "<br/>";
    $sql = "SELECT * FROM food";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row['drinks']. "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


</body>
</html>
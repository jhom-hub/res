<?php

    require_once 'connection/config.php';

    $sql = "SELECT date, GROUP_CONCAT(concern SEPARATOR ', ') as concern FROM appointment GROUP BY date";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>Date</b>: " . $row['date'] . "<br>" . "Concerns: " . $row['concern'] . "<br>";
        }
    }else{
        echo "No appointment/s found.";
    }

?>
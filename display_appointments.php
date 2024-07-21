<?php

    require_once 'connection/config.php';

    // delete past dates/appointments
    $current_date = date('Y-m-d');
    $sql_delete = "DELETE FROM appointment WHERE date < ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("s", $current_date);
    $stmt_delete->execute();

    $sql = "SELECT * FROM appointment ORDER BY date ASC";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="container p-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>DIVISION</th>
                            <th>SECTION</th>
                            <th>CONCERN</th>
                            <th>DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>";
                                    echo "<td>" . $row['full_name'] . "</td>";
                                    echo "<td>" . $row['division'] . "</td>";
                                    echo "<td>" . $row['section'] . "</td>";
                                    echo "<td>" . $row['concern'] . "</td>";
                                    echo "<td>" . $row['date'] . "</td>";
                                    echo "</tr>";
                                }
                            }else{
                                echo "<tr><td colspan='5'>No appointments found</td></tr>";
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>
</html>
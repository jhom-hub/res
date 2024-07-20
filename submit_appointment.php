<?php

    require_once 'connection/config.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $full_name = strtoupper($_POST['full_name']);
        $division = strtoupper($_POST['division']);
        $section = strtoupper($_POST['section']);
        $concern = $_POST['concern'];
        $date = $_POST['date'];

        // check the reservation limit
        $sql_check = "SELECT COUNT(*) as count FROM appointment WHERE date = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $date);
        $stmt_check->execute();
        $result = $stmt_check->get_result();
        $row = $result->fetch_assoc();
        $reservation_count = $row['count'];

        if($reservation_count < 5){
            // insert into db
            $sql = "INSERT INTO appointment (full_name, division, section, concern, date) VALUES (?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $full_name, $division, $section, $concern, $date);

            if($stmt->execute()){
                echo '
                    <script>
                        alert("Reservation saved successfully.")
                        window.location.href="home.php";
                    </script>
                ';
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }else{
            echo '
                <script>
                    alert("Reservation limit reached for the selected date. Please select other date.")
                    window.location.href="home.php";
                </script>
            ';
        }
    }

?>
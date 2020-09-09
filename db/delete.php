<?php

include 'connect.php';

if (isset($_GET["eventId"])) {

        $eventId = $_GET["eventId"];

        $data = mysqli_query($conn, "SELECT * from events WHERE eventId = $eventId");

        if (mysqli_num_rows($data) == 1) {

            if(mysqli_query($conn, "DELETE FROM events WHERE eventId = $eventId")){
                header('Location: ../index.php?msg=SUCCESS: Deleted successfully&type=true');
            }
        } else {
            header('Location: ../index.php?msg=ERROR: Unable to delete. Please try again&type=false');
        }
    
}//end if(POST)

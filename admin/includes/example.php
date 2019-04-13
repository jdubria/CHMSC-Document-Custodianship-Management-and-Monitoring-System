<?php


    include('../../connection/conn.php');;
    include ( "../../assets/src/src/NexmoMessage.php" );
    session_start();
    $office = $_SESSION['office_id'];
    $office_name = $_SESSION['office'];

    /**
     * To send a text message.
     *
     */
        $query = "SELECT NOW()";

        $querys = "SELECT deadline FROM borrowing WHERE active = 1  AND borrowing.office_id = '{$office}'";

        $currentTime;

        $deadlines = array();

        $result = mysqli_query($conn, $query);
        $results = mysqli_query($conn, $querys);        
        
        while ($row = mysqli_fetch_array($result)) {

                $currentTime = $row['NOW()'];
        }
        while ($rows = mysqli_fetch_array($results)) {
                $deadlines[] = $rows[0];    
        }
        $start = strpos($currentTime, " ");
        $time = substr($currentTime, $start);
        $date = strtok($currentTime, " ");

        if (in_array($date, $deadlines)) {
            $queryss = "SELECT * FROM borrowers
INNER JOIN borrowing ON borrowing.bor_id = borrowers.bor_id
WHERE borrowing.deadline = '{$date}' AND borrowing.active = 1;";
            $res = mysqli_query($conn, $queryss);
            while ($rowss = mysqli_fetch_array($res)) {
                $name =  $rowss['bname'];
        $cont = $rowss['contact'];
                $id = $rowss['id'];
    // Step 1: Declare new NexmoMessage.
    $nexmo_sms = new NexmoMessage('58a0578c', 'twDz32H1rGcx6Yts');

    // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
    $info = $nexmo_sms->sendText( $cont, '{$office_name}', 'Hello Mr/Ms.'.$name.', please return the document on/before '.$date.'' );

    // Step 3: Display an overview of the message
    echo $nexmo_sms->displayOverview($info);

    // Done!
        $exe = "UPDATE `dcdb`.`borrowing` SET `remarks`='Notified' WHERE  `id`={$id};";
        mysqli_query($conn, $exe);
            }
        }else{
           echo "none";
        }
        
?>
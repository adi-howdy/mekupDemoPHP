<?php 
    require_once('dbConnection.php');

    if(is_post_req()){
        dbConnect();
        $total_ppl = $_POST['people']?? '';
        //$date_today_1 = $_POST['date']?? '';

        echo 'total: ' .  $total_ppl;
        //echo 'date today' . $date_today_1;
        echo "Inserting data to db";
        //$sql = "insert into people values(" . $total_ppl . ", " . $date_today_1 . ")";
        $sql = "insert into hello values(" . $total_ppl . ")";
        echo "sql command: " .  $sql;
        echo "Successfully inserted data to db";
       $result = mysqli_query($connection, $sql);
       echo "Result done";

    }
?>
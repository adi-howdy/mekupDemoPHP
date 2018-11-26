<?php 
    require_once('dbConnection.php');

    if(is_post_req()){
        dbConnect();

        /*
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
*/

$name = $_POST['name']?? '';
$email = $_POST['email']?? '';
$phone = $_POST['phone']?? '';
$location = $_POST['messageType']?? '';
$people = $_POST['people']?? '';
$date = $_POST['messageType_date']?? '';
$shift = $_POST['messageType_shift']?? '';

$sql= "insert into customer (name, email, phone, location, people, date, shift) values ('" . $name . "', '"  . $email . "', '" . $phone . "', '" . $location . "', " . $people . ",'" . $date . "', '" . $shift . "');";
echo "sql query is: $sql";
$result = mysqli_query($connection, $sql);

echo "result successful";



    }
?>
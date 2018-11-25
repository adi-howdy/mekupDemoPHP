<?php 
include_once('dbConnection.php');

if(!empty($_POST["location"])){

    $sql_date = "select date, shift from schedule where location = '" .  $_POST['location'] . "';";
 
    $result_Date = mysqli_query(dbConnect(), $sql_date);
    $options_date = "";
    $options_shift = "";

    
   $num_rows = mysqli_num_rows($result_Date);

//to debug .ajax create a  seperate div tag and debug it there.   

if($num_rows > 0){
    echo "<option value='notSelected'>Please select Date..</option>"; 
    while($row3=mysqli_fetch_assoc($result_Date)){  
                  
    echo $options_date."<option value = $row3[date]>$row3[date]</option>";
    //$options_shift = $options_shift."<option value = $row3[shift]>$row3[shift]</option>";

    }}
    else {
        echo "<option value= ''>Date is  not available</option>";
    }
}

?>
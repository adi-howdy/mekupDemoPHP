<?php
include_once('dbConnection.php');

if(!empty($_POST["date"])){

    $sql_shift = "select date, shift from schedule where location = '" .  $_POST['location'] . "' and date = '" . $_POST['date'] . "';";
 
    echo "sql here is ..... $sql_shift";
    $result_Shift = mysqli_query(dbConnect(), $sql_shift);
    $options_date = "";
    $options_shift = "";

    
   $num_rows = mysqli_num_rows($result_Shift);

//to debug .ajax create a  seperate div tag and debug it there.   

if($num_rows > 0){
    echo "<option value='notSelected'>Please select Shift..</option>"; 
    while($row3=mysqli_fetch_assoc($result_Shift)){  
                  
    //$options_date."<option value = $row3[date]>$row3[date]</option>";
    echo $options_shift."<option value = $row3[shift]>$row3[shift]</option>";

    }}
    else {
        echo "<option value= ''>Shift is  not available</option>";
    }
}

?>
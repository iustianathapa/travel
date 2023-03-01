
<?php
       require_once('db_connect.php');
       $conn = mysqli_connect("localhost", "root", "", "busrev");
        
       // Check connection
       if($conn === false){
           die("ERROR: Could not connect. "
               . mysqli_connect_error());
       }


$name = ""; $email=""; $phone=""; $fromm="";  $too="";   $date= "";  $num_ticket="";

if(isset($_POST['btnSubmit'])){
    $name =  $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $fromm = $_REQUEST['fromm'];
    $too =  $_REQUEST['too'];
    $date =  $_REQUEST['date'];
    $num_ticket =  $_REQUEST['num_ticket'];

    $sql = "INSERT INTO input (name, email, phone, fromm,too, date, num_ticket) VALUES ('$name','$email','$phone','$email','$fromm','$too','$date','$num_ticket')";
if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored successfully</h3>";
} else{  
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}
return;
}
mysqli_close($conn);
?>
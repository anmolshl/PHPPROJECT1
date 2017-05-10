<?php
define('DB_HOST', '192.168.33.102');
define('DB_NAME', 'Employees');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin*123');
$con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: ".mysql_error());;
$db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: ".mysql_error());
if(mysql_errno($con)){
    echo "Failed to connect to server: ".mysql_error;
}
else{
    echo "Connection to Database successful!";
}
function NewEmployee(){
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $title = $_POST['title'];
    $DOB = $_POST['DOB'];
    $pos = $_POST['position'];
    $yoe = $_POST['yoe'];
    $query = "INSERT INTO info (FirstName,LastName,Gender,Title,DOB, Position, YOE) VALUES ('$firstname','$lastname','$gender','$title','$DOB','$pos','$yoe');";
    $data = mysql_query($query) or die(mysql_error());
    if($data){
        echo "\nYour registration is complete! Go back and enter next Employee's information!";
    }
    
}
if(isset($_POST['submit'])){
    NewEmployee();
}
?>
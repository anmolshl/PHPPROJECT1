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
function DelEmployee(){
    $firstname = $_POST['firstNameD'];
    $lastname = $_POST['lastNameD'];
    $DOB = $_POST['dobD'];
    $query = "DELETE FROM info WHERE FirstName='$firstname' AND LastName='$lastname' AND DOB='$DOB';";
    $data = mysql_query($query) or die(mysql_error());
    if($data){
        echo "\nRemoval is complete! Go back and enter next Employee's information!";
    }

}
if(isset($_POST['delete'])){
    DelEmployee();
}
?>
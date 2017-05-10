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
function UpdateEmployee(){
    $fnO = $_POST['firstNameUO'];
    $lnO = $_POST['lastNameUO'];
    $dobO = $_POST['dobUO'];
    $firstname = $_POST['firstNameU'];
    $lastname = $_POST['lastNameU'];
    $gender = $_POST['genderU'];
    $title = $_POST['titleU'];
    $DOB = $_POST['DOBU'];
    $pos = $_POST['positionU'];
    $yoe = $_POST['yoeU'];
    $query = "UPDATE info SET FirstName='$firstname',LastName='$lastname',Gender='$gender',Title='$title',DOB='$DOB',Position='$pos',YOE='$yoe' WHERE FirstName='$fnO' AND LastName='$lnO' AND DOB='$dobO';";
    $data = mysql_query($query) or die(mysql_error());
    if($data){
        echo "\nYour registration is updated! Go back and enter next Employee's information!";
    }

}
if(isset($_POST['update'])){
    UpdateEmployee();
}
?>
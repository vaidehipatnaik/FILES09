<!-- //Database connection details -->
<?php
$con=mysqli_connect("localhost", "root", "", "ttmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
?>
<!--
//"localhost" refers to "Database Path"
//"root" refers to database username
// "" refers to database password. But here bydefault, username "root" passwor is blank
//"ttmsdb" refers to database name.-->

 

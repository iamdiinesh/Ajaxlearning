
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="formdp";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection successful";
}
else{
    echo "connection failed". mysqli_connect_error();
}

$name2=$_POST['name'];
$email2=$_POST['email'];
$password2=$_POST['password'];
$contact2=$_POST['contact'];

$query = "insert into `form_element`(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')";
$result=mysqli_query($conn,$query);
echo "Form Submitted Succesfully";
mysqli_close($conn); 
?>

<?php include 'layout/header.php'?>

<?php include 'layout/sidebar.php'?>
<?php
if(!isset($_SESSION['access'])){
    header("location:login.php?title=HOME");
}

if(isset($_POST['register'])){
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$class=$_POST['class'];
$fees=$_POST['fees'];
$date=$_POST['date'];
$expdate =$_POST['exp-date'];

$info="INSERT INTO student_table VALUES('','$name','$phonenumber','$class','$fees','$date','$expdate')";

$connection->query($info);
// header('location:std.php?title=Student_table');




}






?>

<h2>ADMISSIOM FORM</h2>
<div class="container1">
<form action="dashboard.php" method='POST'>
    <input type="text" placeholder='Full Name' name='name'>
    <input type="text" placeholder='Phone Number' name='phonenumber'>
    <input type="text" placeholder='Class' name='class'>
    <input type="text" placeholder='Fees' name='fees'>
    <input type="date" placeholder='Date' name='date'>
    <input type="date" placeholder='Expiry Date' name='exp-date'>
    <input type="submit" value='Register' name='register'>
</form>
</div>
















<?php include 'layout/footer.php'?>
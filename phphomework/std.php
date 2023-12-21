<?php include 'layout/header.php'?>
<?php include 'layout/sidebar.php'?>
<?php 
if(!isset($_SESSION['access'])){
    header("location:login.php?title=HOME");
}



$users= getinfo($connection);
?>




<h2>Student Table</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>FULL NAME</th>
            <th>PHONE NUMBER</th>
            <th>CLASS</th>
            <th>FEES</th>
            <th>DATE</th>
            <th>EXPIRY DATE</th>
        </tr>
        </thead>


<?php foreach($users as $user) {?>

        <tbody>
        <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['phonenumber']?></td>
            <td><?= $user['class']?></td>
            <td><?= $user['fees']?></td>
            <td><?= $user['date']?></td>
            <td><?= $user['expdate']?></td>
        </tr>


        <tbody>
    </table>
    <?php }?>
</div>






<?php include 'layout/footer.php'?>
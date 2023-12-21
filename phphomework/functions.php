<?php


function GetUsers($connection){
$b="SELECT * FROM profiles";

$data=$connection->query($b);
$users=[];

while($q=$data->fetch_assoc()){
    $users[]=$q;
}
return $users;

}






function login($connection,$email,$password){
    $s="SELECT * FROM profiles WHERE email='$email' and password='$password'";
    $res=$connection->query($s);
    //  print_r($res);
    if($res->num_rows >0){

        $users;

        while($d=$res ->fetch_assoc()){
            $users=$d;
    
        }
        session_start();
        $_SESSION['access']['id']=$users['id'];
        $_SESSION['access']['fullname']=$users['fullname'];
        header('location:dashboard.php?title=Home');
    }
}






function getinfo($connection){
    $x="SELECT * FROM student_table";
    $DATA=$connection->query($x);

    $USERS=[];
    while($y= $DATA-> fetch_assoc()){
        $USERS[]=$y;

    }
    return $USERS;
}
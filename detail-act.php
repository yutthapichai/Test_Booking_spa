<?php
include 'include/config.php';
$id = "";
if(($_GET['what']) == 'select'){
    $id     = $_POST['uid'];
    $query  = "select * from member where ssn = '$id'";
    $result= mysqli_query($connection,$query);
    $row    = mysqli_fetch_array($result);
    $fn     = $row['fname'];
    $ln     = $row['lname'];
    $tel    = $row['tel'];
    $email  = $row['email'];
    $cm     = $row['comment'];

    $data_return = array(
        'fn'    => $fn,
        'ln'    => $ln,
        'tel'   => $tel,
        'email' => $email,
        'cm'    => $cm,
    );
}
header("Content-type:text/x-json");
echo json_encode($data_return);
?>
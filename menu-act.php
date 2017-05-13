<?php
include 'include/config.php';
if(isset($_GET['id'])){
    $id    = $_GET['id'];
    $query = "select * from menuspa where id='$id'";
    $result= mysqli_query($connection,$query);
    $row   = mysqli_fetch_array($result);
    $time  = '<label class="w3-right w3-text-red">('.$row['time'].' hrs.)</label>';
    $cost  = $row['cost'];
    $discount = ($row['cost']*0.1);
    $total    = ($row['cost']-$discount);
    $tax      = ($total*0.07);
    $alltotal = ($total+$tax);
    $data_return = array(
        'jtime'     => $time,
        'jcost'     => $cost,
        'jdiscount' => $discount,
        'jtotal'    => $total,
        'jtax'      => $tax,
        'jalltotal' => $alltotal
    );
}
header("Content-type:text/x-json");
echo json_encode($data_return);
mysqli_close($connection);
?>

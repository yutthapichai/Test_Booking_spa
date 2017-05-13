 <?php
 date_default_timezone_set("Asia/Bangkok");
 include('include/config.php');
 $check = "";
/* *****booking***** */
 if(empty($_POST['date']) || empty($_POST['optiontime']) || empty($_POST['optionspa']) ){
     header('location:index.php');
 }else{
    $datee  = $_POST['date'];
    $hr     = $_POST['optiontime'];  
    $optionspa = $_POST['optionspa'];
    $date   = explode("-",$datee); 
    $d      = $date[0];
    $m      = $date[1];
    $y      = $date[2];
    $query  = "select * from menuspa where id = '$optionspa'";
    $result = mysqli_query($connection, $query);
    $row    = mysqli_fetch_array($result);
    $guest  = $row['name'];
    $cost   = $row['cost'];
    $discount = ($row['cost']*0.1);
    $total    = ($row['cost']-$discount);
    $tax      = ($total*0.07);
    $alltotal = ($total+$tax);
 }            

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>detailbooking</title>
        <link rel="icon" type="img/png" href="img/tone.png">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
       
    </head>
<body style="background-color:#f5f8fa;">
<?php include('include/header.php');?>
    <br><br>
    <div class="w3-content w3-border w3-border-light-gray w3-white w3-margin-bottom" style="max-width:800px;">
        <div class="w3-display-container">
            <img src="img/pic.jpg" style="width:100%;" alt="yut">
            <div class="w3-display-bottomleft w3-container w3-text-white "><h2 class="w3-opacity">Thitirath</h2></div>
        </div>
        <div class="w3-container w3-center w3-teal w3-text-white"><h2>Spa ONLINE Reservation</h2></div>
        <div class="w3-row ">
            <div class="w3-half" style="max-width:100%;">
                <img src="img/bbb.jpg" style="width:94%;margin:2%;" class="w3-round">
            </div>
            <div class="w3-half w3-container">
                <h6><span class="w3-text-teal">Date :</span> 
                <?php   
                if($d == "00" || $m == "00" || $y == "0000"){
			echo "";
		}else{
                    echo $d;
                    echo " ";
			if($m == "01"){ echo "มกราคม";}
			if($m == "02"){ echo "กุมภาพันธ์";}
			if($m == "03"){ echo "มีนาคม";}
			if($m == "04"){ echo "เมษายน";}
			if($m == "05"){ echo "พฤษภาคม";}
			if($m == "06"){ echo "มิถุนายน";}
			if($m == "07"){ echo "กรกฎาคม";}
			if($m == "08"){ echo "สิงหาคม";}
			if($m == "09"){ echo "กันยายน";}
			if($m == "10"){ echo "ตุลาคม";}
			if($m == "11"){ echo "พฤศจิกายน";}
			if($m == "12"){ echo "ธันวาคม";}
                    echo " ";
                    echo $y+543;
		}?></h6>
                <h6><span class="w3-text-teal">Time :</span> <?php echo $hr;?> Hrs.</h6>
                <h6><span class="w3-text-teal">Guest :</span> <?php echo $guest;?></h6>
                <h6><span class="w3-text-teal">All cost :</span> <?php echo $alltotal;?> THB.</h6>
                <h6 ><span class="w3-text-teal">Detail :</span> Stream / Jacuzzi / Swimming poll Tamarind Skin Exfoliation with thai Herbs Thai “White Mud” Body Wrap Aromatherapy Body Massage Facial Treatment Shampoo</h6>
            </div>
        </div>
        <div class="w3-container w3-text-black w3-center w3-light-grey"><h2 class="w3-opacity">Contact information</h2></div>
        <form class="w3-container w3-margin-top" method="post" action="confirmemail.php">
            <input type="hidden" name="date" value="<?php echo $y.$m.$d;?>">
            <input type="hidden" name="hr" value="<?php echo $hr;?>">
            <input type="hidden" name="guest" value="<?php echo $guest;?>">
            <div class="w3-row">
                        <label>SSN</label>
                        <input id="ssn" class="w3-input w3-border w3-round" type="text" placeholder="Enter SSN" required name="ssn" onkeyup="autoTab2(this, 1)">              
            </div><br>
            <div class="w3-row">
                <div class="w3-half">
                        <label>Firstname</label>
                        <input id="fn" class="w3-input w3-border w3-round" type="text" placeholder="Enter firstname" required name="firstname">
                </div>
                <div class="w3-half">
                        <label>Lastname</label>
                        <input id="ln" class="w3-input w3-border w3-round" type="text" placeholder="Enter firstname" required name="lastname">
                </div>
            </div><br>
            <div class="w3-row">
                <div class="w3-half">                    
                        <label>Tel</label>
                        <input id="tel" class="w3-input w3-border w3-round" type="text" placeholder="Enter Tel" required name="tel">                   
                </div>
                <div class="w3-half">                   
                        <label>Email</label>
                        <input id="email" class="w3-input w3-border w3-round" type="text" placeholder="Enter Email" required name="email">
                </div>
            </div>
            <div><br>
                <label>Comment</label>
                <textarea id="cm" class="w3-input w3-border w3-round" rows="4" placeholder="Enter comment such congenital disease" style="width:100%;" name="comment"></textarea>
                <div class="w3-margin w3-right">
                    <button  class="w3-btn w3-teal" name="confirm" >Confirm</button>  
                </div>               
            </div>
        </form>
    </div>
    <?php include('include/footer.php');?>
    <script>
function autoTab2(obj, typeCheck) {
if (typeCheck == 1) {
    var pattern = new String("_-____-_____-__-_"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้		
} else {
    var pattern = new String("___-___-____"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้					
}
    var returnText = new String("");
var obj_l = obj.value.length;
var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
                obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}
                                  
                                  
$(document).ready(function(e){
    $('#ssn').change(function(){ 
        var id = $('#ssn').val();
	$.ajax({
		url     : "detail-act.php?what=select",
		data    : {'uid' : id},
		type    : "post",
                cache   :false,
                datatype:'json',
		success : function(data){
		            $('#fn').val(data.fn);
                            $('#ln').val(data.ln);
                            $('#tel').val(data.tel);
                            $('#email').val(data.email);
                            $('#cm').val(data.cm);
		}
	});
    });        
});
    </script>
</body>
 </html>
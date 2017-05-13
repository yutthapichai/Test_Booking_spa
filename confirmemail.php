<?php
 date_default_timezone_set("Asia/Bangkok");
 include('include/config.php');
        $nopass    = "";
        $guest     = $_POST['guest'];
        $date      = $_POST['date'];
        $hr        = $_POST['hr'];
        $ssn       = $_POST['ssn'];
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $tel       = $_POST['tel'];
        $email     = $_POST['email'];
        $comment   = $_POST['comment'];
        $logdatetime = date("Y-m-d H:i:s");
        
    if (isset($_POST['confirm'])) {                                             //กด confirm จากหน้าที่แล้ว
        $query     = "select * from member where ssn = '$ssn'";
        $result    = mysqli_query($connection, $query);
        $row       = mysqli_num_rows($result);
        if($row > 0){  
            $query  = "update member set fname='".$firstname."',lname ='".$lastname."',tel = '".$tel."' ,email = '".$email."',comment = '".$comment."' where ssn = '".$ssn."'";
            $result = mysqli_query($connection, $query);
            $query  = "insert into booking (date,time,guest,ssn,logdatetime) value";
            $query .= "('".$date."','".$hr."','".$guest."','".$ssn."','".$logdatetime."')";
            $result = mysqli_query($connection, $query);
            if($result){
                header('location:index.php');
            }else{
                echo "no success";
            }            
        }else{
        
            $rand   = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789'),0,5); //str_shuffle สับเปลียนค่า                                  
            /*
            if($result){
            $To      = "cancel_go@hotmail.com";
            $Subject = "Your passcode";
            $Header  = "From:thitirath.co.th";
            $Message = "Hi yut your passcod is '.$rand.'";
            $flgsen  = mail($To,$Subject,$Message,$Header);
            if($flgsen){
                echo 'sended';
            }else{
                echo 'Not sent';
            }
            }
            */        
        }
}

if(isset($_POST['submit'])){
    $pass   = $_POST['pass'];
    $rand   = $_POST['rand'];
    echo $rand;                                                      //ตรวจการเข้าสู่ระบบ อย่าลืมลบ
    if($pass == $rand){    
/*passcode*/    $sqlin  = "insert into passcode (passcode,ssn) value ('".$rand."','".$ssn."')";
                $queryin = mysqli_query($connection, $sqlin);
/*member*/      $query  = "insert into member (ssn,fname,lname,tel,email,comment,logdatetime) value";
                $query .= "('".$ssn."','".$firstname."','".$lastname."','".$tel."','".$email."','".$comment."','".$logdatetime."')";
                $result = mysqli_query($connection, $query);
/*booking*/     $query  = "insert into booking (date,time,guest,ssn,logdatetime) value";
                $query .= "('".$date."','".$hr."','".$guest."','".$ssn."','".$logdatetime."')";
                $result = mysqli_query($connection, $query);
        if($result){
            header('location:index.php');
        }else{
            echo "no successs";
        }
    }else{
        $nopass = 'Passcodes do not match';
    }
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>confirm email</title>
        <link rel="icon" type="img/png" href="img/tone.png">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
       
    </head>
    <body class="w3-light-grey w3-container">
        <div class="w3-content w3-card-2 w3-white w3-round" style="max-width:300px;">
            <div class="w3-container w3-margin-top">
                <h3>การยืนยันรหัสผ่าน</h3>
                <form method="post">
                    <input type="hidden" value="<?php echo $rand;?>"    name="rand">
                    <input type="hidden" value="<?php echo $guest;?>"   name="guest">
                    <input type="hidden" value="<?php echo $date;?>"    name="date">
                    <input type="hidden" value="<?php echo $hr;?>"      name="hr">
                    <input type="hidden" value="<?php echo $ssn;?>"     name="ssn">
                    <input type="hidden" value="<?php echo $firstname;?>" name="firstname">
                    <input type="hidden" value="<?php echo $lastname;?>" name="lastname">
                    <input type="hidden" value="<?php echo $tel;?>"     name="tel">
                    <input type="hidden" value="<?php echo $email;?>"   name="email">
                    <input type="hidden" value="<?php echo $comment;?>" name="comment">
                  
                    <lebel>Your passcode</lebel>
                    <input class="w3-input w3-round w3-border" type="text" placeholder="Enter your passcode" required name="pass">
                    <p class="w3-text-red"><?php echo $nopass;?></p>
                    <p>เราได้ส่งรหัสยืนยันไปทางอีเมลของคุณแล้ว กรุณาตรวจสอบอีเมลของคุณ</p>
                    <div class="w3-margin w3-right">
                        <button class="w3-btn w3-teal" name="submit">ตกลง</button>                      
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
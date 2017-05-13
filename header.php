<?php
ob_start();
session_start();
$email = "";$pass = "";
if(isset($_POST['submits'])){
    $mail = $_POST['mail'];
    $password  = $_POST['psw'];
    if(empty($mail) || empty($password)){
        if(empty($mail)){ $email = "กรุณากรอกอีเมล";}
        if(empty($password)){ $pass  = "กรุณกรอกรหัสผ่าน";}
    }else{
        $query  = "select * from user where email = '".$mail."' and password = '".$password."'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){ 
            $_SESSION['id'] = $row['id']; 
            session_write_close();           
            header('location:index.php');
        }
        else{
            $email = 1;
        }
    }
}
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-opacity-min w3-card-4 w3-hover-opacity-off" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <?php 			
     if(isset($_SESSION['id']) == ""){
    ?>
    <a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-card-2">Logins</a>
    <?php
    if($check == "index"){
    ?>
    <a  href="#menu" class="w3-bar-item w3-button w3-amber w3-card-2 w3-hide-large w3-hide-medium">Booking</a>
    <?php
    }
    ?>
    <?php
    }else{?>
        <a href="profile.php" class="w3-bar-item w3-button w3-wide w3-hide-small"><img src="img/g.jpg" class="w3-circle" style="height:21px;width:21px" alt="Avatar"> Profile</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-bell w3-large"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-newspaper-o w3-large"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-history fa-fw w3-large"></i></a>  
    <?php
    }?>
            
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <?php if(isset($_SESSION['id']) == ""){?>
                <a href="#about" class="w3-bar-item w3-button w3-card-2"><i class="fa fa-tags"></i> RROMOTION</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-calendar"></i> TIME TABLE</a>
                <a href="#work" class="w3-bar-item w3-button w3-card-2"><i class="fa fa-th"></i> GALLERY</a>
                <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-envelope-o"></i> CONTACT US</a>
      <?php
       }else{?>
        <div class="w3-dropdown-hover">
            <div class="w3-button w3-teal" style="width:160px;"><i class="fa fa-braille"></i> Menu group </div>
            <div class="w3-dropdown-content w3-bar-block w3-teal w3-card-8" style="width:160px;">
                <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-tags"></i> RROMOTION</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-calendar"></i> TIME TABLE</a>
                <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> GALLERY</a>
                <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-envelope-o"></i> CONTACT US</a>
            </div>
        </div>        
        <div class="w3-dropdown-hover">
            <div class="w3-button w3-teal" style="width:180px;"><i class="fa fa-cogs w3-large"></i> Menu Setting</div>
            <div class="w3-dropdown-content w3-bar-block w3-teal w3-card-8">
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> จัดการข้อมูลส่วนตัว</a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-diamond"></i> บัญชีรายรับ</a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-picture-o"></i> รูปภาพส่วนตัว</a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-users"></i> Register</a>
                <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-share-square-o"></i> Logout</a>
            </div>
         </div>       
        <?php
       }
       ?>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars w3-large"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-teal w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close <i class="fa fa-times"></i></a>
  <?php if(isset($_SESSION['id']) != ""){?>
  <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-wide w3-large w3-padding-16 w3-border-bottom"><img src="img/g.jpg" class="w3-circle" style="height:30px;width:30px" alt="Avatar"> Profile</a>
  <?php
  }?>   
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-tags"></i> RROMOTION</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-calendar"></i> TIME TABLE</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-th"></i> GALLERY</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope-o"></i> CONTACT US</a>
  <?php if(isset($_SESSION['id']) != ""){?>
  <hr>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-diamond"></i> บัญชีรายรับ</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-picture-o"></i> รูปภาพส่วนตัว</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> จัดการข้อมูลส่วนตัว</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-users"></i> Register</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-share-square-o"></i> Logout</a>
  <?php
  }?>        
</nav>
<?php
if($email == 1){
?>
<div class="w3-panel w3-amber w3-top w3-card-2 w3-animate-left" style="max-width:300px;position:fixed;">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-amber w3-large w3-display-topright"><i class="fa fa-times"></i></span>
  <h3>คำเตือน <i class="fa fa fa-meh-o w3-spin"></i></h3>
  <p>อีเมลและรหัสผ่านของคุณไม่ถูกต้อง</p>
</div>
<?php
}    
?>
<?/* *****Logins Modal******* */?>
        <div id="id01" class="w3-modal"> 
            <div class="w3-modal-content w3-card-8 w3-animate-top w3-round w3-margin-bottom" style="max-width:300px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">×</span>
                    <img src="img/aa.jpg" alt="Avatar" style="width:60%;" class="w3-circle w3-margin-top">
                </div>
                <form class="w3-container" method="post">
                    <div class="w3-section">
                        <label><b>Email</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="mail" required>
                        <label><b>Password</b><span><?php echo $pass;?></span></label>
                        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
                        <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit" name="submits">Login</button>
                        <input class="w3-check w3-margin-top" type="checkbox"> Remember me
                    </div>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">                   
                    <span class="w3-right w3-padding"><a href="#">Register </a>or forgot <a href="#">Password?</a></span>
                </div>
            </div>
        </div>
<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
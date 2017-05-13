<?php 
date_default_timezone_set("Asia/Bangkok");
include('include/config.php');
$check = "index";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Spabooking</title>
        <link rel="icon" type="img/png" href="img/tone.png">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
                $(function() {
                        $('#date').datepicker({ 
                                dateFormat: 'dd-mm-yy'
                        });
                });
                
        </script>
    </head>
    <body style="background-color:#f5f8fa;">
            <?php include('include/header.php')?>
        <br>
        <div class="w3-content" style="max-width:1000px;">
            <div class="w3-display-container w3-section" style="max-width:100%;">
                <img class="mySlides w3-animate-fading" src="img/a.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/c.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/d.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/e.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/f.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/h.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/i.jpg" style="width:100%;">
                <img class="mySlides w3-animate-fading" src="img/j.jpg" style="width:100%;"> 
            </div> 
            <div class="w3-white w3-panel w3-text-teal w3-round" style="height:30px;">
                <marquee direction="right">ยินดีต้อนรับ เข้าสู่ระบบการจองสปา</marquee>
            </div>
            <div class="w3-row-padding">
                <div class="w3-third">
                    <div class="w3-white w3-text-grey w3-margin-bottom w3-border w3-border-light-gray">
                        <div class="w3-display-container">
                            <img src="img/g.jpg" style="width:100%;" alt="yut">
                            <div class="w3-display-bottomleft w3-container w3-text-white"><h2 class="w3-opacity">Thitirath</h2></div>
                        </div>
                        <div class="w3-container">
                            <p><span class="w3-text-teal">story : </span>Thitirath</p>
                            <p><span class="w3-text-teal">open time : </span> 8.00 to 15.00 pm</p>
                            <p><span class="w3-text-teal">email : </span>yut@kkumail.com</p>
                            <p><span class="w3-text-teal">tel : </span>088-329-4354</p>
                            <hr>
                        </div>
                        <div class="w3-container">               
                            <h5 class="w3-text-teal w3-center"><b>พันธกิจ</b></h5>
                            <p>การให้บริการแก่ลูกค้าด้วยมาตรฐานและความปลอดภัย บำบัดรักษาสุขภาพด้วยศาสตร์แพทย์แผนไทยประยุกต์และการดูแลสุขภาพทางเลือก ตามข้อกำหนดของกระทรวงสาธารณสุข อย่างมีคุณธรรมและจริยธรรม ส่งเสริมพัฒนาบุคลากรให้มีมาตรฐานและมีความเชี่ยวชาญในการบริการอันจะนำไปสู่ความเป็นเลิศ</p>
                            <hr>
                        </div>                       
                        <div class="w3-container">
                            <h5 class="w3-text-teal w3-center"><b>กุญแจแห่งความสำเร็จ</b></h5>
                            <p ><b class="w3-opacity">1. </b>ความปลอดภัยและความพึงพอใจในการรับบริการของลูกค้า.</p>
                            <p ><b class="w3-opacity">2. </b>Therapist มีความเชี่ยวชาญด้านการนวดและผ่านมาตรฐานของกระทรวงสาธารณสุข.</p>
                            <p ><b class="w3-opacity">3. </b>การบริหารจัดการสปาอย่างมืออาชีพ.</p>
                            <p ><b class="w3-opacity">4. </b>สถานที่สปามีความปลอดภัยและมีความสวยงามทันสมัย.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-text-teal w3-center"><b>“ S P A ”</b></h5>
                            <p ><b class="w3-opacity">S (Standard)   </b>การให้บริการด้วยมาตรฐานที่ครบถ้วนทุกองค์ประกอบของสปาเพื่อสุขภาพ.</p>
                            <p ><b class="w3-opacity">P (People)  </b>การให้บริการกลุ่มคนเมืองทุกเพศ ทุกวัย.</p>
                            <p ><b class="w3-opacity">A (Accommodation) </b>การให้บริการด้วยสิ่งอำนวยความสะดวกที่ครบครัน เพื่อความสะดวกสบาย.</p>
                        </div>
                    </div>
                    <div class="w3-border w3-border-light-gray w3-margin-bottom">
                        <div class="w3-container w3-padding w3-teal">
                            <h4> Popular Posts</h4>
                        </div>
                        <ul class="w3-ul w3-hoverable w3-white">
                            <li class="w3-padding-16">
                                <img src="img/aa.jpg" alt="img" class="w3-left w3-margin-right" style="width:50px;height:50px;">
                                <span class="w3-large">นวดตัว</span><br>
                                <span>นวด ศรีษะ สะบัก บ่า ไหล่ หลัง</span>
                            </li>
                            <li class="w3-padding-16">
                                <img src="img/ddd.jpg" alt="img" class="w3-left w3-margin-right" style="width:50px;height:50px;">
                                <span class="w3-large">นวดเท้า</span><br>
                                <span>นวด เท้าประคบ ด้วยออย</span>
                            </li>
                            <li class="w3-padding-16">
                                <img src="img/ccc.jpg" alt="img" class="w3-left w3-margin-right" style="width:50px;height:50px;">
                                <span class="w3-large">คอร์ดสปาพิเศษ</span><br>
                                <span>อบตัวด้วยสมุนไพรและมาร์กตัว</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w3-twothird">
                <?php include('include/menubooking.php')?>                    
                    <div class="w3-content w3-border w3-border-light-gray w3-white w3-margin-bottom">
                        <div class="w3-container">
                            <h2 class="w3-text-grey">Recent Post</h2>                   
                            <hr>
                            <h5 class="w3-opacity"><b>พันธกิจ</b></h5>
                            <h6 class="w3-text-teal">Jan 2017- <span class="w3-tag w3-teal w3-round">Current</span></h6>
                            <p>การให้บริการแก่ลูกค้าด้วยมาตรฐานและความปลอดภัย บำบัดรักษาสุขภาพด้วยศาสตร์แพทย์แผนไทยประยุกต์และการดูแลสุขภาพทางเลือก ตามข้อกำหนดของกระทรวงสาธารณสุข อย่างมีคุณธรรมและจริยธรรม ส่งเสริมพัฒนาบุคลากรให้มีมาตรฐานและมีความเชี่ยวชาญในการบริการอันจะนำไปสู่ความเป็นเลิศ</p>
                        </div>
                        <hr>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>กุญแจแห่งความสำเร็จ</b></h5>
                            <h6 class="w3-text-teal">Mar 2012 - Dec 2014</h6>
                            <p ><b class="w3-opacity">1. </b>ความปลอดภัยและความพึงพอใจในการรับบริการของลูกค้า.</p>
                            <p ><b class="w3-opacity">2. </b>Therapist มีความเชี่ยวชาญด้านการนวดและผ่านมาตรฐานของกระทรวงสาธารณสุข.</p>
                            <p ><b class="w3-opacity">3. </b>การบริหารจัดการสปาอย่างมืออาชีพ.</p>
                            <p ><b class="w3-opacity">4. </b>สถานที่สปามีความปลอดภัยและมีความสวยงามทันสมัย.</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php include('include/footer.php')?>
        <script>    
            $(document).ready(function() {
                var max_fields      = 5; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $(".add_field_button"); //Add button ID

                var x = 1; //initlal text box count
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div><a href="#" style="text-decoration: none;"class="remove_field w3-text-deep-orange">Remove</a><select class="w3-select w3-border" name="option"><option value="" disabled selected>Choose your Spa</option><option value="1">Foot Massage</option><option value="2">Foot Spa</option><option value="3">Thai Massage</option><option value="1">Thai oil massage</option><option value="2">Thai Massage and Rice berry ball compress</option><option value="3">Foot Massage</option></select></div>'); //add input box
                    }
                });

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                });
            });
            function openMenu(evt, menuName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("menu");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-teal", "");
                }
                document.getElementById(menuName).style.display = "block";
                evt.currentTarget.firstElementChild.className += " w3-teal";
            }
            document.getElementById("myLink").click();

            var myIndex = 0;
            carousel();
            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1;
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>       
    </body>
</html>

<div class="w3-container w3-border w3-border-light-gray w3-white w3-margin-bottom" id="menu">
    <div class="w3-row w3-center w3-card-2 w3-padding w3-margin-top">
        <a href="javascript:void(0)" onclick="openMenu(event, 'Booking');" id="myLink">
            <h5 class="w3-col s6 tablink">Booking</h5>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Menu');">
            <h5 class="w3-col s6 tablink">Menu</h5>
        </a>
    </div>                               
    <div id="Booking" class="menu w3-padding-16">
        <form class="w3-container w3-light-gray" method="post" action="detailbooking.php">
            <p>
                <label>Date</label>
                <input id="date" class="w3-input w3-border w3-round" name="date" type="text" placeholder="Enter date" required></p>
            <p>
                <label>Time</label>
                <select class="w3-select w3-border" name="optiontime" required>
                    <option value="" disabled selected>Choose your Time</option>
                    <option value="10.00">10.00</option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option value="16.00">16.00</option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    <option value="19.00">19.00</option>
                    <option value="20.00">20.00</option>
                </select></p>
            <p class="input_fields_wrap">
                <label>Geust</label><label id="hr"></label>
                <select class="w3-select w3-border" name="optionspa" id="optionspa" required>
                    <option value="" disabled selected>Choose your </option>
                        <?php 
                        $query = "select * from menuspa order by name ASC";
                        $result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_array($result))  {?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                        }
                    ?>
                </select>
            </p>
            <div class="w3-margin w3-right"> 
                <button class="w3-btn w3-teal" name="submit">Booking</button>  
            </div>
            <div class="w3-row w3-margin-bottom">
                <div class="w3-col s6 w3-center">
                    <span>ราคาทั้งหมด</span><br>
                    <span class="w3-text-red">ส่วนลด</span><br>
                    <span>ผลรวม</span><br>
                    <span>ภาษี</span><br>
                    <span>ผลรวมทั้งหมด</span>
                </div>
                <div class="w3-col s6">
                    <span id="cost">0.00</span><span> THB.</span><br>
                    <span class="w3-text-red" id="discount">0.00</span><span class="w3-text-red"> THB.</span><a href="#" class="fa fa-pencil-square-o w3-large w3-right w3-text-pink w3-hover-text-amber" style="text-decoration:none;"></a><br>
                    <span id="total">0.00</span><span> THB.</span><br>
                    <span id="tax">0.00 </span><span> THB.</span><a href="#" class="fa fa-pencil-square-o w3-large w3-right w3-text-pink w3-hover-text-amber" style="text-decoration:none;"></a><br>
                    <span id="alltotal">0.00 </span><span> THB.</span>
                </div>
            </div>
        </form>
    </div>
    <div id="Menu" class="menu w3-padding-16">
        <table class="w3-table w3-striped ">
            <tr>
                <th>รายการ</th>
                <th>เวลา (นาที)</th>
                <th>ราคาค่าบริการ (บาท)</th>
            </tr>
<?php
                        /* *****menu***** */
                $query  = "select * from menuspa";
                $result = mysqli_query($connection,$query);
                if(mysqli_fetch_array($result) == 0){
                    echo "No data for now";
                }else{
                while($row = mysqli_fetch_array($result)){
                        $name = $row['name'];
                        $hr   = $row['time'];
                        $cost = $row['cost'];
?>
            <tr>
                <th><?php echo "$name";?></th>
                <th><?php echo "$hr";?> น.</th>
                <th><?php echo "$cost";?><a href="#" class="fa fa-wrench w3-large w3-right w3-text-pink w3-hover-text-amber" style="text-decoration:none;"></a></th>
            </tr>
<?php
                }}  
?>
        </table>
        <div class="w3-margin-top"> 
            <button class="w3-btn w3-amber" id="bt1">เพิ่มรายการ <i class="fa fa-sort-desc w3-large"></i></button>  
        </div>
        <div class="w3-border w3-border-amber w3-container" id="fadd" style="display: none;">
            <form class="w3-margin-top" method="post">
                <div class="w3-margin-top">
                    <input type="file" accept="image/*">
                </div>
                <div class="w3-row w3-margin-top">
                    <div class="w3-col s12 m8 l8">
                        <label>Name</label>
                        <input class="w3-input w3-border w3-round" type="text" placeholder="enter your guise" style="height:35px;">
                    </div>
                    <div class="w3-col s12 m2 l2">
                        <label>Time</label>
                        <input class="w3-input w3-border w3-round" type="text" style="height:35px;">
                    </div>
                    <div class="w3-col s12 m2 l2">
                        <label>Cost</label>
                        <input class="w3-input w3-border w3-round" type="text" style="height:35px;">
                    </div>
                </div>
                <div class="w3-margin-top">
                    <label>Detail</label>
                    <textarea class="w3-input w3-border w3-round" placeholder="enter your detail"></textarea>
                </div>
                <div class="w3-margin w3-right">
                    <button class="w3-btn w3-amber"><i class="fa fa-plus w3-large" aria-hidden="true"></i> เพิ่ม</button> 
                </div>
            </form>
        </div>
    </div>  
</div>
<script>
$(document).ready(function(){
	$("#bt1").click(function(x){
		$("#fadd").toggle(1500);
	});
});
$(document).ready(function(e){
	$('#optionspa').click(function(){ 
			$.ajax({
				url     : "menu-act.php",
				data    : "id="+$(this).val(),
				type    : "get",
                                cache   :false,
                                datatype:'json',
				success : function(data){
					$('#hr').html(data.jtime);
                                        $('#cost').html(data.jcost);
                                        $('#discount').html(data.jdiscount);
                                        $('#total').html(data.jtotal);
                                        $('#tax').html(data.jtax);
                                        $('#alltotal').html(data.jalltotal);
				}
			});
	});
});
</script>
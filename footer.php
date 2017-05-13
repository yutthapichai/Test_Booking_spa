<footer class=" w3-teal">
    <div class="w3-row-padding">
        <div class="w3-third">
            <h3 class="w3-text-white w3-center">Map</h3>
            <hr>
            <div id="map" style="height:310px;"></div>
            <h6 class="w3-opacity"><a href="https://www.google.co.th/maps/@14.6244881,103.8498624,17z?hl=en" target="_blank">ดูข้อมูลภาพใหญ่</a></h6>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-white w3-center">About Me</h3>
            <hr>
            <div class="w3-text-white w3-grey w3-padding">
                <h4>กุญแจแห่งความสำเร็จ</h4>
                    <p>1. ความปลอดภัยและความพึงพอใจในการรับบริการของลูกค้า.</p>
                    <p>2. Therapist มีความเชี่ยวชาญด้านการนวดและผ่านมาตรฐานของกระทรวงสาธารณสุข.</p>
                    <p>3. การบริหารจัดการสปาอย่างมืออาชีพ.</p>
                    <p>4. สถานที่สปามีความปลอดภัยและมีความสวยงามทันสมัย.</p>               
            </div>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-white w3-center">Contact ME</h3>
            <hr>
            <p>talk about your and next plan</p>
            <form action="/action_page.php" target="_blank">
                <input class="w3-input" type="text" placeholder="Name" required name="Name">
                <input class="w3-input w3-section" type="text" placeholder="Your email" required name="Email">
                <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
                <input class="w3-input w3-section" type="text" placeholder="Comment" required name="Comment">
                <button class="w3-button w3-lime w3-section" type="submit">SEND MESSAGE</button>
            </form>
        </div>

    </div>
</footer>
<script>
                function myMap() {
                var mapOptions = {
                    center: new google.maps.LatLng(14.625085, 103.849047),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAulE5_pnFSpqJ0SJPR5PxV7ucydAhwg8&callback=myMap"></script>
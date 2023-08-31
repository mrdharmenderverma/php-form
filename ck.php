<?php

$cookie_name ="Dharmender";
$cookie_value = "DM2";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>

<body>

    <?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
  
//   $ins="insert into tablename set cookname=";
}

//echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);

//echo $_SERVER['REMOTE_ADDR'];
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showLocation);
        } else {
            $('#location').html('Geolocation is not supported by this browser.');
        }
    });

    function showLocation(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        $.ajax({
            type: 'POST',
            url: 'getLocation.php',
            data: 'latitude=' + latitude + '&longitude=' + longitude,
            success: function(msg) {
                if (msg) {
                    $("#location").html(msg);
                } else {
                    $("#location").html('Not Available');
                }
            }
        });
    }
    </script>
</body>

</html>
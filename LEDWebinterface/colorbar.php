<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 26.02.2019
 * Time: 22:00
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hier könnte Ihre Werbung stehen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico">
    <script language="JavaScript" type="text/javascript">
        function ajax_post(){
            // Create our XMLHttpRequest object
            var hr = new XMLHttpRequest();
            // Create some variables we need to send to our PHP file
            var url = "javascriptsucks.php";
            var red = document.getElementById("red").value;
            var green = document.getElementById("green").value;
            var blue = document.getElementById("blue").value;
            var vars = "red= "+red+"&green= "+green+"&blue="+blue;
            hr.open("POST", url, true);
            // Set content type header information for sending url encoded variables in the request
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // Access the onreadystatechange event for the XMLHttpRequest object
            hr.onreadystatechange = function() {
                if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    document.getElementById("status").innerHTML = return_data;
                }
            }
            // Send the data to PHP now... and wait for response to update the status div
            hr.send(vars); // Actually execute the request
            document.getElementById("status").innerHTML = "processing...";
        }
    </script>
</head>
<body>
    <div class="picker">

            Red <input type="range" min="0" max="255" step="1" id="red" value="255">
            Green <input type="range" min="0" max="255" step="1" id="green" value="255">
            Blue <input type="range" min="0" max="255" step="1" id="blue" value="255">
            <input type="submit" name="submitbutton" value="kekse" onclick="javascript:ajax_post();">

        <div id="status"></div>
        <div id="display"></div>
    </div>

</body>
</html>
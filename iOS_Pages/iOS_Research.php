<?php
    echo "_";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Frontier Scientists Media&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
    <script>
        function mouseOver(idTag) {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
    </script>
</head>
<body>
    <div class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Research.png');">
        <div style="position:absolute; top:10%; left:15%; width:70%; height:80%; float:left;">
            <div id="Back" class="iOS_Back" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Back')" onmouseout="mouseOut('Back')">
                <!--invisible button to go to Map-->
            </div>
            <div id="Videos" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')" style="position:relative; top:76%; right:0%; width:98.5%; height:9.5%; float:left;">
                <!--invisible button to go to Videos-->
            </div>
            <div id="Map" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Map')" onmouseout="mouseOut('Map')" style="position:relative; top:76%; right:0%; width:98.5%; height:9.5%; float:left;">
                <!--invisible button to go to Map-->
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative; >
        <h1 style="color:white; text-align:center">
            Research
        </h1>
        <p>            
            The research section shows all of the different Arctic science projects that Frontier Scientists is following.
            Each project has its own identifying image (which shows up in other pages), and a short article describing it.
            These pages also have links to the Map and the Videos pages as well, so that the user can quickly get more information on them.
        </p>
    </div>
</body>
    <script>
        determineHeight('iOS_Active', 1.27);
    </script>
</html>

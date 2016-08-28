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
        function mouseOver(idTag)
        {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
    </script>
</head>
<body>
    <div class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Menu.png');">
        <div style="position:absolute; top:19%; left:13.5%; width:72%; height:80%; float:left;">
            <div id="Research" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Research.php')" onmouseover="mouseOver('Research')" onmouseout="mouseOut('Research')">
                <!--invisible button to go to Research-->
            </div>
            <div id="Videos" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')">
                <!--invisible button to go to Videos-->
            </div>
            <div id="Map" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Map')" onmouseout="mouseOut('Map')">
                <!--invisible buttom to go to Map-->
            </div>
            <div id="Articles" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Articles.php')" onmouseover="mouseOver('Articles')" onmouseout="mouseOut('Articles')">
                <!--invisible button to go to Articles-->
            </div>
            <div id="Ask" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Ask.php')" onmouseover="mouseOver('Ask')" onmouseout="mouseOut('Ask')">
                <!--invisible button to go to Ask-->
            </div>
            <div id="About" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_About.php')" onmouseover="mouseOver('About')" onmouseout="mouseOut('About')">
                <!--invisible button to go to About-->
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative; ">
        <h1 style="color:white; text-align:center">
            Main Menu
        </h1>    
        <p>
            This app was created for the news group, Frontier Scientists, by student workers at the Artcic Region Supercomputing Center. 
            The purpose of this app is to take the information from Frontier Scientists' website, 
            <a href="http://frontierscientists.com/">frontierscientists.com</a>, and put it into a unique, mobile-friendly format.
            My role on this project was that of software developer, coding the pages of the app, and making sure that they worked
            across iOS and iPad devices, making sure that data was translated correctly from the website files, and that the interface 
            was appealing and user-friendly. As I had no previous experience with mobile development, this was a great learning experience,
            where I learned and implemented Objective C, Swift, and a bit of PHP and MySQL.
            This app was created by a collection of artists and programmers, and is still seeing development and tweaks. 
            The data for the app is supplied a document from the Frontier Scientists' web administrator, 
            and use a script to convert the file into XML for the app to download.
            This script was originally written in PHP and MySQL by myself and fellow programmer, Andrew Clark,
             and has since been updated with Python by one of the later developers, Jay Byam, who helped create the Android version.
             The iPad here replicates the base functionality of the app, however, 
            the back button will always take you back to this main menu. Check out the actual app on the 
            <a href="https://itunes.apple.com/us/app/frontier-scientists-media/id947094470?mt=8">App Store</a> and 
            <a href="https://play.google.com/store/apps/details?id=frontsci.android&hl=en">Google Play</a>!
        </p>
    </div>
    <script>
        determineHeight('iOS_Active', 1.27);
    </script>
</body>
</html>

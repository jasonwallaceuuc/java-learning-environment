
<?php 
require('/phpfunctions/db.php'); //requires db info
include("/phpfunctions/auth.php"); //include user auth
include("/phpfunctions/indexl.html") //include layout
?>
<?php

$id = $_SESSION['username'];

//Random tip from jtips table
$query="SELECT tip FROM jtpis ORDER BY RAND() LIMIT 1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js" type="text/javascript"></script>
<style>p.indent{ padding-bottom: 0.75cm }</style>
<!-- CSS for the RSS Feed from google. Still need to add this to main CSS file -->
<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: auto;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>

<!-- JavaScript for the RSS Feed -->
<script type="text/javascript">
function load() {
//var feed ="http://feeds2.feedburner.com/techradar/allnews";
var feed ="http://feeds.bbci.co.uk/news/technology/rss.xml?edition=uk";

new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
   

<title>JavaSyntaxResource</title>
<body>

<h1><center>Java Syntax Learning Resource Tool</h1></center>

<!-- JavaScript That makes use of Cookies to store users last visit and display -->                      
<script type = "text/javascript">
var days = 730; // days until cookie expires = 2 years.
var lastvisit=new Object();
var firstvisitmsg="<center>Welcome <?php echo $_SESSION['username']; ?> This is your first visit to this page.</center>"; 
lastvisit.subsequentvisitmsg="<center>Welcome back <?php echo $_SESSION['username']; ?> Your last visit was on <b>[displaydate]</b></center>";

lastvisit.getCookie=function(Name){ 
var re=new RegExp(Name+"=[^;]+", "i"); 
if (document.cookie.match(re)) 
return document.cookie.match(re)[0].split("=")[1];
return''; 
}

lastvisit.setCookie=function(name, value, days){ 
var expireDate = new Date();

var expstring=expireDate.setDate(expireDate.getDate()+parseInt(days));
document.cookie = name+"="+value+"; expires="+expireDate.toGMTString()+"; path=/";
}

lastvisit.showmessage = function() {
var wh = new Date();
if (lastvisit.getCookie("visitc") == "") { 
lastvisit.setCookie("visitc", wh, days); 
document.write(firstvisitmsg);
}

else {
var lv = lastvisit.getCookie("visitc");
var lvp = Date.parse(lv);
var now = new Date();
now.setTime(lvp);
var day = new Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat");
var month = new Array ("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
var dd = now.getDate();
var dy = now.getDay();
dy = day[dy];
var mn = now.getMonth();
mn = month[mn];
yy = now.getFullYear();
var hh = now.getHours();
var ampm = "AM";
if (hh >= 12) {ampm = "PM"}
if (hh >12){hh = hh - 12};
if (hh == 0) {hh = 12}
if (hh < 10) {hh = "0" + hh};
var mins = now.getMinutes();
if (mins < 10) {mins = "0"+ mins}
var secs = now.getSeconds();
if (secs < 10) {secs = "0" + secs}
var dispDate = dy + ", " + mn + " " + dd + ", " + yy + " " + hh + ":" + mins + ":" + secs + " " + ampm
document.write(lastvisit.subsequentvisitmsg.replace("\[displaydate\]", dispDate))
}

lastvisit.setCookie("visitc", wh, days);

}

lastvisit.showmessage();

</script>

<!-- Top Well -->
 <div class="container">
        
  
          <div class="clear"></div>
        </div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <center>Revision Tips!</center>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       
		<?php echo $row['tip']; ?>
      </div>
    </div>
  </div>

  <!-- Bottom Well for RSS Feed -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       <center>Tech News: Powered by BBC News</center>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
	  
      <div id="feedControl">Loading...</div>
      </div>
    </div>
  </div>
  
 
 <center> <input type="button" onclick="location.href='intro.php';" value="Start Topics" /></center>
	
<p class="indent"></p>
<p class="indent"></p>
<p class="indent"></p>

</body>
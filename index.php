<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSE B WEB PORTAL</title>
<link href="w3.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="theme-color" content="#920000">
<script type="text/javascript">
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/091cd61982f05110de9a2197c6d0aeef.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
</script>
</head>

<body class="" style="font-family: 'Open Sans', sans-serif;">
<nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" style="width:200px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hide-large">Close &times;</a>
<input class="w3-input w3-padding" type="text" placeholder="Search.." id="myInput" onkeyup="myFunction()">
  <a href="#">Announcements</a>
  <a href="#">Materials</a>
  <a href="#">Contacts</a>
<button class="w3-btn w3-teal" onclick="_pcq.push(['triggerOptIn',{httpWindowOnly: true}]);">
GET NOTIFICATIONS
</button></nav>

<footer class="w3-container w3-animate-top w3-card-4 w3-black w3-center">
  <h4>CSE B  WEB PORTAL   <span class="w3-opennav w3-header w3-hide-large w3-right" onclick="w3_open()">&#9776;</span></h4>

  </footer>
     
<div class="w3-main" style="margin-left:200px">

<div class="w3-row w3-header w3-padding-small">
  <div class="w3-header w3-half">
  <div class="w3-header w3-large w3-teal w3-center">Announcements</div>
  <?php
	date_default_timezone_set('Asia/Kolkata');
	$day = date("l");
$dbhost = 'mysql.hostinger.in';
$dbuser = 'u464775154_data';
$dbpass = 'bruhadroop';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM data ORDER BY time DESC";

mysql_select_db('u464775154_data');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$row['data'] = str_replace("\n", "<br/>", $row['data']);
$row['data'] = nl2br($row['data']);
echo "<div class=\"w3-padding-4 w3-animate-right\"><div class=\"w3-header w3-leftbar w3-pale-red w3-border-red w3-border w3-card-2\"><table class=\"w3-table w3-header\"><tr><th><span class=\"w3-text-red\">{$row['sub']} {$row['type']}</span></th><th class=\"w3-small\">By 29/01 (Tue, 1 day) </th><th><span onclick=\"parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove()\" class=\"w3-closebtn w3-medium\">&times;</span></th></tr><td colspan=\"2\"><span class=\"w3-small\">{$row['data']}</span></td></table></div></div>";
	 
}
?>
  <div class="w3-btn w3-border w3-white w3-border-teal w3-right w3-text-teal w3-small w3-round-xlarge">Read More</div>
    </div>
  <div class="w3-panel w3-half">
      <table class="w3-table w3-small w3-striped w3-bordered w3-centered w3-card-4">
	  <tr class="w3-blue w3-center"><th colspan="2"><strong>TIME TABLE</strong></th>
	  </tr>
  <tr class="w3-teal">
  <th>Time</th>
  <th>Period</th>
</tr>
    <?php
	date_default_timezone_set('Asia/Kolkata');
	$day = date("l");
$dbhost = 'mysql.hostinger.in';
$dbuser = 'u464775154_data';
$dbpass = 'bruhadroop';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM timetable WHERE day = '$day'";

mysql_select_db('u464775154_data');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	  echo "<tr><td>09:30 AM - 10:20 AM</td><td><b>{$row['1']}</b></td>".
	  "<tr><td>10:20 AM - 11:10 AM</td><td><b>{$row['2']}</b></td>".
	  "<tr><td>11:10 AM - 12:00 PM</td><td><b>{$row['3']}</b></td>".
	  "<tr><td>12:00 PM - 12:50 PM</td><td><b>{$row['4']}</b></td>".
	  "<tr><td>12:50 PM - 01:20 PM</td><td><b>LUNCH</b></td>".
	  "<tr><td>01:20 PM - 02:05 PM</td><td><b>{$row['5']}</b></td>".
	  "<tr><td>02:05 PM - 02:50 PM</td><td><b>{$row['6']}</b></td>".
	  "<tr><td>02:50 PM - 03:25 PM</td><td><b>{$row['7']}</b></td>".
	  "<tr><td>03:35 PM - 04:20 PM</td><td><b>{$row['8']}</b></td></tr>";
}
mysql_close();
?>
</table>
  </div>
</div>
<div class="w3-container">
  <div class="w3-panel"></div>
  </div>

<footer class="w3-container w3-teal w3-center">
  <h5>Powered by WEB PORTAL</h5>
  </footer>
     
</div>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
<script>
// Filter
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("mySidenav");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
</body>
</html>

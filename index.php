<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
<script language="JavaScript1.1">
		

		var slideimages=new Array()
		var slidelinks=new Array()
		function slideshowimages(){
		for (i=0;i<slideshowimages.arguments.length;i++){
		slideimages[i]=new Image()
		slideimages[i].src=slideshowimages.arguments[i]
		}
		}

		function slideshowlinks(){
		for (i=0;i<slideshowlinks.arguments.length;i++)
		slidelinks[i]=slideshowlinks.arguments[i]
		}

		function gotoshow(){
		if (!window.winslide||winslide.closed)
		winslide=window.open(slidelinks[whichlink])
		else
		winslide.location=slidelinks[whichlink]
		winslide.focus()
		}

		//-->
		</script>
		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
			table,td{padding:5px;broder-radius:5px}
		</style>
</head>

<body>
<?php include('ads/header.php');?>
<table width="975" border="1" align="center" style="background-image:url('slide image/bkgrnd_greydots.png');">
  <tr>
    <td height="135" colspan="2">
	<img src="food1.jpg" name="slide" border="0" width="100%" height="200">
	<script>

	slideshowimages("slide image/head 1.jpg","slide image/head 2.jpg","slide image/head 3.jpg","slide image/head 4.jpg")
	slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

	var slideshowspeed=2000

	var whichlink=0
	var whichimage=0
	function slideit(){
	if (!document.images)
	return
	document.images.slide.src=slideimages[whichimage].src
	whichlink=whichimage
	if (whichimage<slideimages.length-1)
	whichimage++
	else
	whichimage=0
	setTimeout("slideit()",slideshowspeed)
	}
	slideit()

	//-->
</script>	</td>
  </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php">HOME</a>
		<a href="index.php?chk=about">ABOUT US</a>
		<a href="index.php?chk=login">LOGIN</a>
		<a href="index.php?chk=registraion">NEW USER?</a>
		<a href="index.php?chk=5"></a>
		<a href="index.php?chk=contact">CONTACT US</a>	</td>
  </tr>
  <tr>
    <td height="613" valign="top" style="padding:10px">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<h3 align="center">Welcome to mail server..........</h3>
	<pre>
	
About My mail server - email from 

	
	
	</pre>
	<?php
	}
	if($chk=="registraion")
	{
	include_once('regis.php');
	}
	if($chk=="login")
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	if($chk=="contact")
	{
	include_once('contactus.php');
	}
	if($chk=="7")
	{
	include_once('latestupdDisp.php');
	}
	if($chk=="about")
	{
	include_once('about.php');
	}
	
	
	?>	</td>
    <td width="130">
	<marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()">
<a href="index.php?chk=7">Latest Updates</a></marquee>
	</td>
  </tr>
  <tr>
    <td height="47" colspan="2">
	<h2 align="center"><-------------Badshah--------------></h2>	</td>
  </tr>
</table>
<?php include('ads/header.php');?>
</body>
</html>

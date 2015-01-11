<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>



	
	
	
	<title>E-Treasure Hunt</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bluebliss.css" />
</head>

<body>

<div id="mainContentArea">
	<div id="contentBox">
        <div id="title" align="center" >E-Treasure Hunt</div>
        
        <div id="linkGroup">
           
        </div>
		
		
        
        <div id="blueBox"> 
          <div id="header"></div>
          
		  
		  
			<h1><div class="contentTitle">QR Codes</div></h1>
			QR code (abbreviated from Quick Response Code) is the trademark for a type of matrix barcode (or two-dimensional bar code)
			first designed for the automotive industry in Japan. Bar codes are optical machine-readable labels attached to items that 
			record information related to the item. The code consists of black modules (square dots) arranged in a square grid on a white
			background. 
			<img src="images/qr.jpg">
			<form name="q3" method="post" action="pagethree.php" >
			<input type="text" name="name"/><input type="submit" value="submit"/>
			</div>
			<div id="footer"><a href="http://www.aszx.net">web development</a> by <a>Pramodh.N.R and Samarth.V.Shastri</a></div>
        </div>
		<div id="contentBox1">
     
     

                 <div id="blueBox1"> 
          		  
		  <h1>LEADERBOARD</h1>
		  <h2>&nbsp;Team &nbsp;&nbsp; Score
		<?php
		  $a=$_REQUEST['name'];
		  $b=$_REQUEST['team'];
		  if($a!="ylecipmearrammis")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=1;

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

	mysql_query("UPDATE score SET scor='$s' WHERE name='$b'");
	mysql_query("UPDATE score SET ip='$d' WHERE name='$b'");
	$res=mysql_query("SELECT * FROM score ORDER BY scor DESC LIMIT 5");
	while($c=mysql_fetch_array($res))
	{
		$res1=$c['name'];
		$res2=$c['scor'];
		echo"<html><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$res1  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $res2<br></html>";
	}
	?>
	<input type="hidden" name="team" value="<?php echo $b?>"  readonly /></form>
	</div>
	</div>
	</div>
			
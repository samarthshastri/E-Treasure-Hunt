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
          
		  
		 	<h1><div class="contentTitle"></div></h1>
			
			
			<h1><div class="contentTitle">Identify the car</div></h1>
			<p>
			<ul>
			<li>Mid-engined two-seater sports car.</li>
			<li>Powered by a 4.6 liter V8 engine</li>
			<li>Offers 4 different running modes.</li>
			<li>It is subject to numerous video games appearances, most notably in several games of the Need for Speed series.</li>
			<li>The company intends to manufacture it as a 2014 model.</li>
			</ul>
			<img src="images/car.jpg">
			
			
			<form name="q2" method="post" action="pagetwentysix.php" onsubmit="return validate()">
			<input type="text" name="name"/><input type="submit" value="submit"/>
			</div>
			<div id="footer">Web development by Pramodh.N.R and Samarth.V.Shastri</div>
        </div>
		
			<div id="contentBox1">
     
     <h2>

                 <div id="blueBox1"> 
          		  
		  <h1>LEADERBOARD</h1>
		<?php
		  $a=$_REQUEST['name'];
		  $b=$_REQUEST['team'];
		  if($a!="4february2013")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=24;

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

	mysql_query("UPDATE score SET scor='$s' WHERE name='$b'");
	mysql_query("UPDATE score SET ip='$d' WHERE name='$b'");
	$res=mysql_query("SELECT * FROM score ORDER BY scor DESC LIMIT 5");
	while($c=mysql_fetch_array($res))
	{
		$res1=$c['name'];
		$res2=$c['scor'];
		echo"<html>$res1   $res2<br></html>";
	}
	?>
	<input type="hidden" name="team" value="<?php echo $b?>"  readonly /></form>
	</div>
	</div>
	</div>
			
			
			
			
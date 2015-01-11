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
			
			A caterpillar is at the bottom of a pond and wants to get out.<br>
			He manages to crawl up the wall 4 feet each day, but at night he must rest<br>
			( after all that work during the day ) and so he slips back down 3 feet.<br>
			If the well is 40 feet deep, How long will it take him to get out?
			<br><img src="images/well.jpg">
			<br>
			<br>
			<br>
			<br>
			<form name="q3" method="post" action="pagenineteen.php" onsubmit="return validate()">
			<input type="text" name="name"/><input type="submit" value="submit"/>
			
			</div>
			<div id="footer"><a>web development</a> by <a>Pramodh.N.R and Samarth.V.Shastri</a></div>
        </div>
					<div id="contentBox1">
     
     <h2>

                 <div id="blueBox1"> 
          		  
		  <h1>LEADERBOARD</h1>
		  <h2>Team  Score</h2>
		<?php
		  $a=$_REQUEST['name'];
		  $b=$_REQUEST['team'];
		  if($a!="vforvendetta")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=17;

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
			
			
			
			
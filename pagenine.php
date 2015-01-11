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
		
		   
            <div class="pageContent">
			<ul>
			 Louis is promoted to senior partner and has the deciding vote in the firm's future, Harvey must convince him to support Jessica.
			 After Louis discovers that Hardman intended to make him the fall guy for his embezzlement schemes five years ago, Hardman admits his indiscretion,
			 then tries to convince Louis that he is "not that person" anymore.
			what is the episode name of the above outlined episode belonging to a english serial ??
			<br><img src="images/usa.jpg">
			<form name ="q2" action="pageten.php" method= "post" >
			<input type="text" name="name"/><input type="submit" name="submit"/>
			
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
		  if($a!="20")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=8;

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
			
			
			
			
			
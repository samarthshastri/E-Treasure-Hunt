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
			
			
			<h1><div class="contentTitle">Identify the Band</div></h1>
			<p>
			<ul>
			<li>Australian hard rock band.</li>
			<li>Considered pioneers of heavy metal.</li>
			<li>Their lead singer and song co-writer died due to heavy consumption of alcohol <br>and the group briefly considered disbanding, but they hired a new vocalist.</li>
			</ul>
			<img src="images/lane.jpg">
			
			
			
			<form name="q2" method="post" action="pagefour.php" >
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
		  if($a!="disciplinedandintegrateddevelopmentofpersonalitythroughacademicexcellencesportsandculturalactivities")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=2;

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
			
			
			
			
			
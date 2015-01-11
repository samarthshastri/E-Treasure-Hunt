<!--
You may use this in any way, on any site, all we ask is that you please keep the link(s) crediting the author.   Though this is not mandatory, it is certainly appreciated.
 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>




	<script type="text/javascript" src="js/page1.js"></script>
	
	
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
          <div class="contentTitle">Welcome to E-Treasure Hunt.</div>
		  
		   <div class="contentTitle">General Rules</div>
            <div class="pageContent">
              
			  <ul>
			  <li>Answer in the box provided .</li>
			  <li>The answer should be in small letters <b>only.</b></li>
			  <li>If the answer consists of more than a single word  do <b>NOT</b> separate it
			  with a space.</li>
			  <li><b>Do not</b> include punctuation marks or any special characters.</li>
			  <li>Access to the internet is permitted.</li>
			  
			  
			  
			  <li>Time Duration:90mins</li>
			  <p>
			  <br>
			  To verify that you are human and not a computer program please enter the security code below.</p>
			  
			<img src="images/index.jpg">
			<form name="fo" method="post" action="pagetwo.php"  >
			<input type="text" name="name" /><input type="submit" name="Submit" value="Submit" " />
              
            </div>
			
            <div id="footer"><a href="http://www.aszx.net">web development</a> by <a>Pramodh.N.R and Samarth.V.Shastri</a></div>
        </div>
	</div>
	<div id="contentBox1">
     
     

                 <div id="blueBox1"> 
          		  
		  <h1>LEADERBOARD</h1>
		  <h2>&nbsp;Team &nbsp;&nbsp; Score
		  <?php
	$a=$_REQUEST['team1'];
	$d=date('H:i');
	
	
$hostname='localhost';
$username='samarth';
					
$password='';
$dbname='score';
$s=0;
mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

mysql_query("INSERT INTO score(ip,name,scor) VALUES ('$d','$a','$s')");
mysql_query("UPDATE score SET ip='$d' WHERE name='$b'");
	$res=mysql_query("SELECT * FROM score ORDER BY scor DESC LIMIT 5");
	while($c=mysql_fetch_array($res))
	{
		$res1=$c['name'];
		$res2=$c['scor'];
		echo"<html><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$res1  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $res2<br></html>";
	}
	
	
	
	?>
	<input type="hidden" name="team" value="<?php echo $a?>"  readonly /></form>
	
	
	
</h2>
		  

</div>
</div>
</div>

</body>
</html>

<?php
require 'core.inc.php';
require 'connect.inc.php';

if(!loggedin()) {
	
if( isset($_POST['good']) || 
	isset($_POST['ok']) || 
	isset($_POST['disappoint']))
{
	$good=$_POST['good'];
	$ok=$_POST['ok'];
	$disappoint=$_POST['disappoint'];
	
	if(!empty($good))
	{
		
			$query = "INSERT INTO `feedback` VALUES ('', '".$good."')";
                        echo 'Thank you';
		}
		
		else if(!empty($ok))
		{
		
			$query = "INSERT INTO `feedback` VALUES ('', '".$ok."')";
                        echo 'Thank you';
		}
		
		else if(!empty($disappoint))
		{
		
			$query = "INSERT INTO `feedback` VALUES ('', '".$disappoint."')";
                        echo 'Thank you';
		}
		
			if($query_run = mysql_query($query)) 
			{
				header('Location: thanku.php');
				echo 'Thank you';
			}
			
			
			
	}
	}
?>			


<html>
    <head>
        <title>Feedback</title>
        <style type="text/css">
            
            .conf {font-size:150%;
		background-color:black;
		color:white;
		padding:1.8%;
		text-align:left;
		margin:1px;
		}
                
            .order{ font-size:200%
                    
                }    
            
        </style>    
    </head>
    <body>
        <p class="conf">Feed Us Back.</p>
        <br/>
        <br/>
        <p class="order">Your experience was :</p>
        <hr/>
    
	<form action="feed.php" method="POST">
	<input type="radio" name="good" value="good" /> : GOOD<br/>
	<input type="radio" name="ok" value="ok" /> : OK<br/>
	<input type="radio" name="disappoint" value="disappoint" /> : DISAPPOINTING<br/>
        <input type="submit" name="submit" value="FEED"/>
	</form>
	
    </body>
</html>
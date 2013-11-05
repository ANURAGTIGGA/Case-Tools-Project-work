<?php 
session_start();
$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("online_shop",$link) or die("Cant select db");
	
	$q = "select * from users where roll = '".$_POST['roll']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
        
if(empty($_POST))
{
	exit;
}

if(empty($_POST['roll'])||empty($_POST['pword']))
{
	echo "You must enter all fields";
}

	
	if(!empty($row))
	{
		if($_POST['pword']==$row['password'])
		{
			//login
			$_SESSION = array();
			$_SESSION['roll']=$row['roll'];
                       
			
			header("location:welcome.php");
		}
		else
		{
			echo "Wrong Password .";
                        
		}
	}
	else
	{
		echo "No Such User";
	}

?>
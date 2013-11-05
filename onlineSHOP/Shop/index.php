<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()) {
	
if( isset($_POST['username']) && 
	isset($_POST['roll']) && 
	isset($_POST['hostel']) && 
	isset($_POST['mail']) &&
	isset($_POST['mobile']) &&	
	isset($_POST['password']))
{
	$fullname = $_POST['username'];
	$rollno = $_POST['roll'];
	$hostel = $_POST['hostel'];
	$email = $_POST['mail'];
	$mobno = $_POST['mobile'];
	$password= $_POST['password'];
	
	if(!empty($fullname) && !empty($rollno) && !empty($hostel) && !empty($email) && !empty($mobno) && !empty($password))
	{
		
			$query = "INSERT INTO `users` VALUES ('', '".$fullname."', '".$rollno."', '".$hostel."', '".$email."', '".$mobno."', '".$password."')";
		
			if($query_run = mysql_query($query)) 
			{
				header('Location: index.php');
			}
			else {
				echo 'not registered';
			}
		
	}
	else
	{
		echo 'All fields required';
	}
}
}
?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Online Shop</title>
        
        <style type="text/css">
	
		.need {font-size:20px;
		background-color:black;
		color:white;
		padding:30px;
		text-align:right;
		margin:1px;
		}
		
	.online {font-weight:bold;
		font-size:50px;
		background-color:black;
		color:white;
		padding-top:50px;
		padding-bottom:10px;
		margin:1px;
		text-indent:25px;
			}	
		
	a:link{color:white;
			text-decoration:none;}	
			
	a:visited{color:white;
			text-decoration:none;}
			
	a:hover{color:white;
			text-decoration:none;}

	a:active{color:white;
			text-decoration:none;}	

	img {padding-right:50px}
	
	#newuser {border:5px solid black;
			position:absolute;
			width:550px;
			height:400px;
			top:250px;
			left:120px;}
			
	.new {text-align:center;
			font-size:40px;
		  font-weight:bold;
		  margin:2px;
		  background-color:black;
		  color:white;}
		  
	#reguser {border:5px solid black;
			position:absolute;
			width:550px;
			height:250px;
			top:250px;
			left:850px;}
			
	.reg {text-align:center;
			font-size:40px;
		  font-weight:bold;
		  margin:2px;
		  background-color:black;
		  color:white;}	  
		  
	.rollpass {font-size:40px;
				position:absolute;
				left:85px;}	  
				
	.newentry {font-size:35px;
				font-weight:bold;
				position:absolute;
				left:25px;
				}	  
	
	#winshop {border:5px solid black;
				background-color:black;
			position:absolute;
			width:300px;
			height:191px;
			top:520px;
			left:850px;}
			
	.winsp { text-align:center;
			padding-top:30px;
			font-size:40px;
		  font-weight:bold;
		  margin:2px;
		  background-color:black;
		  color:white;}
	
	#winimg { border:0;
                  
			 position:absolute;
			 
			 top:520px;
			 left:1150px;}
	
	#foot {border:6% solid black;
			background-color:black;
			color:white;
			position:absolute;
			top:90%;
			width:56%;
			}
	
	.foot {text-align:center;
                font-size:100%;
                padding:2%;}
	
    </style>

        
    </head>
    
    <body>
        
<p class="need"><a href="" title="Call 7667169873">Need Help ?</a></p>
<p class="online">Online Shopping Complex <img src="shopcart.png" height="70" align="right" /></p>


<div id="newuser">
<p class="new">New User</p>
<form action="index.php" method="POST">
<p class="newentry">
	Name :<input type="text" name="username" value="FULL NAME" />
	</br>
	Roll :<input type="text" name="roll" value="ROLL NUMBER" />
	</br>
	Hostel :
	<select name="hostel">
		<option>select</option>
		<option>Aquamarine A</option>
		<option>Aquamarine B</option>
		<option>Ruby</option>
		<option>Pearl</option>
		<option>Lapis</option>
		<option>Opal</option>
	</select>
	
	</br>
	E-mail :<input type="text" name="mail" value="WEBMAIL" />
	</br>
	Mobile :<input type="text" name="mobile" value="MOBILE" />
	</br>
	Password :<input type="text" name="password" value="PASSWORD" />
	</br>
	
		<input type="submit" value="SIGN UP" name="newuse"/>
	
</p>	
</form>
</div>

<div id="reguser">
<p class="reg">Registered User</p>
<form action="process_login.php" method="POST">
	<p class="rollpass">
	Roll No. :<input type="text" name="roll" size="25" maxlength="9" />
	</br>
	Password :<input type="password" name="pword" size="22" maxlength="9" />
	</br>
		<a href="welcome.php"><input type="submit" value="SIGN IN" name="reguse"/></a>
	</p>
	
	
</form>
</div>

<div id="winshop">
<a href="welcomeagain.php" title="Go in !">
<p class="winsp">
Window</br>Shop ?
</p>
</a>
</div>
<div id="winimg">
	<a href="welcomeagain.php" title="Go in !">
	<img src="windowshop.jpg" height="188" />
	</a>
</div>

<div id="foot" >
<p class="foot">
online shopping complex @ national institute of technology, tiruchirappalli - 620015 | develpoed by : anurag aron tigga
</p>
</div>

        
        
        <?php
        // put your code here
        ?>
    </body>
</html>




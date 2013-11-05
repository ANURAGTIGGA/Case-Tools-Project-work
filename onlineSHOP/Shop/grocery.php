<!DOCTYPE html>
<html>
<head>
	<title>Grocery</title>
	<style type="text/css">
		#groce {border:0px solid black;
				background-color:black;
			position:absolute;
			width:99%;
			height:11%;
			top:1%;
			left:0.6%;}		 
			 
	.groce { text-align:center;
			padding:1%;
			font-size:200%;
		  font-weight:bold;
		  margin:0px;
		  background-color:black;
		  color:white;}
	
	#logout {	border:0px solid #5B31BB;
				background-color:#5B31BB;
				position:absolute;
				width:10%;
				height:8%;
				top:13%;
				left:89.6%;
				}			
	
	.logout {	text-align:center;
				font-size:100%;
				background-color:#5B31BB;
				color:white;
				}
                                
                                
                                a:link{color:white;
			text-decoration:none;}	
			
	a:visited{color:white;
			text-decoration:none;}
			
	a:hover{color:white;
			text-decoration:none;}

	a:active{color:white;
			text-decoration:none;}
                                
	
	#home {	border:0px solid #5B31BB;
				background-color:#5B31BB;
				position:absolute;
				width:10%;
				height:8%;
				top:13%;
				left:79.2%;
				}			
	
	.home {	text-align:center;
				font-size:100%;
				background-color:#5B31BB;
				color:white;
				}
	
	#groceimg {
			 position:absolute;
			 
			 top:13%;
			 left:0.6%;}

	#tab {	position:absolute;
			 
			 top:13%;
			 left:25%;
		}	 
	
	#prod { position:absolute;
		width:20%;
		height:50%;
		top:60%;
		left:0.6%;
	      }
		  
			 
	</style>
</head>
<body>
<div id="groce">
<p class="groce">Grocery Store</p>
</div>

<div id="logout">
<p class="logout"><a href="process_logout.php">Logout</a></p>
</div>

<div id="home">
<p class="home"><a href="welcome.php">Home</a></p>
</div>

<div id="groceimg">
	
	<img src="grocery.jpg" height="200" />
	</a>
</div>

<div id="tab">
	<p class="tab">
	<table border="1" name="tab">
	<tr>
		<th>Prod_id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Available</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Soaps</td>
		<td>Rs.25</td>
		<td>Yes</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Shampoo</td>
		<td>Rs.55</td>
		<td>Yes</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Colddrink</td>
		<td>Rs.30</td>
		<td>Yes</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Chips</td>
		<td>Rs.10</td>
		<td>Yes</td>
	</tr>
        <tr>
		<td>5</td>
		<td>Toothbrush</td>
		<td>Rs.15</td>
		<td>Yes</td>
	</tr>
        <tr>
		<td>6</td>
		<td>Toothpaste</td>
		<td>Rs.18</td>
		<td>Yes</td>
	</tr>
        </table>
</p>	
</div>

    <form action="example.php" method="POST">
        <div id="prod">
            
            Product_Id_1 <input type="text" name="prod_id1" size="16"> <br/>
           Quantity <input type="text" name="quan1">
         
            <br/><br/>
            
            Product_Id_2 <input type="text" name="prod_id2" size="16"><br/>
            Quantity <input type="text" name="quan2">
            <br/><br/>
            Product_Id_3 <input type="text" name="prod_id3" size="16"><br/>
           Quantity <input type="text" name="quan3">
            <br/><br/>
            <input type="submit" name="go" value="GO !">
            <input type="text" name="shop" value="grocery">
            
        </div>
   </form>



</body>
</html>
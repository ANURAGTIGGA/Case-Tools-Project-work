<html>
    <head>
        <title>ConfirmOrder</title>
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
        <p class="conf">Confirm Order</p>
        <br/>
        <br/>
        <p class="order">You have ordered :</p>
        <hr/>
    
    </body>
</html>
        <?php
		
		
        $server = 'localhost';
        $username = 'root';
        $password = '';
        
        $db_name = 'online_shop';
        $tb_name = $_POST['shop'];
        
      
        
       if(mysql_connect($server, $username, $password)) 
       {
           //echo "connected<br>";
           
           if(mysql_select_db($db_name))
           {
               //echo 'Database selected';
               
              
$data = mysql_query("SELECT * FROM $tb_name WHERE prod_id='".$_POST['prod_id1']."'") 
 or die(mysql_error()); 

 
 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Product ID:</th> <td>".$info['prod_id'] . "</td> "; 
 Print "<th>Price:</th> <td>".$info['price'] . "</td> ";
 $tot1=$info['price'] * $_POST['quan1'];
 Print "<th>Tot:</th> <td>".$tot1. "</td> ";
 }
 Print "</table>";  

 
 $data = mysql_query("SELECT * FROM buhari WHERE prod_id='".$_POST['prod_id2']."'") 
 or die(mysql_error()); 


 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Product ID:</th> <td>".$info['prod_id'] . "</td> "; 
 Print "<th>Price:</th> <td>".$info['price'] . "</td> ";
 $tot2=$info['price'] * $_POST['quan2'];
 Print "<th>Tot:</th> <td>".$tot2. "</td> ";
 } 
 Print "</table>"; 
  
 
 
 $data = mysql_query("SELECT * FROM buhari WHERE prod_id='".$_POST['prod_id3']."'") 
 or die(mysql_error()); 


 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Product ID:</th> <td>".$info['prod_id'] . "</td> "; 
 Print "<th>Price:</th> <td>".$info['price'] . "</td> ";
 $tot3=$info['price'] * $_POST['quan3'];
 Print "<th>Tot:</th> <td>".$tot3. "</td> ";
  } 
 Print "</table>"; 
  
  
            }
       }
     $total= $tot1+$tot2+$tot3;
     echo '<br/>';
     echo 'Total payment at the time of delivery :';
     echo $total;
	   echo '<br/>';
           echo '<br/>';
           echo '<br/>';
           
        ?>

<html>
   
        <body>
            
                <a href="welcome.php">Go Home</a>
                </body>
    </html>
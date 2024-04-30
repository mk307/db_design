<html>
<head>
<title>Delete Record</title>
</head>
<body>
	<H3 align="center"> [ORGANIZATION NAME] </H3>
	<H3 align="center"> Delete Student's Record </H3>	

<HR>
<FORM action = "" method = "post">
Enter Student ID: <input type="text" name="search_id" size=10>&emsp;	
<input type="submit" name="discard" value="Delete the Record" size=10/> 
<HR>			
	
<?php   
if(isset($_POST["delete"]))
{
$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = XXXX)(PORT = XXXX) )(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = orcl) ) )";
$db_user = "xxxx";   
$db_pass = "xxxx";    
$con = oci_connect($db_user,$db_pass,$db_sid);    

if($con) 
	{echo "";} 

else 
	{die('Could not connect to Oracle: ');}
  	
	$btn = $_POST["button"]; 
	
			if($btn=="discard")
			
			$q="Delete from Student where Std_ID = ".$row['STD_ID'];
			$query_id = oci_parse($con, $q); 		
			$r = oci_execute($query_id); 
	
				if($r)
				{
					echo "Record of the Student" .$row['STD_ID']. "has been deleted";
				}
				else 
				{
					echo "Record not updated!<br>";
				}				
}
?>
</form>
</body>
</html>
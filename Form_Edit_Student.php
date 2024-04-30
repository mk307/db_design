<html>
<head>
<title>Edit Record</title>
</head>
<body>
	<H3 align="center"> [ORGANIZATION NAME] </H3> 
	<H3 align="center"> Edit Student's Record </H3>

<HR>
<FORM action = "" method = "post">
Enter Student ID: <input type="text" name="search_id" size=10>&emsp;	
<input type="submit" name="button" value="Search the Record" size=10/> 
<HR>			
</FORM>

<?php   
if(isset($_POST["edit"]))
{
$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = XXX)(PORT = XXXX) )(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = orcl) ) )";
$db_user = "xxxx";   
$db_pass = "xxxx";    
$con = oci_connect($db_user,$db_pass,$db_sid);    

if($con) 
	{echo "";} 

else 
	{die('Could not connect to Oracle: ');}
  	
	$btn = $_POST["button"]; 
	$id_input = $_POST["search_id"];
	
			if($btn=="Search the Record")
			{
				$q1="Select * from Student where std_id = ".$id_input. 
				$query_id1 = oci_parse($con, $q1); 		
				$r1 = oci_execute($query_id1);
			}
				while($row = oci_fetch_array($query_id1, OCI_ASSOC+OCI_RETURN_NULLS)) 
				{	
					echo "<br>";	  
								
					$class = $row['CLS_ID'];
					$section = $row['SCT_ID'];
					$group = $row['GRP_ID'];
										
					echo $class;
					echo $section;
					echo $group;
				} 
}				
?>

<B>Previous Record of the Student</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">Class ID:&emsp;<?php echo $class ?></td><P>				
				<td width="200" align="left">Section ID:&emsp;<?php echo $section ?></td><P>				
				<td width="200" align="left">Group ID:&emsp;<?php echo $group ?></td>
				</tr>
				</TABLE>				
<HR>
<B>Enter New Record of the Student</B><P>
<TABLE BORDER="0">	
			<td>
				<tr width="200" align="left">New Class ID:&emsp;&emsp;&emsp;&nbsp;<input type="text" name="newclass" size=10></tr><P>				
				<tr width="200" align="left">New Section ID:&emsp;&emsp;&nbsp;<input type="text" name="newsection" size=10></tr><P>				
				<tr width="200" align="left">New Group ID:&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="text" name="newgroup" size=10></tr><P>
				</td>
				</TABLE>
<input type="submit" name="update" value="Update the Record" size=10/>

<?php
if(isset($_POST["update"]))
{
$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = XXXX)(PORT = XXXX) )(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = orcl) ) )";
$db_user = "xxxx";   
$db_pass = "xxxx";    
$con = oci_connect($db_user,$db_pass,$db_sid); 
   
if($con) 
	{echo "";} 

else 
	{die('Could not connect to Oracle: ');}

	$btn = $_POST["update"];
	$id_input = $_POST["search_id"];
	$class_update = $_POST["newclass"];
	$section_update = $_POST["newsection"];
	$group_update = $_POST["newgroup"];
		
		if($btn=="Update the Record")
		{
			$q2="Update Student set CLS_ID = ".$class_update.", SCT_ID = ".$section_update.", GRP_ID = ".$group_update." where STD_ID = ".$id_input;
			$query_id2 = oci_parse($con, $q2); 		
			$r2 = oci_execute($query_id2);
			
				while($row = oci_fetch_array($query_id2))
				{
					echo "Record Updated!";
				}
		}
		else 
		{
			echo "Record not updated!<br>";
		}			
}	
?>
</BODY>
</HTML>

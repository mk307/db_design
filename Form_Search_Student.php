<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Student Search Result</title>
</head>
<body>
	<H3 align="center"> [ORGANIZATION NAME] </H3> 
	<H3 align="center"> Student Search Result </H3>

<TABLE BORDER="0">	
<tr>
<td width="1400" align="right"><form action="insertionform.php" method="post"><input type="submit" name="add" value="STUDENT ADMISSION FORM +" size=10/></form></td>
</tr>
<tr>
<td width="1400" align="right"><form action="staff_form.php" method="post"><input type="submit" name="add" value="STAFF ONLY FORM +" size=10/></form></td>
</tr>
</TABLE>
<HR>

<?php   
if(isset($_POST["search"]))
{
$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = XXXX)(PORT = XXXX) )(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = orcl) ) )";
$db_user = "xxxx";   
$db_pass = "xxxx";    
$con = oci_connect($db_user,$db_pass,$db_sid);    

if($con) 
	{echo "";} 

else 
	{die('Could not connect to Oracle: ');}
  	
	$filter = $_POST["std_attribute"];
	$search = $_POST["std_input"];
	
		if($filter=="ID")
		{	
			$q1="select std_id, std_name, cls_id, sct_id, grp_id from student where std_id = '".$search."'";
			
			$query_id1 = oci_parse($con, $q1);
        	$r1 = oci_execute($query_id1);
		}	
			while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];
				$section = $row['SCT_ID'];
				$group = $row['GRP_ID'];
				
			}		
		if($filter=="Name")
		{	
			$q2="select std_id, std_name, cls_id, sct_id, grp_id from student where std_name = '".$search."'";
			
			$query_id2 = oci_parse($con, $q2);
        	$r2 = oci_execute($query_id2);
		}	
			while($row = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];
				$section = $row['SCT_ID'];
				$group = $row['GRP_ID'];
			} 
		
		if($filter=="Class")
		{	
			$q3="select std_id, std_name, cls_id, sct_id, grp_id from student where cls_id = '".$search."'";
			
			$query_id3 = oci_parse($con, $q3);
        	$r3 = oci_execute($query_id3);
		}	
			while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];
				$section = $row['SCT_ID'];
				$group = $row['GRP_ID'];
			} 
			
		if($filter=="Section")
		{	
			$q4="select std_id, std_name, cls_id, sct_id, grp_id from student where sct_id = '".$search."'";
			
			$query_id4 = oci_parse($con, $q4);
        	$r4 = oci_execute($query_id4);
		}	
			while($row = oci_fetch_array($query_id4, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];
				$section = $row['SCT_ID'];
				$group = $row['GRP_ID'];
			} 
			
		if($filter=="Group")
		{	
			$q5="select std_id, std_name, cls_id, sct_id, grp_id from student where grp_id = '".$search."'";
			
			$query_id5 = oci_parse($con, $q5);
        	$r5 = oci_execute($query_id5);
		}
			while($row = oci_fetch_array($query_id5, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];
				$section = $row['SCT_ID'];
				$group = $row['GRP_ID'];
			} 
}
?>

<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo $id ?></td>				
				<td width="300" align="left">Name:&emsp;<?php echo $name ?></td>				
				<td width="250" align="left">Class:&emsp;<?php echo $class ?></td>				
				<td width="250" align="left">Section:&emsp;<?php echo $section ?></td>				
				<td width="250" align="left">Group:&emsp;<?php echo $group ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="edit"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="delete"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
</body>
</html>
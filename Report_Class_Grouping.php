<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Students  </title>
</head>
<body>
	<H3 align="center"> [Organization Name] </H3> 
	<H3 align="center"> Students Grouped By Class</H3>
<TABLE BORDER="0">	
<tr>
<td width="1400" align="right"><form action="insertionform.php" method="post"><input type="submit" name="add" value="STUDENT ADMISSION FORM +" size=10/></form></td>
</tr>
<tr>
<td width="1400" align="right"><form action="staff_form.php" method="post"><input type="submit" name="add" value="STAFF ONLY FORM +" size=10/></form></td>
</tr>
</TABLE>
<HR>
<form action="" method="post">
<input type="submit" name="button" value="SEARCH" size=10/>&emsp;<input type="text" name="std_input"/>&emsp;<select name="std_attribute"><P>
<option value= "ID">Student ID</option>
<option value= "Name">Student Name</option>
<option value= "Class">Class ID</option>
</select>
</form>
<HR>
<?php   
if(isset($_POST["button"]))
{
$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = XXXX)(PORT = XXXX) )(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = orcl) ) )";
$db_user = "xxxx";   
$db_pass = "xxxx";    
$con = oci_connect($db_user,$db_pass,$db_sid);    

if($con) 
	{echo "";} 

else 
	{die('Could not connect to Oracle: ');}
  				
			$q0="select std_id, std_name, cls_id from student group by std_id, std_name, cls_id having count (cls_id) > 0 order by cls_id";
			
			$query_id0 = oci_parse($con, $q0);
        	$r0 = oci_execute($query_id0);
			
			while($row = oci_fetch_array($query_id0, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$id = $row['STD_ID'];
				$name = $row['STD_NAME'];
				$class = $row['CLS_ID'];			
			}
			
				$filter = $_POST["std_attribute"];
				$search = $_POST["std_input"];
	
				if($filter=="ID")
				{	
					$q1="select std_id, std_name, cls_id from student where std_id = '".$search."'";
			
					$query_id1 = oci_parse($con, $q1);
					$r1 = oci_execute($query_id1);
				}	
					while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
					{	
						echo "<br>";	  
			
						$id = $row['STD_ID'];
						$name = $row['STD_NAME'];
						$class = $row['CLS_ID'];			
					}		
				if($filter=="Name")
				{	
					$q2="select std_id, std_name, cls_id  from student where std_name = '".$search."'";
			
					$query_id2 = oci_parse($con, $q2);
					$r2 = oci_execute($query_id2);
				}	
					while($row = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
					{	
						echo "<br>";	  
			
						$id = $row['STD_ID'];
						$name = $row['STD_NAME'];
						$class = $row['CLS_ID'];						
					} 		
				if($filter=="Class")
				{	
					$q3="select std_id, std_name, cls_id from student where cls_id = '".$search."'";
			
					$query_id3 = oci_parse($con, $q3);
					$r3 = oci_execute($query_id3);
				}	
					while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
					{	
						echo "<br>";	  
			
						$id = $row['STD_ID'];
						$name = $row['STD_NAME'];
						$class = $row['CLS_ID'];						
					} 				
}
?>
<TABLE BORDER="1">	
			<tr>
				<th>Class ID</th>
				<th>Student ID</th>
				<th>Student Name</th>
			</tr>	
			<tr>
				<td width="200" align="center"><?php echo $class ?></td>				
				<td width="200" align="center"><?php echo $id ?></td>							
				<td width="200" align="center"><?php echo $name ?></td>							
			</tr>
			</TABLE>
</body>
</html>	
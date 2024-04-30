<html>
<head>
<title> Class List </title>
</head>
<body>
	<H3 align="center"> [Organization Name] </H3> 
	<H3 align="center"> Complete Class List </H3>

<HR>
<form action="" method="post">
<input type="submit" name="button" value="Search By Class Title" size=10/>&emsp;<input type="text" name="class_title"/>
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
  						
			$q1="select cls_id, cls_title, cls_strength, girls_count, boys_count from class 
			group by cls_id, cls_title, cls_strength, girls_count, boys_count 
			having count (cls_id) > 0 
			order by cls_id";
			
			$query_id1 = oci_parse($con, $q1);
        	$r1 = oci_execute($query_id1);
			
			while($row = oci_fetch_array($query_id1, OCI_BOTH+OCI_RETURN_NULLS)) 
			{	
				echo "<br>";	  
			
				$cl_id = $row['CLS_ID'];
				$title = $row['CLS_ID'];
				$strength = $row['CLS_STRENGTH'];
				$girls = $row['GIRLS_COUNT'];
				$boys = $row['BOYS_COUNT'];
			}
			
				$cls_search = $_POST["class_title"];
				$btn = $_POST["button"];	
			
				if ($btn=="Enter Class Title")
				{	
					$q2="select cls_id, cls_title, cls_strength, girls_count, boys_count from class where cls_title = '".$cls_search."'";
					
					$query_id2 = oci_parse($con, $q2);
					$r2 = oci_execute($query_id2);
				}	
					while($row = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
					{	
						echo "<br>";	  
			
						$cl_id = $row['CLS_ID'];
						$title = $row['CLS_ID'];
						$strength = $row['CLS_STRENGTH'];
						$girls = $row['GIRLS_COUNT'];
						$boys = $row['BOYS_COUNT'];
					}
}
?>
<B>Student Count per Class and Gender:</B><P>
<TABLE BORDER="1">	
			<tr>
				<th>Class ID</th>
				<th>Class Title</th>
				<th>Total Strength</th>
				<th>Girls Count</th>
				<th>Boys Count</th>
			</tr>	
			<tr>
				<td width="200" align="center"><?php echo $cl_id ?></td>				
				<td width="200" align="center"><?php echo $title ?></td>							
				<td width="200" align="center"><?php echo $strength ?></td>							
				<td width="200" align="center"><?php echo $girls ?></td>		
				<td width="200" align="center"><?php echo $boys ?></td>
			</tr>
			</TABLE>
</body>
</html>	
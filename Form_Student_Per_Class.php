<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Students Per Class</title>
</head>
<body>
	<H3 align="center"> [ORGANIZATION NAME] </H3> 
	<H3 align="center"> STUDENTS PER CLASS FORM </H3>

<TABLE BORDER="0">	
<tr>
<td width="1400" align="right"><form action="insertionform.php" method="post"><input type="submit" name="add" value="STUDENT ADMISSION FORM +" size=10/></form></td>
</tr>
<tr>
<td width="1400" align="right"><form action="staff_form.php" method="post"><input type="submit" name="add" value="STAFF ONLY FORM +" size=10/></form></td>
</tr>
</TABLE>
<HR>
<form action="search_result.php" method="post">
<input type="submit" name="search" value="SEARCH" size=10/>&emsp;<input type="text" name="std_input"/>&emsp;<select name="std_attribute"><P>
<option value= "ID">Student ID</option>
<option value= "Name">Studnent Name</option>
<option value= "Class">Class ID</option>
<option value= "Section">Section ID</option>
<option value= "Group">Group ID</option>
</select>
</form>
<HR>

<B>Class One (100 total) | Section 01 (33 total):</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0001' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Faizan Khan' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '3' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0004' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Nida Khan' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '3' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0007' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Usama Naveed' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '4' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0012' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Uzma Zaheer' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '3' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0016' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Sobia Nasir' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '4' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<HR>
<B>Class Two (98 total) | Section 011 (33 total):</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0003' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Usman Khan' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '6' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0014' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Nasir Jamal' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '5' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<HR>
<B>Class Three (93 total) | Section 21 (30 total):</B><P>
<TABLE BORDER="0">
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0002' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Khadija Jamal' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '7' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0008' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Iqra Zaheer' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '7' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0009' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Kiran Ali' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '8' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0015' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Hamid Imran' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '8' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<HR>
<B>Class Four (101 total) | Section 41 (34 total):</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0010' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Sadia Naveed' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '8' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0018' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Hamza Mazhar' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '9' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<HR>
<B>Class Five (95 total) | Section 51 (31 total):</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0005' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Umer Ali' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '11' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0011' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Khalid Nasir' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '12' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'M' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0017' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Rabia Jamal' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '10' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<HR>
<B>Class Six (87 total) | Section 61 (27 total):</B><P>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0006' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Fiza Imran' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '14' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
<TABLE BORDER="0">	
			<tr>
				<td width="200" align="left">ID:&emsp;<?php echo '0013' ?></td>
				
				<td width="300" align="left">Name:&emsp;<?php echo 'Zoya Imran' ?></td>
				
				<td width="250" align="left">Age (yrs):&emsp;<?php echo '13' ?></td>
				
				<td width="250" align="left">Gender:&emsp;<?php echo 'F' ?></td>
				
				<td width="100" align="left"><form action="edit_record.php" method="post"><button class="btn"><i class="fa fa-pencil"></i></button></form></td>
				<td width="100" align="left"><form action="delete_record.php" method="post"><button class="btn"><i class="fa fa-trash"></i></button></form></td>				
			</tr>
			</TABLE>
</body>
</html>	
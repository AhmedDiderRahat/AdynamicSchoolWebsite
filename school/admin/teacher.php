<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; text-align:center">Teachers</h2> </br>

			<a href="teacher_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:20px;">
				<h3 style="margin:10px;color:white;">
						Add Teacher
				</h3>
			</button>
			</a></br>
		
			<div id="" style="margin-top:0px;text-align:center;">
		
				<?php if(isset($_REQUEST['action'])=="delete")
				{
					include("include/connection.php");
					$del_sql="delete  from teacher where te_id='$_REQUEST[id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green"><b>Teacher Succefully Removed</b></font>';
					echo $msg;
				} ?>

				<table align="center" border="0" bgcolor="white">
					<tr>
						<th width="200" height="60" align="center" > Name </th>
						<th width="150" height="60" align="center" > Designation </th>
						<th width="200" height="60" align="center" > Mobile </th>
						<th width="150" height="60" align="center" >Action </th>
					</tr>
				
					<?php
						include("include/connection.php");
						$sql="select * from teacher order by te_id asc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<tr>
							<td width="200" align="center"><?php echo $array['te_name']; ?></td>
							<td width="150" align="center"><?php echo $array['te_des']; ?></td>
							<td width="200" align="center"><?php echo $array['te_mobile']; ?></td>
							<td width="150" align="center"><a href="teacher.php?action=delete&id=<?php echo $array['te_id']; ?>" style="text-decoration:none">Remove</a> | <a href="teacher_edit.php?action=edit&te_id=<?php echo $array['te_id']; ?>" style="text-decoration:none">Edit</a></td>
						</tr>
					<?php
					}
					?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
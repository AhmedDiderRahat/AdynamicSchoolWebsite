<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; text-align:center">Academic Calendar</h2> </br>

			<a href="academic_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:20px;">
				<h3 style="margin:10px;color:white;">
						Add Event
				</h3>
			</button>
			</a></br>
		
			<div id="" style="margin-top:0px;text-align:center;">
		
				<?php if(isset($_REQUEST['action']) == "delete")
				{
					include("include/connection.php");
					$del_sql="delete  from academic where ac_id='$_REQUEST[ac_id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green"><b>Event Succefully Removed</b></font>';
					echo $msg;
				} ?>

				<table align="center" border="0" bgcolor="white">
					<tr>
						<th width="200" height="60" align="center" > Event </th>
						<th width="150" height="60" align="center" > Date </th>
						<th width="150" height="60" align="center" >Action </th>
					</tr>
				
					<?php
						include("include/connection.php");
						$sql="select * from academic order by ac_id desc";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<tr>
							<td width="200" align="center"><?php echo $array['ac_name']; ?></td>
							<td width="150" align="center"><?php echo $array['ac_date']; ?></td>
							<td width="150" align="center"><a href="academic.php?action=delete&ac_id=<?php echo $array['ac_id']; ?>" style="text-decoration:none">Remove</a> | <a href="academic_edit.php?action=edit&ac_id=<?php echo $array['ac_id']; ?>" style="text-decoration:none">Edit</a></td>
						</tr>
					<?php
					}
					?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
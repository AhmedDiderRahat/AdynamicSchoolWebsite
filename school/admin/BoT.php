<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; text-align:center">Board of Trusties</h2> </br>

			<a href="BoT_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:20px;">
				<h3 style="margin:10px;color:white;">
						Add Member
				</h3>
			</button>
			</a></br>
		
			<div id="" style="margin-top:0px;text-align:center;">
		
				<?php if(isset($_REQUEST['action'])=="delete")
				{
					include("include/connection.php");
					$del_sql="delete  from bot where bot_id='$_REQUEST[bot_id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green"><b>Member Succefully Removed</b></font>';
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
						$sql="select * from bot order by bot_id asc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<tr>
							<td width="200" align="center"><?php echo $array['bot_name']; ?></td>
							<td width="150" align="center"><?php echo $array['bot_des']; ?></td>
							<td width="200" align="center"><?php echo $array['bot_mobile']; ?></td>
							<td width="150" align="center"> <a href="BoT.php?action=delete&bot_id=<?php echo $array['bot_id']; ?>" style="text-decoration:none">Remove</a> | <a href="BoT_edit.php?action=edit&bot_id=<?php echo $array['bot_id']; ?>" style="text-decoration:none">Edit</a></td>
						 
						</tr>
					<?php
					}
					?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
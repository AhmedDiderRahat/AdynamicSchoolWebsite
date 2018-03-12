<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:05px; text-align:center">Notice Board or Achivements</h2> </br>

			<a href="na_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:05px;">
				<h3 style="margin:05px;color:white;">
						Add Notice or Achivements
				</h3>
			</button>
			</a></br>
		
			<div style="margin-top:10px; margin-left:70px;">
		
				<?php if(isset($_REQUEST['action'])=="delete")
				{
					include("include/connection.php");
					$del_sql="delete  from notice_achive where na_id='$_REQUEST[na_id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green" text-align=center><b>Data Succefully Removed</b></font>';
					echo $msg;
				} ?>

				<table  border="1" bgcolor="white">
					
			
							<th align="center" style="width: 450px; ">Topic</th>
							
							<th align="center" style="width: 130px; ">Types</th>
							
							<th align="center" style="width: 150px; ">Status</th>
			

					<?php
						include("include/connection.php");
						$sql="select * from notice_achive order by na_option desc";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<tr>
							<td style="width: 450px; padding-left:10px;"><?php echo $array['na_topic']; ?></td>
							
							<td align="center" style="width: 130px; "><?php echo $array['na_option']; ?></td>
							
							<td align="center" style="width: 150px; "><a href="notice_achivement.php?action=delete&na_id=<?php echo $array['na_id']; ?>" style="text-decoration:none">Remove</a> | <a href="na_edit.php?action=edit&na_id=<?php echo $array['na_id']; ?>" style="text-decoration:none">Edit</a></td>
						</tr>
					<?php
					}
					?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; text-align:center">Achivements</h2> </br>

			<a href="achivement_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:20px;">
				<h3 style="margin:10px;color:white;">
						Add Achivement
				</h3>
			</button>
			</a></br>
		
			<div style="margin-top:10px; margin-left:90px; ">
		
				<?php if(isset($_REQUEST['action'])=="delete")
				{
					include("include/connection.php");
					$del_sql="delete  from achive where id='$_REQUEST[id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green"><b>Data Succefully Removed</b></font>';
					echo $msg;
				} ?>

				<table  align="" border="1" bgcolor="white">
					
				
					<?php
						include("include/connection.php");
						$sql="select * from achive order by id asc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
						{
						?>	
							<tr>
								<td style="width: 350px;"><?php echo $array['topic']; ?></td>				
							
								<td align="center" style="width: 150px;"><a href="achivement.php?action=delete&id=<?php echo $array['id']; ?>" style="text-decoration:none">Remove</a> | <a href="achivement_edit.php?action=edit&id=<?php echo $array['id']; ?>" style="text-decoration:none">Edit</a></td>
							</tr>
						<?php
						}
						?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
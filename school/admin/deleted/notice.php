<?php
	include("../include/adminheader.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; text-align:center">Notice Board</h2> </br>

			<a href="notice_add.php" style="text-decoration:none;">
			<button type="button" width="200" style="border-radius:20px;background:black; margin-left:700px; margin-bottom:20px;">
				<h3 style="margin:10px;color:white;">
						Add Notice
				</h3>
			</button>
			</a></br>
		
			<div style="margin-top:10px; margin-left:70px;">
		
				<?php if(isset($_REQUEST['action'])=="delete")
				{
					include("include/connection.php");
					$del_sql="delete  from notice where id='$_REQUEST[id]'";
					mysql_query($del_sql);				   
				 	$msg='<font color="green"><b>Data Succefully Removed</b></font>';
					echo $msg;
				} ?>

				<table  border="1" bgcolor="white">
					
				
					<?php
						include("include/connection.php");
						$sql="select * from notice order by id asc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<tr>
							<td padding-left = "10"  width="250" align=""><?php echo $array['topic']; ?></td>
							
							
							<td width= "100" align="center"><a href="notice.php?action=delete&id=<?php echo $array['id']; ?>" style="text-decoration:none">Remove</a> | <a href="notice_edit.php?action=edit&id=<?php echo $array['id']; ?>" style="text-decoration:none">Edit</a></td>
						</tr>
					<?php
					}
					?>
				</table>
				</br></br>
			</div>
		
		</section>

	<?php include ("../include/adminfooter.php"); ?>
<?php

	include("../include/adminheader.php"); 		
?>	
		<section>


			<div style="text-align:center; margin-top:40px;"><h2>About</h2></div>

			<div style="height: 170px; width: 700px; border:0px solid red; margin-left:150px; margin-bottom:20px; margin-top: 20px;">



					<div  style="background:white; padding:10px;">
						
					
						<?php
							include("include/connection.php");
							$sql="select * from about where abt_id = 1";			
							$result=mysql_query($sql);
							$array = mysql_fetch_array($result); // _query(query)
							?>
							<?php echo $array['abt_topic']; ?>					
					</div>

				<div style=" height:18px; width:30px; background: white; margin-left:655px; margin-top:10px; padding:10px; font: bold 14px Tahoma; border-radius:4px;">
				<a href="home_edit.php?action=edit&abt_id=<?php echo $array['abt_id']; ?>" style="text-decoration:none">Edit</a>
					</div>

			</div>
		</section>


		<section>


			<div style="text-align:center; margin-top:0px;"><h2>Speech of Principle</h2></div>

			<div style="height: 190px; width: 700px; border:0px solid red; margin-left:150px; margin-bottom:20px; margin-top: 20px;">



					<div  style="background:white; padding:10px;">
						
					
							<?php
							include("include/connection.php");
							$sql="select * from about where abt_id = 2";			
							$result=mysql_query($sql);
							$array = mysql_fetch_array($result); // _query(query)
							?>
							<?php echo $array['abt_topic']; ?>						
					</div>

				<div style=" height:18px; width:30px; background: white; margin-left:655px; margin-top:10px; padding:10px; font: bold 14px Tahoma; border-radius:4px;">
				<a href="home_edit.php?action=edit&abt_id=<?php echo $array['abt_id']; ?>" style="text-decoration:none;">Edit</a>
					</div>

			</div>
		</section>
		

	<?php include ("../include/footer.php"); ?>
		
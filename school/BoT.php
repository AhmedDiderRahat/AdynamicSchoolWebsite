<?php
	include("include/header.php"); 		
?>	
			
		<section id="">
			<h2 style="margin-bottom:10px; margin-top:20px; text-align:center">Board of Trusties</h2> </br>

			
		
			<div style="margin-left:120px; border:0px solid green"> 


				<div>
					<div id="test_head">Name</div>
					<div id="test_head">Designation</div>
					<div id="test_head">Mobile</div>				
				</div>
				
			

				<div>
					<?php
						include("include/connection.php");
						$sql="select * from bot order by bot_id asc";			
						$result=mysql_query($sql);
						
						while($array=mysql_fetch_array($result))
						{ ?>	
							<div>
								<div id="test"><?php echo $array['bot_name']; ?></div>
								<div id="test"><?php echo $array['bot_des']; ?></div>
								<div id="test"><?php echo $array['bot_mobile']; ?></div>

								
							</div>

							<?php
						}?>

				</div>
				
			</div>

		
		</section>

	<?php include ("include/footer.php"); ?>
<?php
	include("include/header.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-bottom:10px; margin-top:20px; text-align:center">Teachers</h2> </br>
		
			<div style="margin-left:120px; border:0px solid green"> 				
			
				<div>
					<div id="test_head">Name</div>
					<div id="test_head">Designation</div>
					<div id="test_head">Mobile</div>				
				</div>

				<div>
					<?php
						include("include/connection.php");
						$sql="select * from teacher order by te_id asc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
						{?>		

						<div>
							<div id="test"><?php echo $array['te_name']; ?></div>
							<div id="test"><?php echo $array['te_des']; ?></div>
							<div id="test"><?php echo $array['te_mobile']; ?></div>						
						</div>
						<?php }?>
				</div>
			


			</div>
		
		</section>

	<?php include ("include/footer.php"); ?>
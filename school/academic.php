<?php
	include("include/header.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-top:30px; text-align:center ">Academic Calendar</h2> </br>

			<div style="margin-top:0px;text-align:center; margin-left:120px;">
				
					<div>
						<div id="test_head1" > Event </div>
						<div id="test_head1" > Date </div>
					
					</div>
				
					<div>
						<?php
							include("include/connection.php");
							$sql="select * from academic order by ac_id desc";			
							$result=mysql_query($sql);
							while($array=mysql_fetch_array($result))
							{
							?>	
							
								<div id="test1"><?php echo $array['ac_name']; ?></div>
								<div id="test1"><?php echo $array['ac_date']; ?></div>
								
							
							<?php
							}
							?>
					</div>
			</div>
		
		</section>
		
	<?php include ("include/footer.php"); ?>
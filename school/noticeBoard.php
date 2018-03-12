<?php
	include("include/header.php"); 		
?>	
			
		<section id="BoT_main">
			<h2 style="margin-top:20px; text-align:center">Notice Board</h2> </br>

			<div style="margin-top:10px; margin-left:75px;">
		
				
					<?php
						include("include/connection.php");
						$cnt=0;
						$sql="select * from notice_achive where na_option='notice' order by na_id desc ";			
						$result=mysql_query($sql);
						while($array=mysql_fetch_array($result))
					{
					?>	
						<div style="height:25px; margin-bottom:10px; width:820px; padding:10px; background:#82BEDE;">
							
							<p style="float: left; font: 15px Tahoma;"><?php echo ++$cnt; ?> </p>
					
							<p style="float: left; font: 15px Tahoma;"> <?php echo "."; ?>  &nbsp;</p>
							
							<p style="float: left; font: 15px Tahoma;"><?php echo $array['na_topic']; ?> </p>
							
							
						</div> 
									
					<?php
					}
					?>
				
				
			</div>
		
		</section>

	<?php include ("include/footer.php"); ?>
<?php
	include("include/header.php"); 	
	include("include/connection.php"); 	
?>	
		<section id="main_section">

				
					
					<div style="margin-top:10px;margin-left:34px;min-height:300px;width:890px;height:auto;">
					<?php 
						$sql="select * from results order by re_id desc ";
						$res=mysql_query($sql);
						while($arr=mysql_fetch_array($res))
						{
					?>
						<a href="result.php?kk=hh&re_id=<?php echo $arr['re_id'];?>">
						<div title="<?php echo $arr['re_title']; ?>" style="float:left;  height:350px;width:420px;overflow-y:scroll;margin:10px;background-color:#82BEDE; border-radius:5px;border: 2px solid black;">
							<img src="image/result/<?php echo $arr['file']; ?>" style="border: 2px solid white;margin-left:20px;margin-top:20px;" height="220" width="350" />
							<p style="color:black;margin-top:5px;padding:8px;text-align:justify;">
								<?php echo $arr['re_description']; ?>
							</p>
						</div>
						</a>
						<?php } ?>
					</div>
				
				<footer>
					<p></p>
				</footer>
			</article>
			
		
		</section>
		

	

	<?php include ("include/footer.php"); ?>

	

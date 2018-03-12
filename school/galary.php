<?php
	include("include/header.php"); 	
	include("include/connection.php"); 	
?>	
		<section id="main_section">

					<div style="margin: 10px 0px 10px 430px; border:0px solid black; height:50px; width:100px;">
						
						<h1>
							Gallery
						</h1>
							
					
					</div>

					<div >
						<?php
							if(isset($_REQUEST['kk']))
							{
								$sql="select * from gallery where id='$_REQUEST[id]' ";
								$res=mysql_query($sql);
								$arr=mysql_fetch_array($res);
								echo '<img src="image/gallery/'.$arr['image'].'" style="margin-left:110px;border:2px solid white;border-radius:10px 10px 0px 0px;margin-bottom:0px;" height="400" width="700" title="'.$arr['title'].'"/>';
								echo '<div style="height:100px;width:705px;margin-left:110px;border:0px solid black;border-radius: 0px 0px 0px 10px;margin-top:0px;text-align:justify;color:black;overflow-y:scroll; background-color:#82BEDE">'.' <p style="padding:10px;">'.$arr['description'].'</p></div>';
							}
						?>
					</div>
					
					<div style="margin-top:10px;margin-left:34px;min-height:300px;width:890px;height:auto;">
					<?php 
						$sql="select * from gallery order by id desc ";
						$res=mysql_query($sql);
						while($arr=mysql_fetch_array($res))
						{
					?>
						<a href="galary.php?kk=hh&id=<?php echo $arr['id'];?>">
						<div title="<?php echo $arr['title']; ?>" style="float:left;  height:200px;width:260px;overflow-y:scroll;margin:10px;background-color:#82BEDE; border-radius:5px;border: 2px solid black;">
							<img src="image/gallery/<?php echo $arr['image']; ?>" style="border: 2px solid white;margin-left:20px;margin-top:20px;" height="120" width="150" />
							<p style="color:black;margin-top:5px;padding:8px;text-align:justify;">
								<?php echo "[" .$arr['title'] . "] " . $arr['description']; ?>
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
<?php
	include("include/header.php"); 	
	//include("include/config.php"); 	
?>	
		<section id="main_section">

 			<article style="border-radius:10px;">
				<header>
					<hgroup>
						<h1>
							About:
						</h1>
					</hgroup>
				</header>

					<?php
							include("include/connection.php");
							$sql="select * from about where abt_id = 1";			
							$result=mysql_query($sql);
							$array = mysql_fetch_array($result); // _query(query)
							?>
							<p style="color:black;margin-top:5px; padding:8px;text-align:justify;">
								<?php echo $array['abt_topic']; ?>	
							</p>
							
			
					<p></p>		
				
				<footer>
					<p></p>
				</footer>
			</article>
			
			<article style="border-radius:10px;">
				<header>
					<hgroup>
						<h1></h1>
						<h2></h2>
					</hgroup>
				</header>
				
				<img src="image/2.jpg" alt="school" style="width:555px;height:310px;">
				
				<footer>
					
				</footer>
			</article>
		</section>
		

		
		<aside id="side_news">
			<h3>
			Speech of Principle: 
			</h3>		
					</br> 
					<?php
							include("include/connection.php");
							$sql="select * from about where abt_id = 2";			
							$result=mysql_query($sql);
							$array = mysql_fetch_array($result); // _query(query)
							?>
							<?php echo $array['abt_topic']; ?>	

			<p></p>
		</aside>

	<?php include ("include/footer.php"); ?>
		
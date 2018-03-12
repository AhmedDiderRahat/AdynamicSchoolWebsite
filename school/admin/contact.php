<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");
?>	


			<?php	
			include("include/connection.php");
				
				$list_query = mysql_query("SELECT * FROM contact where cnt_id=1");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['cnt_id'];		
					$cat_num =$run_list['cnt_number'];
					$cat_email = $run_list['email'];
					$cat_web = $run_list['website'];
					//$cat_page = $run_list['fb_page'];
				}
			?>
		
		<section id = "academic">

			<section style = "text-align:center; padding-top:10px; padding-bottom: 10px;">
				<h2>Address:</h2>
			</section>
			
			
			
			<section id="contact">
				<h4>Phone Number:</h4>
			</section>			
			<section id="contact_value">
				<p><?php echo $cat_num; ?></p>
			</section>

			<section id="contact">
				<h4>em@il:</h4> 
			</section>			
			<section id="contact_value">
				<p><?php echo $cat_email; ?></p>
			</section>

			<section id="contact">
				<h4>website:</h4>
			</section>			
			<section id="contact_value">
				<p><a href="index.php"><?php echo $cat_web; ?> </a> </p> 
			</section>				
				
		</section>
			</br>

		
	<?php include ("../include/adminfooter.php"); ?>
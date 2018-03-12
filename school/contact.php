<?php
	include("include/header.php"); 		
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
				<h4>Area:</h4>
			</section>
			
			<section id="contact_value">
				<p>Islampur, Majortila, Sylhet.</p>
			</section>
			
			<section id="contact">
				<h4>P/O:</h4>
			</section>
			
			<section id="contact_value">
				<p>Sylhet 3100</p>
			</section>

			<section id="contact">
				<h4>P/S:</h4>
			</section>
			<section id="contact_value">
				<p>Hazrat Shahporan(Rh.) Adminastrative Police Station.</p>
			</section>

			<section id="contact">
				<h4>Distict:</h4>
			</section>			
			<section id="contact_value">
				<p>Sylhet.</p>
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
				
				<!-- <h4 style="padding:3px;">
					East Shaplabug, Tilagor, Sylhet.
				</h4> -->
			</section>
			</br>

			<!-- <section id="address">
				<h2>Contact:</h2>
				<table>
					<tr>
						<th>
							Cell No.:
						</th>
						<td>
							01920-135759.
						</td>
					</tr>
					<tr>
						<th>
							Alternative No.:
						</th>
						<td>
							01822-095112.
						</td>
					</tr>
					<tr>
						<th>
							em@il:
						</th>
						<td>
							adrahat07@gmail.com.
						</td>
					</tr>
					<tr>
						<th>
							Skype:
						</th>
						<td>
							rahat07.
						</td>
					</tr>
					<tr>
						<th>
							Website:
						</th>
						<td>
							<a href="index.php">adrahat.com</a>
						</td>
					</tr>
				</table>

			</section> 
	
		</section>-->
		
		<!-- <aside id="side_news">
			<h4>Contact News:</h4>
			<p>Recently I use an alternative number. which is 01822-095112</p>
		</aside>
		<aside id="side_news">
			<h4>Facebook:</h4>
			<p>Hay, I am now in facebook. You can add me in your friend list. My facebook user name is "Ahmed Dider Rahat"</p>
		</aside>
		<aside id="side_news">
			<h4>Whats app:</h4>
			<p>From now I am using whats app. My whats app number is: 01920-135759</p>
		</aside> -->
		
		<footer id="the_footer">
		<marquee scrollamount=3 onMouseOver="this.stop();" onMouseOut="this.start();" >Supervised By-Al Mehdi Saadat Chowdhury... DevolpedBy: Ahmed Dider Rahat, Dept. of CSE, NEUB... </marquee>

			Copyright@ NEUB-CSE 2015
		</footer>
	</div>
	
</body>

</html>
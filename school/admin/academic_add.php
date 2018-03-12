<?php
	include("../include/adminheader.php"); 		
?>
	
	<section id = "add_bot">

		<section  style="text-align: center; margin-bottom: 30px; margin-top: 20px;"> <h2>Add New Event</h2> </section>

		<section id="bot_body">

			<?php		
				if(isset($_REQUEST['Add'])=="Add")
				{
					$t=0;
					if($_REQUEST['name']=="" || $_REQUEST['dat']=="" ||  $_REQUEST['name']=="")
					{
						$arr='<font color="red"><b>Fill up the data perfectly.</b></b></font>';
						echo $arr;
					}
					else
					{
						include("include/connection.php");
						$sql="select * from academic order by ac_id desc ";			
						$re=mysql_query($sql);
						while($array=mysql_fetch_array($re))
						{
							if($array['ac_name']==trim($_REQUEST['name']) && $array['ac_date']==trim($_REQUEST['dat']))
								$t=1;
						}
						
						if($t==1)
						{
							$arr='<font color="red"><b> Sorry this Event is already added.</b></font>';
							echo $arr;
						}
						else
						{	
							include("include/connection.php");
		        		}
			
							
						$sql="INSERT INTO academic (ac_name, ac_date)

						VALUES

						('$_POST[name]','$_POST[dat]')";
						
						if (!mysql_query($sql,$con))
						{
							die('Error: ' . mysql_error());
						}
						$arr='<font color="green"><b>Event Successfuly Added </b></font>';
						echo $arr;
					}
				}?>

				<form action="academic_add.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
					<font style="margin-left:0px;">Event: </font><input type="text" name="name" autocomplete="off" style="margin-left: 15px;" ></br></br>
					<font style="margin-left:0px;">Date: </font><input type="text" name="dat" autocomplete="off" style="margin-left: 22px;" ></br></br>
					<input type="submit" name="Add" value="Add" style="background:#404040; height:30px; width:60px; color:white;border-radius:02px;margin-left:175px;">
				</form>
		</section>
	</section>

	<?php include ("../include/adminfooter.php"); ?>
		
<?php
	include("../include/adminheader.php"); 		
?>
	
	<section id = "add_bot">

		<section  style="text-align: center; margin-bottom: 30px; margin-top: 20px;"> <h2>Add New Achivement </h2> </section>

		<section id="bot_body">

			<?php		
				if(isset($_REQUEST['Add'])=="Add")
				{
					$t=0;
					if(trim($_REQUEST['name']) == "")
					{
						$arr='<font color="red"><b>Fill up the form perfectly.</b></b></font>';
						echo $arr;
					}
					else
					{
						include("include/connection.php");
						$sql="select * from achive order by id asc ";			
						$re=mysql_query($sql);
						while($array=mysql_fetch_array($re))
						{
							if($array['topic']==trim($_REQUEST['name']) )
								$t=1;
						}
						
						if($t==1)
						{
							$arr='<font color="red"><b> Sorry this is already added.</b></font>';
							echo $arr;
						}
						else
						{	
							include("include/connection.php");
		        		}
						
						$k = trim($_POST['name']);
							
						$sql="INSERT INTO achive (topic)

						VALUES
						('$k')";
						
						if (!mysql_query($sql,$con))
						{
							die('Error: ' . mysql_error());
						}
						$arr='<font color="green"><b>Data Successfuly Added</b></font>';
						echo $arr;
					}
				}?>

				<form action="achivement_add.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
					<font style="margin-left:0px;"></font><textarea  name="name" autocomplete="off" style="height:150px; width:250px; margin-left: 10px;" ></textarea></br></br>		
					<input type="submit" name="Add" value="Add" style="background:#404040; height:30px; width:60px; color:white;border-radius:02px;margin-left:205px;">
				</form>
		</section>
	</section>

	<?php include ("../include/adminfooter.php"); ?>
		
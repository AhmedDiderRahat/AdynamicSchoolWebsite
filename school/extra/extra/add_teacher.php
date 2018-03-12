<?php
	include("../include/adminheader.php"); 		
?>
	
	<section id = "add_bot">

		<section  style="text-align: center; margin-bottom: 30px; margin-top: 20px;"> <h2>Add New Teacher </h2> </section>

		<section id="bot_body">

			<?php		
				if(isset($_REQUEST['Add'])=="Add")
				{
					$t=0;
					if($_REQUEST['name']=="" || $_REQUEST['des']=="" ||  $_REQUEST['mobile']=="" || $_REQUEST['name']=="")
					{
						$arr='<font color="red"><b>Fill up the form Perfectly...!!!</b></b></font>';
						echo $arr;
					}
					else
					{
						include("include/connection.php");
						$sql="select * from teacher order by id asc ";			
						$re=mysql_query($sql);
						while($array=mysql_fetch_array($re))
						{
							if($array['name']==trim($_REQUEST['name']) && $array['des']==trim($_REQUEST['des']))
								$t=1;
						}
						
						if($t==1)
						{
							$arr='<font color="red"><b> Sorry this data is already added.</b></font>';
							echo $arr;
						}
						else
						{	
							include("include/connection.php");
		        		}
			
							
						$sql="INSERT INTO teacher (name, des, mobile)
						VALUES
						('$_POST[name]','$_POST[des]','$_POST[mobile]')";
						
						if (!mysql_query($sql,$con))
						{
							die('Error: ' . mysql_error());
						}
						$arr='<font color="green"><b>Teacher Successfuly Added </b></font>';
						echo $arr;
					}
				}?>

				<form action="add_teacher.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
					<font style="margin-left:0px;">Name: </font><input type="text" name="name" autocomplete="off" style="margin-left: 35px;" ></br></br>
					<font style="margin-left:0px;">Designation: </font><input type="text" name="des" autocomplete="off" style="margin-left: 2px;" ></br></br>
					<font style="margin-left:0px;">Mobile: </font><input type="text" name="mobile" autocomplete="off" style="margin-left:30px;"></br></br>	
					<input type="submit" name="Add" value="Add" style="background:#404040; height:30px; width:60px; color:white;border-radius:02px;margin-left:175px;">
				</form>
		</section>
	</section>

	<?php include ("../include/adminfooter.php"); ?>
		
<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");

	if(isset($_REQUEST['te_id']))
	{
		$id = $_REQUEST['te_id'];
					//	
	}

	else
	{
		header('location:teacher.php');
	}
	
	if(isset($_POST['Update']))
	{

		$username=$_POST['Name'];
		$des = $_POST['des'];
		$mobile = $_POST['mobile'];
	
		
			if(empty($username))
			{
				echo "<p> Field can not Empty </p>";
			}
			else
			{
				mysql_query("UPDATE  `school`.`teacher` SET  `te_name` =  '$username', `te_des` =  '$des', `te_mobile` =  '$mobile' WHERE  `teacher`.`te_id` = '$id'");
				header('location:teacher.php');
			}
	}	
					
?>

	<div style="height:200px; width:320px; border: 0px solid red; margin-left:310px; padding:0px; margin-top:50px; margin-bottom:50px; background:white; padding-top:50px;">
		<form method='post'>				
		
			<?php	
				
				$list_query = mysql_query("SELECT * FROM teacher  WHERE te_id='$id'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['te_id'];		
					$cat_name =$run_list['te_name'];
					$cat_des = $run_list['te_des'];
					$cat_mobile = $run_list['te_mobile'];
				}
			?>
			<br\><br\>
			
	

				<p style='margin-left:40px;'>Name:
				<input type="text" name="Name" value="<?php echo $cat_name; ?>" style='width:170px; margin-left:35px; padding-left:5px;' /> </p> </br>
				
				<p style='margin-left:40px;'>Designation:
				<input type="text" name="des" value="<?php echo $cat_des;?>" style='width:170px; padding-left:5px;'/></p></br>
				
				<p style='margin-left:40px;'>Mobile:
				<input type="text" name="mobile" value="<?php echo $cat_mobile;?>" style='width:170px; margin-left:26px; padding-left:5px;'></p></br>
				
				<input type="hidden" name="id" value="<?php echo $cat_id ?>"  >				
				<input type="Submit" name="Update" value="update"  style=' height:30px; width: 60px; margin-left:238px;'/></br>	
					
		</form>
	</div>


<?php include ("../include/adminfooter.php"); ?>
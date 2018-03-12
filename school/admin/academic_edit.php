<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");

	if(isset($_REQUEST['ac_id']))
	{
		$id = $_REQUEST['ac_id'];

	}
	else
	{
		header('location:academic.php');
	}
	
	if(isset($_POST['Update']))
	{

		$username=$_POST['Name'];
		$dat = $_POST['dat'];
		
		//echo "his";
		//exit;
		
			if(empty($username))
			{
				echo "<p> Field can not Empty </p>";
			}
			else
			{

				mysql_query("UPDATE  `school`.`academic` SET  `ac_name` =  '$username', `ac_date` =  '$dat' WHERE  `academic`.`ac_id` = '$id'");

				header('location:academic.php');
			}
	}	
					
?>
	
	<div style="height:170px; width:300px; background:white; border: 0px solid red; margin-left:350px; margin-top:50px; margin-bottom:40px; padding-top:30px;">
		<form method='post'>				
		
			<?php	
				
				$list_query = mysql_query("SELECT * FROM academic  WHERE ac_id='$id'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['ac_id'];		
					$cat_name =$run_list['ac_name'];
					$cat_dat = $run_list['ac_date'];
				
				}
			?>
			
				<p style='margin-left:53px;'>Event:
				<input type="text" name="Name" value=" <?php echo $cat_name; ?>" style='width:120px; margin-left:0px; padding-left:2px;'/> </p> </br>
				<p style='margin-left:52px;'>Date:
				<input type="text" name="dat" value= "<?php echo $cat_dat;?>" style='width:120px; padding-left:5px; margin-left:5px;' /></p></br>	
				<input type="hidden" name="id" value="<?php echo $cat_id ?>" >				
				<input type="Submit" name="Update" value="update"   style=' height:30px; width: 60px; margin-left:165px;''/></br>				
		</form>
	</div>



<?php include ("../include/adminfooter.php"); ?>
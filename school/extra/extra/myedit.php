

<?php
include("../include/function.php");
include("../include/adminheader.php");
	include("include/connection.php");
	if(isset($_REQUEST['id']))
	
	{
		$id = $_REQUEST['id'];
				//
		
	}


	else
	{
		header('location:BoT.php');
	}
	
	if(isset($_POST['Update']))
	{

		$username=$_POST['Name'];
		$des = $_POST['des'];
		$mobile = $_POST['mobile'];
		//echo "his";
		//exit;
		
			if(empty($username))
			{
				echo "<p> Field can not Empty </p>";
			}
			else
			{
					//echo $id; exit;

				//mysql_query("UPDATE `categorise` SET `name`='$username' WHERE  `id`='$id'");
			//	mysql_query("UPDATE  `school`.`bot` SET  `name` =  '$username', '$' WHERE  `bot`.`id` = $id");
			
				mysql_query("UPDATE  `school`.`bot` SET  `name` =  '$username', `des` =  '$des', `mobile` =  '$mobile' WHERE  `bot`.`id` = '$id'");


				header('location:BoT.php');
			}
	}	
					
?>
	<form method='post'>				
		
			<?php	
				
				$list_query = mysql_query("SELECT * FROM bot  WHERE id='$id'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['id'];		
					$cat_name =$run_list['name'];
					$cat_des = $run_list['des'];
					$cat_mobile = $run_list['mobile'];
				}
			?>
			<br\><br\>
			
	

				<p style='margin-left:53px;'>Name:
				<input type="text" name="Name" value="<?php echo $cat_name; ?>" 
				
				<p style='margin-left:32px;'>Designation:
				<input type="text" name="des" value="<?php echo $cat_des;?>" style='width:100px; padding-left:5px;'></p></br>
				
				<p style='margin-left:73px;'>Mobile:
				<input type="text" name="mobile" value="<?php echo $cat_mobile;?>" style='width:100px; padding-left:5px;'></p></br>
				
				<input type="hidden" name="id" value="<?php echo $cat_id ?>"  >				
				<input type="Submit" name="Update" value="update"  style='margin-left:183px;'/></br>	
					




	</form>



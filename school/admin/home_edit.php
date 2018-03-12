<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");
	
	if(isset($_REQUEST['abt_id']))
	{
		$abt_id = $_REQUEST['abt_id'];
				
	}
	else
	{
		header('location: home.php');
	}
	
	if(isset($_POST['Update']))
	{
		$username= trim($_POST['abt_topic']);
	
		
		if(empty($username))
		{
			echo "<p> Field can not Empty </p>";
		}
		else
		{
			mysql_query("UPDATE `about` SET  abt_topic =  '$username'  WHERE  abt_id = '$abt_id'");
			header('location: home.php');
		}
	}	
					
?>
	<div style="text-align:center; margin-top: 20px;"><h2>Edit About</h2></div>

	<div style = "height:400px; width:800px; padding-left:260px; margin-top:40px;">
		<form method='post'>				
			<?php				
				$list_query = mysql_query("SELECT * FROM about WHERE abt_id='$_REQUEST[abt_id]'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['abt_id'];		
					$cat_name =$run_list['abt_topic'];
				}
			?>
			
			
			<form action="home_edit.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
				<textarea  name="abt_topic" style="height:200px; width:450px; padding:10px;"> <?php echo $cat_name; ?></textarea> </br>
					
				<input type="hidden" name="abt_id" value="<?php echo $cat_id ?>">				
				<input type="Submit" name="Update" value="update"  style='margin-left:430px;'/></br>	
			</form>		
		</form>
	</div>


<?php include ("../include/adminfooter.php"); ?>
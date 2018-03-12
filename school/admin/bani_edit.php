<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");
	
	if(isset($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
				
	}
	else
	{
		header('location: home.php');
	}
	
	if(isset($_POST['Update']))
	{
		$username= trim($_POST['topic']);
	
		
		if(empty($username))
		{
			echo "<p> Field can not Empty </p>";
		}
		else
		{
			mysql_query("UPDATE `bani` SET  topic =  '$username'  WHERE  id = '$id'");
			header('location: home.php');
		}
	}	
					
?>
	<div style="text-align:center; margin-top: 20px;"><h2>Edit Principle's Speech</h2></div>

	<div style = "height:400px; width:800px; padding-left:260px; margin-top:40px;">
		<form method='post'>				
			<?php				
				$list_query = mysql_query("SELECT * FROM bani WHERE id='$_REQUEST[id]'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['id'];		
					$cat_name =$run_list['topic'];
				}
			?>
			
			
			<form action="bani_edit.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
				<textarea  name="topic" style="height:200px; width:450px; padding:10px;"> <?php echo $cat_name; ?></textarea> </br>
					
				<input type="hidden" name="id" value="<?php echo $cat_id ?>">				
				<input type="Submit" name="Update" value="update"  style='margin-left:430px;'/></br>	
			</form>		
		</form>
	</div>


<?php include ("../include/adminfooter.php"); ?>
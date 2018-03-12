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
		header('location:notice.php');
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
			mysql_query("UPDATE `notice` SET  topic =  '$username'  WHERE  id = '$id'");
			header('location:notice.php');
		}
	}	
					
?>
	<div style="height:200px; width:320px; border: 0px solid red; margin-left:310px; padding:0px; margin-top:50px; margin-bottom:50px; background:white; padding-top:50px;">
		
		<form method='post'>				
		
			<?php	
				
				$list_query = mysql_query("SELECT * FROM notice WHERE id='$_REQUEST[id]'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['id'];		
					$cat_name =$run_list['topic'];
				}
			?>
			
			
			<form action="notice_edit.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:15px;text-align:left;" >
				<textarea  name="topic" style="height:120px; width:250px; margin-left: 35px;"> <?php echo $cat_name; ?></textarea>
					
				<input type="hidden" name="id" value="<?php echo $cat_id ?>">				
				<input type="Submit" name="Update" value="update"  style='margin-left:230px; margin-top:10px; height:25px; width: 60px;'/></br>	
			</form>		
		</form>

	</div>

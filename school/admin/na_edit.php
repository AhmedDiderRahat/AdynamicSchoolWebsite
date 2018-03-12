<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");
	
	if(isset($_REQUEST['action'])=="edit")
	{
		$id = $_REQUEST['na_id'];
				
	}
	else
	{
		header('location:notice_achivement.php');
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
			mysql_query("UPDATE notice_achive SET  na_topic ='$username', na_option='$_REQUEST[type]'  WHERE  na_id = '$id' ");
			 
			header('location:notice_achivement.php');
		}
	}	
					
?>
	<div style="height:230px; width:320px; border: 0px solid red; margin-left:310px; padding:0px; margin-top:40px; margin-bottom:50px; background:white; padding-top:30px;">
		
		<form method='post'>				
		
			<?php	
				
				$list_query = mysql_query("SELECT * FROM notice_achive WHERE na_id='$id'");	
				
				while($run_list = mysql_fetch_array($list_query))
				{
					$cat_id =$run_list['na_id'];		
					$cat_name =$run_list['na_topic'];
					$cat_option =$run_list['na_option'];
				}
			?>
			
			
			<form action="na_edit.php" ENCTYPE="MULTIPART/FORM-DATA" method="post" style="margin-top:5px;text-align:left;" >
				
					<p style='margin-left:38px;'> Topic:
						<select name="type" style='margin-left:8px; padding-left:10px; padding-top:1px; height:30px; width:125px;'>
							<?php if($cat_option=="achivement"){ ?>
								<option value="achivement">achivement</option>
								<option value="notice">notice</option>
							<?php } else{ ?>
							<option value="notice">notice</option>
								<option value="achivement">achivement</option>
							<?php } ?>
											
						</select>
					</p><br/>

				<textarea  name="topic" style="height:120px; width:250px; margin-left: 35px;"> <?php echo $cat_name; ?></textarea>
					
				<input type="hidden" name="id" value="<?php echo $cat_id ?>">				
				<input type="Submit" name="Update" value="update"  style='margin-left:230px; margin-top:05px; height:25px; width:60px;'/></br>	
			</form>		
		</form>

	</div>
<?php include ("../include/adminfooter.php"); ?>
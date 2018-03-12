<?php
include("../include/function.php");
include("../include/adminheader.php");
include("include/connection.php");
//require_once('auth.php');

  // print_r($_REQUEST);
  //echo "Hi"; exit;


        $sql="select * from bot where id='$_REQUEST[id]'";
        $result=mysql_query($sql);
        $array=mysql_fetch_array($result);

?>


<section>
	
	<h3><center>Edit Student</center></h3>
		
		<form style='padding-top:20px;' action="edit_BoT.php?id=<?php echo $_REQUEST['id']?>" method='post'>
<?php 
				if(isset($_post['submit']))
{	
			$name = $_post['name'];
			$des = $_post['des'];
			$mobile = $_post['mobile'];
  				
			redirect("hhh.php");


  				echo "Hi"; exit;
						
						$sql = mysql_query("UPDATE  `school`.`bot` SET `name` = '$name' `des` =  '$des', `mobile` = '$mobile' WHERE  `bot`.`id` ='$_REQUEST[id]'") ;
						 
						redirect("BoT.php");
						//location("BoT.php");
}

?>
								
								<p style='margin-left:53px;'>Name:
								<input type="text" name="name" value="<?php if($array['name']){echo $array['name'];}?>" style='padding-left:5px;width:100px;'></p></br>
								<p style='margin-left:32px;'>Designation:
								<input type="text" name="des" value="<?php if($array['des']){echo $array['des'];}?>" style='width:100px; padding-left:5px;'></p></br>
								<p style='margin-left:73px;'>Mobile:
								<input type="text" name="mobile" value="<?php if($array['mobile']){echo $array['mobile'];}?>" style='width:100px; padding-left:5px;'></p></br>
								
								<input type="submit" name="submit" value="submit"  dstyle='margin-left:183px;'/></br>		
								
		</form>		






</section>

<?php 
include("../include/adminfooter.php");
 ?>
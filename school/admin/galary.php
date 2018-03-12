<?php
	include("../include/adminheader.php"); 	 	
	include("include/connection.php"); 	
?>	
		<section id="main_section">

 			<div style="height:40px; width:200px;background:; color:black; margin-left:420px; margin-bottom:20px;">
 				<h1>
					Gallery
				</h1>
 			</div>					
				
			<div onclick="myfunction()" style="height:30px; width:100px; font: bold 14px Tahoma; color:white; border-radius:10px; margin-left:20px; padding-left:15px; padding-top:10px; background:black; margin-bottom:20px; "> add Picture</div>

					<?php 
						if(isset($_REQUEST['submit']))
						{
							function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
							{


									if($file['tmp_name'][$i]=="")
									{
											echo "Error!";
											return "";
									}
									if($file['tmp_name'][$i]!="")
									{
											$p=$file['name'][$i];
											$pos=strrpos($p,".");
											$ph=strtolower(substr($p,$pos+1,strlen($p)-$pos));
											$im_size =  round($file['size'][$i]/1024,2);

											if($im_size > $max_foto_size)
											   {
													echo "Image is Too Large";
													return;
											   }
											$photo_extention = explode(",",$photo_extention);
											if(!in_array($ph,$photo_extention ))
											   {
													echo "Upload Correct Image";

													return;
											   }
									}
											$ran=date(time());
											$c=$ran.rand(1,10000);
											$ran.=$c.".".$ph;



											if(isset($file['tmp_name'][$i]) && is_uploaded_file($file['tmp_name'][$i]))
											{
											
												$ff = $path."../image/".$folder_name."/".$ran;
												move_uploaded_file($file['tmp_name'][$i], $ff );
												chmod($ff, 0777);
											}
								   return  $ran;
							}
							$title=trim($_REQUEST['title']);
							$sq="select * from gallery where title='$title'";
							$re=mysql_query($sq);
							if(mysql_num_rows($re)<=0)
							{
							$description=trim($_REQUEST['description']);
							$file=$_FILES['photo'];
							$image_name=photo_upload($file,0,100000,"jpg,gif,png",'gallery',$path='');
							$sql="insert into gallery(title,description,image) values ('$title','$description','$image_name')";
							mysql_query($sql);
							echo '<p style="color:green;">Image successfully added</p>';
							}
						} 
						if(isset($_REQUEST['de']))
						{
							$sq="delete from gallery where id='$_REQUEST[id]'";
							mysql_query($sq);
							echo '<p style="color:red;">Image successfully deleted.</p>';
						}
						?>

					
				
						<script >
						function myfunction()
						{
							document.getElementById('demo').innerHTML='<form action="galary.php" method="post" enctype="multipart/form-data">&nbsp&nbsp&nbsp&nbsp&nbspTitle &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="title" ></br></br>&nbsp&nbsp&nbsp&nbsp&nbspDescription &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="description" ></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp Upload Picture &nbsp&nbsp&nbsp&nbsp : <input type="file" name="photo[0]" ></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="Submit"></form>';
						}
						</script>	
					
					

					<p id="demo"></p>
					<?php
						
						if(isset($_REQUEST['kk']))
						{
							$sql="select * from gallery where id='$_REQUEST[id]' ";
							$res=mysql_query($sql);
							$arr=mysql_fetch_array($res);
							echo '<img src="../image/gallery/'.$arr['image'].'" style="margin-left:230px;border:2px solid black;border-radius:10px 10px 0px 0px;margin-bottom:0px;" height="300" width="500" title="'.$arr['title'].'"/>';
							echo '<div style="height:100px;width:500px;border:2px solid black;border-radius: 0px 0px 0px 10px;margin-top:0px;margin-left:230px;text-align:justify;color:black;overflow-y:scroll;"><p style="padding:10px;">'.$arr['description'].'</p></div>';
						}
					?>
					<div style="margin-top:30px;margin-left:20px;min-height:300px;width:930px;height:auto; border: 0px solid red">
					<?php 
						$sql="select * from gallery order by id desc ";
						$res=mysql_query($sql);
						while($arr=mysql_fetch_array($res))
						{
					?>
						<a href="galary.php?kk=hh&id=<?php echo $arr['id'];?>">
						<div title="<?php echo $arr['title']; ?>" style="float:left;height:280px;width:300px;overflow-y:scroll;background-color:black;border-radius:5px;border: 2px solid white;">
							<a href="galary.php?de=act & id=<?php echo $arr['id']; ?>" style="color:white;padding-left:10px;">Delete</a> 
							<img src="../image/gallery/<?php echo $arr['image']; ?>" style="border: 2px solid white;margin-left:25px;margin-top:20px;" height="140" width="220" />
							<p style="color:white;margin-top:5px;padding:8px;text-align:justify;">
								<?php echo $arr['description']; ?>
							</p>
						</div>

						</a>

						<a></a>

					


						<?php } ?>
					</div>
				
				<footer>
					<p></p>
				</footer>
			</article>
			
		
		</section>
		

	

	<?php include ("../include/adminfooter.php"); ?>
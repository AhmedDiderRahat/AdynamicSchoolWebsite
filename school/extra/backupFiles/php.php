<?php include ("include/header.php"); ?>	
		<section id="main_section">
			
			<?php 
				$x=1;
				while ($x <= 05) {
					echo "Case: $x = Kuddus<br>";
					$x++;
				}
				
			?>	

			</br></br></br>

			<?php 
				$a = 10;
				$b = 3.1416;

				$sum = $a+$b;

				echo "Sum of $a & $b is $sum";

			?>	
			
			</br></br></br>
			<?php 
				//$i = 0;
				for ($i=1; $i < 6; $i++) 
				{ 
					if ($i%2 == 0) 
					{
						echo "Joy";
					}
					else
					{
						echo "Bangla";
					}
					echo "</br>";
				}
			?>	

			</br></br></br>
			<?php
				$cars = array("Volvo", "BMW", "Toyota");
				echo "The size of Array is: ";
				echo count($cars);
				echo "</br>";
				for ($j=0; $j < count($cars); $j++) 
				{ 
					echo "$cars[$j] </br>";
				}
			?>

			</br></br></br>
			<?php
				$num = array(12, 10, 8, 5, 7, 3, 15);
				echo "The size of Array is: ";
				echo count($num);
				echo "</br>";
				
				$sum = 0;
				for ($j=0; $j < count($num); $j++) 
				{ 
					$sum = $sum + $num[$j];
				}
				echo "$sum </br>";
			?>

			</br></br></br>
			<?php 
				$name = array
				(
				  	array("Rahat", 23, 24066),
				  	array("Munna", 23, 24059),
				  	array("Oli", 24, 20025),
				  	array("Bosit", 24, 20023)
				);
			?>

			<?php
				for ($row = 0; $row < 4; $row++) 
				{
					for ($col = 0; $col < 3; $col++) 
					{
					    //echo "<li>".$name[$row][$col]."</li>";
					    echo $name[$row][$col]; 
					    echo "\t". '&nbsp' . '&nbsp' . '&nbsp'; 
					}
					echo "</br>";
				}
			?>

		</section>
		

		<aside id="side_news">
			<h3>ACM ICPC Dhaka Site(online contest):</h3>
			</br>
			<p>This year ACM ICPC Dahaka site contest will organized by NSU. The Online contest will held on 29th octobar 2015.</p>
		</aside>
		
		

	<?php include ("include/footer.php"); ?>
	
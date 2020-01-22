<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

	//comment single line
	# comment with hash
	/*
		this is multiline comment
	*/

		//echo "hello world";

		/**/
		
		
		/*
		//addintion
		$a = 123;
		$b = 245;
		ECHO $a+$b;
		*/

		/*
			echo $string = "this is a string line";
			//variable cannot be start with number or special character and they are case sensitive

		*/

			/*
				//data type
				$a = 123;
				$b = 23.33;
				$string = "this is a php crash course </br>"; 
				var_dump(($string));
				var_dump(($a));
				var_dump(($b));
				$x = true;
				$y = false; 
				
				*/
			

			/*
				Array of PHP

				$fruits = array('apple', 'orange', 'grapes');
				$var1 = null //it means it is null
				var_dump(($fruits));

				

				$array = array(2,56,44,11,90);
				//sort($array);
				rsort($array);
				$length = count($array);
				for ($i=0; $i <$length ; $i++) { 
					echo $array[$i];
					echo "</br>";
				}

			*/	

				/*
					COUNT WORDS
					
					$str = "count how many string?";
					echo strlen($str);
					$str = "count how many string";
					$str2 = "five million";
					echo strlen($str), "</br>";
					echo str_word_count($str2), "</br>";
					echo strrev($str2); //right to left

				*/

	
				/*

				FIND A WORD INDEX WISE WHERE WORD START

					$str = "please go to maju library";
					echo strpos($str, 'maju');

				*/


				/*

				SEARCH AND REPLACE 
					$str = "please go to maju library";
					echo str_replace('maju', 'iqra', $str);

					//check more on php strings
				*/

				
					/*

					//CONSTANTS
					define("PI", 3.465);
					echo PI;					

					*/


					/*

					//OPERATORS

					echo "the value of 3 + 4 is ", 3+4, "</br>";
					echo "the value of 3 - 4 is ", 3-4, "</br>";
					echo "the value of 3 * 4 is ", 3*4, "</br>";
					echo "the value of 3 / 4 is ", 3/4, "</br>";
					echo "the value of 3 % 4 is ", 3%4, "</br>";
					echo "the value of 3 ** 4 is ", 3**4, "</br>";
	

					*/

					/**/

					/*

					//ASSIGNMENT OPERATOR

					$a = 4; 
					$a + 1;
					$a--;
					$a++;
					echo $a;

					*/


					/*

					//STATEMENT
				
					$time = date("H");
					if ($time < "20") {
						echo $time."is evening or afternoon", "</br>";
					}else{
						echo $time."is night", "</br>";
					}

					echo date_default_timezone_get();	


					*/

					/*
						//LOOPS


					$variable = 1;
					while ( $variable <= 5) {
						
						if($variable == 3)
						{
							
							$variable++;
							continue; //break will come out of the loop but continue is skip the line at 3
						}

						echo "the value of a variable is ".$variable."</br>";
						$variable++;

					}
		

					*/



					/*
					//FOR LOOPS
					
					for($i =1; $i<=6; $i++)
					{
						echo "the value of a variable is ".$i."</br>";
					}

					*/


					/*
						FUNCTIONS

						echo avaerage_numbers(422, 320);

						function avaerage_numbers($num1, $num2)
						{
							$average = ($num1 + $num2) / 2;
							return $average;
						}


					define("PI", 3.465);
					echo "The area of circle is ".area_of_circle(3.87);
					
					
					function area_of_circle($area)
					{
						 $result = PI * $area * $area;
						 return $result;
					}
						

					*/



					
	?>


</body>
</html>
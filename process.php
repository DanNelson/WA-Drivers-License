<html>
<body>
	<?php
	include('functions.php');
	error_reporting(E_ALL);
	ini_set('display_errors','On');

//Last Name = X
//First Initial = Y
//Middle Initial = Z
//Year of Birth = A
//Checksum = B
//Month of Birth = C
//Day of Birth = D
//Decode XXXXX Y Z AA B C D
//Test   SMITH A J 01 1 D K

	$input = $_POST['license'];
	$input = substr($input,0, 12);
	$input = trim($input," ");
	$input = strtolower($input);
	$lastName = substr($input,0,5);
	$firstInitial = substr($input,5,1);
	$middleInitial = substr($input,6,1);
	$yearOfBirthIn = substr($input,7,2);
	$yearOfBirth = 100 - $yearOfBirthIn;
	$yearOfBirth = "19".$yearOfBirth;
	$array = str_split($input);
	$checksumRead = substr($input,9,1);
	$checksum = 0;
	$monthOfBirth = substr($input,10,1);
	$monthOfBirthString = returnMothOfBirth($monthOfBirth);
	$dayOfBirth = substr($input,11,1);
	$dayOfBirthString = returndayOfMonthNumber($dayOfBirth);
	
	//Calculate checksum
	for($i=0; $i < sizeof($array); $i++){
		if(ctype_alpha($array[$i]) || $array[$i]=="*"){
			$array[$i] = returnChecksumNumber($array[$i]);
		}
	}
	
	//Add all numbers from checksum array in proper order
	for($i=0; $i < sizeof($array); $i++){
		if($i ==0){
			$checksum += $array[$i];
		}
		else if($i ==9){
		}
		else if($i ==10){
			$checksum -= $array[$i];
		}
		else if($i ==11){
			$checksum += $array[$i];
		}
		else if($i%2 == 0){
			$checksum += $array[$i];
		}
		else{
			$checksum -= $array[$i];
		}
	}	
	$checksum = ($checksum%10);
	
	echo "<b> The last name is: </b>";
	echo $lastName;
	echo "<br /> <b> The first initial is: </b>";
	echo $firstInitial;
	echo "<br /> <b> The middle initial is: </b>";
	echo $middleInitial;
	echo "<br /> <b> The year of birth is: </b>";
	echo $yearOfBirth;
	echo "<br /> <b> The month of birth is: </b>";
	echo $monthOfBirthString;
	echo "<br /> <b> The day of birth is: </b>";
	echo $dayOfBirthString;
	echo "<br /> <b> The checksum read from license is: </b>";
	echo $checksumRead;
	echo "<br /> <b> The calculated checksum is: </b>";
	echo $checksum;
	echo "<br /> <a href=\"http://localhost/PHPeclipse/WADriversLicense/home.html\" target=\"_self\" onclick=\"\">Rescan</a>";


	

	?>
</body>
</html>
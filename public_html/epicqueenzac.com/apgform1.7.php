<?php 
/*	
	apgForm 1.7
	By: Alvaro Prieto (apg88)
	E-Mail: webmaster@apg88.com
	Web site: http://www.apg88.com/index.php?page=apgForm
	
	
	Licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/legalcode
	http://creativecommons.org/licenses/by/2.5/ (Summary)
	You can modify the code all you want, make money with it, release newer versions, etc...  just leave my name, email, and web site URL on the it.
	
*/
		
	// Change this to the page you want the user to be redirected to after form is submitted (i.e. success.html and error.html)
	$array['filename'] = "form.xls";
	$success = "formulario3.php";

	//echo 'Current PHP version: ' . phpversion();	
	//$error = "error.html";
	
	// Change this to the character(s) you want to be placed instead of line breaks(new line, enter, etc)
	$lbChar = " ";	// default is a space, you may change it to whatever you want
	
	// Don't change anything below this line		
	
	// Determine if the form was sent through the GET methog or the POST method.
	if($_POST){
		$array = $_POST;
	} else if($_GET){			
		$array = $_GET;
	} else {
			die("You must Access this file through a form.");	// If someone accesses the file directly, it wont work :)
	}	

	//Check if the filename was sent through the form or not
	if(!$array['filename']){
		// if the filename wasnt sent through the form, it will become form.xls, you can change the default if you want.
		$array['filename'] = "form.xls";	//Set the file to save the information in
	
	} else {
		if(!(stristr($array['filename'],".xls"))){
			$array['filename'] = $array['filename'] . ".xls";
		}
	}
	
	// Define the tab and carriage return characters:
	$tab = "\t";	//chr(9);
	$cr = "\n";		//chr(13);
	
	if($array){
			// Make The Top row for the excel file and store it in the $header variable
			$keys = array_keys($array);
			foreach($keys as $key){
				if(strtolower($key) != 'filename' && strtolower($key) != 'title'){ 
					$header .= $key . $tab;
				}
			}
			$header .= $cr;
			
			//Make the line with the contents to write to the excel file.
			foreach($keys as $key){
				if(strtolower($key) != 'filename' && strtolower($key) != 'title'){ 

					$array[$key] = str_replace("\n",$lbChar,$array[$key]);

					//$array[$key] = preg_replace('/([\r\n])/e',"ord('$1')==10?'':''",$array[$key]);
					//$array[$key]  = preg_replace_callback('/([\r\n])/e', "ord('$1')==10?'':''" ,$array[$key]);



					$array[$key] = str_replace("\\","",$array[$key]);
					$array[$key] = str_replace($tab, "    ", $array[$key]);
					$data .= $array[$key] . $tab ;
				}
			}
			$data .= $cr;
			
			if (file_exists($array['filename'])) {
				$final_data = $data;		// If the file does exist, then only write the information the user sent
			} else {
				$final_data = $header . $data;		// If file does not exist, write the header(first line in excel with titles) to the file
			}
			// open the file and write to it
			
			$fp = fopen($array['filename'],"a"); // $fp is now the file pointer to file $array['filename']
			
			if($fp){
				
				fwrite($fp,$final_data);	//Write information to the file
				fclose($fp);		// Close the file
				// Success
				header("Location: $success");
			} else {
				// Error
				header("Location: $error");
			}
	}
	
?>

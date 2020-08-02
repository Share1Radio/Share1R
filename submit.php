<?php

        $data_file = fopen(data.txt,"w");
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
        $text_to_write = $firstName,"",$lastName;

fwrite($data_file,text_to_write);
fclose(data_file);

	
?>

<?php	
	$fp = fopen('query.txt', 'a');
	$name =$_POST["name"];
	$query =$_POST["message"];
	$res = str_replace(" ","",$name);
	$res1 = str_replace(" ","",$query);
	if(strcmp($res,"")!=0)
	{
		if(strcmp($res,"")!=0)
		{
			fwrite($fp,$query." by ".$name."\r\n"); 	
			header('Location: part4.html');
		}			
	}
	fclose($fp);  			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Random youtube Video Generator</title>
</head>
<body>
<?php
$url = array("1","2","3","4","5","6","7","8","9","0","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D",
	"F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
	"-","_");
$id = "";
for ($i=0; $i < 11; $i++) { 
	$id .= $url[rand(0,count($url)-1)];
}
?>


<iframe 
src="https://www.youtube.com/embed/<?php echo"$id";?>?autoplay=1" width="1500" height="315">
</iframe>

<form action="https://still-savannah-89785.herokuapp.com/" action="post">
<input type= "submit" name="Refresh" value="Next Video" width="20px"></input>
</form>


</body>
</html>
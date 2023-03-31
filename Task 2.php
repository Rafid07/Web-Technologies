<?php
$en=""; $em="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if(empty($_POST['name']))
    {
        $en="";
        echo $en;
    }
    else
        $en= $_POST['name'];

    if(empty($_POST['email']))
    {
        $em="";
        echo $em;
    }
    else
        $em= $_POST['email'];

    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{echo "The file ". basename($_FILES["fileToUpload"]["name"])." has been uploaded."; 
}
else{echo "Can't upload your file !"; }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" action="upload.php" method="post" enctype="multipart/form-data">
		
		<fieldset>
		<legend style="font-size: 30px;">Reg</legend>
		Name: <input type="text" name="name" placeholder="Enter Your Name"><?php echo $en?><br>
		<hr>
        Email: <input type="email" name="email" placeholder="Enter Your Email"><?php echo $em?><br>
        <hr>
        Password: <input type="Password" name="pass" placeholder="Enter Your Password"><br>
        <hr> 

        Your Image: 
        <input type="file" name="fileToUpload" id="fileToUpload"> 
        <hr>
        <button>Submit</button>

</fieldset>
</form>
</body>
</html>
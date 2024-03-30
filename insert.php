<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>     
   <form action="" method="POST"> 
    nom<input type="text" name ="nom"><br><br>
    secondname<input type="text" name="secondname" id=""><br><br>

    <input type="submit" value="submit" value="submit"><br><br>
</form>
<?php
include 'conn.php';
if(isset($_POST['submit'])){
$a=$_POST['nom'];
$b=$_POST['secondname'];
$sql= mysqli_query($conn,"INSERT INTO nurses( `nom`, `secondname`) VALUES (NULL,'$a','$b')");
if($sql==true){
    echo "record inserted";
}
else{
    echo "record not inserted";
}
}
?>
</body>
</html>
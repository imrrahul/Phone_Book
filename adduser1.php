<html>
<head>
  <style type="text/css">
h2{
  color:green;
  text-align: center;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 70%;
}

.container {
    padding: 16px;
}
.submit{

  background-color:  #4CAF50;
  width:25%;
  margin-left: 450px;
}
  </style>
</head>
<body>
  <h2>Phone Book</h2>
  <div class="imgcontainer">
  <img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="SearchPage_Lab1.php" >
  <h2>Congratulations!!! You are now a registered user</h2>
  <button style="margin-left:495px;width:15%;height:35px;color:white;background-color:red" class="btn" type="submit" name="home">Return Home</button>
  </form>

</body>
</html>

<?php
if(isset($_POST['add'])){
$db = pg_connect("host=localhost port=5432 dbname=phonebook user=postgres password=root");
/*if(!$db){
  echo pg_last_error($db);
}else {
  echo "hi";
}
*/

$phone=$_POST["phonenumber"];
$name=$_POST["name"];
$mail=$_POST["mail"];
$gender=$_POST["gender"];
$roll=$_POST["roll"];
$dob=$_POST["dob"];
$country=$_POST["country"];
$state=$_POST["state"];
$city=$_POST["city"];
$date=$_POST["date"];


/*
echo "</br>$phone</br></br>";
echo "</br>$name </br >";
echo "</br>$mail</br></br>";
echo "</br>$gender</br></br>";
echo "</br>$roll</br></br>";
echo "</br>$dob</br></br>";
echo "</br>$country</br></br>";
echo "</br>$state</br></br>";
echo "</br>$city</br></br>";*/
$res =pg_query($db,"insert into phonedirectory values($phone,'$name','$mail','$gender',$roll,'$dob','$country','$state','$city','$date')");

if(!$res){
echo pg_last_error($db);
}
else{
  echo "";
}
/*
$sql =<<<EOF
SELECT * from book;
EOF;
$ret = pg_query($db, $sql);
if(!$ret){
echo pg_last_error($db);
exit;
}
while($row = pg_fetch_row($ret)){
  echo "name = ". $row[0] . "\n";
echo "phonenumber = ". $row[1] ."\n";

}*/


pg_close($db);
}
?>
<html>
<head>
</head>
<body>
  <hr>
  <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
 </body>
</html>

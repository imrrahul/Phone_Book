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
    <h2>Congratulations!!! Your Record has been Deleted!!</h2>
    <button style="margin-left:495px;width:15%;height:35px;color:white;background-color:red" class="btn" type="submit" name="home">Return Home</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['drop'])){
$db = pg_connect("host=localhost port=5432 dbname=phonebook user=postgres password=root");
/*if(!$db){
  echo pg_last_error($db);
}else {
  echo "hi";
}
*/


$sql =<<<EOF
DELETE from phonedirectory where phone=$phone;
EOF;
$ret = pg_query($db, $sql);
if(!$ret){
echo pg_last_error($db);
exit;
} else {
echo "\n";
}

pg_close($db);




pg_close($db);
}
?>
<html>
<head>
  <style type="text/css">
h3{
  color:blue;
  margin-left: 465px;
}
  </style>
</head>
<body>
<form action="adduser.php" >
  <h3>To Add New Data Click below!!!</h3>
  <button style="margin-left:495px;width:15%;height:35px;color:white;background-color:red" class="btn" type="submit" name="add">Add Details</button>
  </form>
  <hr>
  <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
</body>
</html>

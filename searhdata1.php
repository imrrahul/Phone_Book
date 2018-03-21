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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border-spacing: 5px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;
    border: 1px solid black;
      border-collapse: collapse;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
  </style>
</head>
<body>  <h2>Phone Book</h2>
  <div class="imgcontainer">
  <img src="/phn.png" alt="Phone " class="avatar" ></div>
</body>
</html>


<?php
if(isset($_POST['search'])){
$db = pg_connect("host=localhost port=5432 dbname=phonebook user=postgres password=root");
/*if(!$db){
  echo pg_last_error($db);
}else {
  echo "hi";
}*/

echo "hi";
$name=$_POST["name"];


$sql =<<<EOF
SELECT * from phonedirectory where name=$name;
EOF;
$ret = pg_query($db, $sql);
if(!$ret){
echo pg_last_error($db);
exit;
}
while($row = pg_fetch_row($ret)){
echo  "<caption><h3>Phone-Book</h3></caption>";
echo "<table>";
     echo "<tr>";
     echo "<th>PHONE-NUMBER</th>";
     echo "<th>NAME</th>";
     echo "<th>E-MAIL</th>";
     echo "<th>GENDER</th>";
     echo "<th>ROLL</th>";
     echo "<th>DOB</th>";
     echo "<th>COUNTRY</th>";
     echo "<th>STATE</th>";
     echo "<th>CITY</th>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>".$row[0]."</td>";
     echo "<td>".$row[1]."</td>";
     echo "<td>".$row[2]."</td>";
     echo "<td>".$row[3]."</td>";
     echo "<td>".$row[4]."</td>";
     echo "<td>".$row[5]."</td>";
     echo "<td>".$row[6]."</td>";
     echo "<td>".$row[7]."</td>";
     echo "<td>".$row[8]."</td>";
     echo "</tr>";
     echo "</table>";
}


pg_close($db);
}
?>

<html>
<head>
  <style type="text/css">
h3{
  text-align: center;
  color:blue;
}
  </style>
</head>
<body>

<form action="dropinfo.php" method="POST">
  <h2>To Delete/Drop the Phone-Book data Click on below!!!!</h2>
<button style="margin-left:495px;color:white;background-color:red;width:15%;height:35px" type="submit" name="drop">Drop Data</button>
</form>

</br></br>
<form action="updateinfo.php" method="POST">
<h3>To Update the Phone-Book data Click on below!!!!</h3>
<button style="margin-left:495px;color:white;background-color:green;width:15%;height:35px" type="submit" name="drop">Update Data</button>
</form>
<form action="SearchPage_Lab1.php" >

  <button style="width:15%;height:35px;color:white;background-color:black" class="btn" type="submit" name="home">Return Home</button>
  </form>
  <hr>
  <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
 </body>
</html>

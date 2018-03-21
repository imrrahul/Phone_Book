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
<body>  <h2>Date Calculation (On 01/01/2000)</h2>
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

$phone=$_POST["phonenumber"];


$sql =<<<EOF
select AGE(timestamp '2000-01-01',timestamp '1998-12-30') from phonedirectory where phone=$phone;
EOF;
$ret = pg_query($db, $sql);
if(!$ret){
echo pg_last_error($db);
exit;
}
echo  "<caption><h3>AGE-CALCULATIONS</h3></caption>";
echo "<table>";
     echo "<tr>";
     echo "<th>AGE</th>";

     echo "</tr>";
while($row = pg_fetch_row($ret)){

     echo "<tr>";
     echo "<td>".$row[0]."</td>";

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

</br></br>
<form action="date.php" >

  <button style="width:15%;height:35px;margin-left:465px;color:white;background-color:black" class="btn" type="submit" name="home">Return Home</button>
</form> </br></br>

  <hr>
  <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
 </body>
</html>

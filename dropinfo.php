<!--Phone Book Assignment Lab-1 -->

<html>
<head>
<style type="text/css">
h2{
  color: blue;
  text-align: center;

}.imgcontainer {
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
p2{
  color:white;
  font-size: 15px;
}.add{
  background-color:  #008000;
}

</style>


<title> Phone-Directory</title>
</head>
<body>  <h2>Phone Book (Drop Info.)</h2>
  <div class="imgcontainer">
  <img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="drop.php" method="POST">
  <div class="container">
<p3 style="color:black" ><b>Phone Number<p4>*</p4></b></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your Registered Mobile Number (To be Droped)" class="phn" name="phonenumber" required="true"></br></br>
  <button style="width:30%;height:45px;margin-left:435px" type="submit" class="submit" name="drop"><p2>Drop/Delete</p2></button>

</div>
</form>
<?php
include "include/drop.php";
 ?>

   <form action="SearchPage_Lab1.php" >

     <button style="margin-left:545px;width:15%;height:35px;color:white;background-color:red" class="btn" type="submit" name="home">Return Home</button>
     </form>
     <hr>
     <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
</body>
</html>

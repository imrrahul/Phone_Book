<!--Phone Book Assignment Lab-1 -->

<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style type="text/css">
h2{
  color: blue;
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
p2{
  color:white;
  font-size: 15px;
}.add{
  background-color:  #008000;
}
p4{
  color: red;
}



span.psw {
    float: right;
    padding-top: 10px;
    font-size: 25px;

}






</style>


<title>Phn-Dir (AGE CALCULATIONS)</title>
</head>
<body>
<h2>Date Calculation (In No. of Weeks)</h2>
<div class="imgcontainer">
<img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="weeks.php" method="POST">
  <div class="container">
<p3 style="color:black" ><b>Phone Number<p4>*</p4></b></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your Registered Mobile Number" class="phn" name="phonenumber" required="true"></br></br>


  <button style="width:30%;height:45px;margin-left:435px" type="submit" class="submit" name="search"><p2>Search</p2></button>

</div>

</br></br></br>
<?php
include "include/weeks.php";
 ?>






<hr>
<p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>


</body>
</html>

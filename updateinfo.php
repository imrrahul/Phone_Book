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
p4{
  color:red;
}
p5{
  color:green;
}

</style>


<title> Phone-Directory </title>
</head>
<body>
  <h2>Phone Book (Update Phone No. Only)</h2>
  <div class="imgcontainer">
  <img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="update.php" method="POST">
  <div class="container">
<p3 style="color:black" ><b>Phone Number<p4>*</p4>(<p5>Old</p5>)</b></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your Old Registered Mobile Number" class="phn" name="phonenumber" required="true"></br></br>
</br></br>
<p3 style="color:black" ><b>Phone Number <p4>*</p4>(<p5>New</p5>)</b></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your New Mobile Number to Update" class="phn" name="phonenumber1" required="true"></br></br>
  <button style="width:30%;height:45px;margin-left:435px" type="submit" class="submit" name="update"><p2>Update</p2></button>

</div>
</form>
<?php
include "include/update.php";
 ?>
</br></br><button style="width:100%;height:35px;margin-left:00px" type="submit" class="add" name="add" onclick="window.location.href='adduser.php'" ><p2>Add To Directory</p2></button>
</br></br>
<form action="SearchPage_Lab1.php" >

  <button style="margin-left:535px;width:15%;height:35px;color:white;background-color:black" class="btn" type="submit" name="home">Return Home</button>
  </form>
  <hr>
  <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
 </body>
</html>

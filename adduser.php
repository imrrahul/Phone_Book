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
}p4{
  color: red;
}
.home{
background-color:red;
}

</style>


<title> Phone-Directory</title>
</head>
<body>  <h2>Phone Book</h2>
  <div class="imgcontainer">
  <img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="adduser1.php" method="POST">
  <div class="container">
<p3 style="color:black"><b>Phone Number</b><p4>*</p4></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your Phone Number" class="phn" name="phonenumber" required="true"></br></br>
  <p3 style="color:black"><b>Name</b><p4>*</p4></p3>
    <input style="width:100%;height:35px" type="text" placeholder="Enter Your Name" class="name" name="name" required="true"></br></br>
    <p3 style="color:black"><b>E-Mail Id.</b><p4>*</p4></p3>
      <input style="width:100%;height:35px" type="text" placeholder="Enter Mail-id" class="mail" name="mail" required="true"></br></br>
      <p3 style="color:black"><b>Gender</b><p4>*</p4></p3>
<input style="width:100%;height:35px" type="text"  list="gender"  placeholder="Enter Your Gender (e.g.M/F)" class="gender" name="gender" required="true"></br></br>
      <p3 style="color:black"><b>Enrollment Id.</b><p4>*</p4></p3>

        <input style="width:100%;height:35px" type="text" placeholder="Enter Your Enrollment Id." class="roll" name="roll" required="true"></br></br>

<p3 style="color:black"><b>DOB</b><p4>*</p4></p3>

        <input style="width:100%;height:35px" type="text" placeholder="Enter Your DOB(yyyy-mm-dd)" class="dob" name="dob" required="true"></br></br>
        <p3 style="color:black"><b>Country</b><p4>*</p4></p3>
         <input style="width:100%;height:35px" type="text" placeholder="Enter Your Country" class="country" name="country" required="true"></br></br>
<p3 style="color:black"><b>State</b><p4>*</p4></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your State." class="state" name="state" required="true"></br></br>
<p3 style="color:black"><b>City</b><p4>*</p4></p3>
<input style="width:100%;height:35px" type="text" placeholder="Enter Your City." class="city" name="city" required="true"></br></br>
<p3 style="color:black"><b>Date</b><p4>*</p4></p3>
<input style="width:100%;height:35px" type="text" placeholder="Enter Your Date (in YYYY-MM-DD hh:mm:ss)." class="date" name="date" required="true"></br></br>





  <button style="width:30%;height:45px;margin-left:435px" type="submit" class="add" name="add"><p2>Add To Directory</p2></button>
<?php
include "include/adduser1.php"

 ?>
</div>
</form>
<form action="SearchPage_Lab1.php">
<button style="width:10%;height:45px;margin-left:575px" type="submit" class="home" name="home"><p2>Return To Home</p2></button>
</form>
<hr>
<p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
</body>
</html>

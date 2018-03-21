<!--Phone Book Assignment Lab-1 -->

<html>
<head>

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

.submit{

  background-color:  #4CAF50;
  width:25%;
  margin-left: 450px;
}
p2{
  color:white;
  font-size: 15px;
}




</style>


<title>Phone Book</title>
</head>
<body>
<h2>Date Calculation</h2>
<div class="imgcontainer">
<img src="/phn.png" alt="Phone " class="avatar" ></div>
<form action="datedisplay.php" method="POST">
  <div class="container">
<p3 style="color:black" ><b>Phone Number<p4>*</p4></b></p3>
  <input style="width:100%;height:35px" type="text" placeholder="Enter Your Registered Mobile Number" class="phn" name="phonenumber" required="true"></br></br>


  <button style="width:30%;height:45px;margin-left:435px" type="submit" class="submit" name="search"><p2>Search (in YY:MM:DD)</p2></button>

</div>
</form>
</br></br></br>






<form action="datebydaysform.php" >
<h3 style="text-align:center">Want to Display Your DOB (No. of Days) Click Below!!!</h3>
  <button style="width:15%;height:35px;margin-left:495px;color:white;background-color:black" class="btn" type="submit" name="home">Age (in days)</button>
  </form>
</br></br>
  <form action="weeksform.php" >
  <h3 style="text-align:center">Want to Display Your DOB (No. of Weeks) Click Below!!!</h3>
    <button style="width:15%;height:35px;margin-left:495px;color:white;background-color:black" class="btn" type="submit" name="home">Age (In weeks)</button>
    </form>

  </br></br>
    <form action="firstjanform.php" >
    <h3 style="text-align:center">Want to Display how old You are on (01-01-2000) Click Below!!!</h3>
      <button style="width:15%;height:35px;margin-left:495px;color:white;background-color:black" class="btn" type="submit" name="home">How Old(On 01-01-2000)</button>
      </form>
      <form action="SearchPage_Lab1.php">
      <button style="width:10%;height:45px;margin-left:505px;background-color:red" type="submit" class="home" name="home"><p2>Return To Home</p2></button>
      </form>
      <hr>
      <p6>This Website is Developed by <a href="https://www.facebook.com/rahulsinghranjann"><b>Rahul Ranjan</b></p6>
      </body>


</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>College Details</title>
    <link rel="stylesheet" href="school.css">
  </head>
  <body class="body1">
    <header>
      <div>
        <img src="img\emitra.png" alt="">
        <h1 class="portal">College Payment Portal</h1>
      </div>
    </header>
    <section>
      <div class="box">
        <h1>Government College</h1>
        <h3><u>College Details</u></h3>
        <form class="form" action="" method="post">
          <div class="state">
            <label for="state">State:</label>
            <input type="text" name="state" value="Rajasthan" readonly>
          </div>
          <div class="city">
            <label for="city">City:</label>
            <select class="city" name="city">
              <option value="city" selected disabled hidden="">Select Your City</option>
              <option value="Ajmer">Ajmer</option>
              <option value="Banswara">Banswara</option>
              <option value="Barmer">Barmer</option>
              <option value="Barmer Rail Station">Barmer Rail Station</option>
              <option value="Basni">Basni</option>
              <option value="Beawar">Beawar</option>
              <option value="Bharatpur">Bharatpur</option>
              <option value="Bhilwara">Bhilwara</option>
              <option value="Bhiwadi">Bhiwadi</option>
              <option value="Bikaner">Bikaner</option>
              <option value="Bongaigaon">Bongaigaon</option>
              <option value="Boranada">Boranada</option>
              <option value="Jodhpur">Jodhpur</option>
              <option value="Chittaurghar">Chittaurgarh</option>
              <option value="Fazilka">Fazilka</option>
              <option value="Ganganagar">Ganganagar</option>
              <option value="Jaipur">Jaipur</option>
              <option value="Jaipur-Kanakpura">Jaipur-Kanakpura</option>
              <option value="Jaipur-Sitapura">Jaipur-Sitapura</option>
              <option value="Jaisalmer">Jaisalmer</option>
              <option value="Jodhpur">Jodhpur</option>
              <option value="Jodhpur-Bhagar Ki Kothi">Jodhpur-Bhagat Ki Kothi</option>
              <option value="Jodhpur-Thar">Jodhpur-Thar</option>
              <option value="Kardhan">Kardhan</option>
              <option value="Kota">Kota</option>
              <option value="Munabao Rail Station">Munabao Rail Station</option>
              <option value="Nagaur">Nagaur</option>
              <option value="Rajsamand">Rajsamand</option>
              <option value="Sawaimadhopur">Sawaimadhopur</option>
              <option value="Shahdol">Shahdol</option>
              <option value="Shimoga">Shimoga</option>
              <option value="Tonk">Tonk</option>
              <option value="Udaipur">Udaipur</option>
            </select>
          </div>
          <div class="area">
            <label for="area">Area:</label>
            <input type="text" name="area" value="">
          </div>
          <div class="pin">
            <label for="pin">PIN Code:</label>
            <input type="number" name="pin" value="" maxlength="6">
          </div>
          <div class="school">
            <label for="college">College Name:</label>
            <input type="text" name="school" value="">
          </div>
          <div class="button">
            <input type="submit" name="submit">
          </div>
        </form>
      </div>
    </section>
    <footer>
      <img src="img\log1o.png" alt="">
    </footer>
  </body>
</html>


<?php
if(isset($_POST['submit']))
{
  $conn=mysqli_connect('localhost','root','','edupay');

  
$a=$_POST['state'];
$b=$_POST['city'];
$c=$_POST['area'];
$d=$_POST['pin'];
$e=$_POST['school'];

 $sql="INSERT INTO `govt_college`(`state`, `city`, `area`, `pincode`, `college_name`) VALUES ('$a','$b','$c','$d','$e')";


$query= mysqli_query($conn,$sql);
if($query)
{
  echo"query run sucessfull";
}
else
{
  echo"query run unsucessfully";
}
 
 echo"-------->".$b;
}
  ?>



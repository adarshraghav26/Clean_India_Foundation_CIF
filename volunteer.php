<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>

    <!--Import Font-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap');
        </style>
    
    <!--Font CDN Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&display=swap" rel="stylesheet">

    <!--Title Icon-->
    <link rel="icon" href="./img/CIFLogo.jpeg" type="image/x-icon" />

     <!--Font Link-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!--FontAwesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <!-- CSS Stylesheet Link -->
     <link rel="stylesheet" href="volunteerstyle.css" />
     <link rel="stylesheet" href="aboutstyle.css" />
     <link rel="stylesheet" href="style.css" />


</head>
<body>
    <div class="container-fluid bgnav" >
        <div class="row">
            <div class="col-md-1">
                <img class="logo" src="./img/logo.jpg" />
            </div>

            <div class="col-md-3" id="navbg">
                <ul id="navlist">
                    <a href="home.html" class="an"><li class="navlist" id="home">Home</li></a>
                    <a href="about.html" class="an"><li class="navlist bg">About</li></a>
                    <a href="contact.html" class="an"><li class="navlist bg anchortag">Contact</li></a>
                </ul>
            </div>

            <div class="col-md-5">
                <h2 id="navheading">Clean India Foundation !</h2>
            </div>

            <div class="col-md-1" >
                <img src="./img/CIFLogo.jpeg" id="imgani" />
            </div>

            <div class="col-md-2">
                <input type="search" placeholder="Search..." class="searchpos" />
                <button class="btn btn-primary searchbtn">Search</button>
            </div>
        </div>
    </div><hr><br>

    <div class="container-fluid">
        <div class="volmembg">
            <center class="pad">
                <h3 class="volformh ">Volunteer Registration Form</h3>
            </center><hr><br>

            <form action="submitInfo.php" method="post">
            <div class="row g-3 pad">
                <div class="col">
                  <b><label class="form-label" for="">First Name:</label></b>
                  <input type="text" class="form-control" id="" name="fname" placeholder="Enter First Name" aria-label="First name">
                </div>
                <div class="col">
                    <b><label class="form-label" for="">Last Name:</label></b>
                  <input type="text" class="form-control" id="" name="lname" placeholder="Enter Last Name" aria-label="Last name" >
                </div>
              </div><br>


              <div class="row g-3 pad">
                <div class="col">
                  <b><label class="form-label" for="">E-Mail:</label></b>
                  <input type="email" class="form-control" name="email" placeholder="Enter E-Mail ID" id="">
                </div>
                <div class="col">
                    <b><label class="form-label" for="">Contact No:</label></b>
                  <input type="number" class="form-control" name="mnumber" placeholder="Enter Contact Number" id="">
                </div>
              </div><br>

              
              <div class="row g-3 pad">
                <div class="col">
                    <b><label for="inputAddress" class="form-label">Gender:</label></b>&nbsp;&nbsp;&nbsp;
            <label class="radio-inline form-label">
                <input type="radio" name="gender" id="inlineRadio1" value="Male">
                Male
            </label>&nbsp;&nbsp;&nbsp;
            
            <label class="radio-inline form-label">
                <input type="radio" name="gender" id="inlineRadio2" value="Female">
                Female
            </label>&nbsp;&nbsp;&nbsp;

            <label class="radio-inline form-label">
                <input type="radio" name="gender" id="inlineRadio2" value="Transgender">
                Transgender
            </label>
        </div>
        <div class="col">
            <b><label for="inputAddress" class="form-label">Occupation:</label></b>&nbsp;&nbsp;&nbsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="occupation[]" id="inlineCheckbox1" value="Student">
                <label class="form-check-label" for="inlineCheckbox1">Student</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="occupation[]" id="inlineCheckbox2" value="Employee">
                <label class="form-check-label" for="inlineCheckbox2">Employee</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="occupation[]" id="inlineCheckbox3" value="Retired">
                <label class="form-check-label" for="inlineCheckbox3">Retired</label>
              </div>
        </div>
    </div><br>

    
    <div class="row g-3 pad">
    <div class="col-md-6">
        <b><label for="inputCity" class="form-label">City:</label></b>
        <input type="text" class="form-control" name="city" id="inputCity">
      </div>
      <div class="col-md-4">
        <b><label for="inputState" class="form-label">State:</label></b>
        <select id="inputState" name="state" class="form-select">
          <option selected>Select your State</option>
          <option value="AP">Andhra Pradesh</option>
	<option value="AR">Arunachal Pradesh</option>
	<option value="AS">Assam</option>
	<option value="BR">Bihar</option>
	<option value="CT">Chhattisgarh</option>
	<option value="GA">Gujarat</option>
	<option value="HR">Haryana</option>
	<option value="HP">Himachal Pradesh</option>
	<option value="JK">Jammu and Kashmir</option>
	<option value="GA">Goa</option>
	<option value="JH">Jharkhand</option>
	<option value="KA">Karnataka</option>
	<option value="KL">Kerala</option>
	<option value="MP">Madhya Pradesh</option>
	<option value="MH">Maharashtra</option>
        <option value="MN">Manipur</option>
        <option value="ML">Meghalaya</option>
	<option value="MZ">Mizoram</option>
	<option value="NL">Nagaland</option>
	<option value="OR">Odisha</option>
	<option value="PB">Punjab</option>
	<option value="RJ">Rajasthan</option>
	<option value="SK">Sikkim</option>
	<option value="TN">Tamil Nadu</option>
	<option value="TG">Telangana</option>
	<option value="TR">Tripura</option>
	<option value="UT">Uttarakhand</option>
	<option value="UP">Uttar Pradesh</option>
	<option value="WB">West Bengal</option>
	<option value="AN">Andaman and Nicobar Islands</option>
	<option value="CH">Chandigarh</option>
	<option value="DN">Dadra and Nagar Haveli</option>
	<option value="DD">Daman and Diu</option>
	<option value="DL">Delhi</option>
	<option value="LD">Lakshadweep</option>
	<option value="PY">Puducherry</option>
        </select>
      </div>
      <div class="col-md-2">
        <b><label for="inputZip" class="form-label">Pincode</label></b>
        <input type="number" class="form-control" name="pincode" id="inputZip">
      </div>

        </div><br><br>

        <center>
            <input type="submit" class="btn btn-success subbtn" name="submit" value="Submit"  />
        </center><br><br>
      </form>


    </div>
</div><br><hr><br>

<div class="container-fluid">
    <div class="gandhi pad">
        <center>
        <h3><i><b>" Be the change that you wish to see in the world. "</b></i></h3><br>
        <img src="./img/gandhi.jpeg" width="600"/><br>
        <b class="mxl">- Mahatma Gandhi</b>
        </center><br><hr><br><br>

        <div class="row">
            <div class="col-md">
                <h5 class="green">Let's come together and make the differnce .!</h5><br><br>
                <img src="./img/thank-you.png"  width="200" height="200" class="mx"/>
            </div>

            <div class="col-md mxr">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./img/vol1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/vol2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/vol3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
            </div>

        </div>
    </div><br><br>
</div><br><br>

<!--Footer-->

<div class="container-fluid">
    <div class="footerbg">
    <div class="row">
      <div class="col-md-3">
        <img src="./img/CIFLogo.jpeg" height="100" width="100" /><br><br>
        <h4 class="txtf">Clean India Foundation</h4>
      </div>
  
      <div class="col-md-3">
        <center>
        <h5 class="txtf">Relevant Links</h5><br>
          <a href="home.html" class="an"><p class="txtp">Home</p></a>
          <a href="about.html" class="an"><p class="txtp">About</p></a>
          <a href="contact.html" class="an"><p class="txtp">Contact</p></a>
          <a href="volunteer.html" class="an"><p class="txtp">Join Us</p></a>
        </center>
      </div>
  
      <div class="col-md-3">
        <h5 class="txtf">Contact</h5><br>
        <i class="fa-solid fa-location-dot fa-sm" style="color: #e0e0e0;"></i>&nbsp;
        <span class="spantxt">A/32, CR Park, Saket, New Delhi - 110019</span><br><br>
        <i class="fa-solid fa-phone fa-sm" style="color: #e0e0e0;"></i>&nbsp;
        <span class="spantxt">+91-7890665491, &nbsp;001-256-784</span><br><br>
        <i class="fa-regular fa-envelope" style="color: #e0e0e0;"></i>&nbsp;
        <span class="spantxt">cif@gmail.com</span><br><br>
      </div>
  
      <div class="col-md-3">
        <h5 class="txtf" style="margin-left: 140px;">Social Media Links</h5><br>
        <div class="sociallink">
        <a href=""><span><i class="fa-brands fa-x-twitter fa-xl" style="color: #ebebeb;"></i></span></a>
        <a href=""><span><i class="fa-brands fa-instagram fa-xl" style="color: #ebebeb;"></i></span></a>
        <a href=""><span><i class="fa-brands fa-facebook fa-xl" style="color: #ebebeb;"></i></span></a>
        </div>
      </div>
    </div><br>
    <hr style="color: white;">
    <center>
    <h5 class="txtf">Copyright @ 2024 All Rights Reserved</h5>
    </center>
  </div>
  </div>

</body>
</html>
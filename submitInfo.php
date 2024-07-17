<?php 

// Basic Connection
if(isset($_POST['submit'])){
    $con = new mysqli("localhost","root","8287","cif");
if ($con->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
  }
  //echo "Connected Successfully <br />";

  // Insert Command

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mnumber = $_POST['mnumber'];
  $gender = $_POST['gender'];
  $occupation = implode(", ",$_REQUEST['occupation']);
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];

  $sql = "INSERT INTO volunteerinfo VALUES('$fname','$lname','$email','$mnumber','$gender','$occupation','$city','$state','$pincode'); ";

  $con->query($sql);
  /*echo "Data Inserted Successfully !<br><br>";
  echo " ".$fname. ",Thank You for volunteering for the rightful cause. ";*/
  $con->close();
}
 
?>

<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$msg = " <html><body><center><h3>Thank You !</h3></center><br><p>Let's come together & make our dream of 'Green India' come true.</p><br><p>Regards,</p><p>Team CIF</p></body></html>";
$sub = "Confirmation of your Volunteership with CIF. ";


if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'radarsh2011@gmail.com';   //Your Gmail
    $mail->Password = 'pqrg leip zica brya';     //Your Gmail App Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('radarsh2011@gmail.com');    ////Your Gmail
 
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $sub;                //$_POST["subject"];
    $mail->Body = $msg;                   //$_POST["message"];

    $mail->send();

    echo " 
    <script>alert('Confirmation sent to your E-Mail ID successfully.');
    </script>";
}

?>
                                 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>

    <!--Title Icon-->
    <link rel="icon" href="./img/CIFLogo.jpeg" type="image/x-icon" />

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
    <div class="volmembg"><br>
    <center>
    <h1>Thank You, for volunteering for the rightful cause of 'Clean & Green Future ' !</h1><br>
    <h3 class="hCCv"><?php echo " ".$fname.", your support is appreciated.";?></h3><br><br>
    <img src="./img/thank-you.png"  width="200" height="200" /><br><br><br>
    <a href="home.html" class="an"><h6>>>back to home</h6></a><br>
    </center>
    </div>
    </div>
</body>
</html>


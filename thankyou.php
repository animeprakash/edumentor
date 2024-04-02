<?php
    ini_set('display_errors', 0); 
    include("database.php");
    if(isset($_POST["submit"])) {

        $studentname=$_POST['studentname'];
        $contactno=$_POST["contactno"];
        $emailid=$_POST["emailid"];
        $state=$_POST["state"];

        $query="create table if not exists studentdetails (studentid int not null auto_increment primary key,studentname varchar(100),contactno long,emailid varchar(100),state varchar(100),studenton datetime not null default now())";
        mysqli_query($con,$query);

        $selquery="insert into studentdetails(studentname,contactno,emailid,state)values('".$studentname."','".$contactno."','".$emailid."','".$state."') ";
        $res=mysqli_query($con,$selquery);
        
        if($res==TRUE)
        {
            // $url="https://wa.me/".$contactno."/?text=Thanks%20for%20booking";
            header("Location:thankyou.php");
        }
        else{
            echo "There is an Error";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EduMentor</title>
        <meta name="description" content="edumentor">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>
          <header id="header" class="thankheader">
                <nav class="nav d-flex justify-content-between ">
                <a href="#" aria-label="anchor"><img src="assets/images/Edumentor-logo.webp" class="edumentor p-1" alt="i2global"></a>

                <ul class="menu_items ms-auto d-none d-md-flex float-lg-end ">
                    <li><a href="#" class="nav_link " aria-label="anchor">Home</a></li>
                    <li><a href="#" class="nav_link" aria-label="anchor">About</a></li>
                    <li><a href="#" class="nav_link" aria-label="anchor">Service</a></li>
                    <li><a href="#" class="nav_link" aria-label="anchor">Project</a></li>
                    <li><a href="#" class="nav_link" aria-label="anchor">Contact</a></li>
                </ul>
                <a href="#" aria-label="anchor"><img src="assets/images/logo-i2global.jpg" class="i2global p-1" alt="i2global"></a>
                </nav>
            </header>

            <div class="container-fluid ">
                <div class="row d-flex align-items-center " style="margin:15% 0 10% 0;">
                    <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-3 offset-lg-4">  
                        <img src="assets/images/thank.webp" class="thanks ">
                    </div>
                </div>
            </div>

        <div class="container-fluid footer-bg text-light footer mt-2" >
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white mb-4">Our Office</h6>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:9600168884" class="text-white text-decoration-none">+91 96001 68884</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white mb-4">Quick Links</h6>
                    <a  href="#" class="btn btn-link" >About Us</a>
                    <a  href="#" class="btn btn-link" >Contact Us</a>
                    <a  href="#" class="btn btn-link" >Our Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white mb-4">Newsletter</h6>
                    
                    <div class="position-relative w-100 mb-3">
                      <form>
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" name="mail" type="text" placeholder="Your email">
                        <button type="button" class="text-white btn greencolor py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                      </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <a href="tel:9600168884" class="orangebutton text-white  rounded-circle bg-warning call-button text-decoration-none bx bx-phone-call fs-1" aria-label="anchor"></a>

    <a href="https://wa.me/9600168884/?text=" class="text-white  rounded-circle greencolor whatsapp-button text-decoration-none bx bxl-whatsapp fs-1" aria-label="anchor"></a>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  </body>
</html>
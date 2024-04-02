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
<script>
  //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff; font-family: 'Playfair Display', sans-serif;font-weight:bold;}";
        document.body.appendChild(css);
    };
</script> 
<script>
    
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        //    
          if (validateForm()) {
               $("#myForm").submit();
          } else {
            event.preventDefault();
          }
      });
  
      function validateForm() {
          var isValid = true;
          var studentname = $("#studentname").val();
          var contactno = $("#contactno").val();
          var emailid= $("#emailid").val();
          var state= $("#state").val();
          if (studentname === "") {
              $("#snameError").text("Studentname is required");  
              $("#studentname").css({"border": "1px solid red"});
              $("#snameError").css({"color": "red"});
              isValid = false;
          } else {
             $("#snameError").text("Studentname");
              $("#snameError").css({"color": "green"});
              $("#studentname").css({"border": "1px solid green"});
          }
          if ( contactno==="") {
              $("#contactnoError").text("Contact is required");  
              $("#contactno").css({"border": "1px solid red"});
              $("#contactnoError").css({"color": "red"});
              isValid = false;
          } else {
              $("#contactnoError").text("Contact");
              $("#contactnoError").css({"color": "green"});
              $("#contactno").css({"border": "1px solid green"});
          }
          if ( emailid==="") {
              $("#emailError").text("Email is required");  
              $("#emailid").css({"border": "1px solid red"});
              $("#emailError").css({"color": "red"});
              isValid = false;
          } else {
              $("#emailError").text("Email"); 
              $("#emailError").css({"color": "green"});
              $("#emailid").css({"border": "1px solid green"});
          }
          if ( state==="") {
              $("#stateError").text("State is required");  
              $("#state").css({"border": "1px solid red"});
              $("#stateError").css({"color": "red"});
              isValid = false;
          } else {
              $("#emailError").text("Email"); 
              $("#stateError").css({"color": "green"});
              $("#state").css({"border": "1px solid green"});
          }
          return isValid;
      }

  
  });
  
  </script>      
    </head>
    <body>
    <main>
      <!-- Header Start -->
      <header id="header">
        <nav class="nav d-flex justify-content-between ">
          <a href="#" aria-label="anchor"><img src="assets/images/Edumentor-logo.webp" data-src="assets/images/Edumentor-logo.webp"  class="edumentor p-1 lazy" alt="i2global"></a>

          <ul class="menu_items ms-auto d-none d-md-flex float-lg-end ">
            <!-- <i class='bx bx-x' id="menu_toggle"></i> -->
            <li><a href="#" class="nav_link " aria-label="anchor">Home</a></li>
            <li><a href="#" class="nav_link" aria-label="anchor">About</a></li>
            <li><a href="#" class="nav_link" aria-label="anchor">Service</a></li>
            <li><a href="#" class="nav_link" aria-label="anchor">Project</a></li>
            <li><a href="#" class="nav_link" aria-label="anchor">Contact</a></li>
          </ul>
          <a href="#" aria-label="anchor"><img src="assets/images/logo-i2global.webp" data-src="assets/images/logo-i2global.webp" class="i2global p-1 lazy" alt="i2global"></a>

          <!-- <i class='bx bx-menu'  id="menu_toggle" ></i> -->
        </nav>
      </header>
      <!-- Header End -->

      <!-- Hero Start -->
      <section class="hero ">
        <div class="container-xxl">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 ">
                    <div class="text-center">
                        <button class="btn btn-outline-light ">Welcome</button>
                        <div class="fs-2 text-white headtitle-2">EduMentor Academy</div>
                        <div class="fs-2 text-white headtitle">
                        A good Education is always a base of
                        </div>
                            <p class="typewrite fs-2 text-white headtitle" data-period="2000" data-type='[ "A Bright Future", "Equitable Socities", "Self Confidence"]'>
                              <span class="wrap headtitle"></span>
                            </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <img src="assets/images/banner-2.webp" data-src="assets/images/banner-2.webp" alt="heroImg" class="lazy hero_img" />
                </div>
            </div>
        </div>
        <img src="assets/images/bg-bottom-2.png" data-src="assets/images/bg-bottom-2.png" alt="ccurve" class="lazy curveImg d-block d-xxl-none " />
      </section>
      <!-- Hero End-->
    </main>
	
    <div class="container-xl my-4">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="counter">
                    <div class="counter-icon"><i class='bx bxs-user-plus'></i></div>
                    <h3>Students Taught</h3>
                    <span class="counter-value">1450</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="counter green">
                    <div class="counter-icon"><i class='bx bx-shield-quarter'></i></div>    
                    <h3>Years Exp</h3>
                    <span class="counter-value">10</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="counter orange">
                    <div class="counter-icon"><i class='bx bxs-cog'></i></div>    
                    <h3>Hours Taught</h3>
                    <span class="counter-value">7100</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="counter magenta">
                    <div class="counter-icon"><i class='bx bxs-like'></i></div>    
                    <h3>Success Rate</h3>
                    <div class="d-flex offset-4"><span class="counter-value">96</span><span class="countervalue">%</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row d-flex align-items-center  justify-content-center">
                   
                    <div class="col-12 col-sm-12 col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h4>Welcome Back!</h4>
                            <form action="thankyou.php" method="post" id="myForm">
                                <div class="login-row row ">
                                    <label for="studentname" id="snameError">Student Name</label>
                                    <input type="text" class="form-control form-control-sm" name="studentname" id="studentname" pattern="^[a-zA-Z][.\sa-zA-Z.]{1,50}$">
                                </div>

                                <div class="login-row row ">
                                    <label for="contactno" id="contactnoError">Contact Number</label>
                                    <input type="text" class="form-control form-control-sm" name="contactno" id="contactno" pattern="^[0-9]{10}$">
                                </div>
                                <div class="login-row row ">
                                    <label for="emailid" id="emailError">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="emailid" id="emailid" >
                                </div>
                                <div class="login-row row ">
                                    <label for="state" id="stateError">State</label>
                                    <input type="text" class="form-control form-control-sm" name="state" id="state" >
                                </div>
                                <div class="text-center mt-3 my-auto">
                                    <input type="submit" class="btn btn-success text-white rounded-pill w-75 p-1" name="submit" value="SUBMIT" id="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                     <div class="col-12 col-sm-12 col-lg-7 col-md-6 text-center">
                        <img src="assets/images/sideimg.webp" data-src="assets/images/sideimg.webp" alt="sideimg" class="lazy login-img">
                    </div>
                </div>
            </div>
        </div>


  <section class="bggray">
    <div class="container my-3">
      <div class="row">
          <div class="text-center my-4">
              <div class="fs-3 fw-bold my-4 headline btn btn-outline-primary">JEE</div>
          </div> 
      </div>
      <div class="row d-flex align-items-center  justify-content-center pb-4">
          <div class="col-12 col-sm-12 col-md-4 col-lg-6"  data-aos="fade-up" data-aos-duration="1000">
              <img src="assets/images/banner-2.webp" data-src="assets/images/banner-2.webp"alt="heroImg" class="lazy hero_img" />
          </div> 
          <div class="col-12 col-sm-12 col-md-8 col-lg-6 pb-4">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item my-3"  data-aos="fade-up" data-aos-duration="1000">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed border border-1 bg-warning rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="bx bxs-label px-3"></i>Qualified Admission
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body border border-1 rounded-2 bglightgray">
                        <ul class="d-block d-lg-flex justify-content-around">
                          <li class="d-flex text-left"><div class="bx bxs-star px-2"></div>
                                <div class="text-left fs-7">IIITs</div>
                          </li>
                          <li class="d-flex"><div class="bx bxs-star px-2"></div>
                                <div class="text-left fs-7">NITs</div>
                          </li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item my-3 "  data-aos="fade-up" data-aos-duration="1000">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed border border-1 bg-warning  rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <i class="bx bxs-label px-3"></i>Syllabus
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body border border-1 rounded-2 bglightgray">
                    <ul class="d-block d-lg-flex justify-content-evenly ">
                      <li class="d-flex text-left"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7">Physics</div>
                      </li>
                      <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7">Chemistry</div>
                      </li>
                      <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7">Mathematics</div>
                      </li>
                    </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item my-3"  data-aos="fade-up" data-aos-duration="1000">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed border border-1 bg-warning  rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="bx bxs-label px-3"></i>Exam Pattern
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body border border-1 rounded-2 bglightgray">
                    <ul >
                      <li class="d-flex text-left"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7" style='word-wrap:break-word'>90 Multiple Choice Questions</div>
                      </li>
                      <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7" style='word-wrap:break-word'>3 Hours Time Duration</div>
                      </li>
                    </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item my-3"  data-aos="fade-up" data-aos-duration="1000">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed border border-1 bg-warning  rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="bx bxs-label px-3"></i>Question Pattern
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body border border-1 rounded-2 bglightgray">
                    <ul>
                        <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7">Each section has 30 questions</div>
                        </li>
                        <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7">4 marks for each correct answer</div>
                        </li>
                        <li class="d-flex"><div class="bx bxs-star px-2"></div>
                            <div class="text-left fs-7"> 1 mark is deducted for each wrong answer</div>
                        </li>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div> 
      </div>
    </div>
</section>

   <div class="container my-3">
        <div class="row">
          <div class="text-center my-4">
              <div class="fs-3 fw-bold my-4 headline btn btn-outline-primary">NEET</div>
          </div> 
        </div>
      <div class="row justify-content-center g-4">
         <div class="col-12 col-lg-6 col-md-10  col-sm-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="email-signature rounded-3 ">
               <div class="signature-icon bg-white ">
                  <img src="assets/images/courses/crc-1.webp"data-src="assets/images/courses/crc-1.webp" class="lazy" alt="neet">
               </div>
               <ul class="social-icon">
                  <li> 
                      <div class="title fs-5">Qualified&nbsp;Admission</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7">MBBS</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7">BDS</div>
                  </li>
                  
               </ul>
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-10  col-sm-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="email-signature rounded-3 ">
               <div class="signature-icon bg-white ">
                  <img src="assets/images/courses/crc-2.webp" data-src="assets/images/courses/crc-2.webp" class="lazy" alt="neet">
               </div>
               <ul class="social-icon">
                  <li> 
                      <div class="title fs-5">Syllabus</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7">Physics</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7">Chemistry</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 ">Biology</div>
                  </li>                 
               </ul>
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-10  col-sm-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="email-signature rounded-3 ">
               <div class="signature-icon bg-white ">
                  <img src="assets/images/courses/crc-3.webp" data-src="assets/images/courses/crc-3.webp" class="lazy"alt="neet">
               </div>
               <ul class="social-icon">
                  <li> 
                      <div class="title fs-5">Exam&nbsp;Pattern</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-nowrap" style='word-wrap:break-word'>Each section has 30 questions</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-nowrap"style='word-wrap:break-word'>4&nbsp;marks&nbsp;for&nbsp;each&nbsp;correct answer</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-wrap " style='word-wrap:break-word'>1&nbsp;mark&nbsp;is&nbsp;deducted&nbsp;for&nbsp;each wrong&nbsp;answer</div>
                  </li>                 
               </ul>
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-10  col-sm-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="email-signature rounded-3 ">
               <div class="signature-icon bg-white ">
                  <img src="assets/images/courses/crc-4.webp" data-src="assets/images/courses/crc-4.webp" class="lazy" alt="neet">
               </div>
               <ul class="social-icon">
                  <li> 
                      <div class="title fs-5 text-nowrap ">Question Pattern</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-nowrap" >3 Hours Time Duration</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-nowrap" >180 Multiple Choice Questions</div>
                  </li>
                  <li class="d-flex">
                    <div><a href="#" aria-label="anchor"><i class="bx bxs-star"></i></a></div>
                    <div class="px-2 fs-7 text-nowrap">45 Questions from each subject</div>
                  </li>                 
               </ul>
            </div>
         </div>

      </div>
   </div>
<!-- Neet End -->


    <div class="container my-3">
        <div class="row">
          <div class="text-center my-4">
              <div class="fs-3 fw-bold my-4 headline btn btn-outline-primary">TEACHER TRAINING</div>
          </div> 
        </div>
        <div class="row justify-content-center g-4">
          <div class="col-10 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/certificate.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Diploma in Early Childhood Education</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/online-education-1.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Advanced Diploma in Early Childhood Education</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/online-education.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Professional Development Qualification</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/online-learning-1.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Tutors provide great Academic Support</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/diploma.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Practical Training/<br> Internship</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/knowledge.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Tutors are constantly in touch with trainees</h3>
              </div>
          </div>
          <div class="col-10 col-sm-6 col-md-4  col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="serviceBox">
                  <div class="service-icon">
                      <img src="assets/images/icons/education.webp" alt="tt-1">
                  </div>
                  <h3 class="title fs-7">Academic Team is Highly Accomplished</h3>
              </div>
          </div>
        </div>
    </div>


    <!-- MEntors -->
<div class="container">
      <div class="row">
          <div class="text-center my-4">
              <div class="fs-3 fw-bold my-4 headline btn btn-outline-primary">MENTORS</div>
          </div> 
      </div>
    <div class="row">
        <div id="mentor-slider" class="owl-carousel  ">
            <div class="col-11 col-sm-10 col-md-10 col-lg-10">
                <div class="mentors">
                    <div class="service-icon">
                      <img src="assets/images/mentors/biology.webp" alt="mentors">
                    </div>
                    <div class="service-content">
                        <h3 class="title">AMBATI SRAVANI</h3>
                        <p class="description">Biology</p>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-10 col-lg-10">
                <div class="mentors">
                    <div class="service-icon">
                      <img src="assets/images/mentors/physics.webp" alt="mentors">
                    </div>
                    <div class="service-content">
                        <h3 class="title">NISHANT SONI</h3>
                        <p class="description">Physics</p>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-10 col-lg-10">
                <div class="mentors">
                    <div class="service-icon">
                      <img src="assets/images/mentors/chemistry.webp" alt="mentors">
                    </div>
                    <div class="service-content">
                        <h3 class="title">MANJUNATH A Y</h3>
                        <p class="description">Chemistry</p>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-10 col-lg-10">
                <div class="mentors">
                    <div class="service-icon">
                      <img src="assets/images/mentors/maths-2.webp" alt="mentors">
                    </div>
                    <div class="service-content">
                        <h3 class="title">SWAPNIL SANADYA</h3>
                        <p class="description">Mathematics</p>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-10 col-lg-10">
                <div class="mentors">
                    <div class="service-icon">
                      <img src="assets/images/mentors/physics-2.webp" alt="mentors">
                    </div>
                    <div class="service-content">
                        <h3 class="title">THANGARAJ</h3>
                        <p class="description">Physics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=" container-xl">
        <div class="row">
          <div class="text-center my-4">
              <div class="fs-3 fw-bold my-4 headline btn btn-outline-primary">TESTIMONIALS</div>
          </div> 
        </div>
   <div class="row justify-content-center ">
      <div class=" col-12 col-sm-8 col-md-8 col-lg-8">
         <div id="testimonial-slider" class="owl-carousel">
            <div class="testimonial">
               <div class="testimonial-content">
                  <p class="description">
                  I am happy that Lokshitha's experience at I2Global has been
                  exceptional. The individualized attention and dedicated teachers have
                  contributed to their remarkable development. Her Academic progress, critical
                  thinking skills, and self-confidence have shown significant improvement. We
                  are proud to witness their growth and look forward to their continued
                  success.
                </p>
               </div>
               <div class="testimonial-profile">
                  <div class="pic">
                     <img src="assets/images/testimonials/lokshitha.webp" alt="texti-1">
                  </div>
                  <h3 class="title">
                  Lokshitha
                     <span class="post">GRADE 12,TAMIL NADU</span>
                  </h3>
               </div>
            </div>
            <div class="testimonial">
               <div class="testimonial-content">
                  <p class="description">
                  I cannot express enough gratitude to the team at I2Global for the
                                                    exceptional JEE/NEET and academic support they have provided to my child.I
                                                    am impressed by the personalized attention given to each student, which has
                                                    greatly boosted their confidence and improved their performance. I highly
                                                    recommend I2Global to any parent looking for top-notch coaching and academic
                                                    support for their child's JEE/NEET preparation.
                </p>
               </div>
               <div class="testimonial-profile">
                  <div class="pic">
                     <img src="assets/images/testimonials/rhea.webp" alt="testi-2">
                  </div>
                  <h3 class="title">
                  RHEA FERNANDO
                     <span class="post">GRADE 11,RAJASTHAN</span>
                  </h3>
               </div>
            </div>
            <div class="testimonial">
               <div class="testimonial-content">
                  <p class="description">
                  Our experience with I2Global for JEE/NEET coaching and academic support is fantastic. The dedicated faculty members have gone above and
                                                    beyond to ensure that my child receives the best education and guidance. The
                                                    comprehensive study resources, regular assessments, and personalized
                                                    doubt-solving sessions have tremendously helped my child in their
                                                    preparation. Thanks to I2Global, my child is now well-prepared and confident
                                                    to face the Board exams &jee/neet.
                </p>
               </div>
               <div class="testimonial-profile">
                  <div class="pic">
                     <img src="assets/images/testimonials/saanvi.webp" alt="testi-2">
                  </div>
                  <h3 class="title">
                  SAANVI GUGGILAM
                     <span class="post">GRADE 10,KARNATAKA</span>
                  </h3>
               </div>
            </div>
            <div class="testimonial">
               <div class="testimonial-content">
                  <p class="description">
                  I2Global has been a game-changer for my child's JEE/NEET preparation. The
                                            expert guidance and comprehensive study materials have made a significant
                                            difference in their understanding and performance. The faculty members are
                                            always available to clarify doubts and provide additional support when
                                            needed.
                </p>
               </div>
               <div class="testimonial-profile">
                  <div class="pic">
                     <img src="assets/images/testimonials/sunrit.webp" alt="testi-2">
                  </div>
                  <h3 class="title">
                  SUNRIT DEY
                     <span class="post">GRADE 12,KOLKATA</span>
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




    <div class="container-fluid footer-bg text-light footer mt-2" >
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4 fs-6">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:9600168884" class="text-white text-decoration-none">+91 96001 68884</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" aria-label="anchor" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4 fs-6">Quick Links</h4>
                    <a  href="#" class="btn btn-link" >About Us</a>
                    <a  href="#" class="btn btn-link" >Contact Us</a>
                    <a  href="#" class="btn btn-link" >Our Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4 fs-6">Newsletter</h4>
                    
                    <div class="position-relative w-100 mb-3">
                      <form>
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" name="mail" type="text" placeholder="Your email">
                        <button type="button" class="text-white btn greencolor py-2 position-absolute top-0 end-0 mt-2 me-2 fs-7">SignUp</button>
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
  <script>
    AOS.init();
  </script>
    <!-- <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>         -->

  <script>
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[990,1],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        autoPlay:true
    });
});
$(document).ready(function(){
    $("#mentor-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[990,2],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        autoPlay:true
    });
});
  </script>
  <script>
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 2500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
  </script>  
  <script>
    window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

    if ("IntersectionObserver" in window) {
        var lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        lazyImages.forEach(function(lazyImage) {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazy");
        });
    }
});
  </script>
  </body>
</html>
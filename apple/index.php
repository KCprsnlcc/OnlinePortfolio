<?php include('../include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dinawanao</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

<!-- Add your content of header -->

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo." alt="">
            <span> Apple D.
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About Me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="education.html"> Education </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="project.html"> Projects </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
               Apple Mae J. Dinawanao <br>
              <a>
                <div class="btn-container">
                  <button
                  class="btn btn-color-2" onclick="window.open('appledinawanao.pdf')" download="appledinawanao.pdf"
                >Download CV </button>
                </div>
              </a>
            </div>
          </div>
          
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="images/dat.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/fv.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/gat.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          EDUCATIONAL BACKGROUND
        </h2>
      </div>

      <div class="service_container">
        <div class="box">
         
          <div class="detail-box">
            <h5>
              Elementary (2015)
            </h5>
            <p>
              Putik Central School
            </p>
          </div>
        </div>
        <div class="box active">
         
          <div class="detail-box">
            <h5>
              Junior High School (2018)
            </h5>
            <p>
              Maria Clara L. Lobregat National High School
            </p>
          </div>
        </div>
        <div class="box">
          
          <div class="detail-box">
            <h5>
              Senior High School (2020)
            </h5>
            <p>
              AMA Computer College Zamboanga 
            </p>
          </div>
        </div>
        <div class="box">
          
          <div class="detail-box">
            <h5>
              College
            </h5>
            <p>
              Pilar College of Zamboanga City Inc.
            </p>
          </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Me
              </h2>
             
            </div>
            <p>Hello, I'm Apple Mae J. Dinawanao, a Bachelor of Science student in Information Technology who's learning in this field. Imay not be the top performer but I am determined to grow and improve my skills. Aside in technology I am also a deep passion for dance which can help me to regain my mood and enkoy myself.</p>
            <p>"I believe that in every challenges is a opportunity to learn and become better in the wrold of IT."</p>
          
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/Formal_1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/apple.JPG" alt="" />
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->




  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          MY PROJECTS
        </h2>
      
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/permit.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Automated Permit System
                </h5>
                
              </div>
            </div>

        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/animex.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Animex Book Online Store
              </h5>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Contact Me
        </h2>
        
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="../include/message.php" method = "post">
            
            <div>
              <input name = "name" type="text" placeholder="Name" />
            </div>
            <div>
              <input name = "email" type="email" placeholder="Email" />
            </div>
            <div>
              <input name = "subject" type="text" placeholder="Subject" />
            </div>
            <div>
              <input name = "message" type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>

            </div>
          </form>
        </div>
       
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
          <h2>
              Contact with me:
          </h2>
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/instagram.png" alt="">
              <span>
                @aaa.emd
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/telephone-white.png" alt="">
              <span>
                Call : 09977145732
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/envelope-white.png" alt="">
              <span>
                appledinawanao@gmail.com
              </span>
            </a>
          </div>
        </div>
      
          </div>
        </div>
      </div>

    </div>
  </section>
    
   <!-- footer section -->
   <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
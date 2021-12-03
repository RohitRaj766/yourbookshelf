<!doctype html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font Awesome Icons(kit for Icons)-->
    <script src="https://kit.fontawesome.com/290cce2f00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">


    
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/site.webmanifest">
<link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <title>Contact Us</title>
  </head>
  <body>
    
 <!--NavBar Starts-->
 
<header class="p-3 bg-success text-white" style="width:100%;" >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.html" class="d-flex-yb align-items-center  mb-2 mb-lg-0 text-warning text-decoration-none kappor" id="textsize"><i class="fas fa-book singh"></i><b>Your-BookShelf</b>
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.html" class="nav-link px-2 text-white changefont" id="textsize"><i class="fas fa-house-user" id="kapoor"></i>Home</a></li>
          <li><a href="about.html" class="nav-link px-2 text-white changefont" id="textsize">About</a></li>
          <li><a href="contact.html" class="nav-link px-2 text-white changefont" id="textsize">Contact</a></li>
          <li><a href="disclaimer.html" class="nav-link px-2 text-white changefont" id="textsize">Disclaimer</a></li>

          <!--Categories Starts-->
    <li class="nav-item dropdown ">
                <a class="nav-link hover text-white dropdown-toggle changefont amiba" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Categories
                </a>
                <ul class="dropdown-menu " style="background:;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-success " href="CSE.html" id="textsize">Polytechnic Cse</a></li>
                  <!--  <div class="dropdown-divider"></div>
                 <li><a class="dropdown-item text-success" href="jspage.html" id="textsize">Al-Kabir</a></li>
                   <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item text-success" href="htmlpage.html" id="textsize">Nsps</a></li>
                   <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item text-success" href="bootstrappage.html" id="textsize">Rvs</a></li>
                     <li class="nav-item dropdown">  -->
                </ul>
              </li>
<!--Categories Ends-->

         </ul>
        
      </div>
    </div>
  </header>

 <!--Login Form Starts-->

<!-- Signup Form Ends -->

<!--NavBar Ends-->
<main>     
<div class="container contact-form">
    <div class="contact-image">
        <img src="image/user2.jpg" alt="rocket_contact"/>
    </div>
    <form action="#" method="post">
        <h3>Drop Us a Message</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group m-2">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required/>
                </div>
                <div class="form-group m-2">
                    <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group m-2">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" required/>
                </div>
             
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                </div>
                  
            </div>
             <div class="form-group m-2">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
        </div>
    </form>
</div>
  </main>

  <?php
if(isset($_POST["btnSubmit"]))
{
    $name=$_POST["txtName"];
    $email=$_POST["txtEmail"];
    $phone=$_POST["txtPhone"];
    $msg=$_POST["txtMsg"];
$conn=mysqli_connect("localhost","root","","contact us");
$sql="insert into contact values('$name','$email','$phone','$msg')";
if(mysqli_query($conn,$sql))
{
    "OK";
}

else{

    echo mysqli_error($conn);
}
}
?>



<!--Footer Starts -->
<section class="footer fottter">
<hr class="bg-success" Style="height:2px;">
    <div class="box-container ">

    <!--Footer Topics Starts-->


        <div class="box">
            <h3 class="text-success">Great India</h3>
            <a href="https://youtu.be/zDhF8OMwsTY" class="text-success"> <i class="fas fa-arrow-right text-dark"></i>Ratan Tata</a>
            <a href="https://youtu.be/1vbMVOA8U0o" class="text-success"> <i class="fas fa-arrow-right text-dark"></i>APJ Abdul Kalam</a>
            <a href="https://youtu.be/7_AI_Px6UnY" class="text-success"> <i class="fas fa-arrow-right text-dark"></i>Bhagwat-Gita</a>
            <a href="https://youtu.be/wqrncViT2X0" class="text-success"> <i class="fas fa-arrow-right text-dark"></i>Narayan Murti</a>
            <a href="https://youtu.be/py0NrNu9ATQ" class="text-success"> <i class="fas fa-arrow-right text-dark"></i>Ms-Dhoni</a>
        </div>




        <div class="box">
            <h3 class="text-success">Quick Links</h3>
            <a href="index.html" class="text-success"> <i class="fas fa-arrow-right text-dark"></i> Home </a>
            <a href="about.html" class="text-success"> <i class="fas fa-arrow-right text-dark"></i> About</a>
            <a href="disclaimer.html" class="text-success"> <i class="fas fa-arrow-right text-dark"></i> Disclaimer </a>
            <a href="contact.html" class="text-success"> <i class="fas fa-arrow-right text-dark"></i> Contact </a>
           
        </div>

        <div class="box">
            <h3 class="text-success">Contact Info</h3>
            <a href="https://web.whatsapp.com/" class="text-success"> <i class="fab fa-whatsapp-square text-dark"></i> +91-7667158349 </a>
            <a href="#" class="text-success"> <i class="fas fa-phone text-dark"></i> +91-7667158349</a>
            <a href="https://www.gmail.com/" class="text-success"> <i class="fas fa-envelope text-dark"></i> rohitraj2k04@gmail.com </a>
            <img src="" class="map" alt="">
        </div>
         <div class="col-sm-18 col-md-22">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.894701865354!2d86.10019751475218!3d22.843384928733975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e5f1b496777f%3A0x1d506033b3ed835d!2sARKA%20JAIN%20University!5e0!3m2!1sen!2sin!4v1634270296528!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
    </div>
    <!--Footer Topics Starts-->


    <!--Share Box Strats-->
<div class="box bg-success" >
    <div class="share">
        <a href="https://github.com/" class="fab fa-github            text-warning    scrollbig"></a>    
        <a href="https://www.facebook.com/" class="fab fa-facebook-f  text-white      scrollbigg"></a>
        <a href="https://twitter.com/" class="fab fa-twitter          text-warning    scrollbig"></a>
        <a href="https://instagram.com/" class="fab fa-instagram      text-dark       scrollbiggg"></a>
        <a href="https://in.linkedin.com/" class="fab fa-linkedin     text-warning    scrollbig"></a>
        <a href="https://in.pinterest.com/" class="fab fa-pinterest   text-white      scrollbigg"></a>
        <a href="https://web.whatsapp.com/" class="fab fa-whatsapp    text-warning    scrollbig"></a>        
    </div>
</div>

<!--Go To Top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!--Share Box Ends-->
     
    <!--Rights Reserved Starts-->
    <div class="credit"> Created By <span class="text-success">Mr. Rohit Raj</span> | <span class="text-success">All</span> Rights Reserved! </div>
    <hr>
    <div class="text-center" >
    <span class="text-muted">© 2021 Your-BookShelf, Inc</span>
    </div>
</section>
<!--Rights Reserved Ends-->

<!-- Footer Ends-->




<!--JavaScripts Files-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!--Own JavaScripts File-->
<script src="myscript.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap links -->
          <!-- Fade up -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <!-- Fade up -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<style>

  


/* home */
.caption {
    position: absolute;
    top: 50%;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: -10px;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
    color: white;
    text-align: center;
}
.caption h2{
    font-size: 40px;
    font-weight: 600;
    color:hsl(99, 79%, 30%);
}
.caption p{
    font-size: 18px;
    font-weight: 200;

}



/* edu */
.container h2{
    font-weight: bold;
    font-size: 30px;
    color: #175f1b;
}
.container h3{
    font-weight: bold;
    font-size: 25px;
    color: #175f1b;
}
.container p{
    max-width: 80%; /* Set a maximum width for the paragraph */
    margin: 0 auto; /* Center the paragraph within its container */
    padding: 15px;
}
.container button {
    background-color: #175f1b; /* Light green background */
    border:none; 
    color: white; /* White text */
    padding: 15px 32px; /* Some padding */
    text-align: center; /* Centered text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Get the element to sit next to others */
    font-size: 16px; /* Increase font size */
    cursor: pointer; /* Pointer/hand icon */
    border-radius: 12px;
    margin-bottom: 20px;
  
  }
  
  .container button:hover {
    background-color: #2fff00; /* Slightly darker green on hover */
  }
/* history */
.img-container {
    position: relative;
}

.img-container img {
    height: 200px; /* Ensure all images have the same height */
    width: 100%; /* Ensure all images stretch to full width of container */
    object-fit: cover; /* Ensure images maintain aspect ratio and fill the container */
    border-radius: 10px; /* Add rounded corners to images */
}

.img-caption {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: hsl(99, 79%, 30%);
}


</style>
<body>
   <!-- navbar -->

  <?php
   include("nav.php");
  ?>

  
  <!-- navbar -->



   <!-- --------Educational-Program--------- -->
   <div class="container-fluid position-relative" style="padding: 0;">
    <img src="images/edu1.png" alt="Educational Program" class="img-fluid w-100" style="height: 87vh; object-fit: cover; mask-image: linear-gradient(rgba(7, 123, 9, 0.644),rgba(11, 73, 55, 0.416));">
    <div class="caption position-absolute top-50 start-0 translate-middle-y text-white" style="margin-left: 60px;">
        <h2>Educational Program</h2>
        <p>
            Encourage them to participate in clubs, <br>
            after-school activities, sports, and school functions. 
        </p>
    </div>
</div>
<!-- edu program -->

<!-- our program and service -->
<div style="background-color: hsla(99, 80%, 35%, 0.202);" >
  <div class="container py-5" data-aos="fade-up"
  data-aos-anchor-placement="top-center">
      <h2 class="text-center mb-5">Our Program & Service</h2>

      <div class="row mb-4" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <div class="col-md-6 mb-4 text-center">
              <img src="images/edu2.png" alt="Language Class" class="img-fluid rounded" style="height: 30vh; width: auto; object-fit: cover;">
              <h3 class="mt-3">Language Learning</h3>
              <p>Our language classes are designed to help refugees improve their communication skills for better integration and employment opportunities. We offer courses in multiple languages, tailored to different proficiency levels.</p>
          </div>
          <div class="col-md-6 mb-4 text-center">
              <img src="images/edu3.png" alt="Vocational Training" class="img-fluid rounded" style="height: 30vh; width: auto; object-fit: cover;">
              <h3 class="mt-3">Vocational Training</h3>
              <p>Our vocational training programs provide hands-on training in specific trades and professions, equipping refugees with the job skills needed to secure sustainable employment. Programs include workshops, apprenticeships, and certifications.</p>
          </div>
      </div>

      <div class="row mb-4" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <div class="col-md-6 mb-4 text-center">
              <img src="images/edu4.png" alt="Tutoring For Children" class="img-fluid rounded" style="height: 30vh; width: auto; object-fit: cover;">
              <h3 class="mt-3"> Program For Tutoring</h3>
              <p>We offer services to support refugee & children in their academic journey. Our goal is to help them excel in school, homework assistance, and extracurricular activities that foster a love of learning.</p>
          </div>
          <div class="col-md-6 mb-4 text-center">
              <img src="images/edu5.png" alt="Adult Education" class="img-fluid rounded" style="height: 30vh; width: auto; object-fit: cover;">
              <h3 class="mt-3">Adult Education</h3>
              <p>Our adult education classes help refugees complete their education and gain new qualifications. We offer courses in basic literacy, high school equivalency, and vocational skills, providing a pathway to higher education and better job opportunities.</p>
          </div>
      </div>
      <div class="col-12 text-center" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
        <a href="registration-page.html"><button class="btn9 btn-primary btn-lg">Register</button></a>
      </div>
  </div>
</div>



<!-- history section -->
<div class="container my-5" data-aos="fade-up"
data-aos-anchor-placement="top-center">
  <div class="text-center">
      <h2>History</h2>
      <p>The history and mission behind our organization highlight our commitment to supporting refugees through education. Founded in 2024, we have continuously strived to provide accessible and high-quality education to refugees, empowering them with the skills and knowledge necessary for successful integration and personal growth.</p>
  </div>
  <div class="row text-center">
      <div class="col-md-4 mb-4">
          <div class="img-container">
              <img src="images/edu6.png" class="img-fluid" alt="BTB">
              <p class="img-caption">Branch in Battambang</p>
          </div>
      </div>
      <div class="col-md-4 mb-4">
          <div class="img-container">
              <img src="images/edu7.png" class="img-fluid" alt="SR">
              <p class="img-caption">Branch in Siem Reap</p>
          </div>
      </div>
      <div class="col-md-4 mb-4">
          <div class="img-container">
              <img src="images/edu8.png" class="img-fluid" alt="PP">
              <p class="img-caption">Branch in Phnom Penh</p>
          </div>
      </div>
  </div>
</div>



    <!-- footer -->
    <?php
      include("footer.php");
    ?>
    <!-- footer ends -->
    
    
       <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
    
    
      </div>
      <script src="index.js"></script>
        <!-- translate -->
    
      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <!-- translate -->

        <!-- fadeup -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- fadeup -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
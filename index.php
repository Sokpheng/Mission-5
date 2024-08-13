<!-- /* action todo-list */
/* 1.set the whole body and scroll bar */
/* 2. set the navbar and create and set the translation */
/* 3. set the whole code to home and make the image slide in css  */
/* 4. make about us and set the button to read more  */
/* 5.make 6 div and put and image and read more in order to sent to other page for more infomation */
/* 6. make more div just to put image in for grallay */
/* 7. make div look good by have input for name and email and phone number as well as location, name of org, iframe of map */
/* 8.make 3 div look better in order to provide news to user by link to the referces */
/* 9. make footer look better with css and set the media and logo */ -->


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap links -->
     <!-- Fade up -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
      <!-- Fade up -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
  <div class="all-content">


   
  <!-- navbar -->

  <?php
    include("nav.php");
  ?>
  <!-- navbar -->



<!-- home section -->
   <section id="home" data-aos="fade-up"
   data-aos-anchor-placement="top-center">
    <div class="content">
      <h3>HELPING & SUPPORT<br> IMMIGRANTS</h3>
      <p>HELPING REFUGEES AND IMMIGRANTS MAKES OUR COMMUNITIES <br>BETTER AND SUPPORTS BASIC RIGHTS.
      </p>
      <a href="donation-page.php" class="btn btn-primary" target="_blank"> Donation </a>
    </div>
   </section>

<!-- home section -->



<!-- about section -->
<div class="about" id="about" data-aos="fade-up"
data-aos-anchor-placement="top-center">
  <div class="container">
  <div class="heading">About <span>Us</span></div><br>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="https://www.unhcr.ca/wp-content/uploads/2020/04/900-protection.jpg.webp" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <h3>What Makes Our Team Special?</h3>
        <p>Assisting refugees strengthens our community and encourages their dream.
          They can reconstruct their identities and contribute to our society if we provide them
          with jobs, healthcare, education, and legal assistance. In addition to helping refugees,
          this support improves our economy and culture. Be nice and inclusive to improve interpersonal relationships and create a more equitable environment for all.
        </p>
         <a href="about.php"><button id="about-btn">Learn More</button></a>
      </div>
    </div>
  </div>
</div>
<!-- about section -->





<!-- work -->
  <?php
  include("duty.php");
  ?>

<!-- work -->





<!-- our gallary -->
<div class="container" id="gallary" data-aos="fade-up"
data-aos-anchor-placement="top-center">
  <h1>Our <span>Gallary</span></h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/OIP.iDN9p4rJnHZZInpvfb4Y0gHaE8?rs=1&pid=ImgDetMain" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/R.1dc92c934a7cd18ae04e63e0eb4505e7?rik=HC%2bvJKqTuKM4Zg&pid=ImgRaw&r=0" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/OIP.cX4UEjZFec21xoCyRbmicAHaE6?rs=1&pid=ImgDetMain" alt="">
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/R.ef6752deb442e247ea9d5af07a0ed151?rik=TUwUz7%2feenbF%2bw&riu=http%3a%2f%2fwww.milwaukeeindependent.com%2fwp-content%2fuploads%2f2019%2f12%2f122019_RefugeeSign_01.jpg&ehk=22ZgJeKXdFUfyvPAzRdnGxO1uQc6QZI1FqbWMedLGqk%3d&risl=&pid=ImgRaw&r=0" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/R.7419a7fb90bfe73c939627e1a40ca41d?rik=234XH3UI3sRgtQ&pid=ImgRaw&r=0" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="https://th.bing.com/th/id/R.545764128d64870a8d52b83fa3fee030?rik=HRuPGd1qaj9dEA&riu=http%3a%2f%2fwww.mintpressnews.com%2fwp-content%2fuploads%2f2015%2f09%2fObama-Syrian-Refugees_Muha.jpg&ehk=%2fUToiv%2fC7vCq4x2heuollRJwef0k2rHiPpycxI6K0PQ%3d&risl=&pid=ImgRaw&r=0" alt="">
      </div>
    </div>
  </div>
</div>
<!-- our gallary -->




<!-- contact -->
  <?php
    include("contact.php");
  ?>
<!-- contact -->



   <!-- News -->
   <section class="blogs" id="blogs" data-aos="fade-up"
   data-aos-anchor-placement="top-center">
  <h1>Latest <span>News</span></h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="https://www.aljazeera.com/wp-content/uploads/2015/06/40c4150039ba41e6baafa18ff80e86d4_18.jpeg?quality=80" alt="">
          <div class="card-body">
            <h3>Refugees arrive in Cambodia from Australian detention</h3>
            <h5>Phorn Bopha and Kevin Doyle / 4 Jun 2015</h5>
            <p>Phnom Penh, The first four refugees involved in a controversial $31m resettlement deal have been transferred from an offshore Australian detention to their new lives in Cambodia. The four migrants, who flew into the capital Phnom Penh, had been held in detention on the remote Pacific island of Nauru after attempting to reach Australia.</p>
            <a href="https://www.aljazeera.com/news/2015/6/4/refugees-arrive-in-cambodia-from-australian-detention"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="https://www.unhcr.org/sites/default/files/styles/standard_08/public/legacy-images/48fc78034.webp?h=f134ae9f&itok=kYJIo0_p" alt="">
          <div class="card-body">
            <h3>Cambodia on track to become refugee model for Southeast Asia</h3>
            <h5> Kitty McKinsey / 6 March 2020</h5>
            <p>
              PHNOM PENH, Cambodia, October 20 (UNHCR) - Many foreigners seeking to be officially designated refugees in Cambodia are having their cases heard these days in a brand new Cambodian Refugee Office at the immigration department, rather than at the UN refugee agency's office as over the past 14 years.</p>
              <a href="https://www.unhcr.org/news/stories/cambodia-track-become-refugee-model-southeast-asia"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="https://gdb.voanews.com/0f804c3e-cd55-4307-b859-ec6af0d30b5d_w1023_r1_s.png" alt="">
          <div class="card-body">
            <h3>Cambodian Activists and Family Members Arrested in Thailand</h3>
            <h5>Tommy Walker / 03 February 2024</h5>
            <p>BANGKOK — 
              Three Cambodian human right activists, including a former government party member, have been arrested in Thailand, according to human rights groups. Lem Sokha, Phan Phana and Kung Raiya were arrested Friday, along with their families, the Manushya Foundation and Human Rights Watch told VOA.</p>
            <a href="https://www.voanews.com/a/cambodian-activists-and-family-members-arrested-in-thailand/7469778.php"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
      </div>
    </div>
   </section>
   <!-- News -->





    <!-- footer -->
    <?php
      include("footer.php");
    ?>
<!-- footer ends -->

<!-- arrow -->
   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
<!-- arrow -->


    <!-- translate -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!-- translate -->


  <!-- fadeup AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- fadeup -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</php>
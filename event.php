<!DOCTYPE html>
<html lang="en">
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
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>

<style>

/* Main content styles */
main {
  background-color: #e8f5e9; /* Very light green */
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #004d00; /* Darker green */
}

.news-item {
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 15px; /* Increased padding for better spacing */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-right: 15px; /* Small margin between news items */
  width: 250px; /* Fixed width */
  display: flex;
  flex-direction: column; /* Align items vertically */
  justify-content: space-between; /* Space out items */
}

.news-item img.news-img {
  max-width: 100%; /* Adjusted image size */
  height: auto;
  border-radius: 8px;
  margin-bottom: 10px; /* Margin for image */
}

.news-item h2 {
  color: #004d00; /* Darker green */
  font-size: 1.1em; /* Adjusted font size */
  margin: 0 0 10px 0; /* Margin below heading */
  line-height: 1.3; /* Line height for better readability */
  overflow: hidden; /* Hide overflow text */
  text-overflow: ellipsis; /* Add ellipsis for text overflow */
  white-space: normal; /* Allow text wrapping */
}

.news-item p {
  font-size: 0.9em; /* Adjusted font size */
  margin-bottom: 10px; /* Margin for paragraphs */
  line-height: 1.4; /* Line height for better readability */
  overflow: hidden; /* Hide overflow text */
  text-overflow: ellipsis; /* Add ellipsis for text overflow */
  white-space: normal; /* Allow text wrapping */
}

.news-item a.btn {
  margin-top: auto; /* Push the button to the bottom */
}

#news-container {
  display: flex;
  overflow-x: auto; /* Enables horizontal scrolling */
  white-space: nowrap;
  gap: 15px; /* Space between the items */
}

/* Responsive Styles */
@media (max-width: 768px) {
  .news-item {
      width: 100%; /* Full width on smaller screens */
      margin-right: 0; /* Remove margin on smaller screens */
      margin-bottom: 15px; /* Add margin below each item */
  }
  
  #news-container {
      flex-direction: column; /* Stack items vertically */
      overflow-x: visible; /* Disable horizontal scrolling */
      gap: 15px; /* Space between the items */
  }
}

@media (max-width: 480px) {
  .news-item h2 {
      font-size: 1em; /* Adjust font size for very small screens */
  }
  
  .news-item p {
      font-size: 0.8em; /* Adjust font size for very small screens */
  }
}


</style>

<body>
  <div class="all-content">
   
   <!-- navbar -->

  <?php
   include("nav.php");
  ?>

  
  <!-- navbar -->
<!-- main content -->
<main class="container mt-4">
  <h1 class="text-center">News & Updates</h1>
  <div id="news-container">
    <article class="news-item mb-4">
        <img src="images/charity.png" alt="Charity Event" class="news-img">
        <h2>Upcoming Charity Event</h2>
        <p>Join us for an exciting charity event aimed at supporting refugee families. Your participation will make a big difference!</p>
        <p>Date: Coming soon...</p>
        <p>Location: Announcing soon...</p>
        <a href="registration-page.html" class="btn btn-primary">Learn More</a>
    </article>
    <article class="news-item mb-4">
        <img src="images/event.png" alt="Immigration Program" class="news-img">
        <h2>New Immigration Assistance Program</h2>
        <p>We're launching a new program to provide additional resources and support for immigrants. Stay tuned for more details.</p>
        <p>Start Date: Coming soon...</p>
        <a href="registration-page.html" class="btn btn-primary">Learn More</a>
    </article>
    <article class="news-item mb-4">
        <img src="https://img.pikbest.com/origin/06/04/88/09DpIkbEsTICc.jpg!w700wp" class="news-img">
        <h2>Job Skills Workshop</h2>
        <p>Enhance your career prospects by joining our upcoming job skills workshop. Open to all community members.</p>
        <p>Date: Coming soon...</p>
        <p>Location: Announcing soon...</p>
        <a href="registration-page.html" class="btn btn-primary">Learn More</a>
    </article>
    <article class="news-item mb-4">
        <img src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t39.30808-6/273822117_3041200679347941_4524029618427858620_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=3a1ebe&_nc_eui2=AeEZ7zyGNHF0v2BmAN0SekwonEnktepf-76cSeS16l_7vsz31ONTyWfJ7XM0v-rDa5hdepxQAbNvU4R3G2Sy0Q1n&_nc_ohc=t6942VTmc2YQ7kNvgGeDnob&_nc_ht=scontent.fpnh20-1.fna&oh=00_AYDgGE1cstwrP6UP1ZzRio1nofW_ejedmPOrE5rJ80jUCg&oe=66BAA13E" alt="Healthcare Access" class="news-img">
        <h2>Healthcare Access Initiative</h2>
        <p>We are introducing a new initiative to improve healthcare access for underprivileged communities. More details to come.</p>
        <p>Start Date: Coming soon...</p>
        <a href="registration-page.html" class="btn btn-primary">Learn More</a>
    </article>
</div>

</main>

      <!-- footer -->
    <?php
      include("footer.php");
    ?>
      <!-- footer ends -->
      
      
         <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
      
      
        </div>
        <script src="index.js"></script>
        <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
          }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
      
        <!-- fadeup -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <!-- fadeup -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      </body>
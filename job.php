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
            <!-- Fade up -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Fade up -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>

<style>

  /* Job  */
  body {
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
  }
  .container {
    width: 80%;
    margin: auto;
    overflow: hidden;
    padding: 20px;
  }
  header {
    background: #5bdd52;
    color: white;
    padding: 1rem 0;
    text-align: center;
  }
  header h1 {
    margin: 0;
  }
  .intro {
    background: #ecf0f1;
    padding: 2rem;
    margin: 2rem 0;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .job-section {
    background: white;
    margin: 2rem 0;
    padding: 2rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .job-section h2 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
  }
  .job-list {
    list-style-type: none;
    padding: 0;
  }
  .job-list li {
    background: #f9f9f9;
    margin-bottom: 10px;
    padding: 15px;
    border-radius: 3px;
    transition: background-color 0.3s ease;
  }
  .job-list li:hover {
    background-color: #e0e0e0;
  }
  .resources {
    background: #3498db;
    color: white;
    padding: 2rem;
    margin-top: 2rem;
    border-radius: 5px;
  }
  .resources a {
    color: white;
    text-decoration: none;
    border-bottom: 1px dotted white;
  }
  .resources a:hover {
    border-bottom: 1px solid white;
  }
  .image-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin: 2rem 0;
  }
  .image-container img {
    max-width: 30%;
    height: auto;
    margin-bottom: 1rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  @media(max-width: 768px) {
    .container {
        width: 95%;
    }
    .image-container img {
        max-width: 100%;
    }
  }
  /* Job  */
  .job-section button {
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
  
  .job-section button:hover {
    background-color: #2fff00; /* Slightly darker green on hover */
    color:black;
  }

</style>



<body>

      <!-- navbar -->

      <?php
        include("nav.php");
      ?>
    
    
      
      <!-- navbar -->

<!-- job -->

    <header>
      <div class="container" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <h1>Job Opportunities in Cambodia for Refugees and Immigrants</h1>
      </div>
  </header>

  <div class="container">
      <section class="intro" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <h2>Cambodia's Job</h2>
          <p>Cambodia offers a unique blend of opportunities for refugees and immigrants seeking to build a new life. With its growing economy and welcoming attitude towards foreign workers, Cambodia presents various possibilities across different sectors.</p>
      </section>

      <div class="image-container" data-aos="zoom-in">
          <img src="https://www.touristsecrets.com/wp-content/uploads/portal_files/styles/1280x840/public/touristsecrets_site_posts/inline-images/2021-04/dcdc464d21f86d88f6c5db10743770a6.jpg" alt="Phnom Penh Skyline">
          <img src="https://4.bp.blogspot.com/-2fSiXb4rW1A/WibGaGnTq7I/AAAAAAAAL3o/cEPshWyfzEQ8kU7GiIXGClRgzXiHQTMXQCLcBGAs/s1600/angkor_wat.jpg" alt="Angkor Wat">
          <img src="https://th.bing.com/th/id/R.c9302c8549e34c2a3ee85c3cdd9f5148?rik=X5RM6SAYpPGPnw&pid=ImgRaw&r=0" alt="Local Cambodian Market">
      </div>

      <section class="job-section">
          <h2>Top Job In Cambodia</h2>
          <ul class="job-list">
              <li data-aos="fade-up"
              data-aos-anchor-placement="top-center">
                  <h3>construction</h3>
                  <p>In Cambodia, refugees working in construction often perform tasks like moving materials, mixing concrete, and assisting skilled tradespeople, with many involved in bricklaying, masonry, or carpentry. They frequently face long working hours, low wages, and hazardous conditions with minimal safety protections. Due to legal and documentation issues, they often work informally, which can lead to exploitation. Language barriers and a lack of formal training further complicate their situation, though opportunities for improvement could include better vocational training and enhanced labor protections.</p>
              </li>
              <li data-aos="fade-up"
              data-aos-anchor-placement="top-center">
                  <h3>Cleaning Services</h3>
                  <p>In Cambodia, refugees working in cleaning services are often employed to clean commercial spaces like offices, hotels, and public areas, as well as private homes. This work typically involves tasks such as dusting, vacuuming, mopping, and sanitizing surfaces. Cleaning services usually require physical effort and long hours, with employees often working early in the morning or late at night to avoid disrupting normal business operations. The pay for cleaning jobs is generally low and can be irregular, with many workers facing job insecurity and limited opportunities for advancement. Additionally, refugees might encounter challenges such as language barriers and lack of formal contracts, which can impact their working conditions and overall job stability.</p>
              </li>
              <li data-aos="fade-up"
              data-aos-anchor-placement="top-center">
                  <h3>NGOs and International Organizations</h3>
                  <p>Numerous non-governmental organizations operate in Cambodia, in fields like healthcare, education, economic growth, and human rights. NGOs prefer candidates with relevant degrees or work experience. Some provide benefits like health insurance and retirement plans. An NGO role allows you to gain valuable work experience while helping a good cause.</p>
              </li>
              <li data-aos="fade-up"
              data-aos-anchor-placement="top-center">
                  <h3>Security Services</h3>
                  <p>In Cambodia, refugees working in security services typically serve as security guards for businesses, construction sites, or residential areas. Their duties include monitoring premises, checking identification, and ensuring safety by patrolling the area and responding to any security incidents. The job often requires long hours, including night shifts, and involves maintaining vigilance and enforcing security protocols. Although it provides a stable form of employment, the pay is usually low, and the work can be physically demanding. Security guards may face challenges such as limited job advancement opportunities and potential exposure to risks depending on the environment in which they work.</p>
              </li>
              <li data-aos="fade-up"
              data-aos-anchor-placement="top-center">
                  <h3>Language Teaching</h3>
                  <p>In Cambodia, refugees involved in language teaching often provide informal instruction in languages like English or Khmer. They may offer private tutoring sessions to individuals or small groups, either in person or online, focusing on improving language skills for academic or personal use. Additionally, they might teach basic language classes in community centers or informal settings, helping other refugees or locals with language acquisition. Some also conduct short-term workshops or training sessions aimed at specific skills, such as conversational practice or business communication. Volunteering with NGOs or community organizations to teach language and facilitate cultural exchange is another common role, providing both educational and cultural benefits.</p>
              </li>
          </ul>
          <div class="col-12 text-center" data-aos="fade-up"
          data-aos-anchor-placement="top-center">
            <a href="registration-page.html"><button class="btn9 btn-primary btn-lg">Ask Us More!!!</button></a>
          </div>
      </section>

      <section class="job-section" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <h2>Work Permit and Visa Information</h2>
          <p>To work legally in Cambodia, you will need:</p>
          <ul>
              <li>A valid passport with at least 6 months validity</li>
              <li>A business visa (E-class visa), which can be obtained on arrival or through a Cambodian embassy</li>
              <li>A work permit from the Ministry of Labor and Vocational Training, typically arranged by your employer</li>
          </ul>
          <p>Note: Regulations may vary for refugees and immigrants. It's advisable to check with the relevant authorities or seek legal advice for your specific situation.</p>
      </section>

      <section class="job-section" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <h2>Living in Cambodia</h2>
          <p>Cambodia offers a relatively low cost of living compared to many Western countries. Here are some key points:</p>
          <ul>
              <li>Affordable housing, especially outside of prime areas in major cities</li>
              <li>Rich cultural experiences and historical sites</li>
              <li>Growing expat communities in cities like Phnom Penh and Siem Reap</li>
              <li>Challenges may include healthcare quality and infrastructure in some areas</li>
          </ul>
      </section>

      <section class="resources" data-aos="fade-up"
      data-aos-anchor-placement="top-center">
          <h2>Useful Resources</h2>
          <ul>
              <li><a href="https://www.bing.com/ck/a?!&&p=78b69b7b41cc0169JmltdHM9MTcyMjkwMjQwMCZpZ3VpZD0xYWM3YWYxZi1iMGVlLTYyZDMtMTc3MS1iY2UyYjFlNjYzOGMmaW5zaWQ9NTE4Mw&ptn=3&ver=2&hsh=3&fclid=1ac7af1f-b0ee-62d3-1771-bce2b1e6638c&psq=cambodia+jobs&u=a1aHR0cHM6Ly9ib25ndGhvbS5jb20v&ntb=1">Bong Thom Job</a></li>
              <li><a href="http://www.mlvt.gov.kh/">Ministry of Labor and Vocational Training</a></li>
              <li><a href="https://www.ngoforum.org.kh/">NGO Forum of Cambodia</a></li>
              <li><a href="https://www.khmerangkor.com/">Khmer Angkor Job Announcements</a></li>
          </ul>
      </section>
  </div>
<!-- job -->






   
       <!-- footer -->
    <?php
      include("footer.php");
    ?>
<!-- footer ends -->

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


   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
</div>
<!-- bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- bootstrap script -->
</body>
</html>
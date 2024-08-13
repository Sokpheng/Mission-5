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
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
     <!-- Fade up -->
   <!-- fonts links -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <!-- fonts links -->
</head>
<style>

.guide img{
  width: 100%;
  max-height: 550px;
  object-fit:contain cover;
}
.guide h2{
  font-size: 30px;
  font-weight: bold;
  color: #048709;
  margin-top: 20px;
  border-bottom-style:solid;
}
.guide h3{
  font-size: 25px;
  font-weight: bold;
  color: #793110;
  margin-top: 10px;
}
.guide p{
  font-size: 20px;
  color: #191d19;
}
.guide li{
  font-size: 20px;
  color: #191d19;
}
.guide a img{
  width: 40px;
  height: 40px;
  margin: 10px;
}
.exchange{
  text-align: center;
  background: #c0ccc6;
  padding: 0px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  height: fit-content;
  margin-top: 10px;
}
.mar10{
  margin: 10px 0;
}
.pad10{
  padding: 10px 20px;
}

input, select{
  margin: 10px;
  padding: 7px;
  font-size: 10px;
  outline: none;  
}
input{
  width: 25ch;
}
button{
  color: rgb(0, 0, 0); 
  margin: 10px; 
  border-color: #3a8710;
  padding: 0 40px;
  font-size: 10px;
  outline: none;
}


</style>
<body>
     <!-- navbar -->

  <?php
   include("nav.php");
  ?>


      <!-- navbar -->
    <div class="container guide">
        <div class="row"> <!--Financial Landscape-->
            <h2>Understanding the Financial Landscape</h2>
            <div class="col-lg-6" data-aos="zoom-in">
                <img src="images/econ1.jpg" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-up">                
                <h3>Currency:</h3>

                <p> Cambodia uses the Cambodian Riel (KHR), but the US Dollar (USD) is widely accepted,     especially in urban areas.</p>
                <h3>Banking System:</h3>
                    
                <p> Major banks include ACLEDA Bank, Canadia Bank, ABA Bank, and ANZ Royal Bank. Banks offer savings accounts, fixed deposits, and various loan products.</p>
                <div class="exchange" data-aos="fade-up">
                    <h2>Currency Exchange</h2>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-6 mar10">
                            <label for="amount">Amount:</label>
                            <input type="number" id="amount" placeholder="Enter amount">
                        </div>
                        <div class="col-md-6 mar10">
                            <label for="conversion-type">Conversion Type:</label>
                            <select id="conversion-type">
                                <option value="toRiel">USD to Riel</option>
                                <option value="toUSD">Riel to USD</option>                                
                            </select>
                        </div>
                        <div class="row mar10">
                            <div class="col-12">
                            <button onclick="convertCurrency()">Convert</button>
                            <p id="result"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Financial Landscape-->
        <div class="row" data-aos="fade-up"> <!--Open Bank account-->
            <h2>Opening a Bank Account</h2>
            <div class="col-lg-7 order-lg-2 mb-4">
                <img src="images/econ2.png" data-aos="zoom-in">
            </div>
            <div class="col-lg-5">                
                <h3>Requirements:</h3> 
                    <li>Valid passport and visa.</li> 
                    <li>Employment contract or proof of income.</li> 
                    <li>Some banks may require a minimum deposit.</li>
                <h3>Steps:</h3> 
                <p> 1, Choose a bank with convenient branch locations and services that meet your needs.<br>
                    2, Visit the bank with required documents. <br>
                    3, Fill out the application form and deposit the minimum required amount. <br>
                    4, Receive your account details and any related banking tools (e.g., ATM card).<br>
                </p>
                <h3>Spacial Case</h3>
                <p>Some bank accout can be created  visually  on mobile phone such as ABA, ACLEDA, ect.<br>
                    you just need to do as the instruction and requirement that provided in their application.
                </p>
            </div>
            
        </div><!--Open Bank account-->
        <div class="row" data-aos="fade-up"> <!--Save & Grow your money-->
            <div class="col-lg-6">
                <h2>Save your money</h2>
                <h3>Using Savings Accounts of the bank to help you save your Money</h3>
                <div class="ma10 pad10">
                    <h3>Regular Savings Account:</h3> 
                        <li>easy access to funds with minimal interest.</li>
                        <li>Fixed Deposit Account: Offers higher interest rates in exchange for locking your money for a set period.</li>
                    <h3>Interest Rates:</h3>
                        <li>Interest rates on savings accounts are generally low.</li>
                        <li>Fixed deposits offer better rates, typically ranging from 4% to 9% annually.</li> 
                    <h3>Tips:</h3>
                        <li>Compare interest rates and terms across different banks.</li>
                        <li>Consider currency risks if you plan to save in USD.</li>
                    <h3>Bank For Saving</h3>
                    <p>Here some recommendation bank in Cambodia that you can compare interest rates.</p>                    
                    <a href="https://www.acledabank.com.kh/kh/eng/ps_defixeddeposit" target="_blank" data-aos="fade-up" >
                        <img src="https://play-lh.googleusercontent.com/weU8O2dHEQffcEyHeK11qTUMS-AQvlHW1IolQDM1XLuZN0ggl6Zr9kUwBqHwXr7i5T0">
                    </a>
                    <a href="https://www.ababank.com/fixed-deposit/" target="_blank" data-aos="fade-up"> 
                        <img src="https://yt3.googleusercontent.com/ytc/AIdro_ljV-vXKHv8x9yHY_Z6RuI9jutIh6f8D0O1oYIY43fJiNo=s900-c-k-c0x00ffffff-no-rj">
                    </a>
                    <a href="https://www.wooribank.com.kh/personal-banking/saving-deposit/fortune-deposit-account/" target="_blank" data-aos="fade-up">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZzg5FDeMNC2b-5qebzUw-CRZNyeqAFjm0ow&s">
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <h2>Grow your money</h2>
                <h3>Investments:</h3>
                <div class="ma10 pad10" data-aos="fade-up">
                    <h3>1. Real Estate:</h3>

                        <li>Cambodia's real estate market has seen significant growth.</li>
                        <li>Foreigners can own property, but only above the ground floor (condominiums).</li>
                        <li>Thoroughly research property laws and consider working with a reputable real estate agent.</li>
                    <h3>2. Stock Market:</h3>

                        <li> Cambodia Securities Exchange (CSX) is relatively new but growing.</li>
                        <li> Consider mutual funds or ETFs for diversified exposure.</li>
                    <h3>3. Business Opportunities:</h3>

                        <li>Cambodia has a growing economy with opportunities in sectors like tourism, agriculture, and manufacturing.</li>
                        <li>Understand local business laws and consider partnerships with locals.</li>
                </div>
            </div>
        </div><!--Save & Grow your money-->
    </div>



 <!-- footer -->
    <?php
      include("footer.php");
    ?>
<!-- footer ends -->


   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
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
    
    <script src="java/econ.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
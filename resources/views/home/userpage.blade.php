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
      <link rel="shortcut icon" href="images/logowhite.png" type="">
      <title>Mangan</title> 
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>
         body {
            background-image: url('images/HomeImg.png');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat; 
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the page takes up at least the full height of the viewport */
         }

         .hero_area {
            flex: 1; /* Let the hero area grow to fill remaining space */
            position: relative; /* Ensure it's relatively positioned for footer placement */
         }

         .container {
            text-align: center; /* Center-align text */
            margin-bottom: 100px; /* Ensure space for the footer */
            background-image: url('path/to/your/image.jpg'); /* Specify path to your background image */
            background-size: cover; /* Cover the entire container */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
         }

         h1, p {
            text-align: left; /* Align text to the left */
            margin: 0 auto; /* Center horizontally */
            max-width: 800px; /* Set maximum width for content */
            padding: 0 20px; /* Add padding to the sides */
            width: 100%; /* Set width to 100% */
            height: auto; /* Set height to auto */
         }

         .footer {
            background-color: #333; /* Background color of the footer */
            color: white;
            text-align: center;
            padding: 20px 0; /* Adjust padding as needed */
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <div class="container">
         <h1 style="font-size: 70px;">Experience <br>authentic flavors </h1>
         <br><br>
<p style="font-size: 20px;">Embark on a journey of taste with our authentic flavors, carefully<br> crafted to transport you to the heart of Filipino cuisine. From classic<br> favorites to contemporary delights, savor the essence of tradition<br> with every bite.</p>
         </div>
         @include('home.slider')
         <!-- end slider section -->
      </div>

      <!-- footer section -->
      <div class="footer">
         <p>© 2024 All Rights Reserved. Mangan.</p>
      </div>

      <!-- jQuery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>

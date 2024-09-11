<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Google tag (gtag.js) -->
	 <script async src="https://www.googletagmanager.com/gtag/js?id=G-S79Y2FRX1H"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S79Y2FRX1H');
  </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Meta Tags Start ------------------------------------------------------>
	 <meta http-equiv='content-language' content='en-US'>
    <meta name="title" content="About Us - Visit India">
    <meta name="description" content="India is a land of enchanting landscapes, majestic mountains, lush green valleys, and golden deserts, offering an extraordinary blend of natural beauty and rich cultural heritage. ">
    <meta name="keywords" content="">
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://visitindia.live/about.php">
    <meta property="og:title" content="About Us - Visit India">
    <meta property="og:description" content="India is a land of enchanting landscapes, majestic mountains, lush green valleys, and golden deserts, offering an extraordinary blend of natural beauty and rich cultural heritage. ">
    <meta property="og:image" content="/images/preview.webp">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://visitindia.live/about.php">
    <meta property="twitter:title" content="About Us - Visit India">
    <meta property="twitter:description" content="India is a land of enchanting landscapes, majestic mountains, lush green valleys, and golden deserts, offering an extraordinary blend of natural beauty and rich cultural heritage. ">
    <meta property="twitter:image" content="/images/preview.webp">
    <!-------------------------------------------------------- Meta Tags End -->
    <title>About Us</title>

	<!-- tab logo -->
    <link rel="icon" type="image/x-icon" href="/images/tablogo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    
	<!-- bootstrap CSS file link -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
	<!-- custom css file link  -->
    <link rel="stylesheet" href="css/allstyle.css">

</head>
<body>
    <div id="top"></div>


    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-hiking"></i> GlobeTrekker </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.html">home</a>
            <a href="adventure.html">Adventure</a>
            <a href="map.html">map</a>
            <a href="blogs.html">blogs</a>
            <a href="events.html">Events</a>
            <a href="about.html">about us</a>
            
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <!--<a href="#" class="fas fa-shopping-cart"></a>-->
            <div id="search-btn" class="fas fa-search"></div>
        </div>

    </header>

    <!-- header section ends -->

    <!-- search form  -->

    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>

        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>


    <div class="banner-area"></div>

    <div class="content-area">
        <div class="who-we-are">
            <div class="title">
                <h1>Who We Are?</h1>
            </div>
            <div class="paragraph">
                <p>GlobeTrekker is your ultimate travel companion for exploring the world in 2023, designed and developed by a passionate team of adventurers and travel enthusiasts. Our website offers a comprehensive guide to the most breathtaking destinations, thrilling adventure activities, insider tips on hidden gems, and up-to-date information on global events and festivals. Whether you're interested in scaling mountain peaks, wandering through historic cities, or indulging in local delicacies, GlobeTrekker has everything you need to plan an unforgettable journey. <br>
                    With expert blogs, cultural insights, and recommendations on local crafts, foods, and traditions, we're here to ensure your travel experience is seamless and exciting. From exploring world wonders to discovering off-the-beaten-path experiences, GlobeTrekker helps you turn your travel dreams into reality. Let's embark on your next adventure together with GlobeTrekker!</p>
            </div>
        </div>

    </div>

    <div class="title">
        <h1>Contact us</h1>
    </div> 
    <div class="para">
    <p class="contact-para text-center text-muted">We are open for any suggestion or just to have a chat.</p>
    </div>			
    <div class="contact-container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
            <h2>Get in touch</h2>
                <form action="" method="post">
                    <input type="text" class="field" placeholder="Your Name" id="name" name="name" required>
                    <input type="text" class="field" placeholder="Your Email" id="email" name="email" required>
                    <input type="text" class="field" placeholder="Phone" id="phone" name="phone" required>
                    <textarea placeholder="Message" class="field" id="message" name="message" required></textarea>
                    <!-- <button class="send-btn">Send</button> -->
                    <input type="submit" class="send-btn" value="send" name="submit">
                    
                </form>
            </div>
        </div>
    </div>

    <?php 

    if(isset($_POST["name"]) && isset($_POST["email"])  && isset($_POST["phone"])  && isset($_POST["message"])) {

    // Connect to the database
    // $servername = "localhost";
    // $username = "u756689048_damitha99";
    // $password = "Imdj2023";
    // $dbname = "u756689048_contactusdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<script>alert('Error: Invalid email address');</script>");
    }


    // Validate the phone number
    if (!preg_match("/^\d{10}$/", $phone)) {
        die("<script>alert('Error: Invalid phone number');</script>");
    }

    // Insert data into the database
    $sql = "INSERT INTO visitors (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Sent Successfully!');</script>";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    }
    ?>

    <!-- ------scroller to top -->

    <a href="#top" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- custom js file link  -->
    <script src="js/allscript.js"></script>

</body>
</html>
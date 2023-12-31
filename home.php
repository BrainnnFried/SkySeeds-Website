<?php
    require_once 'classes/header.php';
    require_once 'classes/footer.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Document</title>
</head>
<body>
    <?php
        $header = new Header();
        $header->createHeader();
    ?>
    
    <header class="headerContainer">
      <div class="headerContent">
        <h1>Rooftop Farming, Where Fresh Meets Sky!</h1>
        <p>
          A sustainable oasis above the city, transforming urban spaces into
          thriving havens of fresh.
        </p>
        <div class="productBtn">
          <a href="#">View Our Products</a>
        </div>
      </div>
    </header>

    <div class="section1Container">
      <h1>Urban Agriculture & Rooftop Gardening</h1>
      <p class="description">
        The world is facing many problems nowadays, including a growing number
        of people living in cities, many of whom often do not have easy access
        to fresh food. To solve this problem, it is necessary to develop a new
        kind of agriculture that provides city residents with food security
        while also protecting the environment
      </p>
    </div>

    <div class="section2Container">
      <h1>Our Services</h1>
      <div class="serviceContainer">
        <div class="box">
          <h3>Garden Harvest</h3>
          <p>Immerse Yourself in a World of Exceptional Products</p>
          <img src="/asserts/arrow-right.png" alt="arrow-right-icon" />
        </div>
        <div class="box">
          <h3>Knowledge Hub</h3>
          <p>Embark on a Journey of Learning with Our Academy</p>
          <img src="/asserts/arrow-right.png" alt="arrow-right-icon" />
        </div>
        <div class="box">
          <h3>Consultation</h3>
          <p>
            Book now and start cultivating your green oasis in the heart of the
            city!
          </p>
          <img src="/asserts/arrow-right.png" alt="arrow-right-icon" />
        </div>
      </div>
    </div>

    <div class="section3Container">
      <h1>Begin Your Urban Farming Journey with SkySeeds</h1>
      <p>
        We are a team of specialist in Urban Agriculture & Rooftop Gardening.
        <br />
        We are dedicated to transforming urban spaces to a greener, healthier &
        happier environment!
      </p>
      <button class="button">
        <a href=""><b>Learn More</b></a>
      </button>
    </div>
    <div class="section4Container">
      <div class="section4Content">
        <h1>Get In Touch</h1>
        <p>
          Drop us a line to find out more about setting up your own urban farm
          or joining one of our events!
        </p>
        <button class="button">
          <a href="#"><b>Contact Us</b></a>
        </button>
      </div>
    </div>

    <?php
        $footer = new Footer();
        $footer->createFooter();
    ?>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Igor Gasperec - Portfolio</title>
        <link rel="stylesheet" href="/css/normalise.css">
        <link rel="stylesheet" href="/css/mystyles.css">
        <link rel="stylesheet" href="/css/form.css">
       
    </head>
    <body>
    
    <!-- Navbar -->
    <nav>
         <!-- ADD THIS div for the hamburger menu -->
         <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <!-- END of the added div -->
        <ul class="nav-list">
            <li><a href="/index.html">Home</a></li>
            <li><a href="/about.html">About Me</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li><a href="/experience.html">Experience</a></li>
            <li><a href="/resume.html">Resume</a></li>
            <li><a href="/work.html">Work</a></li>
            <li><a href="/more.html">More</a></li>
        </ul>
    </nav>


<!-- Contact Page -->
<main class="container contact-page">
  <div class="title-header">
    <h1>Contact Us</h1>
  </div>
  <form class="contact-form" action="submit-form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <input type="submit" value="Submit">
  </form>
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2023 Igor Gasperec. All rights reserved.</p>
</footer>
<script src="/js/script.js" defer></script>
</body>
</html>


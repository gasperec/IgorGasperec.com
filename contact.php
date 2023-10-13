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


<!-- Main Content -->
<main class="container">
    <!-- Replace with appropriate content for each page -->
    <h1 class="title-header">Contact Us</h1>
    <p>Please fill out the form below to send us a message.</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name *</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message *</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</main>
    
<!-- Footer -->
<footer>
    <p>&copy; 2023 Igor Gasperec. All rights reserved.</p>
</footer>
<script src="/js/script.js" defer></script>
</body>
</html>


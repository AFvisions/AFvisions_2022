<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Blog | AFvisions</title>
  <meta name="description" content="Hub for AFvisions' design, development, blog and other miscellaneous projects.">
  <meta name="Andrew Fumagalli" content="SitePoint">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Meta -->
  <meta property="og:title" content="A Basic HTML5 Template"> <!--  enhance the appearance of the web page when it’s linked in a social media post -->
  <meta property="og:type" content="Blog">
  <meta property="og:url" content="www.AFvisions.com/Blog">
  <meta property="og:description" content="Hub for AFvisions design, development and other miscellaneous projects.">
  <meta property="og:image" content="image.png"> 

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
<?php
wp_head();
?>

</head>

<body>

<!-- Headers -->
<div class="container">

   <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">AFvisions</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
   </header>
    
   <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Home</a>
      <a class="p-2 link-secondary" href="#">Portfolio</a>
      <a class="p-2 link-secondary" href="#">About</a>
      <a class="p-2 link-secondary" href="#">Blog</a>
      <a class="p-2 link-secondary" href="#">Contact</a>
    </nav>
  </div>

</div>

  <!-- your content here... -->
  <script src="js/bootsrap.js"></script>
</body>
</html>
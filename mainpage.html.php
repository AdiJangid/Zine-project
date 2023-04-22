<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blogging Website</title>
  <link rel="stylesheet" href="stylehome.css">
</head>
<body>
  <header>
    <div class="header-logo">Blogging Website</div>
    <nav>
      <ul>
        <li><a href="mainpage.html.php">Home</a></li>
        <li><a href="aboutmainpage.html">About</a></li>
        <li><a href="createpost.html">Create Post</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="mywebsite.html">Logout</a></li>
       
      </ul>
    </nav>
  </header>
  <main>
    <section class="post-list">
      <div class="frame">
      <?php
            echo $generate;
      ?>
      </div>
      
    </section>
  </main>
  <footer>
    <p>&copy</p>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
    $(window).on("load", function(){
      $('.frame').load('generate.php');
    });
</script>
</body>
</html>
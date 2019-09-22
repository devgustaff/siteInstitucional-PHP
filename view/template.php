<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $viewName ?></title>
    <link rel="stylesheet" href="<?php BASE_URL;?>public/css/style.css">
    <link 
      rel="stylesheet" 
      type="text/css" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css"
    >
  </head>

  <body>
    <header>
      <nav class="nav-logo">
        <img src="public/images/logo.jpg" alt="logo">
        <ul class="icon-sociais">
          <li><i class="fab fa-twitter-square"></i><a href="">Twiter</a></li>
          <li><i class="fab fa-instagram"></i><a href="">Instagram</a></li>
          <li><i class="fab fa-facebook-square"></i><a href="">Facebook</a></li>
        </ul>
      </nav>
      <div class="banner">
        <img src="public/images/banner.jpg" alt="banner">
      </div>
      <nav class="nav-main">
        <ul>
          <li><a href="<?php echo BASE_URL;?>">Home</a></li>
          <li><a href="<?php echo BASE_URL;?>portifolio">Portifolio</a></li>
          <li><a href="<?php echo BASE_URL;?>about">About</a></li>
          <li><a href="<?php echo BASE_URL;?>services">Services</a></li>
          <li><a href="<?php echo BASE_URL;?>contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <?php $this->loadView($viewName, $viewData);?>
    </main>
    
    <footer>
      <h5>Copy right 2019</h5>        
    </footer>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/J_logo2.png"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- End of boostrap -->
    <script src="https://kit.fontawesome.com/b510426974.js" crossorigin="anonymous"></script>
    <title>Jonah Louis</title>
</head>
<body>
  <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("social.php"); ?>

    <!-- Content Area -->
    <div class="container-sm" id="content">
      <!-- Introduction -->
      <div class="c-intro">
          <h1>Hi, I'm <span id="cHeader1-font1">Jonah.</span></h1>
          <h2><span id="cHeader2-font1">I love to create </span>websites & applications.</h2>
          <div class="cBtns">
            <a href=""><button type="button" class="cBtn">Start a Project</button></a>
            <a href=""><button type="button" class="cBtn">My Current Plans</button></a>  
          </div>
        </div>
      <!-- About me -->
      <div class="c-aboutMe">
        <div class="c-aboutMe-box">
          <h4 class="uni-subHeader">A little about me</h4>
          <p>I'm currently a Computer Science student attending my third year at Algonquin College. 
            Throughout the past years, I have been taught many things that have propelled me to write
            efficient code in order to create or problem solve. With consistency and persistence, I always
            continue to learn more about this beautiful world of code.
          </p>
        </div>
      </div>
      <!-- My interest -->  
     

    <!-- Footer -->
    <?php include("footer.php"); ?>
  </div>
</body>
</html>
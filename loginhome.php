<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>EasyPay</title>

  </head>
  <body>
    <nav class="nav-bar navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item  active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction.php">Transaction</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="Loan.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Loan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Personal</a>
                <a class="dropdown-item" href="#">Vehicle</a>
                <a class="dropdown-item" href="#">Education</a>
                <a class="dropdown-item" href="homeloan.php">HomeLoan</a>
                <a class="dropdown-item" href="#">GoldLoan</a>
              </div>
            </li>
             <li class="nav-item ">
              <a class="nav-link" href="Gr.php">Greivance Redressal</a>
            </li>
            
          </ul>       
          </div>          
            <a href="index.php" class="login">
               <button class="btn-login">Logout</button>
            </a>
              </nav>
    <header class="hero-section">
      <div class="hero-text-container">
        <h1
          >Next generation<br />
          digital banking</h1
        >
        <p
          >Take your financial life online. Your easy bank account<br />
          will be a one-stop-shop for spending,saving,<br />budgeting,investing,
          and much more.</p
        >
      </div>
      <div class="hero-img-container">
        <img src="./images/image-mockups.png" alt="" />
      </div>
    </header>
    <div class="container">
      <section class="why-us">
        <h1>Why choose Easybank?</h1>
        <p
          >We leverage open banking to turn your bank account into your
          financial hub.<br />Control your finances like never before.</p
        >
      </section>
      <section class="features-section">
        <div class="feature-item">
          <img src="./images/icon-online.svg" alt="" />
          <h1>Online Banking</h1>
          <p
            >Our modern web and mobile<br />
            applications allow you to keep<br />
            track of your finances whereever<br />
            you are in the world.</p
          >
        </div>
        <div class="feature-item">
          <img src="./images/icon-budgeting.svg" alt="" />
          <h1>Simple Budgeting</h1>
          <p
            >See exactly where your money<br />
            goes every month.Recieve<br />
            notifications when you're close to<br />
            hitting your limits./p >
          </p></div
        >

        <div class="feature-item">
          <img src="./images/icon-onboarding.svg" alt="" />
          <h1>Fast Onboarding</h1>
          <p
            >We don't do branches.Open your<br />
            accound minutes online and start<br />
            taking controll of your finances<br />
            right away.</p
          >
        </div>
        <div class="feature-item">
          <img src="./images/icon-api.svg" alt="" />
          <h1>Open API</h1>
          <p
            >Manage your savings, investments,<br />
            pension and much more from one<br />
            account.Tracking your money has<br />
            never been easier.</p
          >
        </div>
      </section>
      <section class="blog-section">
        <h1>Latest Articles</h1>
        <div class="article-container">
          <div class="article">
            <img src="./images/image-currency.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >The world is getting smaller and<br />
                we are becoming more mobile.So,<br />
                why should you be forced to only<br />
                recieve money in a single...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-restaurant.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >Our simple budgeting feature<br />
                allow to seperate out your<br />
                spending and set realistic limits<br />
                each month.That means you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-plane.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Take Your Easybank card<br />whereever you go.</h4>
              <p
                >We want you to enjoy your travels.<br />This is why we don't
                charge any<br />fees on purchase while you're <br />abroad.We'll
                even show you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-confetti.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Our invite-only Beta<br />accounts are live now!</h4>
              <p
                >After a lot of hardwork by the<br />
                whole team,we're excited to launch<br />
                our closed beta.It's easy to request <br />an invite through the
                site.</p
              >
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="social-container">
          <img src="./images/icon-facebook.svg" alt="" />
          <img src="./images/icon-instagram.svg" alt="" />
          <img src="./images/icon-twitter.svg" alt="" />
          <img src="./images/icon-pinterest.svg" alt="" />
        </div>
        <div class="menu">
          <a href="#">About us</a>
          <a href="#">Contact us</a>
          <a href="#">Blog</a>
        </div>
        <div class="menu">
          <a href="#">Carriers</a>
          <a href="#">Support</a>
          <a href="#">Privacy Policy</a>
        </div>
        <button>Request Invite</button>
      </div>
    </footer>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>
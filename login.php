<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">   
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.html" class="logo1"><img src="logo.png" alt=""> </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="browse.html" class="nav-link">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a href="nearme.html" class="nav-link">Near Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="res.html" class="nav-link">My Reservations</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
    <section class="hero" id="hero">
      <div class="container">
      </div>

<section class="login-headline between2">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline3">
                         <span class="first-letter">L</span>ogin<span> or </span> <span class="first-letter">R</span>egister
                    </h2>
                </div>
                <div class="animate-bottom">
                         <h1 class="headline2">TO HANDLE YOUR RESERVATIONS</h1>
                </div>
             </div>
         </div>
    </section>
    <footer>
        <div class="container">
           <div class="back-to-top">
               <a href="#hero"><i class="fas fa-chevron-up"></i></a>
           </div>
           <div class="footer-content">
               <div class="footer-content-about animate-top">
                <h4>About MealMap</h4>
                   <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                   <p>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
               </div>
               <div class="footer-content-divider animate-bottom">
                   <div class="social-media">
                       <h4>Follow Along</h4>
                          <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                             </li>
                          </ul>
                      </div>
                      <div class="newsletter-container">
                          
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address ...">

                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                      </form>
                  </div>
              </div>
     </div>
  </section>     
    </footer>
</body>
</html>
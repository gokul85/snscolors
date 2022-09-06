<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SNS COLORS</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="shortcut icon" href="img/SNS GROUPS.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/letters.png" class="letters" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <img src="./img/SNS GROUPS.png" height="50" alt="" />
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#events">Events</a>
                </li>
                <li>
                  <a href="#about">About</a>
                </li>
                
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="sign.html" class="active">Register Now</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">Hello World</h1>
              <p class="text">
                (👉ﾟヮﾟ)👉 Initiate to Inovate
              </p>
              <a href="#" class="btn">Explore Events</a>
            </div>

            <div class="column-2 image">
              <img
                src="./img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="./img/entry.svg" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      <section class="portfolio section" id="events">
        <div class="background-bg">
          <div class="overlay overlay-sm">
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle1"
              alt=""
            />
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle2"
              alt=""
            />
            <img src="./img/shapes/square.png" class="shape square" alt="" />
            <img src="./img/shapes/wave.png" class="shape wave" alt="" />
            <img src="./img/shapes/circle.png" class="shape circle" alt="" />
            <img
              src="./img/shapes/triangle.png"
              class="shape triangle"
              alt=""
            />
            <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          </div>
        </div>

        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Events">Choose your events</h3>
          </div>

          <div class="section-body">
            <div class="filter">
              <button class="filter-btn active" data-filter="*">BOOT-CAMP</button>
              <button class="filter-btn" data-filter=".iot,.android,.webdes,.botcom">IDEATHON</button>
            </div>

            <div class="grid">
              <div class="grid-item rpa">
                <div class="gallery-image">
                  <img src="./img/rpa.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Robotic Process Automation</h3>
                      <h5>Machine Learning</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item 3d">
                <div class="gallery-image">
                  <img src="./img/3d.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>3D Printing</h3>
                      <h5>Structural Design</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item android">
                <div class="gallery-image">
                  <img src="./img/android.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Android</h3>
                      <h5>Basic android application development</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item webdes">
                <div class="gallery-image">
                  <img src="./img/webdes.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Design</h3>
                      <h5>HTML/CSS</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item iot">
                <div class="gallery-image">
                  <img src="./img/iot.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Internet Of Things</h3>
                      <h5>Machine Automation</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item botcom">
                <div class="gallery-image">
                  <img src="./img/botcom.gif" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>BOT-Communication</h3>
                      <h5>Google Dialog Flow</h5>
                    </div>
                  </div>
                </div>
              </div>
             

      
          
              
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Event title">About this Event</h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">Instructions</h3>
              <p class="text">
                instructions go here
                /
                /
                /

              </p>
              <div class="skills">
                <div class="skill html">
                  <h3 class="skill-title">Learning</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="100%"></div>
                  </div>
                </div>
                <div class="skill css">
                  <h3 class="skill-title">Experimenting</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">Implimentation</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Location</h3>
              <p class="text">
                
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">SNS COLLEGE OF ENGINEERING</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">https://snsce.ac.in/</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <p class="info-text">07550316708</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
=======
<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SNS COLORS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="shortcut icon" href="img/SNS GROUPS.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <?php 
    if(!empty($_GET['message'])) {
      $message = $_GET['message'];
      echo '<div class="alert alert-success" role="alert">
      '.$message.
    '</div>';
    }
    ?>
    <main>
        <header id="header">
            <div class="overlay overlay-lg">
                <img src="./img/shapes/square.png" class="shape square" alt="" />
                <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
                <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
                <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                <img src="./img/shapes/letters.png" class="letters" alt="" />
                <img src="./img/shapes/points1.png" class="points points1" alt="" />
            </div>

            <nav>
                <div class="container">
                    <div class="logo">
                        <img src="./img/SNS GROUPS.png" height="50" alt="" />
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="#header">Home</a>
                            </li>
                            <li>
                                <a href="#events">Events</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>

                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                            <li>
                                <a href="sign.html" class="active">Register Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="container grid-2">
                    <div class="column-1">
                        <h1 class="header-title">Hello World</h1>
                        <p class="text">
                            (👉ﾟヮﾟ)👉 Initiate to Inovate
                        </p>
                        <a href="#" class="btn">Explore Events</a>
                    </div>

                    <div class="column-2 image">
                        <img src="./img/shapes/points2.png" class="points points2" alt="" />
                        <img src="./img/entry.svg" class="img-element z-index" alt="" />
                    </div>
                </div>
            </div>
        </header>

        <section class="portfolio section" id="events">
            <div class="background-bg">
                <div class="overlay overlay-sm">
                    <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                    <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                    <img src="./img/shapes/square.png" class="shape square" alt="" />
                    <img src="./img/shapes/wave.png" class="shape wave" alt="" />
                    <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                    <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                    <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                </div>
            </div>

            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="Workshop Domains">Choose your domains</h3>
                </div>

                <div class="section-body">
                    <div class="filter">
                        <button class="filter-btn active" data-filter="*">BOOT-CAMP</button>
                        <button class="filter-btn" data-filter=".iot,.android,.webdes,.botcom">IDEATHON</button>
                    </div>

                    <div class="grid">
                        <div class="grid-item android">
                            <div class="gallery-image">
                                <img src="./img/android.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>Android</h3>
                                        <h5>Basic android application development</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item webdes">
                            <div class="gallery-image">
                                <img src="./img/webdes.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>Web Design</h3>
                                        <h5>HTML/CSS</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item iot">
                            <div class="gallery-image">
                                <img src="./img/iot.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>Internet Of Things</h3>
                                        <h5>Machine Automation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item botcom">
                            <div class="gallery-image">
                                <img src="./img/botcom.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>BOT-Communication</h3>
                                        <h5>Google Dialog Flow</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item rpa">
                            <div class="gallery-image">
                                <img src="./img/rpa.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>Robotic Process Automation</h3>
                                        <h5>Machine Learning</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item 3d">
                            <div class="gallery-image">
                                <img src="./img/3d.gif" alt="" />
                                <div class="img-overlay">
                                    <div class="plus"></div>
                                    <div class="img-description">
                                        <h3>3D Printing</h3>
                                        <h5>Structural Design</h5>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
        </section>

        <section class="about section" id="about">
            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="Event title">About this Event</h3>
                </div>

                <div class="section-body grid-2">
                    <div class="column-1">
                        <h3 class="title-sm">Instructions</h3>
                        <p class="text">
                            instructions go here
                            /
                            /
                            /

                        </p>
                        <div class="skills">
                            <div class="skill html">
                                <h3 class="skill-title">Learning</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="100%"></div>
                                </div>
                            </div>
                            <div class="skill css">
                                <h3 class="skill-title">Experimenting</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="90%"></div>
                                </div>
                            </div>
                            <div class="skill js">
                                <h3 class="skill-title">Implimentation</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="contact" id="contact">
            <div class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title">Location</h3>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                            rerum odio incidunt doslorum officia dolorem eaque aprim?
                        </p>
                        <div class="information-wrap">
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p class="info-text">SNS COLLEGE OF ENGINEERING</p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <p class="info-text">SNSCE.com</p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p class="info-text">123-456-789</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h3 class="title">Contact us</h3>
                        <div class="row">
                            <input type="text" class="contact-input" placeholder="First Name" />
                            <input type="text" class="contact-input" placeholder="Last Name" />
                        </div>

                        <div class="row">
                            <input type="text" class="contact-input" placeholder="Phone" />
                            <input type="email" class="contact-input" placeholder="Email" />
                        </div>

                        <div class="row">
                            <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
                        </div>
                        <a href="#" class="btn">Send</a>
                    </div>
                </div>
            </div>
        </section>
>>>>>>> 26fd7357fcaf8a3e6b481d0377e4f270dd0a0a1a

    </main>

    <footer class="footer">
<<<<<<< HEAD
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
              SNS College of Engineering (Autonomous) is a multi- disciplinary global institution established in the year 2007, is affiliated to Anna University, Chennai and approved by AICTE, New Delhi. Since the inception, SNSCE has reformed and refined the boundaries of intellectual and creative thoughts as a 
              pre-eminent academic center

            </p>
          </div>


          <div class="grid-4-col footer-newstletter">
            
            <div class="footer-input-wrap">
              <input type="email" class="footer-input"  />
             
            </div>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2022 All rights reserved | Made by
              <span>Krishna Kumar CSE-II</span>
              and
              <span>Gokul CSE-III</span>
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow us</h3>
              <span class="footer-line"></span>
              <div class="social-media">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
=======
        <div class="container">
            <div class="grid-4">
                <div class="grid-4-col footer-about">
                    <h3 class="title-sm">About</h3>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                        officiis quo officia quia?
                    </p>
                </div>


                <div class="grid-4-col footer-newstletter">
                    <h3 class="title-sm">Subscribe</h3>
                    <p class="text">
                        Lorem ipsum dolor, sit amet ipsum dolor sit amet.
                    </p>
                    <div class="footer-input-wrap">
                        <input type="email" class="footer-input" placeholder="Email" />
                        <a href="#" class="input-arrow">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="copyright">
                    <p class="text">
                        Copyright&copy;2022 All rights reserved | Made by
                        <span>Krishna Kumar</span>
                    </p>
                </div>

                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Follow us</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 26fd7357fcaf8a3e6b481d0377e4f270dd0a0a1a
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
<<<<<<< HEAD
  </body>
</html>
=======
</body>

</html>
>>>>>>> 26fd7357fcaf8a3e6b481d0377e4f270dd0a0a1a

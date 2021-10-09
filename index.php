<?php
    // database connection
    $conn = mysqli_connect("localhost", "root", "", "portfolio") or mysqli_errno($conn);
    $msg = "";
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
        $sql = "INSERT INTO contact(name, email, subject, msg)VALUES('$name', '$email', '$subject', '$message')";
        if(mysqli_query($conn, $sql))
        {
            $msg = "Successfully sent message";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakesh Saha</title>
    <!-- custom style -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- typed script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <!-- waypoint script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- owl carousel script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- owl carousel cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <!-- scroll top button -->
    <div class="scroll-up-btn">
        <div class="fas fa-angle-up"></div>
    </div>

    <!-- start navbar section -->   
    <nav class="navbar">
        <div class="max-width">
            <ul class="menu1">
                <li><a href="http://rakeshsaha.unaux.com/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
            </ul>
            <div class="logo"><a href="http://rakeshsaha.unaux.com/"><<span>Rakesh Saha</span>/></a></div>
            <ul class="menu2">
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- ends navbar section  -->

    <!-- start home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, My Name Is</div>
                <div class="text-2">Rakesh Saha</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="https://www.linkedin.com/in/rakesh-saha-30a427211/" target="_blank">Hire Me</a>
            </div>
        </div>
    </section>
    <!-- ends home section -->

    <!-- start about section -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="img/about.jpg" alt="About">
                </div>
                <div class="column right">
                    <div class="text">I'm Rakesh and I'm a <span class="typing-2"></span></div>
                    <p>I Student of 2nd year Computer Science & Engineering and passionate about web UI/UX.I have done my 6 months internship at <b>ENCODERS UNLIMITED</b> as a web developer and created some awesome projects like Online examination system, Online taxi booking system. I am a fast learner and have a strong attitude to learn and to teach as well.</p>

                    <p>Interested to work with an organization that can give me an opportunity to work in an Innovative, competitive and challenging environment for developing my skills.</p>
                    <a href="Rakesh's Resume.pdf" download>Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ends about section -->

    <!-- start service section -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Designing</div>
                        <p>I am using HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP to design my awesome looking webpages.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Web Development</div>
                        <p>I am using PHP and MYSQL to develop my prjects like online examination system, online taxi booking system etc.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">User Experience</div>
                        <p>I am using JAVASCRIPT, JQUERY to make user experience very fast and reliable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ends service section -->

    <!-- start skills section -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative <span>Skills & Experience</span></div>
                    <p>I Student of 2nd year Computer Science & Engineering and passionate about web UI/UX.I have done my 6 months internship at encoders unlimited as a web developer and created some awesome projects like Online examination system, Online taxi booking system.</p>
                    <p>I am also love to work on wordpress development.</p>
                    <a href="https://www.linkedin.com/in/rakesh-saha-30a427211/" target="_blank">Read More</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                          <span>HTML</span>
                        </div>
                        <div class="progress-line html">
                          <span></span>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                          <span>CSS</span>
                        </div>
                        <div class="progress-line css">
                          <span></span>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                          <span>JavaScript</span>
                        </div>
                        <div class="progress-line js">
                          <span></span>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                          <span>PHP</span>
                        </div>
                        <div class="progress-line php">
                          <span></span>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                          <span>MySQL</span>
                        </div>
                        <div class="progress-line mysql">
                          <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ends skills section -->

    <!-- start project section -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="img/project1.PNG" alt="">
                        <div class="text">Taxi Booking System</div>
                        <p>This is a online taxi booking system with instamojo payment gateway.</p>
                        <a href="https://sometaxi.com/" target="_blank">View Project</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="img/project2.PNG" alt="">
                        <div class="text">Online Examination System</div>
                        <p>This is a online examination system with instant result checking.</p>
                        <a href="http://onlineexamination.unaux.com/" target="_blank">View Project</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="img/project3.PNG" alt="">
                        <div class="text">Corona Updates With States</div>
                        <p>This website shows live corona cases in all states of India.</p>
                        <a href="https://encodersunlimited.com/Corona_update" target="_blank">View Project</a>
                    </div>
                </div>
                <!--<div class="card">
                    <div class="box">
                        <img src="img/project4.PNG" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="img/project5.PNG" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- ends project section -->

    <!-- start contact section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>I am here to create a meaningfull and long lasting relationship with my clients.If you have any query to my work feel free to <b>contact me</b>. </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Rakesh Saha</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Siliguri,West Bengal,India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">rakeshsaha87550@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                        <p style="color: red; font-weight:bold; margin-top:7px;"><?php echo $msg; ?></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ends contact section -->
    <!-- footer section start -->
    <footer>
        <span>Created By <a target="_blank" href="https://www.linkedin.com/in/rakesh-saha-30a427211/">Rakesh Saha</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    
    <!-- custom js -->
    <script src="custom.js"></script>
</body>
</html>
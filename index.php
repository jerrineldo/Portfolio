<?php

require_once './models/projects.php';
require_once './models/database.php';

$db = DatabaseContext::dbConnect();
$ProjectDto = new Project();
$projectList = $ProjectDto->getallProjects($db);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("./Library/SendEmail.php");

$message_sent = false;

if (isset($_POST['sendmessage_button'])) {

  $email = htmlspecialchars($_POST['contactsection_email']);
  $name =  htmlspecialchars($_POST['contactsection_name']);
  $subject = htmlspecialchars($_POST['contactsection_subject']);
  $message = htmlspecialchars($_POST['contactsection_message']);
  send_email("jerrineldo.mp@gmail.com", $name, $subject, $email, $message);
  $message_sent = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script src="js/typed.js-master/typed.js-master/lib/typed.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Jerrin Eldo</title>
</head>

<body>
  <div class="main-container">
    <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
      <a class="navbar-brand" href="#"><img src="./images/Logos/main-logo_jerrin.PNG" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-right justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#home-section">Home</a>
          <a class="nav-item nav-link" href="#about-section">About</a>
          <a class="nav-item nav-link" href="#projects-section">Projects</a>
          <a class="nav-item nav-link" href="#skill-section">Skills</a>
          <a class="nav-item nav-link" href="#contact-section">Contact</a>
        </div>
      </div>
    </nav>
    <!-- <img style = "width: 100%;" src="images/Background.jpg"> -->
    <div class="home-section" id="home-section">
      <div class="container mainpageimagecontainer float-left">
        <img class="img-fluid mainimage" src="./images/Jerrin Eldo Mazhuvancherry.jpg" alt="Jerrin's Profile Picture">
      </div>
      <div class="mainpagecontent col">
        <p class="text-lg-left designation row">Hi there ! I'm</p>
        <h2 class="name row">Jerrin Eldo Mazhuvancherry</h2>
        <p class="smallbio row">A Web Developer passionate about creating interactive applications and experiences on the web.</p>
        <span class="text-slider-items">Web Developer</span>
        <strong class="text-lg-left text-slider designation mainpage-message"></strong>
        <div class="socialsList">
          <ul class="row">
            <li class="col-md-8">
              <a href="https://www.linkedin.com/in/jerrin-eldo-mazhuvancherry-p" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/fluent/48/26e07f/linkedin.png" /></a>
            </li>
            <li class="col-md-8">
              <a href="https://github.com/jerrineldo" class="icon" target="_blank" rel="noopener noreferrer"><img class="icon" src="./images/icons/github.svg" /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="about-section section flex justify-content-center " id="about-section">
      <div class="sectionhead mx-auto">
        <span>Some Info</span>
        <h2>ABOUT ME</h2>
      </div>
      <div class="jumbotron my-auto set-width mx-auto">
        <p class="
              about-description
              row
              align-items-center
              justify-content-center
            ">
          I'm a passionate web developer with a background in Computer Science
          and Engineering. My 3 years of Information Technology experience has
          given me a strong foundation for web development and building
          complex solutions. Recently, I graduated from Humber College's
          (Canada) Web Development Program. I am passionate about coding and
          solving problems through code, and I am excited to work alongside
          other amazing programmers and learn so much more!
        </p>
        <div class="row justify-content-center mt-4">
          <a href="https://jerrinthedeveloper.tech/media/Jerrin-Resume.pdf" class="btn download_resume">Download Resume</a>
        </div>
      </div>
    </div>
    <!-- Start of Project Section -->
    <div class="projects-section section" id="projects-section">
      <div class="sectionhead mx-auto">
        <span>TAKE A LOOK AT MY</span>
        <h2>PROJECTS</h2>
      </div>
      <?php foreach ($projectList as $Project) { ?>
        <div class="jumbotron mb-4 set-width project-jumbotron">
          <!-- Project 1  -->
          <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
            <div class="card-horizontal">
              <div class="mt-3 workimagecontainer">
                <div id="<?php echo $Project->carouselId ?>" class="carousel slide" data-ride="carousel">
                  <?php
                  $dir = "./images/" . $Project->carouselId . "/*.png";
                  $images = glob($dir);
                  ?>
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <?php
                    for ($x = 0; $x < count($images); $x++) {
                      echo "<li data-target='#" . $Project->carouselId . "' data-slide-to='" . $x . "'></li>";
                    }
                    ?>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <?php
                    foreach ($images as $image) :
                      echo "<div class='carousel-item'>
                              <img class='project-image' src='" . $image . "' alt='Card image cap' />
                            </div>";
                    //echo $image;
                    endforeach;
                    ?>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#<?php echo $Project->carouselId ?>" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#<?php echo $Project->carouselId ?>" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

                  <!-- <img class="card-img float-left project-image" src="./images/TimeMatters-Logo.jpg" alt="Card image cap" /> -->
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $Project->project_name ?></h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies & Softwares Used: <span class="technologies"><?php echo $Project->technologies ?></span>
                  </li>
                  <li class="list-group-item">
                    <?php echo $Project->project_description ?>
                  </li>
                </ul>
                <div class="card-body">
                  <div class="row justify-content-around">
                    <a href="<?php echo $Project->github ?>" class="btn card-link sendmessage_button col-3 col-sm-8 col-md-3 col-lg-2">GitHub</a>
                    <a href="<?php echo $Project->live_link ?>" class="btn  card-link sendmessage_button col-3 col-sm-8 col-md-3 col-lg-2">Live</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- End of Project Section -->
    <!-- Start of skill Section -->
    <div class="skill-section section justify-content-center" id="skill-section">
      <div class="sectionhead mx-auto">
        <span>CHECK OUT MY</span>
        <h2>SKILLS</h2>
      </div>
      <div class="jumbotron my-auto set-width mx-auto">
        <ul class="skillsgrid">
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/ultraviolet/40/000000/html-filetype.png" />
            </div>
            <p>HTML</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/ultraviolet/40/000000/css-filetype.png" />
            </div>
            <p>CSS</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/nolan/64/javascript.png" />
            </div>
            <p>JavaScript</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/ios-filled/50/000000/jquery.png" />
            </div>
            <p>Jquery</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/fluent/48/000000/visual-studio-code-2019.png" />
            </div>
            <p>VS Code</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="./images//Logos/microsoft-net.png" />
            </div>
            <p>ASP.NET</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/cute-clipart/64/000000/github.png" />
            </div>
            <p>GitHub</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/nolan/64/cs.png" />
            </div>
            <p>C#</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="./images/Logos/nodejs.png" />
            </div>
            <p>Node.js</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/metro/26/000000/sql.png" />
            </div>
            <p>SQL</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/color/48/000000/visual-studio.png" />
            </div>
            <p>Visual S</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/color/48/000000/bootstrap.png" />
            </div>
            <p>Bootstrap</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/plasticine/100/000000/react.png" />
            </div>
            <p>React.js</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/nolan/64/xml.png" />
            </div>
            <p>XML</p>
          </li>
          <li>
            <div class="skillcontainer">
              <img src="https://img.icons8.com/metro/26/000000/php.png" />
            </div>
            <p>PHP</p>
          </li>


        </ul>

      </div>
    </div>
    <!-- End of Skill Section -->
    <!-- Contact Section -->
    <div class="contact-section section justify-content-center" id="contact-section">
      <div class="sectionhead mx-auto">
        <span>Get in Touch</span>
        <h2>SEND A MESSAGE</h2>
      </div>
      <div class="jumbotron my-auto set-width mx-auto">
        <?php if ($message_sent) { ?>
          <h4 class="sent-notification">Thanks, I will get in touch</h4>
        <?php } else { ?>
          <form method="POST" class="needs-validation" name="contactform" id="contactform" novalidate>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="contactsection_email" placeholder="Email*" name="contactsection_email" required value="<?php echo isset($_POST['contactsection_email']) ? $_POST['contactsection_email'] : ''; ?>" />
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="contactsection_name" placeholder="Your Name*" name="contactsection_name" required value="<?php echo isset($_POST['contactsection_name']) ? $_POST['contactsection_name'] : ''; ?>" />
                <div class="invalid-feedback">Please enter a valid name.</div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="contactsection_subject" placeholder="Subject*" name="contactsection_subject" required value="<?php echo isset($_POST['contactsection_subject']) ? $_POST['contactsection_subject'] : ''; ?>" />
              <div class="invalid-feedback">Please enter a valid subject.</div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="contactsection_message" placeholder="Your Message*" rows="3" name="contactsection_message" required>
<?php echo isset($_POST['contactsection_message']) ? $_POST['contactsection_message'] : ''; ?></textarea>
              <div class="invalid-feedback">Please enter a message.</div>
            </div>
            <div class="form-group col-8 col-md-4 col-xl-4 mx-auto">
              <button name="sendmessage_button" type="submit" class="btn sendmessage_button form-control ">
                Send a Message
              </button>
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
    <!-- End of Contact Section -->
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-2 main-footer">
      <!-- Footer Elements -->
      <div class="container">
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center mb-0">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/jerrineldo/">
              <img src="https://img.icons8.com/android/24/4a90e2/facebook-new.png" />
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1" href="https://www.instagram.com/thenameis_jerrin/">
              <img src="https://img.icons8.com/nolan/64/instagram-new.png" />
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1" href="https://github.com/jerrineldo">
              <img src="https://img.icons8.com/nolan/64/github.png" />
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1" href="https://www.linkedin.com/in/jerrin-eldo-mazhuvancherry-p/">
              <img src="https://img.icons8.com/fluent/48/26e07f/linkedin.png" />
            </a>
          </li>
        </ul>
        <!-- Social buttons -->
      </div>
      <!-- Footer Elements -->
      <!-- Copyright -->
      <div class="footer-copyright text-center ">© Jerrin Eldo Mazhuvancherry 2020
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
</body>

</html>
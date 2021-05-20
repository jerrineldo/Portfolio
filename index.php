
<?php

if(isset($_POST['sendmessage_button'])){

  $email = htmlspecialchars($_POST['contactsection_email']);
  $name =  htmlspecialchars($_POST['contactsection_name']);
  $subject = htmlspecialchars($_POST['contact-section_subject']);
  $message = htmlspecialchars($_POST['contact-section_message']);

  $tomailaddress = "jerrineldo.mp@gmail.com";
  $messagebody = "";
  $messagebody .="From: ".$name. "\r\n";
  $messagebody .="Email: ".$email. "\r\n";
  $messagebody .="Subject: ".$subject. "\r\n";
  $messagebody .="Message: ".$message. "\r\n";

  mail($tomailaddress,$subject,$messagebody);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/typed.js-master/typed.js-master/lib/typed.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="main-container">
      <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
        <a class="navbar-brand" href="#"> Jerrin Eldo Mazhuvancherry </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse navbar-right justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#home-section">Home</a>
            <a class="nav-item nav-link" href="#about-section">About</a>
            <a class="nav-item nav-link" href="#skill-section">Skills</a>
            <a class="nav-item nav-link" href="#projects-section">Projects</a>
            <a class="nav-item nav-link" href="#">Education</a>
            <a class="nav-item nav-link" href="#contact-section">Contact</a>
            <a class="nav-item nav-link" href="#">Resume</a>
          </div>
        </div>
      </nav>
      <!-- <img style = "width: 100%;" src="images/Background.jpg"> -->
      <div class="home-section" id="home-section">
        <p class="text-lg-left designation">Web Developer</p>
        <span class="text-slider-items"> Hi There, Nice to Meet You! </span>
        <strong
          class="text-lg-left text-slider designation mainpage-message"
        ></strong>
      </div>
      <div
        class="about-section section d-flex justify-content-center"
        id="about-section"
      >
        <div class="jumbotron my-auto set-width">
          <p
            class="
              about-description
              row
              align-items-center
              justify-content-center
            "
          >
            I'm a passionate web developer with a background in Computer Science
            and Engineering. My 3 years of Information Technology experience has
            given me a strong foundation for web development and building
            complex solutions. Recently, I graduated from Humber College's
            (Canada) Web Development Program. I am passionate about coding and
            solving problems through code, and I am excited to work alongside
            other amazing programmers and learn so much more!
          </p>
        </div>
      </div>
      <!-- Start of Project Section -->
      <div class="projects-section section" id="projects-section">
        <div class="jumbotron my-auto set-width project-jumbotron">
          <!-- Project 1  -->
          <div
            class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            "
          >
            <div class="card-horizontal">
              <img
                class="card-img float-left project-image"
                src="./images/TimeMatters-Logo.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Time Matters</h5>
                <p class="card-text"></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies Used : Clarion, SQL, C#
                  </li>
                  <li class="list-group-item">
                    Time Matters is a leading law practice management software,
                    used by thousands of law firms accross U.S and Canada.
                  </li>
                  <li class="list-group-item">
                    With countless customization options, and features that law
                    firms use daily, Time Matters makes it easy to create
                    documents, manage matters, track time, and conduct the
                    business of law.
                  </li>
                </ul>
                <div class="card-body">
                  <a
                    href="https://pclawtimematters.ca/timematters/"
                    class="card-link"
                    >Official Website</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End of Project 1 -->
          <!-- Project 2  -->
          <div
            class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            "
          >
            <div class="card-horizontal">
              <img
                class="card-img float-left project-image"
                src="./images/Cognizant-Logo.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Web Applications</h5>
                <p class="card-text"></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies Used : HTML,CSS, Ajax, JavaScript, JQuery, C#,
                    MVC.NET , SQL
                  </li>
                  <li class="list-group-item">
                    Application were used by our company's internal employees
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End of Project 2 -->
          <!-- Project 3  -->
          <div
            class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            "
          >
            <div class="card-horizontal">
              <img
                class="card-img float-left project-image"
                src="./images/Restaurant-Website.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Restaurant Website</h5>
                <p class="card-text"></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies Used : HTML, CSS, JQuery, JavaScript
                  </li>
                  <li class="list-group-item">
                    Worked with a team to develop a restaurant Website from
                    scratch.
                  </li>
                  <li class="list-group-item">
                    I was specifically involved in incorporating a Maps facility
                    in one of the pages using the Maps API. I also specifically
                    worked on a game page where the user never wins.
                  </li>
                </ul>
                <div class="card-body">
                  <a
                    href="https://github.com/jerrineldo/RestaurantProject"
                    class="card-link"
                    >Github</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End of Project 3 -->
          <!-- Project 4  -->
          <div
            class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            "
          >
            <div class="card-horizontal">
              <img
                class="card-img float-left project-image"
                src="./images/HospitalProject.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Hospital Redesign Website</h5>
                <p class="card-text"></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies Used : HTML, CSS, JQuery, JavaScript,
                    Bootstrap, C#, MVC.NET, Microsoft SQL Server, Entity
                    Framework
                  </li>
                  <li class="list-group-item">
                    Worked with a team to redesign a hospital Website.
                  </li>
                  <li class="list-group-item">
                    I was specifically involved in implementing a departments
                    and testimonials feature for the website.
                  </li>
                  <li class="list-group-item">
                    This was a fully functional website with an inbuild CMS
                    feature. Admins would have the functionality to do CRUD
                    operations on all the testimoials in the database.
                  </li>
                </ul>
                <div class="card-body">
                  <a
                    href="https://github.com/jerrineldo/HospitalProject"
                    class="card-link"
                    >Github</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End of Project 4 -->
          <!-- Project 5  -->
          <div
            class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            "
          >
            <div class="card-horizontal">
              <img
                class="card-img float-left project-image"
                src="./images/ChopperForce.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">ChopperForceFive</h5>
                <p class="card-text"></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technologies Used : HTML, CSS, JavaScript, Bootstrap, PHP,
                    SQL
                  </li>
                  <li class="list-group-item">
                    An HR application developed for the us army.
                  </li>
                  <li class="list-group-item">
                    Implemented A login Functionality for the Application
                  </li>
                  <li class="list-group-item">
                    Created a Personnel, and Fitness Report pages for the
                    application
                  </li>
                </ul>
                <div class="card-body">
                  <a
                    href="https://github.com/jerrineldo/ChopperForce"
                    class="card-link"
                    >GitHub</a
                  >
                  <a
                    href="https://chopperforce-hr-app.herokuapp.com/Pages/Login.php"
                    class="card-link"
                    >Live</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End of Project 5 -->
        </div>
      </div>
      <!-- End of Project Section -->
      <!-- Start of skill Section -->
      <div
        class="skill-section section d-flex justify-content-center"
        id="skill-section"
      >
        <div class="jumbotron my-auto set-width">
          <div class="sectionhead">
            <hr />
            <span>CHECK OUT MY</span>
            <h2>Skills</h2>
          </div>
          <ul class="skillsgrid">
            <li>
              <div class="skillcontainer">
                <img
                  src="https://img.icons8.com/ultraviolet/40/000000/html-filetype.png"
                />
              </div>
              <p>HTML</p>
            </li>
            <li>
              <div class="skillcontainer">
                <img
                  src="https://img.icons8.com/ultraviolet/40/000000/css-filetype.png"
                />
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
                <img
                  src="https://img.icons8.com/ios-filled/50/000000/jquery.png"
                />
              </div>
              <p>Jquery</p>
            </li>
            <li>
              <div class="skillcontainer">
                <img
                  src="https://img.icons8.com/fluent/48/000000/visual-studio-code-2019.png"
                />
              </div>
              <p>VS Code</p>
            </li>
            <li>
              <div class="skillcontainer">
                <img
                  src="https://img.icons8.com/cute-clipart/64/000000/github.png"
                />
              </div>
              <p>GitHub</p>
            </li>
          </ul>
        </div>
      </div>
      <!-- End of Skill Section -->
      <!-- Contact Section -->
      <div
        class="contact-section section d-flex justify-content-center"
        id="contact-section"
      >
        <div class="jumbotron my-auto set-width">
          <div class="sectionhead">
            <h2>Send a Message</h2>
          </div>
          <form
            method="POST"
            action="index.php"
            class="needs-validation"
            name="contactform"
            id="contactform"
            novalidate
          >
            <div class="form-row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  id="contact-section_email"
                  placeholder="Email*"
                  name="contactsection_email"
                  required
                  value="<?php echo isset($_POST['contactsection_email'])?$_POST['contactsection_email']:''; ?>"
                />
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  id="contactsection_name"
                  placeholder="Your Name*"
                  name="contactsection_name"
                  required
                  value="<?php echo isset($_POST['contactsection_name'])?$_POST['contactsection_name']:''; ?>"
                />
                <div class="invalid-feedback">Please enter a valid name.</div>
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="contact-section_subject"
                placeholder="Subject*"
                name="contact-section_subject"
                required
                value="<?php echo isset($_POST['contact-section_subject'])?$_POST['contact-section_subject']:''; ?>"
              />
              <div class="invalid-feedback">Please enter a valid subject.</div>
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                id="contact-section_message"
                placeholder="Your Message*"
                rows="3"
                name="contact-section_message"
                required
              >
<?php echo isset($_POST['contact-section_message'])?$_POST['contact-section_message']:''; ?></textarea
              >
              <div class="invalid-feedback">Please enter a message.</div>
            </div>
            <button
              name="sendmessage_button"
              type="submit"
              class="btn btn-primary"
            >
              Send
            </button>
          </form>
        </div>
      </div>
      <!-- End of Contact Section -->
      <!-- Footer -->
      <footer class="page-footer font-small unique-color-dark pt-2">
      <!-- Footer Elements -->
        <div class="container">
          <!-- Social buttons -->
          <ul class="list-unstyled list-inline text-center mb-0">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
          </ul>
        <!-- Social buttons -->
        </div>
        <!-- Footer Elements -->
        <!-- Copyright -->
        <div class="footer-copyright text-center ">© Jerrin Eldo 2020
        </div>
        <!-- Copyright -->
      </footer>
<!-- Footer -->
    </div>
  </body>
</html>

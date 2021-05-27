<?php

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
  <title>Jerrin Eldo-Web Developer</title>
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
          <a class="nav-item nav-link" href="#resume-section">Resume</a>
        </div>
      </div>
    </nav>
    <!-- <img style = "width: 100%;" src="images/Background.jpg"> -->
    <div class="home-section" id="home-section">
      <div class="container mainpageimagecontainer float-left d-flex flex-row">
        <img class="img-fluid mainimage" src="./images/Jerrin Eldo Mazhuvancherry.jpg" alt="Chania">
      </div>
      <div class="mainpagecontent">
        <p class="text-lg-left designation">HI THERE ! I'M</p>
        <h2 class="name">Jerrin Eldo Mazhuvancherry</h2>
        <p class="smallbio">A Web Developer passionate about creating interactive applications and experiences on the web.</p>
        <span class="text-slider-items">Web Developer , Full Stack Developer</span>
        <strong class="text-lg-left text-slider designation mainpage-message"></strong>
        <ul class="socialsList">
          <li>
            <a href="https://www.linkedin.com/in/jerrin-eldo-mazhuvancherry-p" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/fluent/48/26e07f/linkedin.png" /></a>
          </li>
          <li>
            <a href="https://github.com/jerrineldo" class="icon" target="_blank" rel="noopener noreferrer"><img class="icon" src="./images/icons/github.svg" /></a>
          </li>
        </ul>
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
      </div>
    </div>
    <!-- Start of Project Section -->
    <div class="projects-section section" id="projects-section">
      <div class="sectionhead mx-auto">
        <span>TAKE A LOOK AT MY</span>
        <h2>PROJECTS</h2>
      </div>
      <div class="jumbotron my-auto set-width project-jumbotron">
        <!-- Project 1  -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class="workimagecontainer">
              <img class="card-img float-left project-image" src="./images/TimeMatters-Logo.jpg" alt="Card image cap" />
            </div>
            <div class="card-body">
              <h5 class="card-title">TIME MATTERS</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies & Softwares Used: <span class="technologies">Clarion , SQL , C# , Microsoft Visual Studio , Urban Turtle for Team Foundation Server</span>
                </li>
                <li class="list-group-item">
                  Time Matters is a leading law practice management software,
                  used by thousands of law firms accross U.S and Canada.
                </li>
                <li class="list-group-item">
                  Part of an agile development team to make enhancements and bug fixes for the software.
                </li>
                <li class="list-group-item">
                  Involved in Unit Testing and deployment of builds to the corresponding QA teams.
                </li>
                <li class="list-group-item">
                  Involved in monitoring critical production issues and fixing it in less than the stipulated time.
                </li>
                <li class="list-group-item">
                  Analysing client requirements in accordance with the customers using the software, grooming specific tasks and developing them within the featured sprint.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://pclawtimematters.ca/timematters/" class="card-link">Official Website</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Project 1 -->
        <!-- Project 2  -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class="workimagecontainer">
              <img class="card-img float-left project-image" src="./images/Cognizant-Logo.jpg" alt="Card image cap" />
            </div>
            <div class="card-body">
              <h5 class="card-title">Cognizant Corporate Security Applications</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies & Softwares Used: <span class="technologies">HTML , CSS , Ajax , JavaScript , JQuery , ASP.NET MVC , C# ,
                    MVC.NET , SQL</span>
                </li>
                <li class="list-group-item">
                  Active involvement in Major Enhancements/Change Requests
                </li>
                <li class="list-group-item">
                  Experience in trouble shooting/bug fixing, Production Activities and Incident Management Support
                </li>
                <li class="list-group-item">
                  Involved in unit testing and deployment of the product to their respective Dev , SIT and UAT servers
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End of Project 2 -->
        <!-- Project 3  -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class=" mt-3 workimagecontainer">
              <div id="RestaurantWebsite" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#RestaurantWebsite" data-slide-to="0" class="active"></li>
                  <li data-target="#RestaurantWebsite" data-slide-to="1"></li>
                  <li data-target="#RestaurantWebsite" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/RestaurantAroma/AromaHomePage.png" class="project-image" alt="AromaRestaurant-HomePage">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/RestaurantAroma/LocationPage.png" class="project-image" alt="AromaRestaurant-LocationPage">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/RestaurantAroma/GamePage.png" class="project-image" alt="ChooperForce-GamePage">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#RestaurantWebsite" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#RestaurantWebsite" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Aroma Restaurant Website</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies and Softwares Used : <span class="technologies">HTML , CSS , JQuery , JavaScript, VS-Code</span>
                </li>
                <li class="list-group-item">
                  Worked with a team to develop a potential restaurant Website.
                </li>
                <li class="list-group-item">
                  Was specifically involved in incorporating a Maps facility
                  in one of the pages using the Maps API.
                </li>
                <li class="list-group-item">
                  Worked on a game page where the user never wins using the shuffle algorithum in Javascript.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://aromarestaurant.herokuapp.com/" class="card-link">Live</a>
                <a href="https://github.com/jerrineldo/RestaurantProject" class="card-link">Github</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Project 3 -->
        <!-- Project 4  -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class=" mt-3 workimagecontainer">
              <div id="HospitalProject" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#HospitalProject" data-slide-to="0" class="active"></li>
                  <li data-target="#HospitalProject" data-slide-to="1"></li>
                  <li data-target="#HospitalProject" data-slide-to="2"></li>
                  <li data-target="#HospitalProject" data-slide-to="3"></li>
                  <li data-target="#HospitalProject" data-slide-to="4"></li>
                  <li data-target="#HospitalProject" data-slide-to="5"></li>
                  <li data-target="#HospitalProject" data-slide-to="6"></li>
                  <li data-target="#HospitalProject" data-slide-to="7"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/HospitalProject/Departments.png" class="project-image" alt="HospitalProject-Departments">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/TestimonialList1.png" class="project-image" alt="HospitalProject-TestimonialList1">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/TestimonialList2.png" class="project-image" alt="HospitalProject-TestimonialList2">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/DepartmentsAdmin.png" class="project-image" alt="HospitalProject-DepartmentsAdmin">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/TestimonialsAdmin.png" class="project-image" alt="HospitalProject-TestimonialsAdmin">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/EditTestimonialsAdmin.png" class="project-image" alt="HospitalProject-EditTestimonialsAdmin">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HospitalProject/DeleteTestimonialAdmin.png" class="project-image" alt="HospitalProject-DeleteTestimonialAdmin">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#HospitalProject" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#HospitalProject" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Hospital Redesign Website</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies and Softwares Used : <span class="technologies">HTML , CSS , JQuery , JavaScript ,
                    Bootstrap , C# , MVC.NET , Microsoft SQL Server , Entity , Git
                    Framework</span>
                </li>
                <li class="list-group-item">
                  Worked with a team to redesign a hospital website.
                </li>
                <li class="list-group-item">
                  Was specifically involved in implementing a departments
                  and testimonials feature for the website.
                </li>
                <li class="list-group-item">
                  This was a fully functional website with an inbuild Content Management System.
                  Admins would have the functionality to do CRUD
                  operations on all the testimoials in the database. Visitors would be able to view all testimonials in the website.
                  Visitors who would like to upload or update a testimonial have to log in before making the changes.
                </li>
                <li class="list-group-item">
                  The website was accessible and responsive accross different UI platforms. This was acheived with the help of Bootstrap.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/HospitalProject" class="card-link">Github</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Project 4 -->
        <!-- Project 5  -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class=" mt-3 workimagecontainer">
              <div id="ChopperForce" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#ChopperForce" data-slide-to="0" class="active"></li>
                  <li data-target="#ChopperForce" data-slide-to="1"></li>
                  <li data-target="#ChopperForce" data-slide-to="2"></li>
                  <li data-target="#ChopperForce" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/ChopperForce/Login.png" class="project-image" alt="ChooperForce-Login">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/ChopperForce/PersonnelReport.png" class="project-image" alt="ChooperForce-PersonnelReport">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/ChopperForce/PhysicalFitnessReport.png" class="project-image" alt="ChooperForce-PhysicalFitnessReport">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/ChopperForce/Logout.png" class="project-image" alt="ChooperForce-Logout">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#ChopperForce" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#ChopperForce" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">ChopperForceFive</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies and Softwares Used : <span class="technologies">HTML , CSS , Ajax , Jquery, JavaScript , Bootstrap , PHP ,
                    SQL, VS-Code , GIT</span>
                </li>
                <li class="list-group-item">
                  An HR application developed for the us army along with my classmates.
                </li>
                <li class="list-group-item">
                  Implemented a login functionality for the application using PHP session variables.
                </li>
                <li class="list-group-item">
                  Created a Personnel Report page to track the details of the soldiers working under the officer.
                </li>
                <li class="list-group-item">
                  Created a Fitness Report page to track the fitness levels of soldiers.
                </li>
                <li class="list-group-item">
                  All User Interfaces were made with the help of Bootstrap, which makes the UI screens responsive accross UI platforms.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/ChopperForce" class="card-link">GitHub</a>
                <a href="https://chopperforce-hr-app.herokuapp.com/Pages/Login.php" class="card-link">Live</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Project 5 -->
        <!-- Project 6 -->
        <div class="
              card
              row
              align-items-center
              justify-content-center
              project-card
            ">
          <div class="card-horizontal">
            <div class=" mt-3 workimagecontainer">
              <div id="PassionProject" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#PassionProject" data-slide-to="0" class="active"></li>
                  <li data-target="#PassionProject" data-slide-to="1"></li>
                  <li data-target="#PassionProject" data-slide-to="2"></li>
                  <li data-target="#PassionProject" data-slide-to="3"></li>
                  <li data-target="#PassionProject" data-slide-to="4"></li>
                  <li data-target="#PassionProject" data-slide-to="5"></li>
                  <li data-target="#PassionProject" data-slide-to="6"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/MovieBlog/HomePage.png" class="project-image" alt="MovieBlog-HomePage">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/ListMovies.png" class="project-image" alt="MovieBlog-ListMovies">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/ListDirectors.png" class="project-image" alt="MovieBlog-ListDirectors">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/ListActors.png" class="project-image" alt="MovieBlog-ListActors">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/ListGenres.png" class="project-image" alt="MovieBlog-ListGenres">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/MovieDetails.png" class="project-image" alt="MovieBlog-MovieDetails">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/MovieBlog/EditMovie.png" class="project-image" alt="MovieBlog-EditMovie">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#PassionProject" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#PassionProject" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Movie Blog</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies & Softwares Used : <span class="technologies">HTML , CSS , JavaScript , MVC.NET, Visual Studio ,Entity Framework, C# , SQL ,
                    GIT</span>
                </li>
                <li class="list-group-item">
                  A movie website blog which lets an admin user to Create, Read, Update and Delete Movies and their Actors,
                  Directors and Genres specific to the movie.
                </li>
                <li class="list-group-item">
                  Implemented a Microsoft SQL database with many to many and one to many entity relationships.
                </li>
                <li class="list-group-item">
                  The website is made using the entity framework and code-first approach in Microsoft .NET.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/MovieBlog" class="card-link">GitHub</a>
                <!-- <a href="https://chopperforce-hr-app.herokuapp.com/Pages/Login.php" class="card-link">Live</a> -->
              </div>
            </div>
          </div>
        </div>
        <!-- End of Project 6 -->
        <!-- Project 7 -->
        <div class="card row align-items-center justify-content-center project-card">
          <div class="card-horizontal">
            <div class="mt-3 workimagecontainer">
              <div id="TypingGame" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#TypingGame" data-slide-to="0" class="active"></li>
                  <li data-target="#TypingGame" data-slide-to="1"></li>
                  <li data-target="#TypingGame" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/HowFastCanYouType/HomePage1.png" class="project-image" alt="TypingGame-one" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HowFastCanYouType/HomePage2.png" class="project-image" alt="TypingGame-two" />
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#TypingGame" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#TypingGame" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">How Fast Can You Type</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies & Softwares Used : <span class="technologies">HTML , CSS , Javascript , VS-Code , API</span>
                </li>
                <li class="list-group-item">This is a game which lets the user know how fast they can type.</li>
                <li class="list-group-item">Involves a CSS stylesheet which styles the HTML elements.</li>
                <li class="list-group-item">A javascript page which fetches different quotes with the Javascript Fetch API using the API : ( QUOTE_API_URL )</li>
                <li class="list-group-item">Involves a timer which keeps track of the time to type a quote.</li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/Typing-Game" class="card-link">GitHub</a>
                <a href="https://howfastcanyoutype.herokuapp.com/" class="card-link">Live</a>
              </div>
            </div>
          </div>
        </div>

        <!-- End of Project 7 -->
        <!-- Project 8 -->
        <div class="card row align-items-center justify-content-center project-card">
          <div class="card-horizontal">
            <div class="mt-3 workimagecontainer">
              <div id="HomeGreenery" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#HomeGreenery" data-slide-to="0" class="active"></li>
                  <li data-target="#HomeGreenery" data-slide-to="1"></li>
                  <li data-target="#HomeGreenery" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/HomeGreenery/HomeGreenery1.png" class="project-image" alt="HomeGreenery-one" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HomeGreenery/HomeGreenery2.png" class="project-image" alt="HomeGreenery-two" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/HomeGreenery/HomeGreenery3.png" class="project-image" alt="HomeGreenery-three" />
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#HomeGreenery" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#HomeGreenery" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Home Greenery</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies Used : <span class="technologies">HTML , CSS</span>
                </li>
                <li class="list-group-item">One of the first web pages I made.</li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/HomeGreenery" class="card-link">GitHub</a>
                <a href="https://homegreenery.herokuapp.com/" class="card-link">Live</a>
              </div>
            </div>
          </div>
        </div>

        <!-- End of Project 8 -->
        <!-- Project 9 -->
        <div class="card row align-items-center justify-content-center project-card">
          <div class="card-horizontal">
            <div class="mt-3 workimagecontainer">
              <div id="Covid19Tracker" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#Covid19Tracker" data-slide-to="0" class="active"></li>
                  <li data-target="#Covid19Tracker" data-slide-to="1"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/Covid19Tracker/Covid19Tracker1.png" class="project-image" alt="HomeGreenery-one" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Covid19Tracker/Covid19Tracker2.png" class="project-image" alt="HomeGreenery-two" />
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#Covid19Tracker" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#Covid19Tracker" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">COVID-19 TRACKER</h5>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Technologies Used : <span class="technologies">HTML , CSS , Bootstrap, React.js, Covid-19 API</span>
                </li>
                <li class="list-group-item">This is an application which helps to track Covid-19 cases accross the world</li>
                <li class="list-group-item">
                  The application uses data fetched through an API.
                </li>
                <li class="list-group-item">
                  The application is build with React and Bootstrap, and is responsive accross UI platforms.
                </li>
              </ul>
              <div class="card-body">
                <a href="https://github.com/jerrineldo/COVID-19Tracker" class="card-link">GitHub</a>
                <a href="https://jerrins-covid-19-tracker.herokuapp.com/" class="card-link">Live</a>
              </div>
            </div>
          </div>
        </div>

        <!-- End of Project 9 -->
      </div>
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
            <img src="https://img.icons8.com/metro/26/000000/php.png"/>
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
            <div class="form-group col-md-3 mx-auto">
              <button name="sendmessage_button" type="submit" class="btn sendmessage_button mx-auto form-control">
                Send a Message
              </button>
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
    <!-- End of Contact Section -->
    <!-- Resume Section -->
    <div class="resume-section section d-flex flex-column justify-content-center" id="resume-section">
      <div class="sectionhead mx-auto">
        <span>Take a look at my</span>
        <h2>RESUME</h2>
      </div>
      <div class="mx-auto">
        <embed src="JerrinResume.pdf" width="1000px" height="2100px" />
      </div>
    </div>
    <!-- End of Contact section -->
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-2 main-footer">
      <!-- Footer Elements -->
      <div class="container">
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center mb-0">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/jerrineldo/">
              <img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png" />
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
              <img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png" />
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
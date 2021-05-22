$(document).ready(function () {
  $(".navbar-nav a").on("click", function () {
    $(".navbar-nav").find(".active").removeClass("active");
    $(this).addClass("active");
  });

  if ($(".text-slider").length == 1) {
    var typed_strings = $(".text-slider-items").text();

    var typed = new Typed(".text-slider", {
      strings: typed_strings.split(", "),
      typeSpeed: 80,
      loop: true,
      backDelay: 900,
      backSpeed: 40,
    });
  }

  var forms = document.getElementsByClassName("needs-validation");

  var email = document.getElementById("contact-section_email");

  var validation = Array.prototype.filter.call(forms, function (form) {
    form.addEventListener(
      "submit",

      function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  

  function validateEmail(email) {
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    return email_regex.test(email);
  }

  var formhandle = document.forms.contactform;

  function processForm() {
    var email = document.getElementById("contactsection_email");
    var name = document.getElementById("contactsection_name");
    var subject = document.getElementById("contactsection_subject");
    var message = document.getElementById("contactsection_message");
    if (!validateEmail(email.value)) {
        email.classList.add("active");
        $("#contactsection_email").next().css("display", "block");
        $("#contactsection_email").css('border-color', 'red');
        console.log("Jerrin");
        return false;
    } 
    else{
      // alert("Hi");
      // $.ajax({
        
      //   url: 'sendEmail.php',
      //   type: 'POST',
      //   datatype: 'json',
      //   data :{
      //     name: name.value,
      //     email: email.value,
      //     subject: subject.value,
      //     message: message.value
      //   }, success: function(response){
      //     alert("Hicdac");
      //     $('#contactform')[0].reset();
      //     $(".sent-notification").text("Message sent sucessfully");
      //   }
        
      // });
      // alert("Here");
    }
  }

  formhandle.onsubmit = processForm;
});

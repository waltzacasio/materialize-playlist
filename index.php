<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>WalterDev.Info</title>
  <style>

    header {
      position: relative;
      min-height: 600px;
      overflow: hidden;
    }

    header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url(img/man.jpg);
      background-size: cover;
      background-position: center;
      filter: blur(4px); /* Adjust the value (5px) to control the intensity of the blur */
      z-index: -1; /* Place the pseudo-element behind the content */
    }

    .custom-bg-color {
    background-color: 	00142C; /* Replace with your custom color code */
    }
    
    @media screen and (max-width: 670px){
      header{
        min-height: 500px;
      }
    }
    
    #heroImage{
      box-shadow: 0 0 10px 2px white;
    }

    /* Center the icon vertically */
    .brand-logo i.material-icons {
    line-height: 64px; /* Adjust the line-height based on your navigation bar height */
    font-size: 36px; /* Adjust the font-size to increase the icon size */
    }

    .section{
      padding-top: 2vw;
      padding-bottom: 2vw;
    }
    .tabs .indicator{
      background-color: #1a237e;
    }
    .tabs .tab a:focus, .tabs .tab a:focus.active{
      background: transparent;
    }



  </style>
</head>
<body>

  <!-- navbar -->
  <header>
    <nav class="nav-wrapper custom-bg-color">
      <div class="container">
              <a href="#" class="brand-logo"><i class="material-icons hide-on-small-and-down">code</i>WalterDev.Info</a>
              <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#photos">Features</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="https://github.com/waltzacasio" class="tooltipped btn-floating btn-small indigo darken-4" data-position="bottom" data-tooltip="Github"> 
                  <i class="fab fa-github"></i>
                </a></li>
              </ul>
        <ul class="sidenav grey lighten-2" id="mobile-menu">
          <li><a href="#photos">Features</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="https://github.com/waltzacasio">Github</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="white-text">
          <h2 class="center-align">Record Keeping CRM</h2>
          <p class="center-align">with an elaborate Search, Add, Edit, Delete features.</p>
      </div>
      
    </div>

    <div class="container section">
      <div class="row">
        <img src="img/search_blurred.jpg" alt="" class="responsive-img materialboxed" id="heroImage">
      </div>
    </div>

  </header>

  <div></div>

  <!-- photo / grid -->
  <section class="container section scrollspy" id="photos">
    <div class="row section">
      <div class="col s12 l4">
          <img src="img/add_blurred.jpg" alt="" class="responsive-img materialboxed z-depth-4">
      </div>
      <div class="col s12 l6 offset-l1">
        <h2 class="center-align indigo-text text-darken-4">Add Record</h2>
        <p>The "Add Record" feature lets users input and store new information in a system, maintaining an organized database. It enhances efficiency in various applications like CRM systems, inventory databases, and project management tools.</p>
      </div>
    </div>
    <hr class="">
    <div class="row section">
      <div class="col s12 l4 offset-l1 push-l7">
          <img src="img/deleted_blurred.jpg" alt="" class="responsive-img materialboxed z-depth-4">
      </div>
      <div class="col s12 l6 offset-l1 pull-l5 right-align">
        <h2 class="center-align indigo-text text-darken-4">Delete Records</h2>
        <p>
          The "Delete Records" feature enables users to selectively remove outdated or irrelevant entries from a system's dataset, ensuring data accuracy and relevance. It's a vital tool in various applications, enhancing overall system efficiency.</p>
      </div>
    </div>
    <hr class="">
    <div class="row section">
      <div class="col s12 l4">
          <img src="img/details_blurred.jpg" alt="" class="responsive-img materialboxed z-depth-4">
      </div>
      <div class="col s12 l6 offset-l1">
        <h2 class="center-align indigo-text text-darken-4">Details & Edit History</h2>
        <p>
          The "Details & Edit History" feature provides a comprehensive view of specific information along with a chronological record of edits made over time. It enhances transparency and accountability, especially useful in collaborative environments and content management systems.</p>
      </div>
    </div>
  </section>

  <!-- parallax -->
  <div class="parallax-container">
    <div class="parallax">
      <img src="img/coding5.jpg" alt="" class="responsive-img">
    </div>
  </div>

  <!-- services / tabs -->
  <section class="section container scrollspy" id="services">
    <div class="row">
      <div class="col s12 l4">
        <h2 class="indigo-text text-darken-4">What I do..</h2>
        <p>My skill set encompasses the entire web development process, from designing user interfaces to implementing server-side logic and database management. This comprehensive approach allows me to create robust and user-friendly web applications.</p>
      </div>  
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#photography" class="active indigo-text text-darken-4">Front-End</a>
          </li>
          <li class="tab col s6">
            <a href="#editing" class="indigo-text text-darken-4">Back-End</a>
          </li>
        </ul>
        <div id="photography" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Front-End</p>
            <p>On the frontend, I am adept at using JavaScript to enhance interactivity and create dynamic user interfaces. Additionally, I utilize Materialize CSS to design responsive and visually appealing layouts, ensuring a seamless user experience across various devices.</p>
        </div>
        <div id="editing" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Back-End</p>
            <p>As a full-stack developer, I proficiently work on both the frontend and backend aspects of web development. My primary programming language is PHP, and I have extensive experience using the CodeIgniter framework. In the backend, I leverage MySQL for database management, ensuring efficient data storage and retrieval.</p>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- parallax -->
  <div class="parallax-container">
    <div class="parallax">
      <img src="img/coding6.jpg" alt="" class="responsive-img">
    </div>
  </div>

  <!-- contact form -->
  <section class="section container scrollspy" id="contact">
    <div class="row">
      <div class="col s12 l5">
        <h2 class="indigo-text text-darken-4">Get in Touch</h2>
        <p>Feel free to contact me if you want a personal demo.</p>

      </div>
      <div class="col s12 l5 offset-l2">
        <!-- email form -->
        <form id="emailForm">
          <div class="input-field">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email" name="email">
            <label for="email">Your Email</label>
          </div>

          <div class="input-field">
            <i class="material-icons prefix">Subject</i>
            <input type="text" id="subject" name="subject">
            <label for="subject">Subject</label>
          </div>

          <div class="input-field">
            <i class="material-icons prefix">message</i>
            <textarea id="message" class="materialize-textarea" cols="20" rows="20" name="message"></textarea>
            <label for="message">Your Message</label>
          </div>

          <div class="input-field center">
            <button type="button" class="btn" id="submitButton" onclick="sendEmail()">Submit</button>
          </div>
        </form>

        <div>
          <h5 id="result" class="center-align"></h5>
        </div>

      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5>About Me</h5>
          <p>I am looking for long-term work because i need to feed my cat.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Connect</h5>
          <ul>

            <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/walter-acasio-8949431b6/">Linked In</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy; <?= date('Y'); ?> WalterDev.Info</div>
    </div>
  </footer>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){

      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1,
        minDate: new Date(),
        autoClose: true 
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();

    });

    function sendEmail() {
    var form = document.getElementById("emailForm");
    var submitButton = form.querySelector('button[type="button"]');

    // Use the Fetch API to send the form data to the server
    fetch('/email.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            email: form.elements.email.value,
            subject: form.elements.subject.value,
            message: form.elements.message.value,
        }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the data returned from the server
        document.getElementById("result").innerHTML = data.message;

        // Hide the form after successful email sending
        form.style.display = 'none';
    })
    .catch(error => console.error('Error:', error));
}
  </script>
</body>
</html>
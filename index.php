<?php 
if(isset($_POST['email'])) {
  echo "<a name='message'></a>";
    $to = "yassine.berqiqch@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject =  $_POST['subject'];
    $subject2 = "Thank you for contact me";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(mail($to,$subject,$message,$headers) && mail($from,$subject2,$message2,$headers2)) {
    echo "<div id=\"submitmessage\"> Mail Sent. Thank you " . $name . ", i will contact you shortly. </div>";
}
else {
    echo "Error";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Yassine Berqiqch</title>
    <link rel = "icon" href = "./images/favicon.ico"  type = "image/x-icon">

</head>
<body>
    <header>
      <a href="/index.html"><img src="./images/logo.png" alt="logo"></a>
        <nav class="navigation">
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section class="main">
        <div>
         <img src="/images/background.png" alt="bg"> 
            <h2>Hi There! I am<br><span>Yassine </br> Berqiqch</span></h2>
            <h3>Full Stack Web Developer</h3>
            <a href="./Lebenslauf.pdf" class="main-btn">View my resume</a>
            <div class="social-icons">
                <a href="https://www.facebook.com/aperskii"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/yassine-berqiqch"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://twitter.com/YBerqiqch"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/aperskii"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </section>
    <section class="cards" id="skills">
         <h2 class="title">Skills</h2>
         <div class="content">
            <div class="card">
                <div class="icon"><i class="fa-brands fa-html5"></i></div>
                <div class="info"><h3>HTML</h3> </div>
                <div class="bar front advanced" data-skill="80%"></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-brands fa-css3-alt"></i></div>
                <div class="info"><h3>CSS</h3> </div>
                <div class="bar front advanced" data-skill="80%"></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-brands fa-js"></i></div>
                <div class="info"><h3>JAVASCRIPT</h3> </div>
                <div class="bar back intermediate" data-skill="50%"></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-brands fa-java"></i></div>
                <div class="info"><h3>JAVA</h3> </div>
                <div class="bar back intermediate" data-skill="60%"></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-brands fa-php"></i></div>
                <div class="info"><h3>PHP</h3> </div>
                <div class="bar back basic" data-skill="40%"></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-brands fa-node"></i></div>
                <div class="info"><h3>Node.JS</h3> </div>
                <div class="bar learning" data-skill="20%"></div>
            </div>
         </div>
    </section>
    
    <section class="projects" id="projects">
     <h2 class="title">Projects</h2>
    <div class="content">
        <div class="project-card">
            <div class="project-image">
             <img src="images/Books.png"/>
            </div>  
            <div class="project-info">
                <p class="project-category">C# .NETCORE</p>
                <strong class="project-title">
                    <span>Book ADMINISTRATOR</span>
                    <a href="https://github.com/aperskii/Books" class="more-details" target="_blank">More details</a>
                </strong>
           </div>
        </div>
        <div class="project-card">
            <div class="project-image">
             <img src="images/mp3.png"/>
            </div>  
            <div class="project-info">
                <p class="project-category">C# .NETCORE</p>
                <strong class="project-title">
                    <span>MP3 PLAYER</span>
                    <a href="https://github.com/aperskii/mp3-player" class="more-details" target="_blank">More details</a>
                </strong>
           </div>
        </div>
        <div class="project-card">
            <div class="project-image">
             <img src="images/NotePad.png"/>
            </div>  
            <div class="project-info">
                <p class="project-category">C# .NETCORE</p>
                <strong class="project-title">
                    <span>NOTEPAD</span>
                    <a href="https://github.com/aperskii/Notepad" class="more-details" target="_blank">More details</a>
                </strong>
           </div>
        </div>
    </div>
    </section>
    <form method="POST" action="#message" id="contact">
<section class="contact-form">
    <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT ME</span>
                </div>
                <div class="info-me">
                    <span class="info-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="info-info">Casablanca MAROC</span>
                </div>
                <div class="info-me">
                <span class="info-icon"><i class="fa-solid fa-phone"></i></span>
                <span class="info-info">+212 679 962777</span>
                </div>
                <div class="info-me">
                <span class="info-icon"><i class="fa-solid fa-at"></i></span>
               <a class="info-info" href="mailto:yassine.berqiqch@gmail.com">yassine.berqiqch@gmail.com</a>
                </div>
                <div class="info-me">
                    <span class="info-icon"><i class="fa-solid fa-link"></i></span>
                    <a class="info-info" href="#">www.berqiqch.me</a>
                    </div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input type="text" class="app-form-control" name="name" id="name" placeholder="NAME" required>
                  </div>
                  <div class="app-form-group">
                    <input type="email" class="app-form-control" name="email" id="email" placeholder="EMAIL" required>
                  </div>
                  <div class="app-form-group">
                    <input type="text" class="app-form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="app-form-group message">
                    <textarea name="message" class="app-form-control" id="message" cols="30" rows="7" placeholder="Message" required></textarea>                  </div>
                  <div class="app-form-group buttons">
                    <input type="submit" value="Send Message" class="app-form-button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
</form>

<footer class="footer">
    <p class="footer-title"> Copyrights @ 2022 By <span> YASSINE BERQIQCH </span></p>
    <div class="social-icons">
        <a href="https://www.facebook.com/aperskii"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/yassine-berqiqch"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://twitter.com/YBerqiqch"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://github.com/aperskii"><i class="fa-brands fa-github"></i></a>
    </div>
</footer>
</body>
</html>

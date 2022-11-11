<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("head.php");
  ?>
</head>
 
<body>
  <div class="masthead">
    <?php
    include("header.php");
    ?>
    <div class="masthead-content">
      <div class="content-container">
        <h1>Bringing New Light <br>To Your
          <span class="h1-effect">
            <span class="dream-effect"><u>Dreams.</u></span>
            <span class="dream-line"></span>
          </span>
        </h1>
        <a href="#contact" class="start">Get Started<ion-icon name="chevron-forward-outline" class="start-arrow"></ion-icon></a>
      </div>
      <div id="lightningball"></div>
    </div>
    <?php
    include("timeline.php");
    ?>
    <div id="wave"></div>
  </div>
  <div class="about" id="about">
    <div class="about-container">
      <h1 class="title-outline about-title">ABOUT</h1>
      <div class="about-line"></div>
      <h1 class="about-title2">ABOUT</h1>
      <h1 class="about-subtitle">Personal but professional</h1>
      <p>At Nightlight Dev we provide the most<br>personal web design experience while<br>delivering the most professional product. That<br>way you can ensure a high quality and yet<br>easy going experience</p>
    </div>
    <div class="about-placeholder">
      <span>Placeholder</span>
    </div>
  </div>
  <div class="work-showcase" id="works">
    <div>
      <div class="work-placeholder holder1"></div>
      <div class="work-placeholder holder2"></div>
      <div class="work-placeholder holder3"></div>
      <div class="work-placeholder holder4"></div>
      <div class="work-placeholder holder5"></div>
      <div class="work-placeholder holder6"></div>
      <div class="work-placeholder holder7"></div>
      <div class="work-placeholder holder8"></div>
    </div>
    <div class="work-text-container">
      <div class="work-line"></div>
      <div class="work-title">
        <h1>WORKS</h1>
      </div>
      <div class="work-line2"></div>
    </div>
  </div>
  <div class="services" id="services">
    <div class="services-headings">
      <h1 class="title-outline service-title">SERVICES</h1>
      <h1 class="service-title2">SERVICES</h1>
      <div class="service-line"></div>
    </div>
    <div class="service-container">
      <div class="service-active">
        <div class="service-content">
          <h1>UI/UX</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
        </div>
        <div class="service-arrows"><img src="sources/images/Icon open-code.svg" alt="selected"></div>
      </div>
      <div class="service-active">
        <div class="service-content">
          <h1>Development</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
        </div>
        <div class="service-arrows"><img src="sources/images/Icon open-code.svg" alt="selected"></div>
      </div>
      <div class="service-active">
        <div class="service-content">
          <h1>Personal</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
        </div>
        <div class="service-arrows"><img src="sources/images/Icon open-code.svg" alt="selected"></div>
      </div>
      <div class="service-active">
        <div class="service-content">
          <h1>Maintenance</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
        </div>
        <div class="service-arrows"><img src="sources/images/Icon open-code.svg" alt="selected"></div>
      </div>
    </div>
  </div>
  <div class="divider"></div>
  <div class="contact-us" id="contact">
    <div class="contact-header">
      <h1 class="title-outline contact-title">CONTACT US</h1>
      <div class="contact-line"></div>
      <h1 class="contact-title2">CONTACT US</h1>
      <div class="contact-line2"></div>
    </div>
    <div class="content-container1">
      <h4>Fill out the form and<br>we'll be in touch!</h4>
    </div>
    <div class="content-container2">
      <div class="contact-email">
        <p>contact@nightlightdev.net</p>
      </div>
      <div class="contact-location">
        <p>Boon Lay Drive<br>640264, Singapore</p>
      </div>
    </div>
    <form action="" method="POST" class="contact-form">
      <div class="form-name">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="form-email">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-message">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" style="resize:none;"></textarea>
      </div>
      <div class="form-submit">
        <button type="submit">Send<img src="sources/images/Icon material-send.svg" alt="submit button"></button>
      </div>
    </form>
  </div>
</body>

</html>
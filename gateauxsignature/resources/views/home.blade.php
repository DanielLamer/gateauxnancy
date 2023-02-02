<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel</title>
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </head>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/w3images/parallax1.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.ddev-wide {letter-spacing: 10px;}
.ddev-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="ddev-top">
  <div class="ddev-bar" id="myNavbar">
    <a class="ddev-bar-item ddev-button ddev-hover-black ddev-hide-medium ddev-hide-large ddev-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="ddev-bar-item ddev-button">HOME</a>
    <a href="#about" class="ddev-bar-item ddev-button ddev-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="ddev-bar-item ddev-button ddev-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="ddev-bar-item ddev-button ddev-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="ddev-bar-item ddev-button ddev-hide-small ddev-right ddev-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="ddev-bar-block ddev-white ddev-hide ddev-hide-large ddev-hide-medium">
    <a href="#about" class="ddev-bar-item ddev-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="ddev-bar-item ddev-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="ddev-bar-item ddev-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="ddev-bar-item ddev-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 ddev-display-container ddev-opacity-min" id="home">
  <div class="ddev-display-middle" style="white-space:nowrap;">
    <span class="ddev-center ddev-padding-large ddev-black ddev-xlarge ddev-wide ddev-animate-opacity">MY <span class="ddev-hide-small">WEBSITE</span> LOGO</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="ddev-content ddev-container ddev-padding-64" id="about">
  <h3 class="ddev-center">ABOUT ME</h3>
  <p class="ddev-center"><em>I love photography</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="ddev-row">
    <div class="ddev-col m6 ddev-center ddev-padding-large">
      <p><b><i class="fa fa-user ddev-margin-right"></i>My Name</b></p><br>
      <img src="/w3images/avatar_hat.jpg" class="ddev-round ddev-image ddev-opacity ddev-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="ddev-col m6 ddev-hide-small ddev-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  <p class="ddev-large ddev-center ddev-padding-16">Im really good at:</p>
  <p class="ddev-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="ddev-light-grey">
    <div class="ddev-container ddev-padding-small ddev-dark-grey ddev-center" style="width:90%">90%</div>
  </div>
  <p class="ddev-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="ddev-light-grey">
    <div class="ddev-container ddev-padding-small ddev-dark-grey ddev-center" style="width:85%">85%</div>
  </div>
  <p class="ddev-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="ddev-light-grey">
    <div class="ddev-container ddev-padding-small ddev-dark-grey ddev-center" style="width:75%">75%</div>
  </div>
</div>

<div class="ddev-row ddev-center ddev-dark-grey ddev-padding-16">
  <div class="ddev-quarter ddev-section">
    <span class="ddev-xlarge">14+</span><br>
    Partners
  </div>
  <div class="ddev-quarter ddev-section">
    <span class="ddev-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="ddev-quarter ddev-section">
    <span class="ddev-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="ddev-quarter ddev-section">
    <span class="ddev-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 ddev-display-container ddev-opacity-min">
  <div class="ddev-display-middle">
    <span class="ddev-xxlarge ddev-text-white ddev-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="ddev-content ddev-container ddev-padding-64" id="portfolio">
  <h3 class="ddev-center">MY WORK</h3>
  <p class="ddev-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="ddev-row-padding ddev-center">
    <div class="ddev-col m3">
      <img src="/w3images/p1.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p2.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="Coffee beans">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p3.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="Bear closeup">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p4.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="ddev-row-padding ddev-center ddev-section">
    <div class="ddev-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="The mist">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="ddev-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="modalView(this)" class="ddev-hover-opacity" alt="Sailing">
    </div>
    <button class="ddev-button ddev-padding-large ddev-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="ddev-modal ddev-black" onclick="this.style.display='none'">
  <span class="ddev-button ddev-large ddev-black ddev-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="ddev-modal-content ddev-animate-zoom ddev-center ddev-transparent ddev-padding-64">
    <img id="img01" class="ddev-image">
    <p id="caption" class="ddev-opacity ddev-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 ddev-display-container ddev-opacity-min">
  <div class="ddev-display-middle">
     <span class="ddev-xxlarge ddev-text-white ddev-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="ddev-content ddev-container ddev-padding-64" id="contact">
  <h3 class="ddev-center">WHERE I WORK</h3>
  <p class="ddev-center"><em>I'd love your feedback!</em></p>

  <div class="ddev-row ddev-padding-32 ddev-section">
    <div class="ddev-col m4 ddev-container">
      <img src="/w3images/map.jpg" class="ddev-image ddev-round" style="width:100%">
    </div>
    <div class="ddev-col m8 ddev-panel">
      <div class="ddev-large ddev-margin-bottom">
        <i class="fa fa-map-marker fa-fw ddev-hover-text-black ddev-xlarge ddev-margin-right"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw ddev-hover-text-black ddev-xlarge ddev-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw ddev-hover-text-black ddev-xlarge ddev-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="ddev-row-padding" style="margin:0 -16px 8px -16px">
          <div class="ddev-half">
            <input class="ddev-input ddev-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="ddev-half">
            <input class="ddev-input ddev-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="ddev-input ddev-border" type="text" placeholder="Message" required name="Message">
        <button class="ddev-button ddev-black ddev-right ddev-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="ddev-center ddev-black ddev-padding-64 ddev-opacity ddev-hover-opacity-off">
  <a href="#home" class="ddev-button ddev-light-grey"><i class="fa fa-arrow-up ddev-margin-right"></i>To the top</a>
  <div class="ddev-xlarge ddev-section">
    <i class="fa fa-facebook-official ddev-hover-opacity"></i>
    <i class="fa fa-instagram ddev-hover-opacity"></i>
    {{-- <i class="fa fa-snapchat ddev-hover-opacity"></i>
    <i class="fa fa-pinterest-p ddev-hover-opacity"></i>
    <i class="fa fa-twitter ddev-hover-opacity"></i>
    <i class="fa fa-linkedin ddev-hover-opacity"></i> --}}
  </div>
</footer>
</body>
</html>
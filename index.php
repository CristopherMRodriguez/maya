<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="kambo, holistic, healing, medicine" />
    <meta name="description" content="Maya Martinez Gomez" />
    <meta name="author" content="CristopherRodriguez.com" />
    <meta name="copyright" content="Maya.com &mdash; All Rights Reserved" />
    <meta name="icon" src="" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body class="body">
    <header class="header" id="home">
      <a class="logo-link" href="#home" title="Sr. Kamb&#243;"><img class="logo-link__img" alt="maya" src="img/frog.png"/></a>
      <button class="nav-bar-hamburger" aria-label="Dropdown Menu" onclick="navBarOpen()"><img src="img/misc/mobile-navigation.png" /></button>
      <ul class="unordered-list">
        <a class="unordered-list__link" href="#home"><li class="unordered-list__link__list">Home</li></a>
        <a class="unordered-list__link" href="#services"><li class="unordered-list__link__list">Services</li></a>
        <a class="unordered-list__link" href="aboutMe"><li class="unordered-list__link__list">About Me</li></a>
        <a class="unordered-list__link" href="#sessions"><li class="unordered-list__link__list">Sessions</li></a>
        <a class="unordered-list__link" href="#contact"><li class="unordered-list__link__list">Contact</li></a>
      </ul>

      <div class="nav-open" id="nav-open">
        <ul class="mobile-unordered-list" id="mobile-unordered-list">
          <a class="mobile-unordered-list__link" onclick="navBarClose()" href=""><li class="mobile-unordered-list__link__list">&times;</li></a>
          <a class="mobile-unordered-list__link" href="#home"><li class="mobile-unordered-list__link__list">Home</li></a>
          <a class="mobile-unordered-list__link" href="#services"><li class="mobile-unordered-list__link__list">Services</li></a>
          <a class="mobile-unordered-list__link" href="aboutMe"><li class="mobile-unordered-list__link__list">About Me</li></a>
          <a class="mobile-unordered-list__link" href="#sessions"><li class="mobile-unordered-list__link__list">Sessions</li></a>
          <a class="mobile-unordered-list__link" href="#contact"><li class="mobile-unordered-list__link__list">Contact</li></a>
        </ul>
      </div>
    </header>
    <section class="hero">
      <div class="arrow-left"><img alt="left-arrow" src="img/misc/home-arrow-left.png" /></div>
      <div class="slide">      
        <div class="slide-child slide-1">
          <div class="hero__text-div">
            <h1 class="h1 hero__text-div__h1"><span>PEACE IS HERE. </span></h1>
            <h1 class="heart">&#10084;</h1>
          </div>
        </div>
        <div class="slide-child slide-2">
          <div class="hero__text-div">
            <h1 class="h1 hero__text-div__h1"><span class="slide-2__span">PEACE IS HERE.</span></h1>
            <h1 class="heart">&#10084;</h1>
          </div>
        </div>
        <div class="slide-child slide-3">
          <div class="hero__text-div">
            <h1 class="h1 hero__text-div__h1"><span>PEACE IS HERE.</span></h1>
            <h1 class="heart">&#10084;</h1>
          </div>
        </div>
      </div>
      <div class="arrow-right"><img alt="right-arrow" src="img/misc/home-arrow-right.png" /></div>
    </section>
      
    <!--section class="services" id="services">
      <div class="services__text-div">
        <h1 class="h1 services__text-div__h1">Services.</h1>
      </div>
    </section-->

    <script>
      let sliderImages = document.querySelectorAll(".slide-child"),
          arrowLeft = document.querySelector(".arrow-left"),
          arrowRight = document.querySelector(".arrow-right"),
          current = 0;

      //erases all of the hero images
      function reset() {
        for (let i = 0; i < sliderImages.length; i++) {
          sliderImages[i].style.display = "none";
        }
      }

      //erases then loads first image
      (function start() {
        reset();
        sliderImages[0].style.display = "block";
      }());

      function leftArrowClick() {
        reset();
        sliderImages[current - 1].style.display = "block";
        current--;
      }

      arrowLeft.addEventListener("click", function(){
        if(current===0){
          current = sliderImages.length;
        }
        leftArrowClick();
      })

      function rightArrowClick() {
        reset();
        sliderImages[current + 1].style.display = "block";
        current++;
      }

      arrowRight.addEventListener("click", function(){
        if (current === sliderImages.length -1){
          current = -1;
        }
        rightArrowClick();
      })
      
      let timer = 4000;

      setInterval(function(){
        if (current === sliderImages.length -1){
          current = -1;
          rightArrowClick();
        } else {
          rightArrowClick();
        }
      }, timer)

      function navBarOpen() {

        document.querySelector(".nav-open").style.display = "block";

      }

      function navBarClose() {

        document.querySelector(".nav-open").style.display = "none";

      }


    </script>
  </body>
</html>

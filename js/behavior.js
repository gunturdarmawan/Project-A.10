/*===== SHOW NAVBAR  =====*/ 
const showNavbar = (toggleId, navId, bodyId, headerId, sideId, topId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId),
    sidebar = document.getElementById(sideId),
    gotop = document.getElementById(topId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd && sidebar){
        toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // make r-content witdh smaller
            sidebar.classList.toggle('small-side')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            // add width class goTop 
            gotop.classList.toggle('gotop-width')
        })
    }
  }
  
  showNavbar('header-toggle','nav-bar','body-pd','header', 'sidebar')
  
  /*===== LINK ACTIVE  =====*/ 
  const linkColor = document.querySelectorAll('.nav__link')
  
  function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
  }
  linkColor.forEach(l=> l.addEventListener('click', colorLink))



//   Membuat script berita slideshow

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("container-berita");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 6000);
    }

// Membuat Fungsi untuk scroll Indicator

    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        var bar = document.getElementById('myBar');

        bar.style.width = scrolled + "%";

        var mybutton = document.getElementById("go-top");

            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

// membuat countdown slide-ide 

// Set the date we're counting down to
        var countDownDate = new Date("Dec 14, 2020 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Waktu Telah Habis";
        }
        }, 1000);

// Membuat Increment Functions untuk tombol Upvote or Downvote

        var countUp = document.getElementById('upvote').value;
        var hasilConvert = parseInt("321 nk");
        function increment() {           
            hasilConvert++;       
            document.getElementById('upvote').innerHTML= hasilConvert;
        }
                


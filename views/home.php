 
<!DOCTYPE html>
<html lang="pt">
<title>Fredy Oliveira</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EU</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">AGENDA</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MAIS <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Galeria</a>
        <a href="#" class="w3-bar-item w3-button">Vídeos</a>
        <a href="#" class="w3-bar-item w3-button">Shows</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">EU</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">AGENDA</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTATO</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MAIS</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php BASE_URL;?>assets/images/foto (2).jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Cabreúva</h3>
      <p><b>As melhores musicas tocados!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php BASE_URL;?>assets/images/foto (14).jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Itupeva</h3>
      <p><b>O tempo está para sertanejo universitário.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php BASE_URL;?>assets/images/foto (3).jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Itu</h3>
      <p><b>Obrigado, Itu - Foi uma noite inesquecivel.</b></p>    
    </div>
  </div>
   <div class="mySlides w3-display-container w3-center">
    <img src="<?php BASE_URL;?>assets/images/foto (5).jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Itu</h3>
      <p><b>Obrigado, Itu - Foi uma noite inesquecivel.</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">EU</h2>
    <p class="w3-opacity"><i>Você gosta de musica</i></p>
    <p class="w3-justify">Música sertaneja é um gênero musical do Brasil produzido a partir da década de 1910 por compositores urbanos, rurais e outros chamada genericamente de modas e emboladas cujo som da viola é predominante.[1] O sertanejo é atualmente o mais popular estilo musical no Brasil, superando inclusive o samba, na maioria dos estados do país (especialmente São Paulo, Minas Gerais, Goiás, Paraná, Mato Grosso do Sul, Mato Grosso, Rondônia e Tocantins).</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="/w3images/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">AGENDAS</h2>
      <p class="w3-opacity w3-center"><i>Pra você lembrar onde vou estar!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Agosto <span class="w3-tag w3-red w3-margin-left">Cabreúva - Black Strike</span></li>
        <li class="w3-padding">Novembro <span class="w3-tag w3-red w3-margin-left">Pirapora de Jesus -Romeiros</span></li>
        <li class="w3-padding">Dezembro <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="Cabreúva" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Cabreúva</b></p>
            <p class="w3-opacity">Fri 27 Nov 2019</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/paris.jpg" alt="Itupeva" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Itupeva</b></p>
            <p class="w3-opacity">Sat 28 Nov 2019</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="Itu" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Itu</b></p>
            <p class="w3-opacity">Sun 29 Nov 2019</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTATO</h2>
    <p class="w3-opacity w3-center"><i>Fan? Anote ai!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Cabreúva, SP<br>
        <i class="fa fa-phone" style="width:30px"></i> Celular: +55 (11)97117-5785<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: fredyferreira1987@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
<!--  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>-->
  <p class="w3-medium">Desenvolvido <a href="https://www.devmg.pe.hu" target="_blank">Marcel Hoyama</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


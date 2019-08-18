<title>Galeria</title>  
<head>
    <meta charset="UTF=8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content= "width=device-width, user-scalable=no" />
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="2">
    <meta name="classification" content="cantor sertanejo">
<!--
    <meta name="description" content="Fredy Oliveira <?php echo $viewData['frase'];?> cantor de musica sertanejo!">
    <meta name="keywords" content="Cantor, sertanejo, universitário, raiz, viola, violão, solo, fredy oliveira, cabreuva">
    <meta name="author" content="Marcel Hoyama">
    <meta name="google-site-verification" content="https://www.fredyoliveira.com.br/<?php echo $viewData['linknome'];?>" />
     As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags 
    <link rel="canonical" href="https://fredyoliveira.com.br/<?php echo $viewData['linknome'];?>/" />
    <meta property="og:locale" content="pt_BR">

      <meta property="og:url" content="https://www.fredyoliveira.com.br/<?php echo $viewData['linknome'];?>/" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Fredy Oliveira - <?php echo $viewData['frase'];?>"/>
    <meta property="og:description" content="Fredy Oliveira<?php echo $viewData['frase'];?> musicas sertanejo ! Cabreúva e região"/>
  
    <meta property="og:site_name" content="Fredy Oliveira cantor sertanejo em Cabreúva e Região você encontra aqui, <?php echo $viewData['frase'];?> e agende...">
    <meta property="og:image" content="https://fredyoliveira.com.br/assets/images/<?php echo $viewData['foto'];?>"/>
    <meta property="og:image:width" content="1200"> 
<meta property="og:image:height" content="630"> 
   <meta property="og:image:secure_url" content="https://fredyoliveira.com.br/assets/images/<?php echo $viewData['foto'];?>"/>
    <meta property="og:image:type" content="image/jpg">

    <meta property="fb:admins" content="werockcontent"/>
    <meta name="twitter:url" content="https://fredyoliveira.com.br/<?php echo $viewData['linknome'];?>">
    <meta property="twitter:title" content="Procurando <?php echo $viewData['frase'];?>, cantor de musica sertanejo com qualidade ... ">
    <meta property="twitter:description" content="Quer ter segurança no serviço ainda oferecer o melhor serviço e  atendimento,entender a sua necessidade e a partir daí apresentar o melhor negócio para o seu perfil?  Agente uma visita conosco!">
    <meta property="twitter:image" content="https://fredyoliveira.com.br/assets/images/<?php echo $viewData['foto'];?>">
    <meta property="og:type" content="website">-->

    </head>
    <div class="container w3-padding-64">
        <center><h1>Galeria</h1></center>
<!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="<?php BASE_URL; ?>assets/images/foto (28).jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    <button class=" w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>

</div>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
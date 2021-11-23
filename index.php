<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alexandre JEANROY ~/index</title>
	<meta name="description" content="Alexandre JEANROY portfolio "/>
	<meta name="keywords" content="jeanroy, jeanroy alexandre, alexandre jeanroy, badabux"/>
	<meta name="robots" content="index"/>
    <script src="https://kit.fontawesome.com/75dfbe6e52.js" crossorigin="anonymous"></script>
    <link href="app/app.css" rel="stylesheet" />
</head>
<body>



<a id="menu-button"></a>
  <div id="hamburger-menu">
    <nav>
      <a href="">Accueil</a>
      <a href="projects.php">Mes projets</a>
      <a href="">Mon CV</a>
      <a href="">Contact</a>
    </nav>
  </div>
  <div id="overlay"></div>




<div class="hero">	

<div class="hero-title">
    <h1>Alexandre <span class="highlight-title">JEANROY</span></h1>
</div>

<div class="hero-description">
    <span class="highlight-description">Front-end développeur, SysAdmin</span>
</div>
<!--L'enseignement de l'informatique ne peut faire de personne un programmeur expert plus que l'étude des pinceaux et du pigment peut faire de quelqu'un un peintre expert.-->
<div class="hero-content">
    Je suis développeur <span class="highlight-content">front-end</span>. Tout au long de ma vie, j'ai appris plusieurs langages, en passant du basique <span class="txt-hero-content">HTML</span> et <span class="txt-hero-content">CSS</span>.<br><br>
    Comprenons que l'informatique deviendrait une passion, j'ai continué ma formation en apprenant <span class="txt-hero-content">Python</span> pour créer des bots. Ce processus m'a conduit directement à l'univers de <span class="txt-hero-content">Ruby</span>,
    après ça j'ai commencé réellement le développement web avec le framework <span class="txt-hero-content">Ruby on Rails</span> puis en apprenant <span class="txt-hero-content">PHP</span>.<br><br>
    Après avoir été un peu lasser par la programmation, j'ai commencé à découvrir l'univers de <span class="txt-hero-content">Linux</span> et j'ai commencé à monter mes propres serveurs web.
</div>

	    <a class="scroll-link" href="#content">
		    <svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
		        <g fill="none" fill-rule="evenodd">
			        <rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36"/>
			        <circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#FFF"/>
		        </g>
	        </svg>
	    </a>	
</div>

<div id="content" class="content">


<div class="container">
<div class="row">

<div class="span4"><i class="fas fa-laptop-code" style="font-size:50px;text-align:center;margin-top:10px"></i><br><br>

<p class="span-content">
 Je peux programmer votre site web, réfléchir aux langages et librairies à utiliser en fonction de vos besoins. Je peux aussi analyser votre code pour l'améliorer en performance. <br><br>Je code en <span class="txt-hero-content">HTML, CSS, Ruby et Python</span>
</p>
</div>

<div class="span4"><i class="fas fa-bug" style="font-size:50px;text-align:center;margin-top:10px"></i><br><br>
<p class="span-content">
En analysant votre code, je peux aussi partir à la chasse aux bugs comme si c'était des pokémons. <br><br>Pour ceci, il est préférable de lancer un serveur sous <span class="txt-hero-content">Ngrok</span> ou sur un serveur web et de mettre votre code sur <span class="txt-hero-content">GitHub</span>
</p>
</div>

<div class="span4"><i class="fas fa-pencil-ruler" style="font-size:50px;text-align:center;margin-top:10px"></i><br><br>
<p class="span-content">
Contrairement au premier point, celui-ci sera plus axé sur le webdesign de votre site web. En utilisant <span class="txt-hero-content">HTML, CSS, JS</span> en plus des librairies pour ces différents langages votre site web ressemblera à vos attentes. <br><br>
Utilisation de <span class="txt-hero-content">Figma</span> conseillé
</p>
</div>
</div>

<div class="row" style="margin-top:100px;">
<span class="highlight-blog-landing">Je veux aussi aider les gens</span>
<div class="span12" style="background:transparent;box-shadow:none;text-align:justify;margin-top:30px;">

<span class="blog-landing">
Sur mon blog, je poste de temps en temps des articles. En passant par des conseils sur l'intégration UX, l'administration de systèmes et réseaux, la programmation front-end et back-end mais aussi sur la domotique. Des fois, rien à voir avec l'informatique et le web, je posterai aussi des articles dans le domaine de l'Histoire, la musique et le cinéma...
<br><br><br>

<a href="/">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
<a href="/">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
<a href="/">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
<a href="/">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
<br><br>
</span>

<div class="btn">
        <span>Visiter mon blog</span>
    </div>


</div>
</div>
</div>
</div>


<footer>
Tous droits réservés à <b>Alexandre Jeanroy</b>
<span class="footer-right">
	<i class="fab fa-facebook"></i>&nbsp; &nbsp; 
	<i class="fab fa-github"></i>&nbsp; &nbsp; 
	<i class="fab fa-steam"></i>&nbsp; &nbsp; 
	<i class="fab fa-mailchimp"></i>&nbsp; &nbsp; 
</span>
</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
jQuery(document).ready(function($){
	
	$('a.scroll-link').click(function(e){
		e.preventDefault();
		$id = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $($id).offset().top -0
		}, 750);
	});
	
});

$(function(){
  var width   = 200,
      height  = 36 * 4 + 20,
      speed   = 300,
      button  = $('#menu-button'),
      overlay = $('#overlay'),
      menu    = $('#hamburger-menu');

  button.on('click',function(e){
    if(overlay.hasClass('open')) {
      animate_menu('close');
    } else {
      animate_menu('open');
    }
  });

  overlay.on('click', function(e){
    if(overlay.hasClass('open')) {
      animate_menu('close');
    }
  });

  $('a[href="#"]').on('click', function(e){
    e.preventDefault();
  });

  function animate_menu(menu_toggle) {
    if(menu_toggle == 'open') {
      overlay.addClass('open');
      button.addClass('on');
      overlay.animate({opacity: 1}, speed);
      menu.animate({width: width, height: height}, speed);
    }

    if(menu_toggle == 'close') {
      button.removeClass('on');
      overlay.animate({opacity: 0}, speed);
      overlay.removeClass('open');
      menu.animate({width: "0", height: 0}, speed);
    }
  }
});
  </script>
</body>
</html>
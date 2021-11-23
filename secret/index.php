<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Project</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" />
    <link href="app/app.css" rel="stylesheet" />
</head>
<body>
    
<nav class="navbar">
  <ul class="navbar__menu">
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="home"></i><span>Accueil</span></a>
    </li>
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="folder"></i><span>Projets</span></a>        
    </li>
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="code"></i><span>Compétences</span></a>        
    </li>
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="file-text"></i><span>Blog</span></a>        
    </li>
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="message-square"></i><span>Contact</span></a>        
    </li>
  </ul>
</nav>


<main class="grid-item main">

<div class="highlight-content" style="width:228px;">/liste de mes projets en cours</div>

    <div class="items">
      <div class="item item1" style="background-image:url('https://badabux.fr/app/project2.png')"></div>
      <div class="item item2" style="background-image:url('https://badabux.fr/app/hp.png')"></div>
      <div class="item item3" style="background-image:url('https://badabux.fr/app/project2.png')"></div>
      <div class="item item4" style="background-image:url('https://badabux.fr/app/project2.png')"></div> 
      <div class="item item5" style="background-image:url('https://badabux.fr/app/project2.png')"></div>
      <div class="item item6" style="background-image:url('https://badabux.fr/app/project2.png')"></div>
      <div class="item item7" style="background-image:url('https://badabux.fr/app/project2.png')"></div> 
      <div class="item item8" style="background-image:url('https://badabux.fr/app/project2.png')"></div>
      <div class="item item9" style="background-image:url('https://badabux.fr/app/hp.png')"></div>
    </div>

    

</main>

<div class="highlight-content" style="width:231px;margin-left:15%;">/liste de mes projets terminés</div>

<div class="project-landing">
        <a href="/" class="project-landing"><i data-feather="home"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
        <a href="/" class="project-landing"><i data-feather="home"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
        <a href="/" class="project-landing"><i data-feather="home"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
        <a href="/" class="project-landing"><i data-feather="home"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, molestias? Recusandae esse nihil adipisci</a><br><br>
        <br><br>
</div>


    <script src="https://unpkg.com/feather-icons"></script>
<script>
feather.replace()
//https://twitter.com/One_div

const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 0.80; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});
</script>
</body>
</html>
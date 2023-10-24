<?php ob_start() ?>
<!-- New Front -->
<!--- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/inclusion1.jpg" class="d-block w-100" alt="inclusion">
      <div class="carousel-caption d-md-block">
        <h5><strong class="fs-1 text-dark">Grandir Naturellement Unis et Tolérants</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/womanvr.jpg" class="d-block w-100" alt="femme avec casque vr">
      <div class="carousel-caption d-md-block">
        <h5><strong class="fs-1 text-dark">L'inclusion technologique, un chemin naturel</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hospital.jpg" class="d-block w-100" alt="ourson peluche dans hopital">
      <div class="carousel-caption d-md-block">
        <h5><strong class="fs-1">Ensemble élevons la tolérance</strong></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Contenu-->
<div class="row mx-0 mt-5">
    <h1 class="text-center mb-4 text-success">Association Handicap <br> Gnut 06</h1>
    <h3 class="text-center mb-4">Des Mondes Virtuels, des Liens Réels : L'Inclusion à Portée de Main</h3>
    <h3 class="text-center mb-5 fs-1"><a href="?page=adhesion" class="badge text-bg-success p-4 text-uppercase">Adhérer</a></h3>
    <div class="col-12 col-lg-6">
        <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe src="https://player.vimeo.com/video/625290634?h=502693e9f7&autoplay=1&loop=1&muted=1&color=ff83cd&title=0&byline=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; muted" allowfullscreen></iframe></div>
        <script src="https://player.vimeo.com/api/player.js"></script>
        <br>
        <!-- <video class="img-fluid shadow-lg mt-4 mb-4" autoplay muted loop>
            <source src="videos/1ae04cc3-d5c8-4c58-9b7b-c3798a379735.mp4" type="video/mp4">
        </video> -->
        <img src="images/famillevr.jpg" class="img-fluid" alt="famille et casque VR">
    </div>
    <div class="col-12 col-lg-6 mt-3 mt-lg-0 text-center p-5">
        <p><strong>L'association Handicap Gnut 06</strong> est une association <strong>dédiée à l'inclusion des personnes en situation de handicap grâce aux technologies innovantes.</strong> 
        Notre mission est d'utiliser des outils tels que la réalité virtuelle, la réalité augmentée et la réalité mixte <strong>pour offrir des expériences concrètes et enrichissantes</strong> aux personnes
         en situation de handicap, <strong>favorisant ainsi leur intégration sociale et leur épanouissement.</strong></p>

        <p><strong>Nous organisons des visites à l'hôpital,</strong> où nous proposons aux patients des moments d'évasion et de divertissement à travers l'utilisation de casques de réalité virtuelle. 
        <strong>Ces expériences immersives permettent aux personnes en situation de handicap de s'évader de leur environnement médicalisé</strong> et de vivre des aventures virtuelles uniques, tout en stimulant leur imagination et leur bien-être.</p>

        <p>Parallèlement, <strong>nous proposons des stages d'initiation aux nouvelles technologies, ouverts à tous,</strong> afin d'aider les personnes en situation de handicap
           à développer de nouvelles compétences et à découvrir de nouvelles possibilités dans le domaine des technologies. 
           Ces stages leur offrent la possibilité d'acquérir des connaissances pratiques, de renforcer leur estime de soi et de favoriser leur autonomie.</p>

           <img src="images/inclusion.jpg" class="img-fluid" alt="famille et casque VR">
<br><br>
        <p><strong>L'association Handicap Gnut 06 s'engage à promouvoir une société inclusive où tous les individus,</strong> quel que soit leur handicap, 
        ont la possibilité de participer pleinement à la vie sociale, culturelle et professionnelle. 
        Nous croyons fermement que les technologies innovantes peuvent <strong>jouer un rôle essentiel</strong> dans ce processus d'inclusion, en ouvrant de nouvelles perspectives et en brisant les barrières.</p>

        <p><a href="?page=adhesion"><strong>Adhérez maintenant à l' Association Handicap Gnut 06</strong></a>, et devenez un acteur clé de notre lutte pour l'inclusion. 
        Votre soutien nous permettra de continuer nos actions, d'améliorer la qualité de vie des personnes en situation de handicap et de promouvoir une société plus juste et égalitaire pour tous. Ensemble, construisons un monde où le handicap ne limite pas les possibilités, mais les enrichit.</p>
    </div>
</div>
    <?php $contenu = ob_get_clean()  ?>
    


    <?php require_once 'views/gabarit.php'; ?>

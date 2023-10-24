<?php ob_start() ?>

<!--Contenu-->
<div class="row mt-5">
    <h1 class="text-center mb-4 text-primary">L'Association loi 1901 Gnut 06</h1>
    <div class="col-12 col-lg-6">
        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; muted" allowfullscreen></iframe></div>
        <script src="https://player.vimeo.com/api/player.js"></script>

        <br> <video class="img-fluid shadow-lg rounded-3 mt-4 mb-4" autoplay muted loop>
            <source src="videos/1ae04cc3-d5c8-4c58-9b7b-c3798a379735.mp4" type="video/mp4">
        </video>
    </div>
    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
        <p>Gnut 06 est une association dédiée à l'inclusion des personnes en situation de handicap grâce aux technologies innovantes. Notre mission est d'utiliser des outils tels que la réalité virtuelle, la réalité augmentée et la réalité mixte pour offrir des expériences concrètes et enrichissantes aux personnes en situation de handicap, favorisant ainsi leur intégration sociale et leur épanouissement.</p>

        <p>Nous organisons des visites à l'hôpital, où nous proposons aux patients des moments d'évasion et de divertissement à travers l'utilisation de casques de réalité virtuelle. Ces expériences immersives permettent aux personnes en situation de handicap de s'évader de leur environnement médicalisé et de vivre des aventures virtuelles uniques, tout en stimulant leur imagination et leur bien-être.</p>

        <p>Parallèlement, nous proposons des stages d'initiation aux nouvelles technologies, ouverts à tous, afin d'aider les personnes en situation de handicap à développer de nouvelles compétences et à découvrir de nouvelles possibilités dans le domaine des technologies. Ces stages leur offrent la possibilité d'acquérir des connaissances pratiques, de renforcer leur estime de soi et de favoriser leur autonomie.</p>

        <p>L'association Gnut 06 s'engage à promouvoir une société inclusive où tous les individus, quel que soit leur handicap, ont la possibilité de participer pleinement à la vie sociale, culturelle et professionnelle. Nous croyons fermement que les technologies innovantes peuvent jouer un rôle essentiel dans ce processus d'inclusion, en ouvrant de nouvelles perspectives et en brisant les barrières.</p>

        <p><a href="?page=adhesion">En adhérant à Gnut 06</a>, vous devenez un acteur clé de notre lutte pour l'inclusion. Votre soutien nous permettra de continuer nos actions, d'améliorer la qualité de vie des personnes en situation de handicap et de promouvoir une société plus juste et égalitaire pour tous. Ensemble, construisons un monde où le handicap ne limite pas les possibilités, mais les enrichit.</p>
    </div>
    <?php $contenu = ob_get_clean()  ?>


    <?php require_once 'views/gabarit.php'; ?>
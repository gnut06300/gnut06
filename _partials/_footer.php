<div class="container-fluid google-map">
    <div class="map-responsive">
        <iframe title="Association Gnut 06" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2884.61591711403!2d7.273617077371275!3d43.69774774954694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1691887392503!5m2!1sfr!2sfr" frameborder="0" style="border:0" height="450" allowfullscreen></iframe>
    </div>
</div>
<footer class="container-fluid bg-black text-light">
    <div class="row py-5">
        <div class="col-5 col-lg-2 mt-2 text-end">
            <img class="logo_footer" src="images/iris.jpg" alt="logo de l'Association Gnut 06">
        </div>
        <div class="col-7 col-lg-2 mt-3 text-start pt-2">
        </div>
        <div class="col-12 col-lg-5 text-center mt-4 d-flex align-items-center">
            <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/gnut-06/adhesions/adhesion-a-l-association-gnut-06/widget-bouton" style="width: 100%; height: 70px; border: none;"></iframe>
        </div>
        <div class="col-12 col-lg-3 mt-3 mt-lg-0 text-center">
            <h5 class="text-warning fs-3">L'Association loi 1901 Gnut 06</h5>
            <p class="text-warning">9 Rue du Pont-Vieux <br>
            06300 NICE <br>
            FRANCE</p>
            <br>
            <p class="text-warning fs-4">Numéro RNA : W062018953</p>
        </div>
    </div>
    <div class="col-12 text-center bg-dark py-5">
        <h2>Retrouvons-nous sur les réseaux sociaux</h2>
        <p>Suivez-nous sur les réseaux sociaux pour rester au fait de nos événements et de bien d'autres choses.</p>
        <div class="col-12 d-flex flex-row justify-content-around "><a href="https://facebook.com/gerald.col" style="display:block" target="_blank" data-block-id="-7"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="Facebook icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Ffacebook-filled-light-40.png?w=40&dpr=2" class="" /></a></td>
            <td style="padding-left:24px;padding-top:0;padding-right:24px" data-breakpoint="29" valign="top" class="mobileClass-29"><a href="https://instagram.com/gnut06" style="display:block" target="_blank" data-block-id="-8"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="Instagram icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Finstagram-filled-light-40.png?w=40&dpr=2" class="" /></a></td>
            <td style="padding-left:24px;padding-top:0;padding-right:24px" data-breakpoint="29" valign="top" class="mobileClass-29"><a href="https://twitter.com/gerald_col" style="display:block" target="_blank" data-block-id="-9"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="Twitter icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Ftwitter-filled-light-40.png?w=40&dpr=2" class="" /></a></td>
            <td style="padding-left:24px;padding-top:0;padding-right:24px" data-breakpoint="29" valign="top" class="mobileClass-29"><a href="mailto:contact@gnut06.org" style="display:block" target="_blank" data-block-id="-10"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="Email icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Femail-filled-light-40.png?w=40&dpr=2" class="" /></a></td>
            <td style="padding-left:24px;padding-top:0;padding-right:24px" data-breakpoint="29" valign="top" class="mobileClass-29"><a href="http://www.tonweb.fr" style="display:block" target="_blank" data-block-id="-11"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="Website icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Fwebsite-filled-light-40.png?w=40&dpr=2" class="" /></a></td>
            <td style="padding-left:24px;padding-top:0;padding-right:24px" data-breakpoint="29" valign="top" class="mobileClass-29"><a href="https://linkedin.com/in/gerald-col/" style="display:block" target="_blank" data-block-id="-12"><img width="40" height="auto" style="border:0;width:40px;height:auto;max-width:100%;display:block" alt="LinkedIn icon" src="https://dim.mcusercontent.com/https/cdn-images.mailchimp.com%2Ficons%2Fsocial-block-v3%2Fblock-icons-v3%2Flinkedin-filled-light-40.png?w=40&dpr=2" class="" /></a>
        </div>
    </div>
    <div class="bg-warning-subtle py-3 text-center col-12">
        <ul class="list-inline text-center">
            <li class="list-inline-item text-dark"><?php
                                                    $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                                                    $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
                                                    echo "Nous sommes le " . $jours[date('N') - 1] . ' ' . date('j') . ' ' . $mois[date('n') - 1] . ' ' . date('Y'); ?> - </li>
            <li class="list-inline-item"><a href="https://gnut06.org" target="_blank">&copy; Association Gnut 06 2023</a></li>
            <li class="list-inline-item">&middot;</li>
            <li class="list-inline-item"><a href="?page=rgpd">Mentions légales</a></li>
        </ul>
    </div>
</footer>
<!-- Fin google map -->
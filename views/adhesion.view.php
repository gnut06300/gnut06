<?php ob_start() ?><!--Contenu-->
<div class="my-5">
    <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/gnut-06/adhesions/adhesion-a-l-association-gnut-06/widget" style="width: 100%; height: 1500px; border: none;"></iframe>
</div>

<?php $contenu = ob_get_clean()  ?>
<?php require_once 'views/gabarit.php'; ?>
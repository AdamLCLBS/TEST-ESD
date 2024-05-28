<?php
require '../inc/init.inc.php';
$title = "CES";
$h1 = "Merci d'avoir participé !";
require '../inc/header.inc.php';

?>

<h1 class="text-center"><?php echo $h1 ?></h1>
<main class="container">

    <div class="col-9 text-center mx-auto">
        <img src="../assets/img/ces.png " class="mh-100 mw-100 w-25 image-accueil py-5" alt="LogoCes">
        <p>Maintenant que vous avez répondu a toute les questions il ne vous reste plus qu'a attendre d'etre contacter par mail</p>
        <p>Tout cela pour tenter de remporter de multiples lots, tels qu'un voyage de 3 jours à Las Vegas avec des entrées au CES pour 2 personnes, et 10 drones DJI Mavic 2.</p>
      
    </div>
    <div class="col-12 text-center ">
        <h2 class="">vous pouvez nous suivre ici</h2>
        <div class="py-4">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FCES%2Fevents%2F&width=450&layout&action&size&share=true&height=35&appId" width="250" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
         
            <div class="mx-auto">
            <a href="https://twitter.com/x?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @x</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    </div>


</main>

<?php require '../inc/footer.inc.php';?>
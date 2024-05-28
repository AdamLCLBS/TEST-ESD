<?php
require '../inc/init.inc.php';
$title = "CES";
$h1 = "";
require '../inc/header.inc.php';

$score = null;
if (isset($_POST['score'])) {
    $score = $_POST['score'];

    if (!empty($_POST['contact'])) {

      
    foreach ($_POST as $cle => $valeur) {
        if (!empty($valeur)) {
            $_POST[$cle] = htmlspecialchars($valeur);
        }
    }

    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20) {
        $contenu .= "<div class=\"alert alert-danger\">Votre prénom doit avoir entre 2 et 20 caractères</div>";
    }

    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
        $contenu .= "<div class=\"alert alert-danger\">Votre nom doit avoir entre 2 et 20 caractères</div>";
    }

    if (!isset($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $contenu .= "<div class=\"alert alert-danger\">Votre mail n'est pas conforme</div>";
    }

        if (empty($contenu)) {
            $insertparticipant = $pdoESD->prepare('INSERT INTO participants (nom, prenom, score , mail ,telephone, pays, adresse, ville ) VALUES ( :nom, :prenom,:score ,:mail, :telephone, :pays, :adresse, :ville )');
            $insertparticipant->execute([
                ':nom' => $_POST['nom'],
                ':prenom' => $_POST['prenom'],
                ':score' => $_POST['score'],
                ':mail' => $_POST['mail'],
                ':telephone' => $_POST['telephone'],
                ':pays' => $_POST['pays'],
                ':adresse' => $_POST['adresse'],
                ':ville' => $_POST['ville'],

            ]);
            if ($insertparticipant) {
                header('location:confirmation.php');
                exit();
            }

        }
    }



?>

<main class=" container ">
    <?php echo $contenu; ?>
    <div class="col-12 py-5 ">

        <form action="#" method="POST" class=" col-12" name="contact">
            <h2 class="">Valider votre participation</h2>
            <div class="row">
                <div class="col-4 mx-auto">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="col-12   rounded" required>
                </div>

                <div class="col-4 mx-auto">
                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" id="prenom" class="col-12   rounded" required>
                </div>

                <input type="hidden" name="score" id="scoreInput" value="<?php echo $score?>"> 
                <div class="col-4">
                    <label for="mail">mail</label>
                    <input type="mail" name="mail" id="mail" class="col-12   rounded" required>
                </div>


                <div class="col-4">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" class="col-12   rounded" required>
                </div>

                <div class="col-4">
                    <label for="pays">pays</label>
                    <input type="text" name="pays" id="pays" class="col-12   rounded" required>
                </div>


                <div class="col-4">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" class="col-12   rounded" required>
                </div>

                <div class="col-12">
                    <label for="adresse">adresse</label>
                    <input type="text" name="adresse" id="adresse" class="col-12   rounded" required>
                </div>



                <input type="submit" value="Envoyer" class="btn mt-2 mx-auto " name="contact">
            </div>
        </form>
    </div>
</main>

<?php }require '../inc/footer.inc.php';?>
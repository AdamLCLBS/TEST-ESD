<?php
require '../inc/init.inc.php';
$title = "CES";
$h1 = "";
require '../inc/header.inc.php';

if (!empty($_POST)) {


    foreach ($_POST as $cle => $valeur) {
        if (!empty($valeur)) {
            $_POST[$cle] = htmlspecialchars($valeur);
        }
    }


    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
        $contenu .= "<div class=\"alert alert-danger\">Votre nom doit avoir entre 2 et 20 caractères</div>";
    }

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $contenu .= "<div class=\"alert alert-danger\">Votre adresse mail n'est pas conforme</div>";
    }
    if (empty($contenu)) {
        $insertparticipant = $pdoTournoi->prepare('INSERT INTO participant ( nom,prenom, email,telephone, pays, adresse, ville) VALUES ( :nom, :prenom, :email, :telephone, :pays, :adresse, :ville)');

        $insertcontact->execute([
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':email' => $_POST['email'],
            ':telephone' => $_POST['telephone'],
            ':pays' => $_POST['pays'],
            ':adresse' => $_POST['adresse'],
            ':ville' => $_POST['ville'],
        ]);

        if ($insertparticipant) {
            header('location:confirmation.php');
        }
    }
}





?>

<main class=" container ">
    <?php echo $contenu; ?>
    <div class="col-12 py-5 ">

        <form action="#" method="POST" class="bg-success text-center col-12">
            <h2 class="">Valider votre participation</h2>
            <div class="row">
            <div class="col-5 mx-auto">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="col-12 bg-danger text-white rounded" required>
            </div>

            <div class="col-5 mx-auto">
                <label for="prenom">prenom</label>
                <input type="text" name="prenom" id="prenom" class="col-12 bg-danger text-white rounded" required>
            </div>

            <div>
                <label for="email">email</label>
                <input type="mail" name="email" id="email" class="col-12 bg-danger text-white rounded" required>
            </div>



            <div>
                <label for="message">Message</label>
                <textarea class="col-12 bg-danger text-white rounded" type="text" name="message" col="30" rows="10" id="message" required></textarea>
            </div>


            <input type="submit" value="Envoyer" class="btn btn-primary mt-2 ">
        </div>
        </form>
    </div>
</main>
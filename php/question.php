<?php
require '../inc/init.inc.php';
$title = "CES";
$h1 = "";
require '../inc/header.inc.php';

?>


<main class="container">

    <div class="col-12 ">
        <form id="quizform" action="validation.php" method="post" onsubmit="return calculateScore(event)" name="score">
            <div id="q1" class="pt-5">
                <p>Quel est le nom du fondateur du Consumer Electronics Show ?</p>
                
                <div>
                    <input type="radio" id="Bill_Gates" name="question_1" value="Bill_Gates"  />
                    <label for="Bill_Gates">A. Bill Gates</label>
                </div>

                <div>
                    <input type="radio" id="Steve_Jobs" name="question_1" value="Steve_Jobs" />
                    <label for="Steve_Jobs">B. Steve Jobs</label>
                </div>

                <div>
                    <input type="radio" id="Jack_Wayman" name="question_1" value="Jack_Wayman" />
                    <label for="Jack_Wayman">C. Jack Wayman</label>
                </div>
            </div>

            <div id="q2" class="pt-5">
                <p>En quelle année est lancé le CES pour la première fois ? ?</p>

                <div>
                    <input type="radio" id="1973" name="question_2" value="1973"  />
                    <label for="1973">A. 1973</label>
                </div>

                <div>
                    <input type="radio" id=" 1970" name="question_2" value=" 1970" />
                    <label for=" 1970">B. 1970</label>
                </div>

                <div>
                    <input type="radio" id="1967" name="question_2" value="1967" />
                    <label for="1967">C. 1967</label>
                </div>
            </div>

            <div id="q3" class="pt-5">
                <p>Dans quelle ville s'est déroulé ce premier salon ?</p>

                <div>
                    <input type="radio" id="Los_Angeles" name="question_3" value="Los_Angeles"  />
                    <label for="Los_Angeles">A. Los Angeles</label>
                </div>

                <div>
                    <input type="radio" id="New_York" name="question_3" value="New_York" />
                    <label for="New_York">B. New York</label>
                </div>

                <div>
                    <input type="radio" id="Chicago" name="question_3" value="Chicago" />
                    <label for="Chicago">C. Chicago</label>
                </div>
            </div>

            <div id="q4" class="pt-5">
                <p>Quelle technologie fut présentée en avant-première au CES de 1996 ?</p>

                <div>
                    <input type="radio" id="RDS" name="question_4" value="RDS"  />
                    <label for="RDS">A. RDS</label>
                </div>

                <div>
                    <input type="radio" id="MP3" name="question_4" value="MP3" />
                    <label for="MP3">B. MP3</label>
                </div>

                <div>
                    <input type="radio" id="DVD" name="question_4" value="DVD" />
                    <label for="DVD">C. DVD</label>
                </div>
            </div>

            <div id="q5" class="pt-5">
                <p>Quel nom connu portent les interventions des présidents d'entreprises au CES ?</p>

                <div>
                    <input type="radio" id="Keynotes" name="question_5" value="Keynotes"  />
                    <label for="Keynotes">A. Keynotes</label>
                </div>

                <div>
                    <input type="radio" id="Tech_Talks" name="question_5" value="Tech_Talks" />
                    <label for="Tech_Talks">B. Tech Talks</label>
                </div>

                <div>
                    <input type="radio" id="Pitchs" name="question_5" value="Pitchs" />
                    <label for="Pitchs">C. Pitchs</label>
                </div>
            </div>


            <input type="hidden" name="score" id="scoreInput" value="0"> 
            <!-- Pour transferer le score que l'utilisateur à obtenu au quizz dans la prochaine page où l'on va l'insérer dans la base de donnée, je fais voyager le score à travers le formulaire via un input type hidden qui est actualiser dans le script js aprés avoir compter le score -->
            <input type="submit" value="valider" class="btn " name="valider">
        </form>
    </div>



</main>

<?php require '../inc/footer.inc.php';?>